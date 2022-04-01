<?php

namespace Sparrow\Modules\UserInfoSecurity;

class GetUserInfoSecurity{

    public function __construct() {
        $this->init_hooks();
    }

    protected function init_hooks()
    {
        add_action('wp_ajax_user_security', [$this, 'security_output_user']);
        add_action('wp_ajax_nopriv_user_security', [$this, 'security_output_user']);
    }

    public function security_output_user(){
        if( empty( $_POST['nonce'] ) ){
            wp_die();
        }

        $nonce_outside = $_POST['nonce'];
        $nonce_inside = wp_create_nonce('user_security_nonce');

        if( $nonce_outside === $nonce_inside ){
            $user_info = get_users([
                'include' => [
                    $_POST['id']
                ],
                'fields' => [ 'ID', 'user_nicename', 'user_registered' ],
            ]);

            wp_send_json($user_info);
        }else{
            echo 'не сработала проверка nonce';
            wp_die();
        }
    }
}











