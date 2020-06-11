<?php
/*
 function to add my styles sheets

*/
function add_styles(){
     //UIkit CSS 
    wp_enqueue_style( 'uikitCSS','//cdn.jsdelivr.net/npm/uikit@3.5.3/dist/css/uikit.min.css' );
    //fontawesome css
    wp_enqueue_style( 'fontawesome css', '//use.fontawesome.com/releases/v5.8.1/css/all.css');
     //my main css file 
    wp_enqueue_style( 'css',get_template_directory_uri().'/des/style.css');
}
/*
 function to add my scripts sheets

*/
function add_script(){

    //UIkit js 
    wp_enqueue_script( 'uikit-js', '//cdn.jsdelivr.net/npm/uikit@3.5.3/dist/js/uikit.min.js', array( 'jquery' ), false, false  );
    wp_enqueue_script( 'uikit-JS ','//cdn.jsdelivr.net/npm/uikit@3.5.3/dist/js/uikit-icons.min.js',array() , false ,false);

}

/*
add custom menu support
Registers a navigation menu location for a theme.
*/ 
function register_custom_menu(){
    register_nav_menu('uikit-menu',__('nav bar'));
}
/* function to control the nav  */
function uikit_menu(){
    wp_nav_menu();
}

/*
add_action() finction
responsinle for putting the scripts file in the main page
*/

add_action( 'wp_enqueue_scripts','add_styles');
add_action('wp_enqueue_scripts','add_script');

//add_action for menu
 
add_action('init','register_custom_menu');

?>