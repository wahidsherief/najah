<?php

class Client extends \Eloquent {
	protected $fillable = [];

	protected $table = 'clients';

	public static function getClient($clients){

		$clients->name = $clients['name'];
		$clients->category_id = $clients['category_id'];
		$clients->phone_main = $clients['phone_main'];
		$clients->phone_optional = $clients['phone_optional'];
		$clients->address = $clients['address'];
		$clients->save();

	}
}