<div id="top__bar" class="row top__bar">
    <div class="col-md-4"></div>
    <div class="col-md-3"></div>
    <div class="topbar__search__wrapper col-md-5 col-sm-12 row align-item-center">
        <div class="col-md-6">
            <?php get_search_form();?>
        </div>
        <div class="col-md-6 align-self-center">
            <?php 
                dynamic_sidebar( 'social-icon-widget' )
            ?>
        </div>
        <!-- <p>Search bar and widget section for social icon</p> -->
    </div>
</div>