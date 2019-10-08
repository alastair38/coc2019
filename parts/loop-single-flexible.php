<?php //get_template_part( 'parts/content', 'breadcrumbs' ); ?>

<article id="post-<?php the_ID(); ?>" class="<?php echo $post->post_name;?>" role="article" itemscope itemtype="http://schema.org/blogPost">

		<header class="article-header">

			<h1 class="entry-title single-title h4" itemprop="headline"><?php the_title();?></h1>
			<?php get_template_part( 'parts/content', 'byline' ); ?>
		</header> <!-- end article header -->

    <section class="entry-content" itemprop="articleBody">

			<?php
			if ( has_post_thumbnail() ) {
			accessible_thumbnail();
			}?>

			<?php the_content(); ?>

			<?php

			// check if the flexible content field has rows of data
			if( have_rows('content_blocks') ):

			 	// loop through the rows of data
			    while ( have_rows('content_blocks') ) : the_row();

					// check current row layout
			        if( get_row_layout() == 'featured_pages' ):
								$count = count(get_sub_field('pages'));
								$cols = 12 / $count;
								$title = get_sub_field('section_title');



			        	// check if the nested repeater field has rows of data
			        	if( have_rows('pages') ):


						 		echo '<div class="ro bl">';

								if($title) {
									echo '<h2 class="col s12 h4 bold upper">' . $title . '</h2>';
								}
						 	// loop through the rows of data
						    while ( have_rows('pages') ) : the_row();


								$image = get_sub_field('feat_image');

								echo '<div class="col s' . $cols . '">
								<div class="feat">
								<img src="' . $image['sizes']['card-thumbnail size'] . '" />
								<h2><a href="' . get_sub_field('feat_link') . '" rel="bookmark">' . get_sub_field('feat_title') . '</a></h2>
								</div>
								</div>';

							endwhile;

							echo '</div>';

						endif;

					endif; //end featured_pages row

			    endwhile;

			else :

			    // no layouts found

			endif;

			?>

	    <?php wp_link_pages(); ?>

		</section> <!-- end article section -->

		<footer class="article-footer center">

		</footer> <!-- end article footer -->

</article> <!-- end article -->
