<?php

class ProductController extends \BaseController {

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

        // load the view and pass the inputs
        return View::make('add-product')
            ->with('category', $categories)
            ->with('subcategory', $subcategories);
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
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required|not_in:"Select"',
            'subcategory_id' => 'required|not_in:"Select"',
            'sku' => 'required',
            'status' => 'required|not_in:"Select"'
        );

        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('add-product')
                ->withErrors($validator)
                ->withInput();
        } else {
            // store
            $products = new Product;
            $products->name  = Input::get('name');
            $products->description  = Input::get('description');
            $products->category_id  = Input::get('category_id');
            $products->subcategory_id  = Input::get('subcategory_id');
            $products->sku  = Input::get('sku');
            $products->status  = Input::get('status');
            
           	Product::getProduct($products);

            // redirect
            Session::flash('alert-success', 'Product Added Successfully !');
            return Redirect::to('add-product');
        }
	}



	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function viewProduct()
	{
		// get all the inputs
        $products = Product::all();

        // load the view and pass the inputs
        return View::make('view-product')
            ->with('products', $products);
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
