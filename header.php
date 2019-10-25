<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">

		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Google site verification tag -->


		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">


			<!-- Icons & Favicons -->

      <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri() . '/apple-icon-57x57.png';?>">
      <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri() . '/apple-icon-60x60.png';?>">
      <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri() . '/apple-icon-72x72.png';?>">
      <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri() . '/apple-icon-76x76.png';?>">
      <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri() . '/apple-icon-114x114.png';?>">
      <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri() . '/apple-icon-120x120.png';?>">
      <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri() . '/apple-icon-144x144.png';?>">
      <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri() . '/apple-icon-152x152.png';?>">
      <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri() . '/apple-icon-180x180.png';?>">
      <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_stylesheet_directory_uri() . '/android-icon-192x192.png';?>
      <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_stylesheet_directory_uri() .  '/favicon-96x96.png'; ?>">
      <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri() .  '/favicon-32x32.png'; ?>">
      <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri() .  '/favicon-16x16.png'; ?>">
      <link rel="manifest" href="<?php echo get_stylesheet_directory_uri() . '/manifest.json';?>">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri() .  '/ms-icon-144x144.png';?>">
      <meta name="theme-color" content="#ffffff">

      <?php if(is_singular('post')):
      $twitter = get_field("twitter", "options");
      $page_id = $wp_query->get_queried_object_id();
      $post_thumbnail = get_the_post_thumbnail_url($page_id, 'full');
      if(!$post_thumbnail) {
        $post_thumbnail = get_field("default_image", "options");
        $post_thumbnail = $post_thumbnail['url'];
      }
      ?>

			<meta name="twitter:card" content="summary_large_image" />
			<meta name="twitter:site" content="@<?php echo $twitter;?>" />
			<meta name="twitter:creator" content="@<?php echo $twitter;?>" />
			<meta property="og:url" content="<?php echo get_permalink($page_id);?>" />
			<meta property="og:title" content="<?php echo esc_html( get_the_title($page_id) );?>" />
			<meta property="og:description" content="<?php //echo get_the_excerpt($page_id);?>" />
			<meta property="og:image" content="<?php echo $post_thumbnail;?>" />

			<?php endif;?>

		  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

		<!-- Drop Google Analytics here -->
		<!-- end analytics -->

	</head>

	<!-- Uncomment this line if using the Off-Canvas Menu -->

  <body <?php body_class('white'); ?>>


  <header class="header navbar-fixed valig-wrapper" role="banner">

		<?php get_template_part( 'parts/nav', 'topbar' ); ?>

	</header> <!-- end .header -->
