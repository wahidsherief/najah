<?php

class Subcategory extends \Eloquent {
	//protected $fillable = [];

	protected $table = 'subcategory';


	public static function getSubcategory($subcategory){

		$subcategory->category_id = $subcategory['category_id'];
		$subcategory->subcategory = $subcategory['subcategory'];
		$subcategory->save();

	}

}