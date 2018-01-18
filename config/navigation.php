<?php

/**
 * catalyst_wp_theme menu definitions.
 *
 * @link https://codex.wordpress.org/Function_Reference/register_nav_menus
 *
 * @package catalyst_wp_theme
 */

register_nav_menus(array(
    'primary' => esc_html__('Primary Nav', 'catalyst_wp_theme'),
    'auxiliary' => esc_html__('Auxiliary Nav', 'catalyst_wp_theme'),
    'footer' => esc_html__('Footer Nav', 'catalyst_wp_theme')
));
