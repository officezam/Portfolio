<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use App\User;
use Intervention\Image;

class MemberController extends Controller
{

	public function saveMember(Request $request){

		$validatedData = $request->validate([
			'first_name' => 'required|string|max:255',
			'last_name' => 'required|string|max:255',
			'email' => 'required|string|email|max:255|unique:users',
			'phone' => 'required',
			'dob' => 'required',
			'expiration_date' => 'required',
			'postalcode' => 'required',
			'profile_image' => 'required|image',
			'password'  =>  'required|min:6',
			'cpassword'  =>  'required|same:password',

		]);
		if ($request->hasFile('profile_image')) {
			$file = $request->profile_image;
			$filename  = $request->first_name.$request->last_name.time() . '.' . $file->getClientOriginalExtension();
			$path = public_path('profilepics/' . $filename);
			\Image::make($file->getRealPath())->resize(90, 90)->save($path);
		}
		$userSaved = User::create([
			'first_name' => $request->first_name,
			'last_name' => $request->last_name,
			'username' => $request->first_name.$request->last_name,
			'date_of_birth' => $request->dob,
			'type' => 'subuser',
			'phone' => $request->phone,
			'created_by' => Auth()->id(),
			'verify' => '1',
			'address' => $request->address,
			'email' => $request->email,
			'password' => bcrypt($request->password),
			'remember_token' => $request->_token,
			'profile_image' => $filename,
		]);

		$id = $userSaved->id;
		return redirect()->route('showemployee');

		dd($request);

	}
}
