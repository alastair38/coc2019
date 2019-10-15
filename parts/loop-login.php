<?php //get_template_part( 'parts/content', 'breadcrumbs' ); ?>

<article id="post-<?php the_ID(); ?>" class="<?php echo $post->post_name;?>" role="article" itemscope itemtype="http://schema.org/WebPage">


		<header>
			<h1 class="screen-reader-text" itemprop="headline"><?php the_title();?></h1>
<?php // get_template_part( 'parts/content', 'share' );?>

		</header> <!-- end article header -->

    <section class="container" itemprop="articleBody">
	    <?php

			the_content();
			?>

<?php
if( !is_user_logged_in() ) {

	echo
	'<div class="row">';

	$args = array(
	'redirect' => home_url(),
	'id_username' => 'user',
	'id_password' => 'pass',
);

	wp_login_form( $args );

	echo '
              <span class="title">Forgot your password?</span>
              <a href="' . wp_lostpassword_url( get_permalink() ) . '" title="Lost Password">Click this link to reset it</a>
	</div>';


} else {
	echo '<div class="center"><p class="col s12">
	You are already logged in.
	</p>';
	echo '<p class="col s12">
	<a class="btn-flat materialize-red lighten-1 white-text" href="' . wp_logout_url(home_url()) . '">Logout</a>
	</p></div>';
}


?>

	</section> <!-- end article section -->



</article> <!-- end article -->
