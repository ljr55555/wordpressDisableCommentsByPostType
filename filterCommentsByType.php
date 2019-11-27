<?php
/**
 * Plugin Name: Filter Comments By Type
 * Plugin URI: http://lisa.rushworth.us
 * Description: This plugin allows commenting to be disabled based on post type
 * Version: 1.0.0
 * Author: Lisa Rushworth
 * Author URI: https://www.rushworth.us/lisa
 * License: GPL2
 */
add_filter( 'comments_open', 'remove_comments_by_post_type', 10 , 2 );
function remove_comments_by_post_type( $boolInitialStatus, $iPostNumber) {
	// post, page, attachment, revision, nav_menu_item
        $post = get_post($iPostNumber);
        if( $post->post_type == 'attachment' ){         return false;                   }
        else{                                           return $boolInitialStatus;      }
}
?>
