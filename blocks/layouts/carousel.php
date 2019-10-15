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
$id = 'statement-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'slider-wrapper';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
// Load values and assing defaults.
$carouselImages = get_field('carousel_images');
$carouselHeader = get_field('carousel_header');
$carouselByline = get_field('carousel_byline');
?>

<div id="<?php echo $id;?>" style="position: relative;" class="row bock slider-wrapper">

    <?php
    if( $carouselImages ):
    ?>
    <div class="slider">
      <?php foreach( $carouselImages as $image ): ?>

        <div>
          <img class="responsiveimg" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        </div>

      <?php endforeach; ?>
    </div>
    <?php endif; ?>

    <div class="carousel-header">
      <div class="col l6 offset-l6 m12">
      <h1 class="h2 bold upper"><?php echo $carouselHeader;?>
      <?php if($carouselByline) {
        echo '<span>' . $carouselByline . '</span>';
      }?>
      </h1>
      </div>
    </div>

</div>
