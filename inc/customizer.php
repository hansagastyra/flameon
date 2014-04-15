<?php
/**
 * Flameon Theme Customizer
 *
 * @package Flameon
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function flameon_customize_register( $wp_customize ) {
        $wp_customize->add_setting( 'theme_primary_color', array(
            'default'   => '#ffffff',
            'transport' => 'postMessage'
        ) );
        $wp_customize->add_setting( 'theme_secondary_color', array(
            'default'   => '#ffffff',
            'transport' => 'postMessage'
        ) );
        $wp_customize->add_setting( 'theme_menu_text_color', array(
            'default'   => '#ffffff',
            'transport' => 'postMessage'
        ) );
        $wp_customize->add_setting( 'theme_text_color', array(
            'default'   => '#000000',
            'transport' => 'postMessage'
        ) );
        $wp_customize->add_setting( 'theme_footer_text', array(
            'default'   => '',
            'transport' => 'postMessage'
        ) );
        $wp_customize->add_setting( 'theme_footer_text_color', array(
            'default'   => '#000000',
            'transport' => 'postMessage'
        ) );
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'theme_primary_color', array(
            'label'     => __('Theme Primary Color', 'flameon'),
            'section'   => 'colors',
            'settings'  => 'theme_primary_color'
        ) ) );
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'theme_secondary_color', array(
            'label'     => __('Theme Secondary Color', 'flameon'),
            'section'   => 'colors',
            'settings'  => 'theme_secondary_color'
        ) ) );
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'theme_menu_text_color', array(
            'label'     => __('Menu Text Color', 'flameon'),
            'section'   => 'colors',
            'settings'  => 'theme_menu_text_color'
        ) ) );
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'theme_text_color', array(
            'label'     => __('Text Color', 'flameon'),
            'section'   => 'colors',
            'settings'  => 'theme_text_color'
        ) ) );
        $wp_customize->add_section( 'theme_footer_section', array(
            'title'     => 'Footer',
            'priority'  => 30
        ) );
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'theme_footer_text', array(
            'label'     => __('Footer Text', 'flameon'),
            'section'   => 'theme_footer_section',
            'settings'  => 'theme_footer_text'
        ) ) );
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'theme_footer_text_color', array(
            'label'     => __('Footer Text Color', 'flameon'),
            'section'   => 'colors',
            'settings'  => 'theme_footer_text_color'
        ) ) );
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'flameon_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function flameon_customize_preview_js() {
	wp_enqueue_script( 'flameon_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'flameon_customize_preview_js' );

function theme_color_customize() {
    ?>
         <style type="text/css">
             .site-title, .site-title a, .site-description{ color: <?php echo get_theme_mod('header_textcolor'); ?> }
             .theme-primary-color { background: <?php echo get_theme_mod('theme_primary_color'); ?>; }
             .site-content a, .required{ color: <?php echo get_theme_mod('theme_primary_color'); ?>; }
             .theme-secondary-color { background: <?php echo get_theme_mod('theme_secondary_color'); ?>; }
             .menu-container a{ color: <?php echo get_theme_mod('theme_menu_text_color'); ?> }
             .site-footer, .site-footer a { color: <?php echo get_theme_mod('theme_footer_text_color'); ?>; }
             body, .site-content h1, .site-content h2, .site-content h3, .site-content h4,
             .site-content h5, .site-content h6, .site-content blackquote, .site-content p,
             .site-content li, .entry-title a, .page-title a{ color: <?php echo get_theme_mod('theme_text_color'); ?> }
         </style>
    <?php
}
add_action( 'wp_head', 'theme_color_customize');