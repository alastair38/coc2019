<?php
function register_acf_block_types() {

    // register a testimonial block.
    acf_register_block_type(array(
        'name'              => 'hero',
        'title'             => __('Hero Image'),
        'description'       => __('Hero image layout'),
        'render_template' => get_template_directory() . '/blocks/layouts/hero.php',
        'category'          => 'formatting',
        'icon'              => 'format-image',
        //'enqueue_style' => get_template_directory_uri() . '/assets/css/style.css',
        'keywords'          => array( 'hero image', 'image' ),
        'mode' => 'auto',
        'post_types' => array('page')
    ));

    acf_register_block_type(array(
        'name'              => 'standard_image',
        'title'             => __('Standard Image'),
        'description'       => __('Standard image layout'),
        'render_template' => get_template_directory() . '/blocks/layouts/image.php',
        'category'          => 'formatting',
        'icon'              => 'format-image',
        //'enqueue_style' => get_template_directory_uri() . '/assets/css/style.css',
        'keywords'          => array( 'image' ),
        'mode' => 'auto'
    ));

    acf_register_block_type(array(
        'name'              => 'project_gallery',
        'title'             => __('Project Gallery'),
        'description'       => __('Project Gallery layout'),
        'render_template' => get_template_directory() . '/blocks/layouts/gallery.php',
        'category'          => 'formatting',
        'icon'              => 'format-gallery',
        //'enqueue_style' => get_template_directory_uri() . '/assets/css/style.css',
        'keywords'          => array( 'image', 'gallery' ),
        'mode' => 'auto'
    ));

    acf_register_block_type(array(
        'name'              => 'carousel',
        'title'             => __('Carousel'),
        'description'       => __('Carousel layout'),
        'render_template' => get_template_directory() . '/blocks/layouts/carousel.php',
        'category'          => 'formatting',
        'icon'              => 'format-gallery',
        //'enqueue_style' => get_template_directory_uri() . '/assets/css/style.css',
        'keywords'          => array( 'carousel', 'gallery' ),
        //'mode' => 'auto'
    ));

    acf_register_block_type(array(
        'name'              => 'paragraph_with_image',
        'title'             => __('Paragraph with Image'),
        'description'       => __('Paragraph with image layout'),
        'render_template' => get_template_directory() . '/blocks/layouts/paragraph_image.php',
        'category'          => 'formatting',
        'icon'              => 'images-alt2',
        //'enqueue_style' => get_template_directory_uri() . '/assets/css/style.css',
        'keywords'          => array( 'paragraph','image' ),
        'mode' => 'auto'
    ));

    acf_register_block_type(array(
        'name'              => 'statement',
        'title'             => __('Statement Header'),
        'description'       => __('Statement header layout'),
        'render_template' => get_template_directory() . '/blocks/layouts/statement.php',
        'category'          => 'formatting',
        'icon'              => 'megaphone',
        //'enqueue_style' => get_template_directory_uri() . '/assets/css/style.css',
        'keywords'          => array( 'statement block', 'header' ),
        'mode' => 'auto'
    ));

    acf_register_block_type(array(
        'name'              => 'call_to_action',
        'title'             => __('Call to Action'),
        'description'       => __('Call to action layout'),
        'render_template' => get_template_directory() . '/blocks/layouts/cta.php',
        'category'          => 'formatting',
        'icon'              => 'megaphone',
        //'enqueue_style' => get_template_directory_uri() . '/assets/css/style.css',
        'keywords'          => array( 'call to action', 'cta' ),
        'mode' => 'auto'
    ));

    acf_register_block_type(array(
        'name'              => 'featured_pages',
        'title'             => __('Featured Pages'),
        'description'       => __('Featured pages layout'),
        'render_template' => get_template_directory() . '/blocks/layouts/featured_pages.php',
        'category'          => 'formatting',
        'icon'              => 'admin-post',
        //'enqueue_style' => get_template_directory_uri() . '/assets/css/style.css',
        'keywords'          => array( 'featured', 'pages' ),
        'mode' => 'auto'
    ));

    acf_register_block_type(array(
        'name'              => 'latest_news',
        'title'             => __('Latest News'),
        'description'       => __('Latest news layout'),
        'render_template' => get_template_directory() . '/blocks/layouts/latest.php',
        'category'          => 'formatting',
        'icon'              => 'media-document',
        //'enqueue_style' => get_template_directory_uri() . '/assets/css/style.css',
        'keywords'          => array( 'latest', 'blog posts' ),
        'mode' => 'auto'
    ));

    acf_register_block_type(array(
        'name'              => 'latest_publications',
        'title'             => __('Latest Publications'),
        'description'       => __('Latest publications layout'),
        'render_template' => get_template_directory() . '/blocks/layouts/latest_publications.php',
        'category'          => 'formatting',
        'icon'              => 'book',
        //'enqueue_style' => get_template_directory_uri() . '/assets/css/style.css',
        'keywords'          => array( 'latest', 'publications' ),
        'mode' => 'auto'
    ));

    acf_register_block_type(array(
        'name'              => 'profile_card',
        'title'             => __('Profile Card'),
        'description'       => __('Profile card layout'),
        'render_template' => get_template_directory() . '/blocks/layouts/profile.php',
        'category'          => 'formatting',
        'icon'              => 'admin-users',
        //'enqueue_style' => get_template_directory_uri() . '/assets/css/style.css',
        'keywords'          => array( 'profile', 'card' ),
        'mode' => 'auto'
    ));
}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}
