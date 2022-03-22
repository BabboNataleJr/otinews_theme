<?php 
    get_header();
?>

<div id="primary" class="content-area pagebuilder-content">

    <?php
		while ( have_posts() ) :
			the_post();
			the_content();
		endwhile; // End of the loop.
		?>

</div><!-- #primary -->

<?php 
    get_footer();
?>