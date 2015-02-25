<?php

class Category extends \Eloquent {
	//protected $fillable = [];

	protected $table = 'categories';

	public function getCategory($category){

		$category->category = $category['category'];
		$category->save();

	}
}