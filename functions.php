<!-- WP Functions -->
<?php 
function shoyu_ramen_files () {
    wp_enqueue_style('shoyu_ramen_main_styles', get_theme_file_uri('/build/style-index.css')); 
}

add_action('wp_enqueue_scripts', 'shoyu_ramen_files');
?>