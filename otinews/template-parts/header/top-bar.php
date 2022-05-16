<div id="top__bar" class="row top__bar">
    <div class="col-lg-4 col-md-2 col-0"></div>
    <div class="col-lg-3 col-md-1 col-0"></div>
    <div class="topbar__search__wrapper col-lg-5 col-md-7 row align-item-center">
        <div class="col-lg-6 col-md-8 col-sm-6 col-5">
            <?php get_search_form();?>
        </div>
        <div class="col-lg-6 col-md-4 col-sm-6 col-7 align-self-center">
            <?php 
                dynamic_sidebar( 'social-icon-widget' )
            ?>
        </div>
        <!-- <p>Search bar and widget section for social icon</p> -->
    </div>
</div>