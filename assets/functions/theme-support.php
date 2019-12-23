<?php

// Adding WP Functions & Theme Support
function acbase_theme_support() {

	// Add WP Thumbnail Support
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'card-thumbnail size', 400, 300, true );

	add_image_size( 'blog-thumbnail size', 300, 300, true );

	// Default thumbnail size

	add_action('init', 'remove_plugin_image_sizes');

function remove_plugin_image_sizes() {
	remove_image_size('medium_large');
}

	// Add RSS Support
	add_theme_support( 'automatic-feed-links' );

	// Add Support for WP Controlled Title Tag
	add_theme_support( 'title-tag' );

	// Add HTML5 Support
	add_theme_support( 'html5',
	         array(
	         	'comment-list',
	         	'comment-form',
	         	'search-form',
	         )
	);

	/**
	 * Add SVG capabilities
	 */
	 add_filter( 'upload_mimes', 'maertens_svgs_upload_mimes' );

	function maertens_svgs_upload_mimes($mimes = array()) {
			$mimes['svg'] = 'image/svg+xml';
			$mimes['svgz'] = 'image/svg+xml';
			return $mimes;

	}

}

// theme support for gutenberg block editor styles / slimmed down version of the main stylesheet
add_theme_support( 'editor-styles' );
add_theme_support( 'responsive-embeds' );
add_editor_style( 'assets/css/block-editor.css' );

/* end theme support */

// adds excerpt support to pages

add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}


// limits search to locations custom post type

function searchfilter($query) {

    if ($query->is_search && !is_admin() ) {
        $query->set('post_type',array('locations'));
    }

return $query;
}

add_filter('pre_get_posts','searchfilter');


add_filter( 'get_the_archive_title', function ($title) {

    if ( is_category() ) {

            $title = single_cat_title( '', false );

    } elseif ( is_tag() ) {

            $title = single_tag_title( '', false );

    } elseif ( is_author() ) {

            $title = '<span class="vcard">' . get_the_author() . '</span>' ;

    } elseif ( is_post_type_archive() ) {

						$title = post_type_archive_title( '', false );
		}

    return $title;

});

function accessible_thumbnail($class=null) {

	$img_id = get_post_thumbnail_id(get_the_ID());
	$alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);
	if(!$alt_text) {
		$alt_text = get_the_title() . ' featured image';
	}
	$caption = get_the_post_thumbnail_caption();
	$img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
	if($class) {
		$class = 'class="' . $class . '"';
	}

	echo
	'<figure ' . $class . '>
	 	<img alt="' . $alt_text . '" src="' . $img_url . '">
		<figcaption>'
			. $caption .
		'</figcaption>
	</figure>';
}
