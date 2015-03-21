	<?php

class StockController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the inputs
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $products = Product::all();

        // load the view and pass the inputs
        return View::make('add-stock')
            ->with('category', $categories)
            ->with('subcategory', $subcategories)
            ->with('product', $products);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
        // validate
        // read more on validation at http://laravel.com/docs/validation

        $rules = array(
            'invoice_id' => 'required|integer',
            'category_id' => 'required|not_in:"Select"',
            'subcategory_id' => 'required|not_in:"Select"',
            'product_id' => 'required|not_in:"Select"',
            'quantity' => 'required|integer',
            'purchase_price' => 'required|integer',
            'purchase_date' => 'required',
            'total_amount' => 'required|integer',
            'due_amount' => 'required|integer',
            'paid_amount' => 'required|integer',
            'note' => 'min:10'
        );

        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('add-stock')
                ->withErrors($validator)
                ->withInput();
        } else {
            // store
            $stocks = new Stock;
            $stocks->invoice_id  = Input::get('invoice_id');
            $stocks->category_id  = Input::get('category_id');
            $stocks->subcategory_id  = Input::get('subcategory_id');
            $stocks->product_id  = Input::get('product_id');
            $stocks->quantity  = Input::get('quantity');
            $stocks->purchase_price  = Input::get('purchase_price');
            $stocks->purchase_date  = Input::get('purchase_date');
            $stocks->total_amount  = Input::get('total_amount');
            $stocks->due_amount = Input::get('due_amount');
            $stocks->paid_amount  = Input::get('paid_amount');
            $stocks->note  = Input::get('note');
            
           	Stock::getStock($stocks);

            // redirect
            Session::flash('alert-success', 'Stock Added Successfully !');
            return Redirect::to('add-stock');
        }
	}



	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
