<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\service;

class ServicesController extends Controller
{


   public function __construct() {

   	$this->services = new service();
   }

	/*
	 * Show Services page
	*/
	public function index()
	{
		$serviceDate  = $this->services::get();
		$counter  = 0;
		return view('backend.services.services' , compact('serviceDate', 'counter'));
	}

	/**
	 * Add Service page View
	 */
	public function addService(){
		return view('backend.services.add_service' );
	}

	/*
	 * Service Save
	 * */
	public function store(Request $request)
	{
		// place for validation
		$this->validate( $request, [
			'title'       => 'required',
			'icon'       => 'required',
			'description' => 'required',
		] );
		// insert
		$service              = new service();
		$service->title       = $request->title;
		$service->icon       = $request->icon;
		$service->description = $request->description;
		$service->save();
		// set success message
		$request->session()->flash( 'alert-success', 'Content has been saved successfully!' );

		// redirect back
		return redirect()->back();
	}

	public function destroy($id){
		$user = service::find($id);
		$user->delete();

		// set success message
		\Request::session()->flash('alert-success', 'Service has been deleted successfully!');

		// redirect back
		return redirect('backend/service');
	}
}
