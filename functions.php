<!-- WP Functions -->
<?php 
function shoyu_ramen_files () {
    wp_enqueue_style('shoyu_ramen_reset_styles', get_theme_file_uri('/build/reset.css')); 
    wp_enqueue_style('shoyu_ramen_main_styles', get_theme_file_uri('/build/style-index.css')); 
    wp_enqueue_style('google-fonts-styles', '//fonts.googleapis.com/css2?family=Outfit:wght@300;400;700&family=Roboto:wght@300;700&display=swap'); 
}

add_action('wp_enqueue_scripts', 'shoyu_ramen_files');
?>