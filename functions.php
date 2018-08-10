<?php

// requeire file
require_once(get_theme_file_path("inc/tgm.php"));
require_once(get_theme_file_path("inc/cmb2function.php"));
require_once(get_theme_file_path("inc/wdgt.php"));






/**
 * philosophy Theme Bootstraping
 */

function philosophy_bootstraping(){

    load_theme_textdomain("philosophy");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    add_editor_style("assets/css/editor-style.css");
    add_theme_support( "post-formats", array( "image", "gallery", "quote", "audio", "video", "link" ) );
    $philosophy_custom_theader_detils = array(
        "header_text" => true,
        "default-text-color" => "#333",
        "width" =>  '1920',
        "height" => '650',
        "flex_height" => true,
        "flex_width" => true

    );
    add_theme_support("custom-header", $philosophy_custom_theader_detils);
//    $philosophy_custom_logo_css = array(
//        "width" => '100',
//        "height" =>  '100'
//    );
    add_theme_support("custom-logo");
    add_theme_support("custom-background");
    add_theme_support( 'html5', array( 'search-form','comment-list' ) );

    // menu
    register_nav_menu("top_menu", __("Top Menu","philosophy"));
    register_nav_menus(array(
        "footer-left"=>__("Footer Left Menu","philosophy"),
        "footer-middle"=>__("Footer Middle Menu","philosophy"),
        "footer-right"=>__("Footer Right Menu","philosophy"),
    ));


    add_image_size("philosophy-squuareimage", 400, 400, true);







}
add_action("after_setup_theme", "philosophy_bootstraping");



/*
 * philosophy Theme style and scripts enquee
 */
function philosophy_assets_list(){




    wp_enqueue_style("philosophy-fontawesomecss", get_theme_file_uri("assets/css/font-awesome/css/font-awesome.min.css"), null, "0.1.0", 'all');
    wp_enqueue_style("philosophy-fonts", get_theme_file_uri("assets/css/font-awesome/fonts/fonts.css"), null, "0.1.0", 'all');
    wp_enqueue_style("philosophy-basecss", get_theme_file_uri("assets/css/base.css"), null, "0.1.0", 'all');
    wp_enqueue_style("philosophy-vendor", get_theme_file_uri("assets/css/vendor.css"), null, "0.1.0", 'all');
    wp_enqueue_style("philosophy-maincss", get_theme_file_uri("assets/css/main.css"), null, "0.1.0", 'all');
    wp_enqueue_style("philosophy-css", get_stylesheet_uri(), null, '1.0.0');


    wp_enqueue_script('jquery');
    wp_enqueue_script("philosophymodazanier-js", get_theme_file_uri("assets/js/modernizr.js"), array("jquery"), "0.1.0", false);
    wp_enqueue_script("philosophypace-js", get_theme_file_uri("assets/js/pace.min.js"), array("jquery"), "0.1.0", false);
    wp_enqueue_script("philosophy-puginjs", get_theme_file_uri("assets/js/plugins.js"), array("jquery"), "0.1.0", true);
    wp_enqueue_script("philosophy-mainjs", get_theme_file_uri("assets/js/main.js"), array("jquery"), "0.1.0",true);





}
add_action("wp_enqueue_scripts", "philosophy_assets_list");



/*
 * pagination for listed pagination
 */


function philosophy_pagination() {
    global $wp_query;
    $links = paginate_links( array(
        'current'  => max( 1, get_query_var( 'paged' ) ),
        'total'    => $wp_query->max_num_pages,
        'type'     => 'list',
        'mid_size' => 3
    ) );
    $links = str_replace( "page-numbers", "pgn__num", $links );
    $links = str_replace( "<ul class='pgn__num'>", "<ul>", $links );
    $links = str_replace( "next pgn__num", "pgn__next", $links );
    $links = str_replace( "prev pgn__num", "pgn__prev", $links );
    echo $links;
}




remove_action("term_description", "wpautop");



function philosophy_widgets(){
    register_sidebar( array(
        'name' => __( 'About Us Page', 'philosophy' ),
        'id' => 'about-us',
        'description' => __( 'Widgets in this area will be shown on about us page.', 'philosophy' ),
        'before_widget' => '<div id="%1$s" class="col-block %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="quarter-top-margin">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name' => __( 'Contact Page Maps Section', 'philosophy' ),
        'id' => 'contact-maps',
        'description' => __( 'Widgets in this area will be shown on contact page.', 'philosophy' ),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ) );
    register_sidebar( array(
        'name' => __( 'Contact Page Information Section', 'philosophy' ),
        'id' => 'contact-info',
        'description' => __( 'Widgets in this area will be shown on contact page.', 'philosophy' ),
        'before_widget' => '<div id="%1$s" class="col-block %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="quarter-top-margin">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Before Footer Section', 'philosophy' ),
        'id'            => 'before-footer-right',
        'description'   => __( 'before footer section, right side', 'philosophy' ),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Section', 'philosophy' ),
        'id'            => 'footer-right',
        'description'   => __( 'footer section, right side', 'philosophy' ),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Bottom Section', 'philosophy' ),
        'id'            => 'footer-bottom',
        'description'   => __( 'footer section, bottom side', 'philosophy' ),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ) );

    register_sidebar( array(
        'name'          => __( 'Header Section', 'philosophy' ),
        'id'            => 'header-section',
        'description'   => __( 'Widgets in this area will be shown on header section.', 'philosophy' ),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );





}
add_action("widgets_init","philosophy_widgets");



function philosophy_search_form( $form ) {
    $homedir      = home_url( "/" );
    $label        = __( "Search for:", "philosophy" );
    $button_label = __( "Search", "philosophy" );
    $newform      = <<<FORM
<form role="search" method="get" class="header__search-form" action="{$homedir}">
    <label>
        <span class="hide-content">{$label}</span>
        <input type="search" class="search-field" placeholder="Type Keywords" value="" name="s"
               title="{$label}" autocomplete="off">
    </label>
    <input type="submit" class="search-submit" value="{$button_label}">
</form>
FORM;
    return $newform;
}
add_filter( "get_search_form", "philosophy_search_form" );


function philosophy_search_result($text)
{
    if (is_search()) {
        $pattern = '/(' . join('|', explode(' ', get_search_query())) . ')/i';
        $text = preg_replace($pattern, '<span class="badge badge-primary">\0</span>', $text);
    }
    return $text;
}
add_filter('the_content', 'philosophy_search_result');
add_filter('the_excerpt', 'philosophy_search_result');
add_filter('the_title', 'philosophy_search_result');