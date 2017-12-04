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

}
