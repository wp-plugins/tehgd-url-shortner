<?php
/*
Plugin Name: Teh.GD URL Shortner
Plugin URI: http://www.sam-bennett.co.cc/teh-gd-plugin/
Description: Shortens URL's
Author: Sam Bennett
Version: 0.3
Author http://www.sam-bennett.co.cc
*/
/*  Copyright 2009  Sam Bennett  (email : sam@newbz.co.uk)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
//wp_enqueue_script('tehgdplugin', '/wp-content/plugins/tehgd/js/tehgd.jquery.js');
wp_enqueue_script('myscript', '/wp-content/plugins/tehgd-url-shortner/js/script.js');

function TehGD() 
{
?>
  	<input type="text" id="long-tehgd" value="Long URL" size="30"/>
	<br />
	<input type="submit" id="submit-tehgd" value="Shorten" />
	<br />
	<div id="short-tehgd" ><p>Short URL</p></div>
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