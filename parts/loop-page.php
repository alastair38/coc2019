<article id="post-<?php the_ID(); ?>" class="<?php echo $post->post_name;?>" role="article" itemscope itemtype="http://schema.org/WebPage">

		<header class="article-header">

			<h1 class="entry-title single-title h3" itemprop="headline"><?php the_title();?></h1>

		</header> <!-- end article header -->

    <section class="entry-content" itemprop="articleBody">

			<?php the_content(); ?>

	    <?php wp_link_pages(); ?>

		</section>

		<footer class="article-footer center">

		</footer>

</article>
