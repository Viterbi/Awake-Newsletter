/** This registers the widget area immediately after single post content */
register_sidebar(array(
    'id' => 'newsletter',
    'name' => 'Newsletter Widget Area',
    'description' => 'Newsletter Widget Area, immediately after single post content',
    'before_widget' => '<div id="newsletter_widget">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
));


/** Add the newsletter widget after the post content */
add_action( 'mysite_after_entry', 'custom_theme_newsletter' );
function custom_theme_newsletter()
  {
	if ( ! is_singular( 'post' ) )
    return;
	dynamic_sidebar('newsletter');
   }
