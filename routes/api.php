<?php

use Illuminate\Http\Request;

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('v1')->group(function () {
	// login
	// Route::post('auth/login', 'Authbackweb\LoginController@adminAuth');
	Route::get('auth/logout', 'Authbackweb\LoginController@logout');

	Route::namespace('Api\Secure')->group(function () {
		//region
		Route::prefix('region')->group(function () {
			Route::get('regency/{id}', 'RegionController@getRegency')->where('id', '[0-9]+');
			Route::get('district/{id}', 'RegionController@getDistrict')->where('id', '[0-9]+');
		});

		//Tempat
		Route::get('venue', 'VenueController@getVenue');
		Route::post('venue', 'VenueController@postVenue');
		Route::put('venue/{id}','VenueController@updateVenue');
		Route::delete('venue/{id}','VenueController@destroyVenue');

		//ruangan
		Route::get('room', 'RoomController@getRoom');
		Route::get('room/{id}','RoomController@getDetailRoom');
		Route::post('room','RoomController@postRoom');
		Route::get('room/{room}','RoomController@detailRoom');
		Route::put('room/{room}','RoomController@updateRoom');
		Route::delete('room/{id}','RoomController@destroyRoom');

		//admin account
		Route::get('admin', 'AdminController@getAdmin');
		Route::get('admin/{id}','AdminController@getDetailAdmin');
		Route::post('admin','AdminController@postAdmin');
		// Route::get('admin/{admin}','AdminController@detailAdmin');
		Route::put('admin/{admin}','AdminController@updateAdmin');
		Route::delete('admin/{admin}','AdminController@destroyAdmin');	



	});
});

