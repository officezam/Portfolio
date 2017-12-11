<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;

class PortfolioController extends Controller
{
	public function __construct() {

		$this->portfolio = new Portfolio();
	}

	/*
	 * Show Services page
	*/
	public function index()
	{
		$Date  = $this->portfolio->get();
		$counter  = 0;
		return view('backend.portfolio.portfolio' , compact('Date', 'counter'));
	}

	/**
	 * Add Service page View
	 */
	public function addService(){
		return view('backend.portfolio.add_portfolio' );
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
			'description' => 'required',
		] );
		// insert

		if ($request->hasFile('icon')) {
			$file = $request->icon;
			$filename  = time() . '.' . $file->getClientOriginalExtension();
			$thumnail = public_path('portfolio/thumbnail/' . $filename);
			\Image::make($file->getRealPath())->resize(659, 350)->save($thumnail);
			$fullsize = public_path('portfolio/fullsize/' . $filename);
			\Image::make($file->getRealPath())->resize(650, 350)->save($fullsize);
		}


		$this->portfolio->title       = $request->title;
		$this->portfolio->icon        = $filename;
		$this->portfolio->short_desc  = $request->short_desc;
		$this->portfolio->description = $request->description;
		$this->portfolio->save();
		// set success message
		$request->session()->flash( 'alert-success', 'Content has been saved successfully!' );

		// redirect back
		return redirect()->back();
	}

	public function destroy($id){
		$portfolio = $this->portfolio->find($id);
		$portfolio->delete();
		// set success message
		\Request::session()->flash('alert-success', 'Service has been deleted successfully!');

		// redirect back
		return redirect('backend/portfolio');
	}


	public function edit($id){
		$portfolio = $this->portfolio->find($id);
		return view('backend.portfolio.edit_portfolio', compact('portfolio'));
	}
	/*
	 * Service Save
	 * */
	public function update(Request $request)
	{
		// place for validation
		$this->validate( $request, [
			'title'       => 'required',
			//'icon'       => 'required',
			'short_desc'       => 'required',
			'description' => 'required',
		] );

		$filename = '';
		if ($request->hasFile('icon')) {
			$file = $request->icon;
			$filename  = time() . '.' . $file->getClientOriginalExtension();
			$thumnail = public_path('portfolio/thumbnail/' . $filename);
			\Image::make($file->getRealPath())->resize(659, 350)->save($thumnail);
			$fullsize = public_path('portfolio/fullsize/' . $filename);
			\Image::make($file->getRealPath())->resize(650, 350)->save($fullsize);
		}
		// update
		$this->portfolio->where('id', $request->id)
		        ->update(['title'  => $request->title,'icon' => (($filename == '') ? $request->icon_old:$filename),'description' => $request->description,'short_desc' => $request->short_desc]);
		// set success message
		$request->session()->flash( 'alert-success', 'Content has been updated successfully!' );

		// redirect back
		return redirect(route('portfolio'));
	}
}
