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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//Profile routes
Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'PostsController@index');

//Post routes
Route::get('/p/create', 'PostsController@create');
Route::post('/p', 'PostsController@store');
//Route::post('/follow/{user}', function(){
//    return ['success'];
//});
Route::post('/follow/{user}', 'FollowsController@store');
Route::get('p/{post}', 'Postscontroller@show');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
