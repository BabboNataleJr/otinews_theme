<footer class="container-fluid footer__section">

    <div class="row">
        <div class="col-md-3"></div>
        <?php get_template_part('template-parts/header/menu/footer', 'menu', $args); ?>
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="row col-md-8 footer__widget">
            <div class="col-md-4 widget__paragraph">
                <?php 
                    dynamic_sidebar( 'footer-bar-1' )
                ?>
            </div>
            <div class="col-md-2 footer__social__icon">
                <?php 
                    dynamic_sidebar( 'social-icon-widget' )
                ?>
            </div>
            <div class="col-md-4">
                <?php 
                    dynamic_sidebar( 'footer-bar-3' )
                ?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer()?>
</body>

</html>