<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
        function theme_enqueue_styles() {
              wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// 나이 계산
function myAge_func( $atts, $content = null ) {
    $nowYear = date("Y");
    $birthYear = do_shortcode($content);

    if($nowYear >= $birthYear) {
    	$myAge = $nowYear - $birthYear;
    } else {
    	$myAge = "unKnown";
    }

    return $myAge;
}
add_shortcode( 'myAge', 'myAge_func' );
@ini_set('session.cookie_httponly','On');
@ini_set('session.cookie_secure','On');
@ini_set('session.use_only_cookies','On');