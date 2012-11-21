<?php get_header(); ?>

<!-- START CONTENT -->
<div id="content">
<?php if (have_posts()) : ?>
  <h2>Search Results</h2>
	<ul>
	<?php while (have_posts()) : the_post(); ?>
	<li id="post-<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></li>
	<?php endwhile; ?>
	</ul>
<?php else : ?>
  <h2>No posts found. Try a different search?</h2>
	<?php include (TEMPLATEPATH . '/searchform.php'); ?>
<?php endif; ?> 
</div>
<!-- END CONTENT -->

<?php get_footer(); ?>