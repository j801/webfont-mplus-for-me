<?php
/*  
Plugin Name: webfont-mplus
Plugin URI: https://github.com/j801/webfont-mplus-for-me
Description: This plugin provide css file to use webfont mplus
Author: Yuki Okamoto (HN:Justice)      
Version: 1.0
Author URI: http://techdrunker.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/                                  

function add_mplus() 
{  
  $css_url = plugins_url('mplus.css', __FILE__);
  wp_enqueue_style('mplus', $css_url);
}

add_action('wp_print_styles', 'add_mplus');
?>
