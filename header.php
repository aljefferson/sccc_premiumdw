<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php if ( is_home() ) { ?><?php bloginfo('description'); ?><?php } ?><?php wp_title(''); ?> | <?php if ( is_page() && $post->post_parent ) { ?><?php $parent_title = get_the_title($post->post_parent); echo $parent_title; print ' |' ?><?php } ?>  Premium Design Works</title>

<!-- START META DESCRIPTION -->
<meta name="description" content="<?php if ( is_home() || is_category() || is_archive() ) { print 'This portion of the Premium Design Works website is written by Mike Sinkula and dedicated to the Web Design & Development students at Seattle Central Community College.'; } ?><?php if ( is_page() || is_single()) { $key="meta"; echo get_post_meta($post->ID, $key, true); /* get the value for the key of meta */ } ?>">
<!-- END META DESCRIPTION -->

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />

    <!--[if IE 8]>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/exploder.css" type="text/css" media="all" />
    <![endif]-->
    
    <!--[if gte IE 7]>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/exploder.css" type="text/css" media="all" />
    <![endif]-->

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/ico-flame.ico" />
<link rel="image_src" href="<?php bloginfo('template_directory'); ?>/images/thumbnail-flame.png" />

<?php if ( is_page(array('about','calendar','grades','contact'))  ) { print '<style type="text/css" media="all"> #facebooklike { display: none; } </style>'; } ?>
  
<!-- BEGIN WP HEAD -->  
<?php wp_head(); ?>  
<!-- END WP HEAD -->   

</head>

<body>

<!-- START HOME LINK -->
<div id="homelink">
	<a href="http://www.premiumdw.com/" target="_blank" title="Premium Design Works Home"><img src="<?php bloginfo('template_directory'); ?>/images/img-homelink.png" alt="Premium Design Works Home" /></a>
</div>
<!-- END HOME LINK -->

<!-- START HEADER -->
<div id="header">

	<!-- Begin Logo -->
    <h1 id="logo"><a href="<?php echo get_option('home'); ?>" title="<?php bloginfo('description'); ?>"><?php bloginfo( 'name' ); ?></a></h1>
    <!-- End Logo -->
    
    <!-- Begin Utility -->
    <div id="utility">
        <ul>
            <?php wp_list_pages('post_title&depth=1&title_li=&meta_key=navigation&meta_value=utility'); ?>
        </ul>
    </div>
	<!-- End Utility -->
    
    <!-- Begin Search -->
    <?php include (TEMPLATEPATH . '/searchform.php'); ?>
    <!-- End Search -->

    <!-- Begin Today's Date -->
    <div id="date">
    	<p><?php echo date_i18n('l - F d, Y'); ?></p>
    </div>
    <!-- End Today's Date -->
    
</div>
<!-- END HEADER -->

<!-- START NAVIAGATION -->
<div id="nav">
    <ul>
        <?php wp_list_pages('post_title&depth=1&title_li=&meta_key=navigation&meta_value=main'); ?>
    </ul>
</div>
<!-- END NNAVIAGATION -->

<!-- START MIDDLE -->
<div id="middle">

<!-- START SIDEBAR -->
<?php get_sidebar(); ?>
<!-- END SIDEBAR -->