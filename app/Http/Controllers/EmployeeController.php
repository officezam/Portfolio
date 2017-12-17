<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use App\User;
use Intervention\Image;
use App\Http\Controllers\DashboardController;

class EmployeeController extends Controller
{

	public function __construct()
	{
		$this->dashboard = new DashboardController();
	}

	/*Save New Employee */
	public function saveEmployee(Request $request)
	{
		if ($request->hasFile('profile_image')) {
			$file = $request->profile_image;
			$filename  = $request->first_name.$request->last_name.time() . '.' . $file->getClientOriginalExtension();
			$path = public_path('profilepics/' . $filename);
			\Image::make($file->getRealPath())->resize(90, 90)->save($path);
		}

		$validatedData = $request->validate([
			'first_name' => 'required|string|max:255',
			'email' => 'required|string|email|max:255|unique:users',
			'password' => 'required|string|min:6',
		]);
		User::create([
			'first_name' => $request->first_name,
			'last_name' => $request->last_name,
			'username' => $request->first_name.$request->last_name,
			'date_of_birth' => '1993-02-15',
			'type' => 'subuser',
			'phone' => $request->phone,
			'created_by' => Auth()->id(),
			'verify' => '1',
			'postalcode' => '60000',
			'total_members' => '1',
			'total_price' => '1',
			'membership_number' => '1',
			'expiration_date' => '1993-02-15',
			'address' => $request->address,
			'email' => $request->email,
			'password' => bcrypt($request->password),
			'remember_token' => $request->_token,
			'profile_image' => $filename,
		]);
		return redirect()->route('showemployee');
	}


	/*Show All Sub User of Super User
	*/
	public function showEmployee(){

		$employee = User::where('created_by', Auth()->id())
		                ->where('type', '!=','admin')
		                ->where('type', '!=','superuser')->get();
		return view('backend.user.showemployee',compact('employee'));
	}

	/*Delete Employee
	*/
	public function deletUser($empId){
		User::find($empId)->delete();
		return redirect()->route('showemployee');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param \App\EmployeeController
	 * @return \Illuminate\Http\Response
	 * @internal param int $id
	 */
	public function edit( $id )
	{
		$employee = User::find($id);
		return view('backend.user.editemployeeform' ,compact('employee'));
	}

	/*Save New Employee */
	public function update(Request $request)
	{

		$validatedData = $request->validate([
			'first_name' => 'required|string|max:255',
			'email' => 'required|string|email|max:255',
			//'password' => 'required|string|min:6',
		]);

		$imageName = '';
		if ($request->hasFile('profile_image')) {
			$file = $request->profile_image;
			$imageName  = $request->first_name.$request->last_name.time() . '.' . $file->getClientOriginalExtension();
			$path = public_path('profilepics/' . $imageName);
			\Image::make($file->getRealPath())->resize(90, 90)->save($path);
			$this->dashboard->destroy(public_path('profilepics/'.$request->old_image));
		}
		User::where('id', $request->id)
		    ->update([
			    'first_name'  => $request->first_name,
			    'last_name'  => $request->last_name,
			    'email' => $request->email,
			    'phone' => $request->phone,
			    'address' => $request->address,
			    'profile_image' =>  (($imageName == '') ? $request->old_image:$imageName)]);
		if($request->password){
			User::where('id', $request->id)
			    ->update(['password' => bcrypt($request->password)]);
		}
		// set success message
		$request->session()->flash( 'alert-success', 'Content has been updated successfully!' );

		return redirect()->route('showemployee');
	}





}
