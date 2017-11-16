<?php

/*

@package lifestyle-design
    ===
    ADMIN PAGE
    ===
*/



function lifestyle_design_add_admin_page(){
    
    
    // generate ld admin page
    add_menu_page( 'Lifestyle Design Options', 'Lifestyle Design', 'manage_options', 'lifestyle_design',  'lifestyle_design_create_page', get_template_directory_uri(). '/img/ld.png', 110); 
    
    // generate ld admin sub pages
    add_submenu_page( 'lifestyle_design', 'Lifestyle Design Options', 'General', 'manage_options', 'lifestyle_design', 'lifestyle_design_create_page');
    
     add_submenu_page( 'lifestyle_design', 'LD CSS Options', 'Custom CSS', 'manage_options', 'lifestyle_design_css', 'lifestyle_design_settings_page');

    //Activate Custom Settings
    add_action( 'admin_init', 'ld_custom_settings'  ) ;
}
 
add_action('admin_menu', 'lifestyle_design_add_admin_page');

function ld_custom_settings() {
    register_setting( 'ld-settings-group',  'first_name' );
    register_setting( 'ld-settings-group',  'twitter_handler' );
    
    add_settings_section('ld-sidebar-options', 'Sidebar Options', 'ld_sidebar_options', 'lifestyle_design');
    
    add_settings_field( 'sidebar-name',  'First Name', 'ld_sidebar_name',  'lifestyle_design',  'ld-sidebar-options' );
    add_settings_field( 'sidebar-twitter', 'Twitter handler', 'ld_sidebar_twitter',  'lifestyle_design',  'ld-sidebar-options' );
}


function ld_sidebar_options(){
    echo 'Customize your sidebar information';
    
}

function ld_sidebar_name() {
    $firstName = esc_attr(  get_option('first_name' ) );
    echo '<input type="text" name="first_name" value="'.$firstName.'" placeholder="First Name"  > 
   
    ';
    
}

function ld_sidebar_twitter() {
    $twitter = esc_attr( get_option( 'twitter_handler' ) );
    echo '<input type="text" name="twitter_handler" value="'.$twitter.'" placeholder="Twitter handler"  > 
     <p class="">Input your twitter username without the @ character</p>';
    
}


function lifestyle_design_create_page() {
    //generates the admin page 
   
    require_once( get_template_directory() . '/inc/templates/ld-admin.php');
    
}
                     
function lifestyle_design_settings_page() {
    //generates the admin page 
   
    
    
}