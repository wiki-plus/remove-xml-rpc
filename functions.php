<?php
function wikiplus_remove_x_pingback($headers) {
unset($headers['X-Pingback']);
return $headers;
}
add_filter('wp_headers', 'wikiplus_remove_x_pingback');
add_filter('xmlrpc_enabled', '__return_false');