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
// ================================= START CLIENT ==============================================================


Route::group(['middleware' => [ 'web']], function () {

    // Page Routes
    Route::get('/', 'Client\MainController@index')->name('index');
    Route::get('/contacts', 'Client\ContactController@contacts')->name('contacts');
    Route::get('/about', 'Client\AboutController@about')->name('about');



    Route::group(['prefix' => 'posts'], function (){
        Route::get('/', 'Client\PostController@postList')->name('post_list');
        Route::get('/{slug}', 'Client\PostController@postSingle')->name('post_single');
        Route::get('/tag/{tag}', 'Client\PostController@tag')->name('tag');
        Route::get('/category/{category}', 'Client\PostController@category')->name('category');
    });


});


// ================================= END CLIENT ==============================================================

// ================================= ADMIN ===============================================================

Route::group(['middleware' => ['web', 'auth'], 'prefix' => 'dashboard'], function () {
    Route::get('/', 'Admin\MainController@index')->name('admin_index');


    Route::group(['prefix' => 'categories'], function () {
        Route::get('/{language_code}', 'Admin\CategoryController@listCategories')->name('admin_categories');
        Route::post('/{language_id}/add', 'Admin\CategoryController@add')->name('admin_categories_add');
        Route::post('/{category}/update', 'Admin\CategoryController@update')->name('admin_categories_update');
        Route::post('/{category}/delete', 'Admin\CategoryController@delete')->name('admin_categories_delete');
    });

//    menu and sub menu root section start

    Route::group(['prefix' => 'menus'], function () {
        Route::get('/', 'Admin\MenuController@show')->name('admin_menu');
        Route::post('/add', 'Admin\MenuController@add')->name('admin_menu_add');
        Route::get('/{menu}/edit', 'Admin\MenuController@edit')->name('admin_menu_edit');
        Route::post('/{menu}/update', 'Admin\MenuController@update')->name('admin_menu_update');
        Route::post('/{menu}/delete', 'Admin\MenuController@delete')->name('admin_menu_delete');
    });

    Route::group(['prefix' => 'sub-menus'], function () {
        Route::get('/', 'Admin\SubMenuController@show')->name('admin_sub_menu');
        Route::post('/add', 'Admin\SubMenuController@add')->name('admin_sub_menu_add');
        Route::get('/{subMenu}/edit', 'Admin\SubMenuController@edit')->name('admin_sub_menu_edit');
        Route::post('/{subMenu}/update', 'Admin\SubMenuController@update')->name('admin_sub_menu_update');
        Route::post('/{subMenu}/delete', 'Admin\SubMenuController@delete')->name('admin_sub_menu_delete');
    });

//    menu and sub menu root section ends

    Route::group(['prefix' => 'facility'], function () {
        Route::get('/', 'Admin\FacilityController@show')->name('admin_facility');
        Route::post('/add', 'Admin\FacilityController@add')->name('admin_facility_add');
        Route::get('/{facility}/edit', 'Admin\FacilityController@edit')->name('admin_facility_edit');
        Route::post('/{facility}/update', 'Admin\FacilityController@update')->name('admin_facility_update');
        Route::post('/{facility}/delete', 'Admin\FacilityController@delete')->name('admin_facility_delete');
    });

    Route::group(['prefix' => 'slider'], function () {
        Route::get('/', 'Admin\SliderController@listSlides')->name('admin_slider');
        Route::post('/add', 'Admin\SliderController@add')->name('admin_slider_add');
        Route::post('/{slider}/update', 'Admin\SliderController@update')->name('admin_slider_update');
        Route::post('/{slider}/delete', 'Admin\SliderController@delete')->name('admin_slider_delete');
    });

    Route::group(['prefix' => 'seo'], function () {
        Route::get('/', 'Admin\SeoController@show')->name('admin_seo');
        Route::post('/add', 'Admin\SeoController@add')->name('admin_seo_add');
        Route::post('/{seo}/update', 'Admin\SeoController@update')->name('admin_seo_update');
        Route::post('/{seo}/delete', 'Admin\SeoController@delete')->name('admin_seo_delete');
    });

//    post and its tags and categories root section starts

    Route::group(['prefix' => 'posts'], function () {
        Route::get('/', 'Admin\PostController@show')->name('admin_posts');
        Route::get('/add-new-post', 'Admin\PostController@newPost')->name('admin_add_new_post');
        Route::post('/add', 'Admin\PostController@add')->name('admin_post_add');
        Route::get('/{post}/edit', 'Admin\PostController@edit')->name('admin_post_edit');
        Route::post('/{post}/update', 'Admin\PostController@update')->name('admin_post_update');
        Route::post('/{post}/delete', 'Admin\PostController@delete')->name('admin_post_delete');
    });

    Route::group(['prefix' => 'tags'], function () {
        Route::get('/', 'Admin\TagController@show')->name('admin_tags');
        Route::post('/add', 'Admin\TagController@add')->name('admin_tag_add');
        Route::get('/{tag}/edit', 'Admin\TagController@edit')->name('admin_tag_edit');
        Route::post('/{tag}/update', 'Admin\TagController@update')->name('admin_tag_update');
        Route::post('/{tag}/delete', 'Admin\TagController@delete')->name('admin_tag_delete');
    });

    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', 'Admin\CategoryController@show')->name('admin_categories');
        Route::post('/add', 'Admin\CategoryController@add')->name('admin_category_add');
        Route::get('/{category}/edit', 'Admin\CategoryController@edit')->name('admin_category_edit');
        Route::post('/{category}/update', 'Admin\CategoryController@update')->name('admin_category_update');
        Route::post('/{category}/delete', 'Admin\CategoryController@delete')->name('admin_category_delete');
    });


//    posts and its tags and categories root section ends

});

// ================================= END ADMIN ==============================================================


Auth::routes();
