<?php
/*
* My Theme Function
*/

# Theme Title
add_theme_support('title-tag');

# Theme CSS and jQuery File Calling
function atik_css_js_file_calling()
{
    # Style CSS 
    wp_enqueue_style( 'atik-style', get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.2.3', 'all');
    wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom');

    # Style JS
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.2.3', 'true');
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '5.2.3', 'true');
}
add_action('wp_enqueue_scripts', 'atik_css_js_file_calling');

# Google Font
function ali_add_google_fonts(){
    wp_enqueue_style('ali_google_fonts', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald&display=swap', false);
}
add_action('wp_enqueue_scripts', 'ali_add_google_fonts');

# Theme Function
function atik_customizar_register($wp_customize)
{
    # Header Area Function
    $wp_customize->add_section('atik_header_area', array(
        'title'         => __('Header Area', 'all-in-one'),
        'description'   => 'If you interested to update your header area, you can do it here.'
    ));

    $wp_customize->add_setting('atik_logo', array(
        'default'       => get_bloginfo('template_directory') . '/img/logo.png',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'atik_logo', array(
        'label'         => 'Logo Upload',
        'description'   => 'If you interested to change or update your logo, you can do it.',
        'setting'       => 'atik_logo',
        'section'       => 'atik_header_area',
    ) ));

    # Menu Position Option
    $wp_customize->add_section('atik_menu_option', array(
       'title'          => __('Menu Position Option', 'all-in-one'),
       'description'    => 'If you interested to change your menu position you can do it .'
    ));

    $wp_customize->add_setting('atik_menu_position', array(
        'default'       => 'right_menu',
    ));

    $wp_customize->add_control('atik_menu_position', array(
        'label'         => 'Menu Position',
        'description'   => 'Select your menu position',
        'setting'       => 'atik_menu_position',
        'section'       => 'atik_menu_option',
        'type'          => 'radio',
        'choices'       => array(
            'left_menu'     => 'Left Menu',
            'right_menu'    => 'Right Menu',
            'center_menu'   => 'Center Menu'
        ),
    ));

    # Footer Option
    $wp_customize->add_section('atik_footer_option', array(
        'title'          => __('Footer Option', 'all-in-one'),
        'description'    => 'If you interested to change or update your footer settings you can do it .'
     ));
 
     $wp_customize->add_setting('atik_copyright_section', array(
         'default'       => '&copy; Copyroght 2023 | All in one',
     ));
 
     $wp_customize->add_control('atik_copyright_section', array(
         'label'         => 'Copyright Text',
         'description'   => 'If need you can update your copyright text from here.',
         'setting'       => 'atik_copyright_section',
         'section'       => 'atik_footer_option',
     ));
}
add_action('customize_register', 'atik_customizar_register');

# Nav Menu Register
register_nav_menu('main_menu', __('Main Menu', 'all-in-one'));

?>