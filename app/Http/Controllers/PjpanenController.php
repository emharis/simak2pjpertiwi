<?php namespace App\Http\Controllers;

class PjpanenController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Pjpanen Controller
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
		return view('pjpanen.index');
	}
        
        function getNew(){
            return view('pjpanen.new');
        }
        
        function getEdit(){
            return view('pjpanen.edit');
        }

}
