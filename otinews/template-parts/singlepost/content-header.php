<div class="meta-data-post">
    <span class="date">
        <?php 
            the_date(); 
        ?>
    </span>
    <?php 
        the_tags('<span class="tag">', '</span><span class="tag">', '</span>');
    ?>
    <span class="comments">
        <?php 
            comments_number();
        ?>
    </span>
</div>