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


Auth::routes();


use Symfony\Component\Console\Output\BufferedOutput;

Route::get('/test', function()
{
    $output = new BufferedOutput;

    Artisan::call('route:list', array(), $output);

    return '<pre>'. $output->fetch();
});

Route::group(['prefix'=>'user', 'middleware'=>'auth'], function(){


  Route::get('/', 'UserDashboardController@index');
  Route::get('courses', 'UserDashboardController@courses')->name('user.courses');
  Route::get('profile', 'UserDashboardController@profile')->name('user.profile');
  Route::get('history', 'UserDashboardController@history')->name('user.history');
  Route::get('settings', 'UserDashboardController@settings')->name('user.settings');
  Route::get('help', 'UserDashboardController@help')->name('user.help');
  Route::get('wishlist', 'UserDashboardController@wishlist')->name('user.wishlist');
  Route::get('messages', 'UserDashboardController@messages')->name('user.messages');



});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/courses/{category_slug?}', 'CoursesController@courses')->name('courses');
Route::get('/{course_slug?}', 'CoursesController@show')->name('course');




Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){
Route::resource('sections', 'SectionController');
Route::resource('lessons', 'LessonController');
Route::resource('courses', 'CourseController');
Route::resource('categories', 'CategoryController');
Route::resource('users', 'UserController');
Route::get('lessons/create/{section_slug}', 'LessonController@create');
Route::get('/', 'DashboardController@index');

// used show() method instead
//Route::get('categories/courses/{category_id}', 'CategoryController@viewCourses');
//Route::get('courses/sections/{course_id}', 'CourseController@viewSections');
//Route::get('lessons/create/{section_id}', 'LessonController@create');

});
