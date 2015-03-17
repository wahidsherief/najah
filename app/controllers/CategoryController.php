<?php

class CategoryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the inputs
        $categories = Category::all();

        $cat = $categories;

        // load the view and pass the inputs
        return View::make('manage-category')
            ->with('categories', $categories)
            ->with('cats', $cat);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function storeCategory()
	{
		
        // validate
        // read more on validation at http://laravel.com/docs/validation

        $rules = array(
            'name' => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('manage-category')
                ->withErrors($validator)
                ->withInput();
        } else {
            // store
            $category = new Category;
            $category->category  = Input::get('name');
            
           	Category::getCategory($category);

            // redirect
            Session::flash('alert-success', 'Category Added Successfully !');
            return Redirect::to('manage-category');
        }
	}

	public function storeSubcategory()
	{
		
        // validate
        // read more on validation at http://laravel.com/docs/validation

        $rules = array(
            'category' => 'required',
            'subcategory' => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('manage-category')
                ->withErrors($validator)
                ->withInput();
        } else {
            // store
            $subcategory = new Subcategory;
            $subcategory->category_id  = Input::get('category');
            $subcategory->subcategory  = Input::get('subcategory');
            
           	Subcategory::getSubcategory($subcategory);

            // redirect
            Session::flash('alert-success', 'Subcategory Added Successfully !');
            return Redirect::to('manage-category');
        }
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function deleteCategory()
	{
		$deleteArray = Input::get('deleteArray');

		$array = explode(',',$deleteArray[0]);
		$length = count($array);

		if($array[0] == 0)
		{
			for($i=0; $i<$length; $i++)
			{
				Category::destroy($array[$i]);
				Subcategory::where('category_id', '=', $array[$i])->delete();
			}

			Session::flash('alert-success', 'Category Deleted Successfully !');
            return Redirect::to('manage-category');
		}

		else
		{
			for($i=0; $i<$length; $i++)
			{
				Subcategory::destroy($array[$i]);			
			}

			Session::flash('alert-success', 'Subcategory deleted Successfully !');
            return Redirect::to('manage-category');
		}
	}


}
