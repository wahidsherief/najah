<?php

class ClientController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the inputs
        $clients = Client::all();
        $category = Category::all();


        // load the view and pass the inputs
        return View::make('manage-client')
            ->with('clients', $clients)
            ->with('category', $category);
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
            'category' => 'required|not_in:"Select"',
            'phone_one' => 'required|numeric|min:11',
            'phone_second' => 'numeric|min:11',
            'address' => 'required|min:10'
        );

        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('manage-client')
                ->withErrors($validator)
                ->withInput();
        } else {
            // store
            $clients = new Client;
            $clients->name  = Input::get('name');
            $clients->category  = Input::get('category');
            $clients->phone_main  = Input::get('phone_one');
            $clients->phone_optional  = Input::get('phone_second');
            $clients->address  = Input::get('address');
            
           	Client::getClient($clients);

            // redirect
            Session::flash('alert-success', 'Client Added Successfully !');
            return Redirect::to('manage-client');
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
