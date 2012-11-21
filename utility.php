<?php
/*
Template Name: Utility
*/
?>

<?php get_header(); ?>

<!-- START CONTENT -->
<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>">
    	<h2 class="breadcrumb"><?php if (function_exists('bcn_display')) { bcn_display(); } ?></h2> 		
		<?php the_content(''); ?>
	</div>
	<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>