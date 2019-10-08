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
$id = 'cta-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$cta = get_field('call_to_action');
$link = get_field('cta_link');
$linkText = get_field('cta_link_text');
$bg = get_field('background');
?>


<div class="row block <?php echo $bg;?> lighten-4">
  <div class="cta continer">
    <article id="<?php echo $id; ?>" class="col s12 h5 center">

        <?php echo $cta;?>

      <?php if($link):?>
      <p>
          <a href="<?php echo $link;?>" class="btn-flat"><?php echo $linkText;?></a>
      </p>
      <?php endif;?>
    </article>
  </div>
</div>
