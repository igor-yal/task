<?php
	namespace includes;
	
	class Shop {
		public $name;
		public $address;
		public $products = array();
		
		public function __construct ( $name, $address, $products = null )
		{
			$this->name = $name;
			$this->address = $address;
			if ( $products ) {
				$this->products[] = $products;
			}
		}
		
		public function add_product( $product )
		{
			$this->products[] = $product;
		}
		
		public function remove_product( $product )
		{
			$index = array_search( $product, $this->products );

			if ( $index ) {
				unset( $this->products[ $index ] );
			}
		}
		
		public function get_products()
		{
			return $this->products;
		}
	}