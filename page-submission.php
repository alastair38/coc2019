<?php

/*
Template Name: Content Submission
*/
acf_form_head();
get_header(); ?>

<main class="container">
	<div class="row">

		<?php if (have_posts()) : while (have_posts()) : the_post();


			get_template_part( 'parts/loop', 'page-submission' );

			endwhile; endif;

		?>

		</div> <!-- end row -->

</main> <!-- end main -->

<?php

get_footer();
?>
