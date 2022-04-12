<?php

namespace Sparrow\Api\AdminMail;

class WP_Send_Admin_Mail_Route{

	public function __construct() {
		add_action( 'rest_api_init', [$this, 'register_my_route']);

	}
	public function register_my_route(){
		register_rest_route( 'myroute/v1', '/products/sold/(?P<id>\d+)', [
			'methods'  => 'GET',
			'callback' => 'sold_id_func',
			'permission_callback' => [$this, 'permission_check'],
			'args'     => array(
				'arg_int' => array(
					'type'    => 'integer', // значение параметра должно быть числом
					'default' => 1,        // значение по умолчанию = 1
				),
			),
		]);
	}

	function permission_check( \WP_REST_Request $request ){

		if( is_admin() ){
			return true;
		}else{
			echo "У пользователя нет прав";
			return false;
		}

	}

	function sold_id_func( \WP_REST_Request $request ){

		$response = array(
			'arg_int' => $request->get_param('arg_int')
		);

		$user_info = get_users([
			'role' => [
				'administrator'
			],
			'fields' => [ 'user_email' ],
		]);

		$to = $user_info['0']->user_email;
		$subject = 'покупка товара';
		$message = 'товар с ID'.' '.$response['arg_int'];
		$headers = 'From: Me Myself <me@example.net>';

	return mail( $to, $subject, $message, $headers );
	}
}

//  http://localhost/wp-json/myroute/v1/products/sold/1