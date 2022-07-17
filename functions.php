<?php

/**
 * Theme setup.
 */
function victheme_setup()
{
	add_theme_support('title-tag');

	register_nav_menus(
		array(
			'primary' => __('Primary Menu', 'victheme'),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

	add_theme_support('custom-logo');
	add_theme_support('post-thumbnails');

	add_theme_support('align-wide');
	add_theme_support('wp-block-styles');

	add_theme_support('editor-styles');
	add_editor_style('css/editor-style.css');
}

add_action('after_setup_theme', 'victheme_setup');

/**
 * Enqueue theme assets.
 */
function victheme_enqueue_scripts()
{
	$theme = wp_get_theme();

	wp_enqueue_style('victheme', victheme_asset('css/app.css'), array(), $theme->get('Version'));
	wp_enqueue_style('flickity', get_template_directory_uri() . '/resources/css/flickity.css', array(), $theme->get('Version'));
	wp_enqueue_script('victheme', victheme_asset('js/app.js'), array(), $theme->get('Version'));
}

add_action('wp_enqueue_scripts', 'victheme_enqueue_scripts');

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function victheme_asset($path)
{
	if (wp_get_environment_type() === 'production') {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg('time', time(),  get_stylesheet_directory_uri() . '/' . $path);
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function victheme_nav_menu_add_li_class($classes, $item, $args, $depth)
{
	if (isset($args->li_class)) {
		$classes[] = $args->li_class;
	}

	if (isset($args->{"li_class_$depth"})) {
		$classes[] = $args->{"li_class_$depth"};
	}
	return $classes;
}

add_filter('nav_menu_css_class', 'victheme_nav_menu_add_li_class', 10, 4);

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function victheme_nav_menu_add_submenu_class($classes, $args, $depth)
{
	if (isset($args->submenu_class)) {
		$classes[] = $args->submenu_class;
	}

	if (isset($args->{"submenu_class_$depth"})) {
		$classes[] = $args->{"submenu_class_$depth"};
	}
	return $classes;
}

add_filter('nav_menu_submenu_css_class', 'victheme_nav_menu_add_submenu_class', 10, 3);

/**
 * Get post from loop
 * @param int $amount
 * @param mixed $callback
 * @return void 
 */
function get_posts_from_loop($amount, $callback)
{
	global $wp_query;

	$count = 0;

	while (($count < $amount) && ($wp_query->current_post + 1 < $wp_query->post_count)) {
		$wp_query->the_post();

		$callback();

		$count++;
	}
}
function the_posts_from_loop($amount, $callback)
{
	// global $wp_query;
	$args = array(
		'post_type' => 'post',
		'showposts' => '4',
		'offset' => '1'
	);
	$wp_query = new WP_Query($args);
	$count = 0;
	while (($count < $amount) && ($wp_query->current_post + 1 < $wp_query->post_count)) {
		$wp_query->the_post();

		$callback();

		$count++;
	}
}
function the_posts_from_loop_principal($amount, $callback)
{
	// global $wp_query;
	$args = array(
		'post_type' => 'post',
		'showposts' => '1',
		// 'offset' => '-1'
	);
	$wp_query = new WP_Query($args);
	$count = 0;
	while (($count < $amount) && ($wp_query->current_post + 1 < $wp_query->post_count)) {
		$wp_query->the_post();

		$callback();

		$count++;
	}
}
