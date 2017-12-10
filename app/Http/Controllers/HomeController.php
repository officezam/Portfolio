<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\service;
use App\Portfolio;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
	    $this->slider    = new Slider();
	    $this->service   = new service();
	    $this->portfolio = new Portfolio();
    }

    /**
     * Show the application Home Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    $counter   = 0;
	    $sliders   = $this->slider->get();
	    $services  = $this->service->get();
	    $portfolio = $this->portfolio->get();
	    return view('index', compact('sliders','counter','services','portfolio'));
    }

	/**
	 * Show the application Blog Page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function blog()
	{
		return view('blog');
	}


	/**
	 * Show the application Blog Detail.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function blogDetail()
	{
		return view('blog_detail');
	}



}
