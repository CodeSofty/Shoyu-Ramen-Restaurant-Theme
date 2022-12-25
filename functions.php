<?php 

function shoyu_ramen_files () {
    wp_enqueue_script('shoyu_ramen_js', get_template_directory_uri() . '/js/app.js', array('jquery'),'1.0', true);
    wp_enqueue_style('shoyu_ramen_reset_styles', get_theme_file_uri('/build/reset.css'));
    wp_enqueue_style('shoyu_ramen_utility_styles', get_theme_file_uri('/build/style-utility.css'));   
    wp_enqueue_style('shoyu_ramen_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('google-fonts-styles', '//fonts.googleapis.com/css2?family=Outfit:wght@300;400;700&family=Roboto:wght@300;700&display=swap'); 
}

add_action('wp_enqueue_scripts', 'shoyu_ramen_files');


// Load theme support hooks

function shoyu_theme_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('about-image_smll', 350, 197, true);
    add_image_size('about-image_lrg', 550, 309, true);
}

add_action('after_setup_theme', 'shoyu_theme_features');
?>




