<?php

namespace Sparrow\Modules\RandomPosts;

class Random{

    public function __construct() {
        $this->init_hooks();
    }

    protected function init_hooks()
    {
        add_action('wp_ajax_random_posts', [$this, 'output_posts']);
        add_action('wp_ajax_nopriv_random_posts', [$this, 'output_posts']);
    }

    public function output_posts(){
        $random_posts = get_posts( [
            'post_type' => 'post',
            'numberposts' => 3,
            'orderby'     => 'rand',
        ] );

        $post_array = array();

        foreach ($random_posts as $post){

            $post_array[$post->ID] = [
                'title' => $post->post_title,
                'content' => $post->post_content,
                ];
        }

        wp_send_json($post_array);

    }
}











