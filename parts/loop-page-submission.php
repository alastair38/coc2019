<article id="post-<?php the_ID(); ?>" class="<?php echo $post->post_name;?>" role="article" itemscope itemtype="http://schema.org/WebPage">

		<header class="article-header">

			<h1 class="entry-title single-title h3" itemprop="headline"><?php the_title();?></h1>

		</header> <!-- end article header -->

    <section class="entry-content" itemprop="articleBody">

			<?php the_content(); ?>

			<?php

			$settings = array(

	/* (string) Unique identifier for the form. Defaults to 'acf-form' */
	'id' => 'acf-form',

	/* (int|string) The post ID to load data from and save data to. Defaults to the current post ID.
	Can also be set to 'new_post' to create a new post on submit */
	'post_id' => new_post,

	/* (array) An array of post data used to create a post. See wp_insert_post for available parameters.
	The above 'post_id' setting must contain a value of 'new_post' */
	'new_post' => array(
									'post_type'		=> 'publications',
									'post_status'		=> 'publish'
								),

	/* (array) An array of field group IDs/keys to override the fields displayed in this form */
	'field_groups' => array(524),

	/* (array) An array of field IDs/keys to override the fields displayed in this form */
	'fields' => false,

	/* (boolean) Whether or not to show the post title text field. Defaults to false */
	'post_title' => true,

	/* (boolean) Whether or not to show the post content editor field. Defaults to false */
	'post_content' => true,

	/* (string) The URL to be redirected to after the form is submit. Defaults to the current URL with a GET parameter '?updated=true'.
	A special placeholder '%post_url%' will be converted to post's permalink (handy if creating a new post)
	A special placeholder '%post_id%' will be converted to post's ID (handy if creating a new post) */
	'return' => '%post_url%',

	/* (string) The text displayed on the submit button */
	'submit_value' => __("Add Publication", 'acf'),

	/* (string) A message displayed above the form after being redirected. Can also be set to false for no message */
	'updated_message' => __("Post updated", 'acf'),

	/* (string) Determines where field labels are places in relation to fields. Defaults to 'top'.
	Choices of 'top' (Above fields) or 'left' (Beside fields) */
	'label_placement' => 'top',

	/* (string) Determines where field instructions are places in relation to fields. Defaults to 'label'.
	Choices of 'label' (Below labels) or 'field' (Below fields) */
	'instruction_placement' => 'field',

	'uploader' => 'wp',


	/* (string) HTML used to render the updated message. Added in v5.5.10 */
	'html_updated_message'	=> '<div id="message" class="updated"><p>%s</p></div>',

	/* (string) HTML used to render the submit button. Added in v5.5.10 */
	'html_submit_button'	=> '<input type="submit" class="btn-flat green lighten-1 white-text" value="%s" />',

	/* (string) HTML used to render the submit button loading spinner. Added in v5.5.10 */
	'html_submit_spinner'	=> '<span class="acf-spinner"></span>',

	/* (boolean) Whether or not to sanitize all $_POST data with the wp_kses_post() function. Defaults to true. Added in v5.6.5 */
	'kses'	=> true

);

			acf_form( $settings ); ?>

		</section>

		<footer class="article-footer center">

		</footer>

</article>
