<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use App\User;

class EmployeeController extends Controller
{


	/*Save New Employee */
	public function saveEmployee(Request $request)
	{
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
			'address' => $request->address,
			'email' => $request->email,
			'password' => bcrypt($request->password),
			'remember_token' => $request->_token,
		]);
		return redirect()->route('showemployee');
	}


	/*Show All Sub User of Super User
	*/
	public function showEmployee(){
		$employee = User::where('created_by', Auth()->id())->get();
		return view('backend.user.showemployee',compact('employee'));
	}



}
