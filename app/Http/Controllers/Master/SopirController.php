<?php namespace App\Http\Controllers\Master;

class SopirController extends \App\Http\Controllers\Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return view('master.sopir.index');
	}
        
        function getNew(){
            return view('master.sopir.new');
        }
        
        function postNew(){
            return \Redirect::to('master/sopir');
        }
        
        function getEdit($id){
            return view('master.sopir.edit');
        }
        
        function postEdit(){
            return \Redirect::to('master/sopir');
        }

}
