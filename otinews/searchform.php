<form action="<?php echo esc_url( home_url('/') );?>" method="get" role="search" class="topbar__form">
    <label for="s" class="screen-reader-text">
        <?php echo _x('Search for:', 'label', 'otinews');?>
    </label>
    <div class="search__form__content">
        <button type="submit" class="search__sumbit__button"><i class="fa fa-search"></i></button>
        <input name="s" type="text" class="form-control form-input search-field topbar__search__input"
            placeholder="<?php echo esc_attr_x('What are we searching?', 'placeholder', 'otinews');?>"
            value="<?php echo get_search_query();?>">
    </div>
</form>