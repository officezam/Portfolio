<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

	/*
	 * Deletew files Common Method
	 * */
	public function destroy($filePath)
	{
		\File::delete($filePath);
	}
}
