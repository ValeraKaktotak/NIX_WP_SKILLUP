<?php

$request = file_get_contents( 'php://input' );
$secret  = 'KO)4[0]]G-MJZF4V1.Tj6hmC%0=5t~ig ++pf!!-YSsP,Y:2g;';

function nginx_headers() {
	$headers = [];

	foreach ( $_SERVER as $name => $value ) {
		if ( substr( $name, 0, 5 ) == 'HTTP_' ) {
			$headers[ str_replace( ' ', '-', ucwords( strtolower( str_replace( '_', ' ', substr( $name, 5 ) ) ) ) ) ]
				= $value;
		}
	}

	return $headers;
}

$request_headers = nginx_headers();
$payload         = $request;
$received_hash    = $request_headers['X-Wc-Webhook-Signature'];
$generated_hash   = base64_encode( hash_hmac( 'sha256', $payload, $secret, true ) );

if ( $received_hash === $generated_hash ) {
	$req_dump   = print_r( $request, true );
	$action     = json_decode( $req_dump, true );
	$array_data = [];
	$array_data = [
		'id'           => $action['id'],
		'date'         => $action['date_created'],
		'client name'  => $action['billing']['first_name'],
		'client email' => $action['billing']['email'],
	];

	foreach ( $action as $keys => $values ) {
		if ( $keys == 'line_items' ) {
			for ( $i = 0; $i < count( $values ); $i ++ ) {
				$name                 = 'product № ' . $i + 1 . ' ';
				$array_data ["$name"] = $values[ $i ]['name'];
			}
		}
	}

	$array_data['total coast'] = $action['total'];

	$txt = "<pre>" . print_r( $array_data, true ) . "</pre>";
	file_put_contents( 'order-ID.txt', $txt );
	exit;
}

/**
 * запись в читабельном формате
 * $txt = "<pre>".print_r($mid_array_data, true)."</pre>";
 * file_put_contents('order-ID.txt', $txt );
 */

/**
 * запись в одну строку с 2 пробелами и / между ними в качестве разделителя
 * $data = file_put_contents( 'order-ID.txt', implode(' / ', $data_array) );
 */