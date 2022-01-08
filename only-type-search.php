<?php
/**
 * @package only-type-search
 * @version 1.0.0
 */
/*
Plugin Name: Only Type Search
Plugin URI: https://github.com/gmasson/only-type-search/
Description: With Only Type Search you can filter your installation's searches, so that it only displays one type of post, this excluding others, such as pages, for example.
Author: Gabriel Masson
Version: 1.0.0
Author URI: https://github.com/gmasson/
*/

// Here you define which unique post type will display in searches
$otsPostType = "post";

function otsQuery($query)
{
	if ($query->is_search)
	{
		$query->set('post_type', $otsPostType);
	}
	return $query;
}

add_filter('pre_get_posts','otsQuery');