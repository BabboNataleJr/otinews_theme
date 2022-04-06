<?php 
    $tags = get_the_tags(get_the_ID());  ?>

<ul class="tags__cloud__tags">

    <?php if($tags) : ?>
    <span class="tags__title h4">
        <?php _e(strtoupper('tags'), 'otinews');?>
    </span>
    <?php foreach($tags as $tag) :  ?>
    <li class="tags__tag__item">
        <a class="tags__tag__item__link" href="<?php bloginfo('url');?>/tag/<?php print_r($tag->slug);?>">
            <?php print_r($tag->name); ?>
        </a>
    </li>

    <?php
        endforeach; 
    endif;
    ?>

</ul>