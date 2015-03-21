<?php

class Stock extends \Eloquent {
	protected $fillable = [];

	protected $table = 'stocks';

	public static function getStock($stocks){

            $stocks->invoice_id  = $stocks['invoice_id'];
            $stocks->category_id  = $stocks['category_id'];
            $stocks->subcategory_id  = $stocks['subcategory_id'];
            $stocks->product_id  = $stocks['product_id'];
            $stocks->quantity  = $stocks['quantity'];
            $stocks->purchase_price  = $stocks['purchase_price'];
            $stocks->purchase_date  = $stocks['purchase_date'];
            $stocks->total_amount  = $stocks['total_amount'];
            $stocks->due_amount = $stocks['due_amount'];
            $stocks->paid_amount  = $stocks['paid_amount'];
            $stocks->note  = $stocks['note'];

            $stocks->save();
	}
}