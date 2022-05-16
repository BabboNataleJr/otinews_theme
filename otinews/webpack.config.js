const path = require('path')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const TerserPlugin = require('terser-webpack-plugin')
const ImageMinimizerPlugin = require('image-minimizer-webpack-plugin')

// const dirApp = path.join(__dirname, "assets/css/build");
const dirStyles = path.join(__dirname, "./scss");

module.exports = {
    mode: 'production',
    devtool: 'source-map',
    entry: [
        path.join(dirStyles, './index.scss'),
    ],
    output: {
        path: path.join(__dirname, './'),
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: 'style.css',
            chunkFilename: '[id].css'
        }),
    ],
    module: {
        rules: [
            {
                test: /\.js$/,
                use: {
                    loader: 'babel-loader'
                }
            },
            {
                test: /\.scss$/,
                exclude: /node_modules/,
                use: [
                    {
                        loader: MiniCssExtractPlugin.loader,
                        options: {
                            publicPath: ''
                        }
                    },
                    {
                        loader: 'css-loader'
                    },
                    {
                        loader: 'postcss-loader'
                    },
                    {
                        loader: 'sass-loader'
                    }
                ]
            },
            {
                test: /\.(woff(2)?|eot|ttf|otf|svg|)$/,
                type: 'asset',
                parser: {
                    dataUrlCondition: {
                        maxSize: 8 * 1024 // 8kb
                    }
                },
                generator: {
                    filename: './fonts/[hash][ext][query]'
                }
            },
            {
                test: /\.(jpe?g|png|gif|svg|webp)$/i,
                use: [
                    {
                        loader: ImageMinimizerPlugin.loader,
                        options: {
                            severityError: 'warning', // Ignore errors on corrupted images
                            minimizerOptions: {
                                plugins: ['gifsicle']
                            }
                        }
                    }
                ]
            }
        ],
    },
    optimization: {
        minimize: true,
        minimizer: [new TerserPlugin()]
    },
}