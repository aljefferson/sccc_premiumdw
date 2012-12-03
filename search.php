<?php
/*
Template Name: Search
*/
?>

<?php get_header(); ?>

<!-- START CONTENT -->
<div id="content">
<?php if (have_posts()) : ?>
    <h2>Search Results</h2>
    <?php while (have_posts()) : the_post(); ?>
    <ul><li id="post-<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></li>
	</ul>
	<?php endwhile; ?>
<?php else : ?>
    <h2>Search Results</h2>
    <p>No posts found. Try a different search?</p>
    <p><?php include (TEMPLATEPATH . '/searchform.php'); ?></p>
<?php endif; ?> 
</div>
<!-- END CONTENT -->

<?php get_footer(); ?>