<?php


Route::get(
    'cache-clear',
    function () {
        \Artisan::call('config:cache');
        \Artisan::call('cache:clear');
        \Artisan::call('config:clear');
        return 'cleared';
    }
);


Route::get('/packages', function () {
    return view('packages');
});

Route::get('/aboutus', function () {
    return view('about_us');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/single', function () {
    return view('single');
});

Route::get('/contactus', function () {
    return view('contact_us');
});

Route::resource('contact-us', 'ContactController');

Route::get('/terms-conditions', function () {
    return view('terms-conditions');
});


Route::get('/', 'HomeController@index')->name('home');


Route::redirect('/admin', '/login');

Route::redirect('/home', '/admin');

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');

    Route::resource('permissions', 'PermissionsController');

    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');

    Route::resource('roles', 'RolesController');

    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');

    Route::resource('users', 'UsersController');

    Route::delete('products/destroy', 'ProductsController@massDestroy')->name('products.massDestroy');
    Route::delete('packages/destroy', 'PackageController@massDestroy')->name('packages.massDestroy');
    Route::post('package-delete-image/{package}', 'PackageController@deleteimage')->name('package-image-delete');

    Route::resource('products', 'ProductsController');
    Route::resource('packages', 'PackageController');


    // Lessons
    Route::delete('lessons/destroy', 'LessonsController@massDestroy')->name('lessons.massDestroy');
    Route::resource('lessons', 'LessonsController');

    // School Classes
    Route::delete('school-classes/destroy', 'SchoolClassesController@massDestroy')->name('school-classes.massDestroy');
    Route::resource('school-classes', 'SchoolClassesController');

    Route::get('calendar', 'CalendarController@index')->name('calendar.index');
    
});
