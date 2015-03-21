<?php

class Category extends \Eloquent {
	//protected $fillable = [];

	protected $table = 'category';

	public static function getCategory($category){

		$category->category = $category['category'];
		$category->save();
	}
}