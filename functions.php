<?php 

function wp_poo() {
	return '<p>This is the poo function.</p>';
}

add_shortcode('poo', 'wp_poo');


// Begin Register Sidebars
	if ( function_exists('register_sidebar') )
	register_sidebars(4,array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));

// Begin Show Gravatars
	function show_avatar($comment, $size) {				
	$email=strtolower(trim($comment->comment_author_email));
	$rating = "G"; // [G | PG | R | X]
	 
		if (function_exists('get_avatar')) {
		echo get_avatar($email, $size);
		} else {
      
      $grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=
         " . md5($emaill) . "&size=" . $size."&rating=".$rating;
      echo "<img src='$grav_url'/>";
   		}		
	}
	
?>