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

			<?php
			$author = get_field('author');
			$journal = get_field('journal');
			$year = get_field('year');


			if($author):
			echo '<span class="meta">';
			echo $author;
			endif;

			if($journal):
			echo ', <em>' . $journal . '</em>';
			endif;

			if($year):
			echo ' (' . $year . ')</span>';
			endif;
		  ?>

			<?php the_content(); ?>

			<?php if( have_rows('publication_upload') ): ?>

	<ul class="grey lighten-4 files">
		<li class="files-title">
			Files
		</li>

	<?php while( have_rows('publication_upload') ): the_row();

		// vars
		$file = get_sub_field('file');
		$extension = end(explode(".", $file['url']));

		?>

		<li class="file">

	    <a href="<?php echo $file['url']; ?>"><?php echo $file['title'] . ' (' . strtoupper($extension) . ')'; ?></a>

		</li>

	<?php endwhile; ?>

	</ul>

<?php endif; ?>

	    <?php wp_link_pages(); ?>

		</section> <!-- end article section -->

		<footer class="article-footer center">

		</footer> <!-- end article footer -->

</article> <!-- end article -->
