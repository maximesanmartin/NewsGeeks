<?php
	add_theme_support( 'post-thumbnails' ); 
	
	function wpb_set_post_views($postID) {
	    $count_key = 'wpb_post_views_count';
	    $count = get_post_meta($postID, $count_key, true);
	    if($count==''){
	        $count = 0;
	        delete_post_meta($postID, $count_key);
	        add_post_meta($postID, $count_key, '0');
	    }else{
	        $count++;
	        update_post_meta($postID, $count_key, $count);
	    }
	}
	//To keep the count accurate, lets get rid of prefetching
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

	function my_post_queries( $query ) {
	  // do not alter the query on wp-admin pages and only alter it if it's the main query
	  if (!is_admin() && $query->is_main_query()){

	    // alter the query for the home and category pages 

	    if(is_home() || is_category()){
	      $query->set('posts_per_page', 4);
	    }
	  }
	}
	add_action( 'pre_get_posts', 'my_post_queries' );
?>