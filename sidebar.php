<div id="sidebar">
	
    <?php if ( !is_404() ) { ?> 
    
        <!-- Begin Class -->
        <?php //list sub-pages even if on a sub-page
        if($post->post_parent)
        $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0&meta_key=navigation&meta_value=class" ); 
        else
        $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0&meta_key=navigation&meta_value=class");
        if ($children) { ?>
        <h3><?php $parent_title = get_the_title($post->post_parent); echo $parent_title; ?> > Class</h3>
        <ul>
        <li class="<?php $key="page"; echo get_post_meta($post->ID, $key, true); ?>"><a href="<?php $permalink = get_permalink($post->post_parent); echo $permalink; ?>">Syllabus</a></li>
        <?php echo $children; ?>
        </ul>
        <?php } ?>   
        <!-- End Class -->
        
        <!-- Begin Lectures -->
        <?php //list sub-pages even if on a sub-page
        if($post->post_parent)
        $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0&meta_key=navigation&meta_value=lecture" ); 
        else
        $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0&meta_key=navigation&meta_value=lecture");
        if ($children) { ?>
        <h3><?php $parent_title = get_the_title($post->post_parent); echo $parent_title; ?> > Lectures</h3>
        <ul><?php echo $children; ?></ul>
        <?php } ?>
        <!-- End Lectures -->
        
        <!-- Begin Assignments -->
        <?php //list sub-pages even if on a sub-page
        if($post->post_parent)
        $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0&meta_key=navigation&meta_value=assignment" ); 
        else
        $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0&meta_key=navigation&meta_value=assignment");
        if ($children) { ?>
        <h3><?php $parent_title = get_the_title($post->post_parent); echo $parent_title; ?> > Assignments</h3>
        <ul><?php echo $children; ?></ul>
        <?php } ?>
        <!-- End Assignments -->
        
        <!-- Begin Exercises -->
        <?php //list sub-pages even if on a sub-page
        if($post->post_parent)
        $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0&meta_key=navigation&meta_value=exercise" ); 
        else
        $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0&meta_key=navigation&meta_value=exercise");
        if ($children) { ?>
        <h3><?php $parent_title = get_the_title($post->post_parent); echo $parent_title; ?> > Exercises</h3>
        <ul><?php echo $children; ?></ul>
        <?php } ?>
        <!-- End Exercises -->
        
        <!-- Begin Teams -->
        <?php //list sub-pages even if on a sub-page
        if($post->post_parent)
        $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0&meta_key=navigation&meta_value=team" ); 
        else
        $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0&meta_key=navigation&meta_value=team");
        if ($children) { ?>
        <h3><?php $parent_title = get_the_title($post->post_parent); echo $parent_title; ?> > Teams</h3>
        <ul><?php echo $children; ?></ul>
        <?php } ?>
        <!-- End Teams -->
    
    <?php } ?>		
        
    <!-- Begin Wigets -->
	<?php if ( is_home() || is_single() || is_archive() || is_page_template('utility.php')  ) { ?> 
    	
		<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
		<?php endif; ?>        
		<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?>
        <?php endif; ?>
		
	<?php } ?>
    <!-- End Wigets -->

    <!-- Begin Affiliates -->
    <div class="affiliates">
    <img src="<?php bloginfo('template_directory'); ?>/images/img-sidebar-separator.png" alt="Your Mom" />
        <a href="http://www.dreamhost.com/r.cgi?363638" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/ad-dreamhost.gif" alt="DreamHost" /></a>
        <iframe src="http://rcm.amazon.com/e/cm?t=prdewosc-20&amp;o=1&amp;p=20&amp;l=ur1&amp;category=books&amp;banner=0YM0V4GHQ57EK3WYRZR2&amp;f=ifr" width="120" height="90" scrolling="No" border="0" marginwidth="0" ></iframe>
        <a href="http://www.istockphoto.com/msinkula" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/ad-istock.png" alt="istockphoto.com" /></a>
        <a href="http://www.jdoqocy.com/click-5032313-6944833" target="_blank">
<img src="http://www.ftjcfx.com/image-5032313-6944833" width="120" height="120" alt="Students and teachers save up to 80% on software!" border="0"/></a>
<a href="http://www.dpbolvw.net/click-5032313-1508142" target="_blank">
<img src="http://www.awltovhc.com/image-5032313-1508142" width="120" height="120" alt="Students software at 85% off!" border="0"/></a>
        <a href="http://www.anrdoezrs.net/click-5032313-5764927" target="_blank"><img src="http://www.lduhtrp.net/image-5032313-5764927" alt="Fonts.com" /></a>
        <a href="http://fb568j64ydydgk2yvaaf2wfxdh.hop.clickbank.net/" target="ejejcsingle"><img src="<?php bloginfo('template_directory'); ?>/images/ad-DIW.png" width="120" height="120" alt="Digging Into WordPress" /></a>
        <a href="http://db.tt/sZ0zbDyd" title="Get Dropbox!" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/ad-dropbox.jpg" width="120" height="120" alt="Get Dropbox!" /></a>
        <img src="<?php bloginfo('template_directory'); ?>/images/img-sidebar-separator.png" alt="Your Mom" />
    </div>
    <!-- End Affiliates -->

</div>
