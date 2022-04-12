<?php

namespace Sparrow\Api\ProductsInfo;

use \PHPHtmlParser\Dom;

class WP_Get_Product_info{

	public function __construct() {
		add_action( 'rest_api_init', function(){
			register_rest_route( 'myplugin/v1', '/products', [
				'methods'  => 'GET',
				'callback' => [$this, 'my_awesome_func'],
			] );
		}, 10, 0 );
	}


	function my_awesome_func(){
		$result = array();
		$dom = new Dom;
		$dom->loadFromUrl('https://rozetka.com.ua/ua/elektrotransport/c4625901/');
		$html = $dom->find('.goods-tile__title');
		for($i =0; $i < 20; $i++ ){
			$result[$i] =  $html[$i]->text;
		}
		$result = json_encode($result);
		return $result;
	}
}

// http://localhost/wp-json/myplugin/v1/products










