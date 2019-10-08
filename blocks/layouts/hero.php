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
$id = 'hero-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'hero';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assing defaults.
$text = get_field('hero_text');
$class = get_field('hero_class');
if($class) {
  $class = "grid-fig";
}
$image = get_field('hero_image');

?>
<div id="<?php echo esc_attr($id); ?>" class="row no-margin-bot">
  <div class="col s12">
    <figure class="hero <?php echo $class; ?>"><img src="<?php echo $image['url']; ?>"/>
      <figcaption><h1 class="h5 bold upper"><?php echo $text; ?></h1></figcaption>
    </figure>
  </div>
</div>
