<?php

/*
Template Name: Parallax
*/


get_header(); ?>

<main>
	<div class="row">

		<?php if (have_posts()) : while (have_posts()) : the_post();

			get_template_part( 'parts/loop', 'page-parallax' );

			endwhile; endif;

		?>

		</div> <!-- end row -->

</main> <!-- end main -->

<?php get_footer(); ?>
