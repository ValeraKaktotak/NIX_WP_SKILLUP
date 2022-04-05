<?php

namespace Sparrow\Modules\UserInfo;

class WP_User_Info_Ajax_Handler{

    public function __construct() {
        $this->init_hooks();
    }

    protected function init_hooks()
    {
        add_action('wp_ajax_user_info', [$this, 'output_user']);
        add_action('wp_ajax_nopriv_user_info', [$this, 'output_user']);
    }

    public function output_user(){
        $user_info = get_users([
            'include' => [
                $_POST['id']
            ],
            'fields' => [ 'ID', 'user_nicename', 'user_registered' ],
        ]);


//		var_dump($user_info);
		$name = '';
//		wp_die();
	    foreach ( $user_info as $item ) {
			print_r($item->user_nicename);
			echo '<br>';
		}
		wp_die();
        //wp_send_json($user_info);

    }
}











