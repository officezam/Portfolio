<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use App\Slider;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\Session\Storage;
use Carbon\Carbon;
use App\Http\Controllers\DashboardController;

class SliderController extends Controller
{

	public function __construct()
	{
		$this->dashboard = new DashboardController();
	}

	/**
	 * Load manage slider page view
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index ()
	{
		//echo 'Controller';
		$SliderDate  = Slider::get();
		$counter  = 0;
		return view('backend.slider.slider' , ['SliderDate' => $SliderDate , 'counter' => $counter]);
	}


	/**
	 * Add Slides page View
	 */
	public function addSlider(){
		return view('backend.slider.add_slider' );
	}


	/**
	 * Update Slider page content
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function store ( Request $request ) {

		// place for validation
		$this->validate( $request, [
			'title'       => 'required',
			'description' => 'required',
			'image'       => 'mimes:jpeg,bmp,png'
		] );
		if ( $request->hasFile( 'image' ) ) {

			$file      = $request->file( 'image' );
			$imageName = time() . '.' . $file->clientExtension();
			$path = public_path() . '/slider/'. $imageName;
			//$file->move( public_path() . '/slider/', $imageName );
			\Image::make($file->getRealPath())->resize(1900, 1267)->save($path);

			// insert
			$slider              = new Slider();
			$slider->title       = $request->title;
			$slider->description = $request->description;
			$slider->image       = $imageName;
			$slider->save();
			// set success message
			$request->session()->flash( 'alert-success', 'Content has been saved successfully!' );

			// redirect back
			return redirect()->back();
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param \App\Slider $slider
	 * @return \Illuminate\Http\Response
	 * @internal param int $id
	 */
	public function edit( $id )
	{
		$slider = Slider::find($id);
		return view('backend.slider.edit_slider' ,compact('slider'));
	}

	/**
	 * Update Slider page content
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function update ( Request $request ) {

		// place for validation
		$this->validate( $request, [
			'title'       => 'required',
			'description' => 'required',
			//'image'       => 'mimes:jpeg,bmp,png'
		] );
		$imageName = '';
		if ( $request->hasFile( 'image' ) ) {

			$file      = $request->file( 'image' );
			$imageName = time() . '.' . $file->clientExtension();
			$path = public_path() . '/slider/'. $imageName;
			//$file->move( public_path() . '/slider/', $imageName );
			\Image::make($file->getRealPath())->resize(1900, 1267)->save($path);
			$this->dashboard->destroy(public_path('slider/'.$request->old_image));

		}
		$slider              = new Slider();
		$slider->where('id', $request->id)
		       ->update(['title'  => $request->title,'description' => $request->description , 'image' =>  (($imageName == '') ? $request->old_image:$imageName)]);
		// set success message
		$request->session()->flash( 'alert-success', 'Content has been updated successfully!' );

		// redirect back
		return redirect(route('slider'));
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param \App\Slider $slider
	 * @return \Illuminate\Http\Response
	 * @internal param int $id
	 */
	public function destroy ( $id )
	{
		$user = Slider::find($id);
		$user->delete();

		// set success message
		\Request::session()->flash('alert-success', 'Slider has been deleted successfully!');

		// redirect back
		return redirect('backend/slider');
	}

}
