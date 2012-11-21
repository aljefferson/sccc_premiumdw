<?php get_header(); ?>
	
<!-- START CONTENT -->
<div id="content">
<?php while (have_posts()) : the_post(); ?>
<h2><?php the_title(); ?></h2>
<p class="postmetadata"><small>Posted on <?php the_time('F jS, Y') ?> in <?php the_category(', ') ?></small></p>
    <?php the_content('More &raquo;'); ?>    			
<?php comments_template(); ?>
<?php endwhile; ?>
</div>
<!-- END CONTENT -->

<!-- START FOOTER -->
<?php get_footer(); ?>
<!-- END FOOTER -->