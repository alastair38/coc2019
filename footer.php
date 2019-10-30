		<footer id="contact" class="page-footer grey lighten-4 black-text center" role="contentinfo">
			<div id="inner-footer" class="row no-margin-bot">

				<?php if( have_rows('logos', 'option') ):

					$count = count(get_field('logos', 'option'));
					$cols = 12 / $count;
					$section_title = get_field('logos_title', 'option');
					?>

		    <div id="funder-logos" class="row">


					<p><?php _e($section_title, 'acbase');?></p>
					<div class="flex">

			    <?php while( have_rows('logos', 'option') ): the_row();
					$image = get_sub_field('image_file');

					?>

		      <div class="col <?php echo 's' . $cols;?>">
						<a href="<?php the_sub_field('link_to'); ?>"><img class="responsive-img" alt="<?php echo $image['alt']; ?>" src="<?php echo $image['url']; ?>"></a>

					</div>

		    	<?php endwhile; ?>
					</div>

				</div>

				<?php endif;

				$fb = get_field("facebook", "options");
				$twitter = get_field("twitter", "options");
				$mail = get_field("contact_email", "options");
				$privacy = get_field("privacy_page_link", "options");

				echo '<ul id="contact" class="col s12">';

				if($fb):
					echo '<li><a href="' . $fb . '">Facebook<svg class="icon icon-facebook right hide-on-med-and-down"><use xlink:href="' . get_stylesheet_directory_uri() . '/assets/icons/symbol-defs.svg#icon-facebook"></use></svg></a></li>';
		 		endif;

				if($twitter):
					echo '<li><a href="https://twitter.com/' . $twitter . '">Twitter<svg class="icon icon-twitter right hide-on-med-and-down"><use xlink:href="' . get_stylesheet_directory_uri() . '/assets/icons/symbol-defs.svg#icon-twitter"></use></svg></a></li>';
		 		endif;

				if($mail):
					echo '<li><a href="mailto:' . $mail . '">Email<svg class="icon icon-mail right hide-on-med-and-down"><use xlink:href="' . get_stylesheet_directory_uri() . '/assets/icons/symbol-defs.svg#icon-mail"></use></svg></a></li>';
		 		endif;

				if($privacy):
					echo '<li><a href="' . $privacy . '">Privacy<svg class="icon icon-file-text right hide-on-med-and-down"><use xlink:href="' . get_stylesheet_directory_uri() . '/assets/icons/symbol-defs.svg#icon-file-text"></use></svg></a></li>';
		 		endif;

				echo '</ul>';


			if(is_user_logged_in() || current_user_can('editor'))  {
			$subID = get_field('submission_page', 'option');?>
			<div id="fixed-sub" class="fixed-action-btn">
				<a class="btn-floating green white-text tooltipped" data-position="left" data-tooltip="Add new publication" href="<?php echo admin_url('post-new.php?post_type=publications'); ?>"><i class="material-icons">book</i></a>
				<a class="btn-floating green white-text tooltipped" data-position="left" data-tooltip="Add news item" href="<?php echo admin_url('post-new.php'); ?>"><i class="material-icons">post_add</i></a>
				<?php if(is_single() || is_singular()):?>

				<a class="btn-floating grey darken-3 white-text tooltipped" data-position="left" data-tooltip="Edit page" href="<?php echo get_edit_post_link(); ?>"><i class="material-icons">mode_edit</i></a>

			<?php endif;?>


			</div>

			<?php

	 		}?>
				<div class="col s12">
					<p class="source-org copyright">
						<?php bloginfo('name'); ?> &copy; <?php echo date("Y");?>
					</p>
				</div>

			</div> <!-- end #inner-footer -->

		</footer> <!-- end .footer -->
	<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->
