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
$className = 'statement';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assing defaults.
$statement = get_field('statement_header');
$byline = get_field('statement_byline');
?>

<div id="<?php echo $id;?>" class="row block statement">
  <div class="col s6 offset-s6">
    <h1 class="h2 bold upper"><?php echo $statement;?>
    <?php if($byline) {
      echo '<span>' . $byline . '</span>';
    }?>
    </h1>
  </div>
</div>
