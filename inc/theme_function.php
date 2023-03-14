<?php

# Theme functions
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
     
    # Theme Color
    $wp_customize->add_section('atik_colors', array(
        'title' => __('Theme Color', 'all-in-one'),
        'description' => 'If you need can change your theme color.',
    ));

    $wp_customize->add_setting('atik_bg_color', array(
        'default' => '#ffffff',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'atik_bg_color', array(
        'label' => 'Backgroud Color',
        'section' => 'atik_colors',
        'settings' => 'atik_bg_color',
    )));
}
add_action('customize_register', 'atik_customizar_register');