<?php
/*
Template Name: Root
*/
?>


<?php get_header(); ?>

<!-- START CONTENT -->
<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>">
        <h2 class="breadcrumb"><?php if (function_exists('bcn_display')) { bcn_display(); } ?>
		<?php $key="root"; echo get_post_meta($post->ID, $key, true); ?></h2>
		<?php the_content('<p>More &raquo;</p>'); ?>
	</div>
	<?php endwhile; endif; ?>  
</div>
<!-- END CONTENT -->

<?php get_footer(); ?>