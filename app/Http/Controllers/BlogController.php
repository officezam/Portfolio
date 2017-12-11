<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Http\Controllers\DashboardController;


class BlogController extends Controller
{
	public function __construct() {

		$this->blog = new Blog();
		$this->dashboard = new DashboardController();
	}

	/*
	 * Show Services page
	*/
	public function index()
	{
		$Date  = $this->blog->get();
		$counter  = 0;
		return view('backend.blog.blog' , compact('Date', 'counter'));
	}

	/**
	 * Add Service page View
	 */
	public function addService(){
		return view('backend.blog.add_blog' );
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
			$thumnail = public_path('blog/thumbnail/' . $filename);
			\Image::make($file->getRealPath())->resize(700, 400)->save($thumnail);
			$fullsize = public_path('blog/fullsize/' . $filename);
			\Image::make($file->getRealPath())->resize(900, 433)->save($fullsize);
			$fullsize = public_path('blog/sidebar/' . $filename);
			\Image::make($file->getRealPath())->resize(250, 150)->save($fullsize);
		}

		$this->blog->title       = $request->title;
		$this->blog->icon        = $filename;
		$this->blog->short_desc  = $request->short_desc;
		$this->blog->description = $request->description;
		$this->blog->save();
		// set success message
		$request->session()->flash( 'alert-success', 'Content has been saved successfully!' );

		// redirect back
		return redirect()->back();
	}

	public function destroy($id){
		$blog = $this->blog->find($id);
		$blog->delete();
		// set success message
		\Request::session()->flash('alert-success', 'Service has been deleted successfully!');

		// redirect back
		return redirect('backend/blog');
	}


	public function edit($id){
		$blog = $this->blog->find($id);
		return view('backend.blog.edit_blog', compact('blog'));
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
			$oldFileName =  $request->icon_old;

			$filename  = time() . '.' . $file->getClientOriginalExtension();
			$thumnail = public_path('blog/thumbnail/' . $filename);
			$this->dashboard->destroy(public_path('blog/thumbnail/'.$oldFileName));
			\Image::make($file->getRealPath())->resize(700, 400)->save($thumnail);
			$fullsize = public_path('blog/fullsize/' . $filename);
			$this->dashboard->destroy(public_path('blog/fullsize/'.$oldFileName));
			\Image::make($file->getRealPath())->resize(900, 433)->save($fullsize);
			$fullsize = public_path('blog/sidebar/' . $filename);
			$this->dashboard->destroy(public_path('blog/sidebar/'.$oldFileName));
			\Image::make($file->getRealPath())->resize(250, 150)->save($fullsize);
		}
		// update
		$this->blog->where('id', $request->id)
		                ->update(['title'  => $request->title,'icon' => (($filename == '') ? $request->icon_old:$filename),'description' => $request->description,'short_desc' => $request->short_desc]);
		// set success message
		$request->session()->flash( 'alert-success', 'Content has been updated successfully!' );

		// redirect back
		return redirect(route('backend-blog'));
	}
}
