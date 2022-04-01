<?php

include 'inc/gutenberg-blocks/class-block-person.php';
new Sparrow\Blocks\PersonBlock\PersonBlock();

include 'inc/options/class-options.php';
new Sparrow\Options\MyOptions\Options();

include 'inc/ajax-handlers/class-wp-random-posts.php';
new Sparrow\Modules\RandomPosts\Random();

include 'inc/ajax-handlers/class-wp-user-info.php';
new Sparrow\Modules\UserInfo\GetUserInfo();

include 'inc/ajax-handlers/class-wp-user-info-security.php';
new Sparrow\Modules\UserInfoSecurity\GetUserInfoSecurity();


add_action( 'wp_enqueue_scripts', 'style_theme' );
add_action( 'wp_footer', 'scripts_theme' );
add_action( 'after_setup_theme', 'main_menu' );
add_action( 'widgets_init', 'register_my_widgets' );
add_action('after_setup_theme', 'localize_theme_setup');

function localize_theme_setup() {
    load_theme_textdomain('sparrow', get_template_directory() . '/languages' );
}

function register_my_widgets(){
    register_sidebar( array(
            'name' => 'Page Sidebar',
            'id' => 'page_sidebar',
            'description' => 'Описание Page Sidebar',
            'before_widget' => '<div class="widget %2$s">',
            'after_widget' => "</div>\n",
        )
    );
}




function style_theme(){
    // отменяем зарегистрированный jQuery
    wp_deregister_script('jquery-core');
    wp_deregister_script('jquery');

    // регистрируем
    wp_register_script( 'jquery-core', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, null, true );
    wp_register_script( 'jquery', false, array('jquery-core'), null, true );

    // подключаем
    wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr.js' );
    wp_enqueue_style( 'default', get_template_directory_uri() . '/assets/css/default.css' );
    wp_enqueue_style( 'layout', get_template_directory_uri() . '/assets/css/layout.css' );
    wp_enqueue_style( 'media-queries', get_template_directory_uri() . '/assets/css/media-queries.css' );
}

function scripts_theme(){
    wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js' );
    wp_enqueue_script( 'doubletaptogo', get_template_directory_uri() . '/assets/js/doubletaptogo.js' );
    wp_enqueue_script( 'init', get_template_directory_uri() . '/assets/js/init.js' );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js' );
    wp_localize_script('main', 'my_ajax_request', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('user_security_nonce'),
    ));
}

function main_menu(){
    register_nav_menu( 'top', 'Меню в шапке' );
    register_nav_menu( 'footer', 'Меню в подвале' );
    add_theme_support( 'post-thumbnails', array( 'post' ) );
    add_theme_support( 'post-formats', array( 'video', 'aside' ) );
}


// обавляем список категорий через back-end в gravity forms
add_filter('gform_pre_render', 'my_form');

//Note: when changing drop down values, we also need to use the gform_pre_validation so that the new values are available when validating the field.
add_filter( 'gform_pre_validation', 'my_form' );

//Note: when changing drop down values, we also need to use the gform_admin_pre_render so that the right values are displayed when editing the entry.
add_filter( 'gform_admin_pre_render', 'my_form' );

//Note: this will allow for the labels to be used during the submission process in case values are enabled
add_filter( 'gform_pre_submission_filter', 'my_form' );

function my_form( $form )
{

    if ($form['title'] != "my_form") return $form;

    foreach ($form['fields'] as &$field) {
        //добавляем css класс categories-dropdown в настройках полей в гравити формс
        if ($field->type != 'select' || strpos($field->cssClass, 'categories-dropdown') === false) {
            continue;
        }

        // you can add additional parameters here to alter the posts that are retrieved
        // more info: http://codex.wordpress.org/Template_Tags/get_posts
        $movie_ids = get_categories();
        //var_dump($movie_ids);

        // update 'Not listed Here' to whatever you'd like the instructive option to be
        $choices = array(array('text' => 'Not listed Here', 'value' => 0));

        foreach ($movie_ids as $movie_id) {
//            var_dump( $movie_id->name );
//            exit;
            $choices[] = array('text' => $movie_id->name, 'value' => $movie_id->id, 'isSelected' => false);
        }

        $field['choices'] = $choices;
    }
    return $form;
}

// The gform_currency_setting_message action hook is used to add a message after the currency drop down within the Settings page.
add_action( 'gform_currency_setting_message', 'currency_message' );
function currency_message() {
    esc_html_e( 'take the US Dollars', 'your_text_domain_here' );
}




