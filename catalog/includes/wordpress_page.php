<?php
  // turn off WordPress themes and include the WordPress core:
  if ($_GET['main_page'] == 'blog') {
    define('WP_USE_THEMES', false);
    require('wordpress/wp-blog-header.php'); // edit this with relative path to wordpress from store root
    add_action( 'wp_footer', 'stats_template_redirect', 1 );
  }
?>