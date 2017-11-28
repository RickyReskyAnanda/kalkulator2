<?php

//---- content inti---
Route::get('/', 'Homepage\HomeController@index');

Route::get('s', 'Homepage\HomeController@search');
	Route::post('s/data', 'Homepage\HomeController@dataSearch');
Route::get('promo', function(){return 'hello';});

Route::get('room/{name}.{id}','Homepage\HomeController@roomDetail');

/*sementara*/
Route::get('hahaha','Homepage\HomeController@input');
Route::get('hehehe','Homepage\HomeController@output');

//---- content reservasi---
Route::get('reservasi/cek','Homepage\HomeController@reservationCheck');
Route::get('reservasi/status','Homepage\HomeController@reservationStatus');

//---- content tambahan---
Route::get('bantuan','Homepage\HomeController@help');
Route::get('tentang-kami','Homepage\HomeController@about');
Route::get('cara-pesan','Homepage\HomeController@howToBook');
Route::get('kebijakan-privasi', function(){return 'hello';});
Route::get('syarat-ketentuan','Homepage\HomeController@termCondition');
Route::get('jadi-partner','Homepage\HomeController@beAPartner');
	Route::post('jadi-partner','Homepage\HomeController@postPartner');
Route::get('bisnis', function(){return 'hello';});

Route::get('blog','Blog\HomeController@home');
Route::get('blog/{title}.{id}','Blog\HomeController@detail');

/*-------
 * BACKWEB
 *-------
 **/
Route::prefix('adminpanel')->group(function () {
	Route::get('/', 'Authbackweb\LoginController@getAdminLogin');
	Route::post('/', 'Authbackweb\LoginController@adminAuth');
	// Route::get('logout', 'Authbackweb\LoginController@logout');

	// Route::group(['middleware' => ['admin']], function () {
		
		Route::namespace('Adminpanel')->group(function () {
			
			Route::get('dashboard', 'DashboardController@viewDashboard');
			Route::get('profil', 'DashboardController@viewProfil');

			Route::prefix('mitra')->group(function () {
				Route::get('', 'MitraController@viewIndex');
					//->
					Route::get('list/data','MitraController@getListMitra');
				// Route::get('add', 'MitraController@viewAdd');
				// Route::get('edit', 'MitraController@viewEdit');
				Route::get('detail/{id}', 'MitraController@viewDetail');
			});
			// Route::prefix('tempat')->group(function () {
			// 	Route::get('data', 'MitraAdminController@getTempat');
			// 	Route::get('tambah/{id}', 'MitraAdminController@viewTambahTempat');
			// 	Route::get('detail/{id}', 'MitraAdminController@viewDetailTempat');
			// });

			// Route::prefix('admin')->group(function () {
			// 	Route::get('data', 'MitraAdminController@getTempat');
			// 	Route::get('tambah/{id}', 'MitraAdminController@viewTambahTempat');
			// 	Route::get('detail/{id}', 'MitraAdminController@viewDetailTempat');
			// });
			
			Route::get('register','RegisterController@index');
			Route::get('setting','SettingController@viewSetting');

			Route::get('manajemen-user','ManajemenUserController@viewManajemenUser');
			Route::get('manajemen-user/tambah','ManajemenUserController@viewAddUser');
			Route::get('manajemen-user/edit','ManajemenUserController@viewEditUser');
			Route::get('manajemen-user/hapus','ManajemenUserController@viewDeleteUser');
		});
	// });
});

/* admin venue */
Route::prefix('vendor')->group(function () {
	Route::namespace('AdminVendor')->group(function () {
		Route::get('/', 'LoginController@getIndex');
		Route::post('/', 'LoginController@VendorAuth');
		Route::get('logout', 'LoginController@logout');

		Route::get('dashboard', 'DashboardController@viewIndex');

		Route::get('order', 'OrderController@viewIndex');


		Route::get('venue', 'VenueController@viewIndex');

		
		Route::get('room', 'RoomController@viewIndex');
		Route::get('room/{id}', 'RoomController@viewDetail');
		// Route::prefix('r/edit')->group(function(){
		// 	Route::get('{rule}/{id}', 'RoomController@getEdit');
		// 	Route::post('detail/{id}', 'RoomController@updateDetail');
		// 	Route::post('price/{id}', 'RoomController@updatePrice');
		// 	Route::post('function/{id}', 'RoomController@updateFunction');
		// 	Route::post('facility/{id}', 'RoomController@updateFacility');
		// 	Route::post('operational/{id}', 'RoomController@updateOperational');
		// 	Route::post('rules/{id}', 'RoomController@updateRules');
		// 	Route::post('access/{id}', 'RoomController@updateAccess');
		// 	Route::post('description/{id}', 'RoomController@updateDescription');
		// });
		// Route::prefix('r/add')->group(function () {
		// 	Route::get('{rule}/{id}', 'RoomController@getAdd');
		// 	Route::post('rules/{id}', 'RoomController@addRules');
		// });
		Route::prefix('package')->group(function () {
			Route::get('/', 'PackageController@viewIndex');
			Route::get('add', 'PackageController@viewAdd');
			Route::get('update', 'PackageController@viewUpdate');
			// Route::post('create', 'PackageController@create');
			// Route::post('delete', 'PackageController@delete');

			Route::get('/{id}', 'PackageController@viewDetail');
			// Route::prefix('detail')->group(function () {
			// 	Route::post('create/{id}/{kind}', 'PackageController@createDetail');
			// });
		});

		// //profile
		// Route::get('profile', 'ProfileController@getIndex');
	});
});
Route::get('mail', 'Mail\MailController@index');
Route::get('regency', 'Region\RegionController@regency');





/*page testing*/
Route::get('/testing', 'Homepage\HomeController@testing');
