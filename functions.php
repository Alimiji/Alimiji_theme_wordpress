<?php    
# CETTE FONCTION PERMET DE CHARGER LES FICHIERS CSS, JAVASCRIPT .....
# wp_enqueue_script('main_declic_mpp_js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true );
# wp_enqueue_style('declic_mpp_main_styles', get_stylesheet_uri());


function declic_mpp_files(){
    wp_enqueue_script('main_declic_mpp_js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true );
    wp_enqueue_style('custum-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    #wp_enqueue_script('main_declic_mpp_js', 'http://localhost:3000/bundled.js', NULL, '1.0', true );
    wp_enqueue_style('declic_mpp_main_styles', get_stylesheet_uri());
}


add_action('wp_enqueue_scripts','declic_mpp_files');


function declic_mpp_features(){
    
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerLocationOne', 'Footer Location One');
    register_nav_menu('footerLocationTwo', 'Footer Location Two');
    add_theme_support('title-tag');
    
}


add_action('after_setup_theme','declic_mpp_features');



