<?php

Auth::routes();

Route::prefix('cms')->group(function () {

    Route::middleware('guest')->group(function () {

        Route::get('/login', 'Auth\LoginController@showLoginForm');

        Route::post('/login', 'Auth\LoginController@login');
    });

    Route::middleware('auth')->group(function () {

        Route::get('/logout', 'Auth\LoginController@logout')->name('dashboard.logout');

        Route::get('/', 'Back\HomeController@index')->name('admin.home');

        Route::resource('/contactqueries', 'Back\ContactqueriesController');

        Route::resource('/testimonials', 'Back\TestimonialsController');

        Route::resource('/events', 'Back\EventsController');

        Route::get('/get-slug/{title}', function ($title) {
            $result = [
                'slug' => Str::slug($title)
            ];

            return response()->json($result);
        });

        Route::resource('/galleries', 'Back\GalleriesController');

    });

});

Route::get('/','Front\HomeController@index');

Route::get('/gallery','Front\HomeController@gallery')->name('front.gallery');

Route::get('/contact-us', 'Front\HomeController@contactdetails')->name('front.contact');

Route::post('/contact-us','Front\HomeController@store')->name('contact.store');

Route::get('/why-we','Front\HomeController@whywe')->name('about');

Route::get('/who-are-we','Front\HomeController@who')->name('about.who');

Route::get('/mission-and-vision','Front\HomeController@mission')->name('about.mission');

Route::get('/message-from-managing-director','Front\HomeController@message')->name('about.message');

Route::get('training/cabin-crew-training','Front\HomeController@cabincrew')->name('cabincrew');

Route::get('training/airport-ground-handling','Front\HomeController@airport')->name('airport');

Route::get('training/plot-training','Front\HomeController@plot')->name('plot');

Route::get('training/aircraft-maintenance-ngineering','Front\HomeController@aircraft')->name('aircraft');

Route::get('/news-and-notice', 'Front\HomeController@show')->name('events');

Route::get('/event/{slug}', 'Front\HomeController@eventDetail')->name('detailEvents');

Route::get('/faq', 'Front\HomeController@faq')->name('faq');

//Route::get('/home', 'HomeController@index')->name('home');
