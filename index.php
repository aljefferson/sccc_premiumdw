<?php get_header(); ?>
                
<!-- START CONTENT -->
<?php if (have_posts()) : ?>
<div id="content">
	<h2><?php bloginfo('description'); ?></h2> 
    <div id="author">
	<a href="http://www.mikesinkula.com/" title="Link to: http://www.mikesinkula.com/" target="_blank"><img class="myface" src="<?php bloginfo('template_directory'); ?>/images/img-myface.jpg" /></a>
    <p>This portion of the <a href="http://www.premiumdw.com/" title="Link to: http://www.premiumdw.com/">Premium Design Works</a> website is written by <a href="http://www.mikesinkula.com/" title="Link to: http://www.mikesinkula.com/">Mike Sinkula</a> and dedicated to the <a href="http://seattlecentral.edu/~itprogs/">Web Design & Development</a> students at <a href="http://seattlecentral.edu/" title="Link to: http://seattlecentral.edu/">Seattle Central Community College</a>.<span class="social-icons"><a title="Mike Sinkula's Twitter Feed" href="http://twitter.com/#!/mikesinkula"><img title="Mike Sinkula's Twitter Feed" src="<?php bloginfo('template_directory'); ?>/images/ico-twitter.png" alt="Mike Sinkula's Twitter Feed"  /></a>
    <a title="Mike Sinkula's FaceBook Page" href="http://www.facebook.com/msinkula?ref=profile" target="_blank"><img title="Mike Sinkula's FaceBook Page" src="<?php bloginfo('template_directory'); ?>/images/ico-facebook.png" alt="Mike Sinkula's FaceBook Page"  /></a>
    <a title="Mike Sinkula's LinkedIn Profile" href="http://www.linkedin.com/ppl/webprofile?action=vmi&amp;id=5408871&amp;pvs=pp&amp;authToken=C0zy&amp;authType=name&amp;trk=ppro_viewmore&amp;lnk=vw_pprofile" target="_blank"><img title="Mike Sinkula's LinkedIn Profile" src="<?php bloginfo('template_directory'); ?>/images/ico-linkedin.png" alt="Mike Sinkula's LinkedIn Profile"  /></a>
    <a title="Mike Sinkula's YouTube Channel" href="http://www.youtube.com/mikesinkula" target="_blank"><img title="Mike Sinkula's YouTube Channel" src="<?php bloginfo('template_directory'); ?>/images/ico-youtube.png" alt="Mike Sinkula's YouTube Channel"  /></a>
    <a title="Mike Sinkula's Flickr Photo Stream" href="http://www.flickr.com/photos/51088942@N05/" target="_blank"><img title="Mike Sinkula's Flickr Photo Stream" src="<?php bloginfo('template_directory'); ?>/images/ico-flickr.png" alt="Mike Sinkula's Flickr Photo Stream"  /></a></span></p>
	</div>
    <?php while (have_posts()) : the_post(); ?>
    	<div class="post-box">
    	<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?>&nbsp;&raquo;</a></h3>
        <p class="postmetadata"><small>Posted on <?php the_time('F jS, Y') ?> in <?php the_category(', ') ?></small></p>
		<?php /*the_content('More &raquo;'); */ the_excerpt();?>
        <p><small class="full-post"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">full post &raquo;</a></small></p>
        </div>
    <?php endwhile; ?>
    <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>  
</div>
<?php endif; ?>
<!-- END CONTENT -->

<?php get_footer(); ?>