<?php
/*
Author: 2020 Creative
URL: htp://2020creative.com
*/

function tt_register_cpt($single, $plural = '') {
    if (empty($plural)) {
        $plural = $single.'s';
    }
    register_post_type(
        strtolower($single),
        array(
            'label' => $plural,
            'labels' => array(
                'add_new_item' => "Add New $single",
                'edit_item' => "Edit $single",
                'new_item' => "New $single",
                'view_item' => "View $single",
                'search_items' => "Search $plural",
                'not_found' => "No $plural found",
                'not_found_in_trash' => "No $plural found in Trash",
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'custom-fields',
                'excerpt',
            ),
            'taxonomies' => array('category'),
        )
    );
}

add_action('init', function() {
    tt_register_cpt('Event');
    tt_register_cpt('News', 'News');
    tt_register_cpt('Testimonial');
});
