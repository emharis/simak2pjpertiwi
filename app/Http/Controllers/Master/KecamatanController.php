<?php namespace App\Http\Controllers\Master;

class KecamatanController extends \App\Http\Controllers\Controller {

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
		return view('master.kecamatan.index');
	}
        
        function getNew(){
            return view('master.kecamatan.new');
        }
        
        function postNew(){
            return \Redirect::to('master/kecamatan');
        }
        
        function getEdit($id){
            return view('master.kecamatan.edit');
        }
        
        function postEdit(){
            return \Redirect::to('master/kecamatan');
        }

}
