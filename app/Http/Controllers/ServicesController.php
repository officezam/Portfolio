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
			'short_desc'       => 'required',
//			'description' => 'required',
		] );
		// insert
		$service              = new service();
		$service->title       = $request->title;
		$service->icon       = $request->icon;
		$service->short_desc       = $request->short_desc;
//		$service->description = '';
		$service->save();
		// set success message
		$request->session()->flash( 'alert-success', 'Content has been saved successfully!' );

		// redirect back
		return redirect()->back();
	}

	public function destroy($id){
		$service = service::find($id);
		$service->delete();

		// set success message
		\Request::session()->flash('alert-success', 'Service has been deleted successfully!');

		// redirect back
		return redirect('backend/service');
	}


	public function edit($id){
		$service = service::find($id);
		return view('backend.services.edit_service', compact('service'));
	}

	public function proposal($id){
		$service = service::find($id);
		return view('backend.services.proposal_service', compact('service'));
	}

	/*
	 * Service Save
	 * */
	public function update(Request $request)
	{
		// place for validation
		$this->validate( $request, [
			'title'       => 'required',
			'icon'       => 'required',
			'short_desc'       => 'required',
//			'description' => 'required',
		] );
		// update
		$service = new service();
		$service->where('id', $request->id)
		->update(['title'  => $request->title,'icon' => $request->icon,'short_desc' => $request->short_desc]);
		// set success message
		$request->session()->flash( 'alert-success', 'Content has been updated successfully!' );

		// redirect back
		return redirect(route('service'));
	}

	/*
	* Service Proposal Save/Update
	* */
	public function updateProposal(Request $request)
	{
		// place for validation
		$this->validate( $request, [
			'description' => 'required',
		] );
		// update
		$service = new service();
		$service->where('id', $request->id)
		        ->update(['description' => $request->description]);
		// set success message
		$request->session()->flash( 'alert-success', 'Content has been updated successfully!' );

		// redirect back
		return redirect(route('service'));
	}


}
