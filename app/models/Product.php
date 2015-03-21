<?php

class Product extends \Eloquent {
	protected $fillable = [];

	protected $table = 'products';

	public static function getProduct($products){

        	$products->name  = $products['name'];
                $products->description  = $products['description'];
                $products->category_id  = $products['category_id'];
                $products->subcategory_id  = $products['subcategory_id'];
                $products->sku  = $products['sku'];
                $products->status  = $products['status'];

                $products->save();
	}
}