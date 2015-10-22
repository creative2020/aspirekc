<?php

add_action('customize_register', function($wpc) {
    /* add sections */
    $wpc->add_section('header', ['title' => 'Header']);
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
});

if (class_exists('WPLessPlugin')) {
    $less = WPLessPlugin::getInstance();

    theme_mod_to_less_var($less, 'home-header-img');
}

function theme_mod_to_less_var($less, $setting_name, $default = '') {
    $setting = get_theme_mod($setting_name);
    if (empty($setting)) $setting = $default;
    if (filter_var($setting, FILTER_VALIDATE_URL)) $setting = "url('$setting')";
    if(!empty($setting))
        $less->addVariable($setting_name, $setting);
}
