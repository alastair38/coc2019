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

// Create class attribute allowing for custom "className" and "align" values.
$className = 'profile';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assing defaults.

if( have_rows('profile_details') ):

  $count = count(get_field('profile_details'));
  $cols = 12 / $count;


  echo '<div id="' . $id . '" class="row">';

    // loop through the rows of data
      while ( have_rows('profile_details') ) : the_row();

      $profileName = get_sub_field('details_name');
      $profileImg = get_sub_field('details_image');
      $profileText = get_sub_field('details_text');
      $profileContact = get_sub_field('details_contact');

      echo '<div class="' . $className . ' col s12">

      <img class="col s3 no-pad" src="' . $profileImg['sizes']['blog-thumbnail size'] . '" />
      <div class="content col s9">
      <h2 class="h6">' . $profileName . '</h2>
      <p class="thin">' . $profileText . '</p>';
      if($profileContact) {
      echo '<a href="mailto:' . $profileContact . '" rel="bookmark"><svg class="icon icon-mail left"><use xlink:href="http://gutenberg-clone.local/wp-content/themes/ac_base/assets/icons/symbol-defs.svg#icon-mail"></use></svg>Contact ' . $profileName . '</a>';
      }
      echo '</div>

      </div>';

    endwhile;

    echo '</div>';

endif;
?>
