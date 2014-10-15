<?php
/**
* @package page
* @copyright Copyright 2003-2006 Zen Cart Development Team
* @copyright Portions Copyright 2003 osCommerce
* @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
* @version $Id: Define Generator v0.1 $
*/

// DEFINTELY DON'T EDIT THIS FILE UNLESS YOU KNOW WHAT YOU ARE DOING!
  if (isset($_GET['feed'])) {
    die('');
  }
	$_SESSION['navigation']->remove_current_page();
	require(DIR_WS_MODULES . zen_get_module_directory('require_languages.php'));

	// include template specific file name defines
	$define_page = zen_get_file_directory(DIR_WS_LANGUAGES . $_SESSION['language'] . '/html_includes/', FILENAME_DEFINE_BLOG, 'false');
	$breadcrumb->add(NAVBAR_TITLE, 'blog/');
  
  if (!isset($_GET['s']) && !isset($_GET['preview'])) {
    require(DIR_WS_FUNCTIONS . 'wordpress_page.php');
    $url = getPageURL();
    $lastchar = substr($url, -1);
    if ($lastchar != '/' && substr($url, -5, 1) != '.' && substr($url, -4, 1) != '.') { // check for extensions like .php, .html, etc.
      zen_redirect($url . '/');
    }
  }
?>