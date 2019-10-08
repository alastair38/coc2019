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
$id = 'profile-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$profileImg = get_field('profile_image');
$profileText = get_field('profile_text');
$profileContact = get_field('profile_contact');
?>


<div class="profile col s6 <?php echo $bg;?> lighten-4">
  <?php if($profileImg):?>
    <figure class="col s12 no-pad">
      <img src="<?php echo $profileImg['sizes']['card-thumbnail size'];?>" alt="<?php echo $profileImg['alt'];?>" />
      <figcaption>

        <?php if($profileText):
          echo '<p class="content">
          ' . $profileText . '
          </p>';
        endif;

        if($profileContact):
          echo '<a href="mailto:' . $profileContact . '">' . $profileContact . '</a>';
        endif;?>

      </figcaption>
    </figure>
  <?php endif;?>
</div>
