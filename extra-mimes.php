<?php
/*
Plugin Name: Extra Mimes
Description: Adds valid mime types for epub/mobi (e-books), xls (excel) to WP
Author: justin@foell.org
Version: 1.0
*/

function addUploadMimes($mimes) {
    $mimes = array_merge($mimes, array(
        'epub|mobi' => 'application/octet-stream',
        'xls' => 'application/octet-stream',
	'xcf' => 'image/xcf',
    ));
    return $mimes;
}
add_filter('upload_mimes', 'addUploadMimes');
