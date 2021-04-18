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

// Route::get('/contactus', function () {
//     return view('contact_us');
// });

Route::resource('contact-us', 'ContactController');
Route::resource('appointment', 'AppointmentController');

Route::get('/terms-conditions', function () {
    return view('terms-conditions');
});


Route::get('/', 'HomeController@index')->name('home');


Route::redirect('/yoga/admin', '/login');

Route::redirect('/home', '/admin');

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::resource('gallery','GalleryController');
    Route::resource('testimonial','TestimonialController');
    Route::post('gallery-delete-image/{gallery}', 'GalleryController@deleteimage')->name('gallery-image-delete');
    Route::resource('blogs','BlogController');
    Route::resource('cms','CmsController');
    Route::resource('appointment', 'AppointmentController');
    Route::post('blog-delete-image/{blog}', 'BlogController@deleteimage')->name('blog-image-delete');
    Route::post('blog-delete-image/{blog}', 'BlogController@deleteimage')->name('blog-image-delete');
    Route::post('cms-delete-image/{cms}', 'CmsController@deleteimage')->name('cms-image-delete');
    Route::post('cms-delete-image2/{cms}', 'CmsController@deleteimage2')->name('cms-image2-delete');
    Route::post('cms-delete-image3/{cms}', 'CmsController@deleteimage3')->name('cms-image3-delete');
    Route::post('cms-delete-image4/{cms}', 'CmsController@deleteimage4')->name('cms-image4-delete');
    Route::post('service-img-delete/{cms}', 'MainServicesController@deleteimage')->name('service-img-delete');
    Route::post('testimonial-delete-image/{testimonial}', 'BlogController@deleteimage')->name('testimonial-image-delete');
    Route::resource('terms-and-conditions','TermsController');
    Route::resource('privacy-policy','PrivacyPolicyController');
    Route::resource('about','AboutUsController');
    Route::resource('setting','SettingController');

    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');

    Route::resource('permissions', 'PermissionsController');

    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');

    Route::resource('roles', 'RolesController');

    Route::resource('newsletters','NewsletterController');

    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');

    Route::resource('users', 'UsersController');

    //Route::delete('products/destroy', 'ProductsController@massDestroy')->name('products.massDestroy');
    Route::delete('packages/destroy', 'PackageController@massDestroy')->name('packages.massDestroy');
    Route::post('package-delete-image/{package}', 'PackageController@deleteimage')->name('package-image-delete');

    //Route::resource('products', 'ProductsController');
    Route::resource('packages', 'PackageController');

    Route::resource('mainservices','MainServicesController');

    Route::resource('contactus','ContactUsController');

    // Lessons
    Route::delete('lessons/destroy', 'LessonsController@massDestroy')->name('lessons.massDestroy');
    Route::resource('lessons', 'LessonsController');

    // School Classes
    Route::delete('school-classes/destroy', 'SchoolClassesController@massDestroy')->name('school-classes.massDestroy');
    Route::resource('school-classes', 'SchoolClassesController');

    Route::get('calendar', 'CalendarController@index')->name('calendar.index');
    
});
Route::post('newsletter/store','NewsletterController@store');