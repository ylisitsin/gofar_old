<?php


/*  PAGES  */
Route::get('/',['as' => 'index', 'uses' => 'HomeController@index']);  // Главная

Route::get('/search/flight/{url}',['as'=>'avia', 'uses'=>'AviaSearchController@index'])/*->where('url','[A-Z]{3}[0-9]{4}\-[0-9]{2}\-[0-9]{2}[A-Z]{3}[0-9]{4}\-[0-9]{2}\-[0-9]{2}[0-9]{3}[Y|C]|[A-Z]{3}[0-9]{4}\-[0-9]{2}\-[0-9]{2}[A-Z]{3}[0-9]{3}[Y|C]')*/;  //Поиск авиа билетов

Route::get('/hotel/{url}',['as'=>'hotel', 'uses'=>'HotelSearchController@index'])/*->where('url','[A-Z]{3}[0-9]{4}\-[0-9]{2}\-[0-9]{6}\-[0-9]{2}\-[0-9]{2}[1-4]{1}')*/;


Route::get('/avia/buy/{search_id}/{url}', ['as'=>'avia_red', 'uses'=>'AviaSearchController@buy']);

Route::get('/page/works', function(){
    return view('page.works');
});
Route::get('/page/faq', function(){
    return view('page.faq');
});
Route::get('/page/privacy', function(){
    return view('page.privacy');
});
Route::get('/page/advertising', function(){
    return view('page.advertising');
});



/*
 * TRIP
 */

Route::get('/trip', ['as'=>'trip_index','uses'=>'TripController@index']);
Route::get('/trip/{id}', ['as'=>'trip_show','uses'=>'TripController@show_trip'])->where('id','^[0-9]*');
Route::get('/search/trip', ['as'=>'trip_search','uses'=>'TripController@search_trip']);
/*
 * BLOG
 */

Route::get('/blog' ,['as'=>'blog', 'uses'=>'BlogController@index']);
Route::get('/blog/{id}' ,['as'=>'blog_single', 'uses'=>'BlogController@single'])->where('id','^[0-9]*');
Route::get('/blog/category/{category}',['as'=>'blog_category', 'uses'=>'BlogController@category'])->where('category','[a-яa-zA-ЯA-Z0-9]*');
Route::get('/blog/tag/{tag}',['as'=>'blog_tag', 'uses'=>'BlogController@tag'])->where('tag','^[a-яa-zA-ЯA-Z0-9]*');
/*
 * DASHBOARD
 */
Route::get('/file/{filename}',['as'=>'file','uses'=>'HomeController@file']);

Route::get('/dashboard', ['as'=>'panel','middleware' => 'auth', 'uses'=>'dashboard\DashBoardController@index']);
Route::get('/dashboard/client', ['as'=>'panel','middleware' => 'auth', 'uses'=>'dashboard\DashBoardController@client']);

Route::get('/dashboard/login', function(){
    return view('panel.login');
});
Route::post('/dashboard/login', ['as'=>'login','uses'=>'dashboard\LoginController@login']);
Route::get('/dashboard/logout', ['as'=>'login','uses'=>'dashboard\LoginController@logout']);

Route::get('/dashboard/blog/add', ['middleware' => 'auth', 'uses'=>'BlogController@post_add']);
Route::post('/dashboard/blog/add', ['middleware' => 'auth', 'uses'=>'BlogController@post_add_in_db']);
Route::get('/dashboard/blog/edit/{id}',['middleware' => 'auth', 'uses'=>'BlogController@post_edit']);
Route::post('/dashboard/blog/edit/{id}',['middleware' => 'auth', 'uses'=>'BlogController@post_update']);
Route::get('/dashboard/blog/delete/{id}',['middleware' => 'auth', 'uses'=>'BlogController@post_delete']);

Route::get('/dashboard/blog', ['middleware' => 'auth', 'uses'=>'BlogController@all_post']);

Route::get('/dashboard/trip/add', ['middleware' => 'auth', 'uses'=>'TripController@add_trip_tpl']);
Route::post('/dashboard/trip/add', ['middleware' => 'auth', 'uses'=>'TripController@add_trip']);
Route::get('/dashboard/trip/update/{id}', ['middleware' => 'auth', 'uses'=>'TripController@update_trip_tpl']);
Route::post('/dashboard/trip/update/{id}', ['middleware' => 'auth', 'uses'=>'TripController@update_trip']);

Route::get('/dashboard/trip/all', ['middleware' => 'auth', 'uses'=>'TripController@show_all_trip']);

/* API  */


Route::get('/api/getCity/{id}', ['uses'=>'ApiController@get_city']);
Route::post('/api/search_trip', ['uses'=>'ApiController@search_trip']);

    /*
     * AVIA
     */

    Route::get('/avia/{dist}/{date_from}/{date_to}/{people}/{class}/uuid',['as' => 'avia_search', 'uses' => 'AviaSearchController@uuid']);  //Получение uuid

    Route::post('/avia/{dist}/{date_from}/{people}/{class}/uuid',['as' => 'avia_search', 'uses' => 'AviaSearchController@uuid_to']);  //Получение uuid

    Route::get('/avia/search/{search_id}', ['uses' => 'AviaSearchController@search']);


    /*
     * HOTEL
     */

    Route::post('/hotel/{dist}/{date_from}/{date_to}/{people}/{cur}/searchId',['as' => 'hotel_searchId', 'uses' => 'HotelSearchController@hotel_searchId']);  //Получение searchId

    Route::post('/hotel/{search_id}/{limit}/{offset}/{sortBy}/{sortAsc}/result',['as' => 'hotel_search', 'uses' => 'HotelSearchController@hotel_result']);  //Получение результатов поиска

