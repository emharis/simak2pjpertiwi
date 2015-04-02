<?php namespace App\Http\Controllers;

class PjpupukController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Pjpupuk Controller
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
		return view('pjpupuk.index');
	}
        
        function getNew(){
            return view('pjpupuk.new');
        }
        
        function getEdit(){
            return view('pjpupuk.edit');
        }

}
