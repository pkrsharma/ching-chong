<?php
define('ChildTemplateDirectoryPath', dirname(get_bloginfo('stylesheet_url')));
define('ChildTemplateDirectoryPath_CSS', ChildTemplateDirectoryPath . '/assets/css');
define('ChildTemplateDirectoryPath_IMAGE', ChildTemplateDirectoryPath . '/assets/images');
define('ChildTemplateDirectoryPath_JS', ChildTemplateDirectoryPath . '/assets/js');
define('ChildTemplateDirectoryPath_FONTS', ChildTemplateDirectoryPath . '/assets/fonts');
define('DATE_FORMAT', 'd F, Y');
define('EMAIL_SUBJECT','Lash Brat');
define('INSTAGRAM_USER','iamlashbrat');
define('INSTAGRAM_USER_ID','1340131425');
define('INSTAGRAM_ACCESS_TOKEN','1340131425.1677ed0.a622e2df947e44f4bad8fb24f832df8c');

function getRecentPosts(){
	$args = array( 'numberposts' => '3' );
	return wp_get_recent_posts( $args );
}

function getHomeScrollPosts(){
	$args = array(
	    'posts_per_page'   => -1,
	    'category'         => 2,
	    'orderby'          => 'name',
	    'order'            => 'ASC',
	    'post_type'        => 'post'
	);

	return get_posts($args);
}

?>