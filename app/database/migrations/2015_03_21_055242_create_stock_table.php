<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stocks', function(Blueprint $table)
		{
			$table->integer('invoice_id');		
			$table->integer('category_id');
			$table->integer('subcategory_id');
			$table->integer('product_id');
			$table->integer('quantity');
			$table->integer('price');
			$table->string('purchase_date');
			$table->integer('total_amount');
			$table->integer('paid_amount');
			$table->integer('due_amount');
			$table->string('note');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('stocks');
	}

}
