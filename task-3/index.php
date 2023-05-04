<?php
	use includes\Shop;
	
	spl_autoload_register( function ( $class_name ) {
		$file_path = str_replace( '\\', '/', $class_name );
		require_once $file_path . '.php';
	} );
	
	$shop = new Shop( 'My Shop', 'downing street 10', 'apple');
	
	$shop->add_product('car');
	$shop->add_product('cat');
	$shop->add_product('dog');
	
	$shop->remove_product('cat');
	
	$shop_products = $shop->get_products();
	
	foreach ( $shop_products as $item ) {
		echo $item . '<br>';
	}