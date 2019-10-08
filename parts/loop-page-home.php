<?php //get_template_part( 'parts/content', 'breadcrumbs' ); ?>

<article id="post-<?php the_ID(); ?>" class="entry-content <?php echo $post->post_name;?>" role="article" itemscope itemtype="http://schema.org/WebPage">


			<?php

				// check if the flexible content field has rows of data
				if( have_rows('content_blocks') ):

				     // loop through the rows of data
				    while ( have_rows('content_blocks') ) : the_row();

								if( get_row_layout() == 'hero' ):

									echo '<div class="row no-margin-bot">
													<div class="col s12">';

									$heroImage = get_sub_field('hero_image');
									$heroText = get_sub_field('hero_text');
									$class = get_sub_field('hero_class');
									if($class) {
										$class= "grid-fig";
									}

									echo '<figure class="hero ' . $class . '"><img src="' . $heroImage['url'] . '"/>
												<figcaption><h1 class="h3 bold upper">' . $heroText . '</h1></figcaption>
												</figure>';

									echo '</div>
												</div>';

								endif;

								if( get_row_layout() == 'statement' ):

									echo '<div class="row block statement">

														<div class="col s6 offset-s6 container ">';

									$statement = get_sub_field('statement_text');

									echo '<h1 class="h2 bold upper">'. $statement . '</h1>';

									echo '
												</div>
												</div>';

								endif;

								if( get_row_layout() == 'set_featured_pages' ):

									$count = count(get_sub_field('pages'));
									$cols = 12 / $count;
									$title = get_sub_field('section_title');

									if( have_rows('pages') ):

										echo '<div class="grey lighten-3 row block"><div class="container">';

										if($title) {
											echo '<h2 class="col s12 h4 bold upper">' . $title . '</h2>';
										}

										 	// loop through the rows of data
										    while ( have_rows('pages') ) : the_row();

												//$image = get_sub_field('image');


												$image = get_sub_field('feat_image');

												echo '<div class="col s12 m' . $cols . '">
												<div class="feat">
												<img src="' . $image['sizes']['card-thumbnail size'] . '" />
												<h3 class="thin upper"><a href="' . get_sub_field('feat_link') . '" rel="bookmark">' . get_sub_field('feat_title') . '</a></h3>
												</div>
												</div>';

											endwhile;

											echo '</div></div>';

									endif;

								endif;

								if( get_row_layout() == 'latest_news' ):

									$numberposts = get_sub_field('number_of_items');
									$args = array(
									  'numberposts' => $numberposts
									);

									$latest_posts = get_posts( $args );

									echo '<div class="row block teal lighten-4"><div class="container">';
										echo '<h2 class="col s12 h4 bold upper">Latest News</h2><div class="col s12">';
									foreach($latest_posts as $post) {
										setup_postdata( $post );
										get_template_part( 'parts/loop', 'blog' );
									}

									echo '</div></div></div>';

									wp_reset_postdata();

								endif;

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
