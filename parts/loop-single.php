<?php //get_template_part( 'parts/content', 'breadcrumbs' ); ?>

<article id="post-<?php the_ID(); ?>" class="<?php echo $post->post_name;?>" role="article" itemscope itemtype="http://schema.org/blogPost">

		<header class="article-header">

			<h1 class="entry-title single-title h4" itemprop="headline"><?php the_title();?></h1>
			<?php get_template_part( 'parts/content', 'byline' ); ?>
		</header> <!-- end article header -->

    <section class="entry-content" itemprop="articleBody">

			<?php
		//	if ( has_post_thumbnail() ) {
		//	accessible_thumbnail();
		//	}?>

			<?php the_content(); ?>

	    <?php wp_link_pages(); ?>

		</section> <!-- end article section -->

		<footer class="article-footer center">

		</footer> <!-- end article footer -->

</article> <!-- end article -->
