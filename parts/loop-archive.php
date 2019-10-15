<article id="post-<?php the_ID(); ?>" class="article-list">

	<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>

	<?php
	$author = get_field('author');
	$journal = get_field('journal');
	$year = get_field('year');
	echo '<span class="meta">';

	if($author):
	echo $author;
	endif;

	if($journal):
	echo ', <em>' . $journal . '</em>';
	endif;

	if($year):
	echo ' (' . $year . ')</span>';
	endif;
  ?>

	<?php
	if( strtotime( $post->post_date ) > strtotime('-7 day') ) {
			echo '<span class="new badge"></span>';
	}
	?>

</article>
