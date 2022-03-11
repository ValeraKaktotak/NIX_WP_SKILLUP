<?php

namespace Sparrow\Options\MyOptions;

class Options
{
    public function __construct() {
        add_action( 'acf/init', [ $this, 'register_options' ] );
        $this->register_options_settings();
    }

    public function register_options() {
        if(function_exists('acf_add_options_page')){
            acf_add_options_page();
            acf_add_options_sub_page('Header');
            acf_add_options_sub_page('Footer');

            acf_add_options_page(array(
                'page_title' => 'My options',
                'menu_title' => 'My options',
                'menu_slug' => 'my_options',
                'capability' => 'edit_post',
                'redirect' => 'false',
                'parent_slug' => '',
                'position' => 'false',
            ));

            acf_add_options_sub_page(array(
                'page_title' => 'Header',
                'menu_title' => 'Header',
                'menu_slug' => 'my_options_header',
                'capability' => 'edit_post',
                'parent_slug' => 'my_options',
                'position' => 'false',
            ));

            acf_add_options_sub_page(array(
                'page_title' => 'Footer',
                'menu_title' => 'Footer',
                'menu_slug' => 'my_options_footer',
                'capability' => 'edit_post',
                'parent_slug' => 'my_options',
                'position' => 'false',
            ));
        }
    }

    public function register_options_settings() {
        if( function_exists('acf_add_local_field_group') ):

            acf_add_local_field_group(array(
                'key' => 'group_622868a8cc5ce',
                'title' => 'Footer background color',
                'fields' => array(
                    array(
                        'key' => 'field_622868cad0736',
                        'label' => 'Footer Color',
                        'name' => 'footer_color',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                ),
                'location' => array(
                    array(
                        array(
                            'param' => 'options_page',
                            'operator' => '==',
                            'value' => 'acf-options-footer',
                        ),
                    ),
                ),
                'menu_order' => 0,
                'position' => 'normal',
                'style' => 'default',
                'label_placement' => 'top',
                'instruction_placement' => 'label',
                'hide_on_screen' => '',
                'active' => true,
                'description' => '',
                'show_in_rest' => 0,
            ));

            acf_add_local_field_group(array(
                'key' => 'group_62286802e6722',
                'title' => 'Header background color',
                'fields' => array(
                    array(
                        'key' => 'field_6228685ac7927',
                        'label' => 'Header Color',
                        'name' => 'header_color',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                ),
                'location' => array(
                    array(
                        array(
                            'param' => 'options_page',
                            'operator' => '==',
                            'value' => 'acf-options-header',
                        ),
                    ),
                ),
                'menu_order' => 0,
                'position' => 'normal',
                'style' => 'default',
                'label_placement' => 'top',
                'instruction_placement' => 'label',
                'hide_on_screen' => '',
                'active' => true,
                'description' => '',
                'show_in_rest' => 0,
            ));

        endif;
    }
}