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
    Route::get('/contact', 'Client\MainController@contact')->name('contacts');
    Route::get('/about', 'Client\MainController@about')->name('about');
    Route::get('/director', 'Client\MainController@director')->name('director');
    Route::get('/logo', 'Client\MainController@logo')->name('logo');




    Route::group(['prefix' => 'posts'], function (){
        Route::get('/', 'Client\PostController@postList')->name('post_list');
        Route::get('/{slug}', 'Client\PostController@postSingle')->name('post_single');
        Route::get('/tag/{tag}', 'Client\PostController@tag')->name('tag');
        Route::get('/category/{category}', 'Client\PostController@category')->name('category');
    });


    Route::group(['prefix' => 'editions'], function (){
        Route::get('/{subMenu}', 'Client\EditionController@editions')->name('editions_category');
        Route::get('/category/{category}', 'Client\EditionController@edition')->name('editions');
        Route::get('/edition/{slug}', 'Client\EditionController@editionSingle')->name('edition_single');

    });

//    Route::get('download/{filename}', function($filename)
//        {
//            $file = public_path('uploads') . '/' . $filename; // or wherever you have stored your PDF files
//            return response()->download($file);
//        })->name('download');

    Route::get('/download/{file}', 'Client\MainController@downloadFile')->name('download');
    Route::group(['prefix' => 'exams'], function (){
        Route::get('/{subMenu}', 'Client\ExamController@exams')->name('exams');

//        Route::get('/{slug}', 'Client\ExamController@editionSingle')->name('exam_single');
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

    Route::group(['prefix' => 'settings'], function () {
        Route::get('/', 'Admin\SettingController@show')->name('admin_setting');
        Route::post('/add', 'Admin\SettingController@add')->name('admin_setting_add');
        Route::post('/{setting}/update', 'Admin\SettingController@update')->name('admin_setting_update');
        Route::post('/{setting}/delete', 'Admin\SettingController@delete')->name('admin_setting_delete');
    });

    Route::group(['prefix' => 'exams'], function () {
        Route::get('/', 'Admin\ExamController@show')->name('admin_exams');
        Route::get('/add-new-exam', 'Admin\ExamController@newExam')->name('admin_add_new_exam');
        Route::post('/add', 'Admin\ExamController@add')->name('admin_exam_add');
        Route::get('/{exam}/edit', 'Admin\ExamController@edit')->name('admin_exam_edit');
        Route::post('/{exam}/update', 'Admin\ExamController@update')->name('admin_exam_update');
        Route::post('/{exam}/delete', 'Admin\ExamController@delete')->name('admin_exam_delete');
    });

//    edition and its cats

    Route::group(['prefix' => 'editions'], function () {
        Route::get('/', 'Admin\EditionController@show')->name('admin_editions');
        Route::get('/add-new-edition', 'Admin\EditionController@newEdition')->name('admin_add_new_edition');
        Route::post('/add', 'Admin\EditionController@add')->name('admin_edition_add');
        Route::get('/{edition}/edit', 'Admin\EditionController@edit')->name('admin_edition_edit');
        Route::post('/{edition}/update', 'Admin\EditionController@update')->name('admin_edition_update');
        Route::post('/{edition}/delete', 'Admin\EditionController@delete')->name('admin_edition_delete');
    });

    Route::group(['prefix' => 'edition-categories'], function () {
        Route::get('/', 'Admin\EditionCategoryController@show')->name('admin_edition_categories');
        Route::post('/add', 'Admin\EditionCategoryController@add')->name('admin_add_new_edition_category');
        Route::get('/{category}/edit', 'Admin\EditionCategoryController@edit')->name('admin_edition_category_edit');
        Route::post('/{category}/update', 'Admin\EditionCategoryController@update')->name('admin_edition_category_update');
        Route::post('/{category}/delete', 'Admin\EditionCategoryController@delete')->name('admin_edition_category_delete');
    });


//    editions and its cats end


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
