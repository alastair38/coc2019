<?php

/**
 * Front Page Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'latest-pubs-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'latest-pubs';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assing defaults.
$numberposts = get_field('number_of_items');
$bg = get_field('background');

$args = array(
  'numberposts' => $numberposts,
  'post_type' => 'publications'
);

$latest_posts = get_posts( $args );

echo '<div class="row ' . $bg . ' block"><div class="container">';
  echo '<h2 class="col s12 h4">Latest Publications</h2><div class="col s12">';
foreach($latest_posts as $post) {
  setup_postdata( $post );?>
  <article id="post-<?php the_ID(); ?>" class="article-list">


  		<h2><a href="<?php the_permalink($post->ID) ?>" rel="bookmark"><?php echo get_the_title($post->ID); ?></a></h2>

      <?php

    	if( strtotime( $post->post_date ) > strtotime('-7 day') ) {
    			echo '<span class="new badge"></span>';
    	}
    	?>

  </article>
<?php }

echo '</div></div></div>';

wp_reset_postdata();
?>
