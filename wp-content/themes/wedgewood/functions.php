<?php
//Implement Cookie with HTTPOnly and Secure flag in WordPress

function moment_settings(){
	//Featured Image
	add_theme_support('post-thumbnails');

	//===================
	//Sizes custom
    //===================
    add_image_size('block_1', 950,670, true); //Crop with true
    add_image_size('block_2', 950,742, true); //Crop with true
    add_image_size('block_3', 674,439, true); //Crop with true
    add_image_size('block_4', 674,868, true); //Crop with true
    add_image_size('block_5', 536,349, true); //Crop with true
    add_image_size('block_6', 260,263, true); //Crop with true
    add_image_size('block_g_1', 812,674, true); //Crop with true, gallery
    add_image_size('block_g_2', 260,300, true); //Crop with true, gallery
    add_image_size('block_g_3', 536,300, true); //Crop with true, gallery
    
}

add_action('after_setup_theme','moment_settings');

/* CSS and JS */
function moment_styles(){
	//==============================
	//Add style page
	//==============================
	wp_enqueue_style("fonts", get_template_directory_uri().'/fonts/stylesheet.css',array(),'1.0.0');
    wp_enqueue_style("reset", get_template_directory_uri().'/css/reset.css',array(),'1.0.1');


    //==============================
	//Add owlcarousel
	//==============================
    //wp_enqueue_style("owlcarousel.css", get_template_directory_uri().'/assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css',array(),'1.0.0');
    //wp_enqueue_script('owlcarousel.js',get_template_directory_uri()."/assets/OwlCarousel2-2.3.4/dist/owl.carousel.min.js", array('jquery'), '1.0.0', true);
    wp_enqueue_style("gallery-css", get_template_directory_uri().'/css/modal-gallery.css',array(),'1.0.0');


    //Main theme CSS
    wp_enqueue_style("theme", get_template_directory_uri().'/css/theme.css',array(),'1.0.1');

    //==============================
	//Main Scripts
	//==============================
    wp_enqueue_script('script-gallery',get_template_directory_uri()."/js/gallery.js", array('jquery'), '1.0.1', true);
    wp_enqueue_script('script-js',get_template_directory_uri()."/js/script.js", array('jquery'), '1.0.2', true);
    

    //Ajax
    wp_localize_script( 'script-js', 'ajax_var', array(
        'url'    => admin_url( 'admin-ajax.php' ),
        'nonce'  => wp_create_nonce( 'my-ajax-nonce' ),
    ) );
    
}
add_action("wp_enqueue_scripts", "moment_styles");



/*Menus*/
function moment_menus(){
    register_nav_menus( array(
        'header-menu' => 'Header Menu',
    ));
}
add_action("init","moment_menus" );


//add_action('acf/init', 'my_acf_op_init');
if( function_exists('acf_add_options_page') ) {
    
    $parent =  acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}



function printBtn($arrLink, $defaultClasses, $id="")
{
    
    $classLink = "";
    $openTarget = "";
    $link = $arrLink;
    if ($link) {
        //echo $link['url'];
        if ($link['url'] == "#") {
            if($id != "")
            {
                $classLink = "";
            }else{
                $classLink = "btn-open-register";
            }
            
        } else {
            $openTarget = "target='" . $link['target'] . "'";
        }

        $btnLink = "<a id='".$id."' href='" . $link['url'] . "' class='".$defaultClasses." ". $classLink . "' " . $openTarget . ">" . $link['title'] . "</a>";
        return $btnLink;
    }
    
}


function ww_load_dashicons(){
    wp_enqueue_style('dashicons');
}
add_action('wp_enqueue_scripts', 'ww_load_dashicons');



function is_mobile(){
    $user_agent = $_SERVER["HTTP_USER_AGENT"];
    if(preg_match("/(android|webos|avantgo|iphone|ipod|ipad|bolt|boost|cricket|docomo|fone|hiptop|opera mini|mini|kitkat|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i",$user_agent ))
    {
        //"mobile device detected";
        return true;
    }else{
        //"desktop detected";
        return false;
    }
}
//After submit Register form



