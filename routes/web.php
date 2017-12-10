<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::group(array('prefix' => 'backend'), function ()
{
	Auth::routes();
	Route::get( '/', function () {return view( 'auth.login' );	} );

	Route::group(['middleware' => ['auth']], function() {

		Route::get( 'dashboard', function (){return view( 'backend.dashboard' ); });

		Route::post( 'save-employee', 'EmployeeController@saveEmployee' )->name( 'save-employee' );
		Route::get( 'add-employee', function () {return view( 'backend.user.addemployeeform' );})->name( 'addemployee' );
		Route::get( 'show-employee', 'EmployeeController@showEmployee' )->name( 'showemployee' );
		Route::get( 'delete-user/{user_id}', 'EmployeeController@deletUser' )->name( 'delete-user-data' );
		Route::get( 'Edit-User/{user_id}', 'EmployeeController@EditUser' )->name( 'edit-user-data' );

		Route::get( 'add-member', function () {return view( 'backend.Members.addemember' );})->name( 'add-member-form' );
		Route::post( 'save-member', 'MemberController@saveMember' )->name( 'save-member' );
		Route::get( 'show-member', 'MemberController@showMember' )->name( 'showmember' );
		Route::get( 'delete-member/{user_id}', 'MemberController@deletMember' )->name( 'delete-member-data' );

	/*
	* Slider Page Route
	 */
		Route::get( 'slider', 'SliderController@index' )->name( 'slider' );
		Route::get( 'add-slider', 'SliderController@addSlider' )->name( 'add-slider' );
		Route::post( 'save_slider', 'SliderController@store' )->name( 'save_slider' );
		Route::get( 'slider/{customer}/delete', 'SliderController@destroy' );


	/*
	* Services Page Route
	*/
		Route::get( 'service', 'ServicesController@index' )->name( 'service' );
		Route::get( 'add-service', 'ServicesController@addService' )->name( 'add-service' );
		Route::post( 'save-service', 'ServicesController@store' )->name( 'save_service' );
		Route::get( 'service/{service_id}/delete', 'ServicesController@destroy' );
		Route::get( 'service/{service_id}/edit', 'ServicesController@edit' );
		Route::post( 'service/update-service', 'ServicesController@update' )->name( 'update_service' );

		/*
	* Portfolio Page Route
	*/
		Route::get( 'portfolio', 'PortfolioController@index' )->name( 'portfolio' );
		Route::get( 'add-portfolio', 'PortfolioController@addService' )->name( 'add-portfolio' );
		Route::post( 'save-portfolio', 'PortfolioController@store' )->name( 'save_portfolio' );
		Route::get( 'portfolio/{portfolio_id}/delete', 'PortfolioController@destroy' );
		Route::get( 'portfolio/{portfolio_id}/edit', 'PortfolioController@edit' );
		Route::post( 'portfolio/update-portfolio', 'PortfolioController@update' )->name( 'update_portfolio' );



	});

});

Route::get('/', 'HomeController@index');
Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/blog/name', 'HomeController@blogDetail')->name('blog_detail');




