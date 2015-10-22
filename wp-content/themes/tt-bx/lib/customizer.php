<?php

add_action('customize_register', function($wpc) {
    /* add sections */
    $wpc->add_section('header', ['title' => 'Header']);
    $wpc->add_section('nav', ['title' => 'Navigation']);
    $wpc->add_section('footer', ['title' => 'Footer']);

    $wpc->add_section('home', ['title' => 'Home Page']);

    /*
     * Header
     */

    $setting_id = 'header-img';
    $wpc->add_setting($setting_id);
    $wpc->add_control(new WP_Customize_Image_Control(
        $wpc, $setting_id, [
            'section' => 'header',
            'label' => __('Header Image'),
            'settings' => $setting_id,
    ]));

    $setting_id = 'header-img-width';
    $wpc->add_setting($setting_id, ['default' => 100]);
    $wpc->add_control(new WP_Customize_Control(
        $wpc, $setting_id, [
            'section' => 'header',
            'label' => __('Header Image, Max Width (%)'),
            'settings' => $setting_id,
            'type' => 'number',
    ]));

    /*
     * Navigation
     */

    $setting_id = 'nav-padding';
    $wpc->add_setting($setting_id, ['default' => 2]);
    $wpc->add_control(new WP_Customize_Control(
        $wpc, $setting_id, [
            'section' => 'nav',
            'label' => __('Navigation Menu Size'),
            'settings' => $setting_id,
            'type' => 'number',
    ]));

    /*
     * Footer
     */

    add_color_control($wpc, 'footer', 'contact-env-bg', 'Contact Envelope Background Color');
    add_color_control($wpc, 'footer', 'contact-env-fg', 'Contact Envelope Foreground Color');

    /*
     * Home Page
     */

    $setting_id = 'home-header-img';
    $wpc->add_setting($setting_id);
    $wpc->add_control(new WP_Customize_Image_Control(
        $wpc, $setting_id, [
            'section' => 'home',
            'label' => __('Header Image'),
            'settings' => $setting_id,
    ]));
    add_color_control($wpc, 'home', 'home-header-fg', 'Header Foreground Color');
});

if (class_exists('WPLessPlugin')) {
    $less = WPLessPlugin::getInstance();

    $less->addVariable('header-img-width',
        get_theme_mod('header-img-width', 100) . '%');

    $less->addVariable('nav-padding',
        get_theme_mod('nav-padding', 2) . 'em');

    theme_mod_to_less_var($less, 'contact-env-bg', 'lightgray');
    theme_mod_to_less_var($less, 'contact-env-fg', 'darkgray');

    theme_mod_to_less_var($less, 'home-header-img');
    theme_mod_to_less_var($less, 'home-header-fg');
}

function add_color_control($wpc, $section, $setting_name, $description) {
    $wpc->add_setting($setting_name);
    $wpc->add_control(new WP_Customize_Color_Control(
        $wpc, $setting_name, [
            'section' => $section,
            'label' => __($description),
            'settings' => $setting_name,
    ]));
}

function theme_mod_to_less_var($less, $setting_name, $default = '') {
    $setting = get_theme_mod($setting_name);
    if (empty($setting)) $setting = $default;
    if (filter_var($setting, FILTER_VALIDATE_URL)) $setting = "url('$setting')";
    if(!empty($setting))
        $less->addVariable($setting_name, $setting);
}
