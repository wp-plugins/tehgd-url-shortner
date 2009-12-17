<?php
/*
Plugin Name: Teh.GD URL Shortner
Plugin URI: http://www.sam-bennett.co.cc
Description: Shortens URL's
Author: Sam Bennett
Version: 0.1
Author http://www.sam-bennett.co.cc
*/

//wp_enqueue_script('tehgdplugin', '/wp-content/plugins/tehgd/js/tehgd.jquery.js');
wp_enqueue_script('myscript', '/wp-content/plugins/tehgd/js/script.js');

function TehGD() 
{
?>
  	<input type="text" id="short-tehgd" value="Long URL" size="30"/>
	<br />
	<input type="submit" id="submit-tehgd" value="Shorten" />
	<br />
	<input type="text" id="shorten-tehgd" value="Short URL" size="30"/>
<?php
}

function widget_TehGD($args) {
  extract($args);
  echo $before_widget;
  echo $before_title; 
  _e("Teh.GD Short URL");
  echo $after_title;
  TehGD();
  echo $after_widget;
}

function TEhGD_init()
{
  register_sidebar_widget(__('TehGD'), 'widget_TehGD');     
}
add_action("plugins_loaded", "TehGD_init");
?>