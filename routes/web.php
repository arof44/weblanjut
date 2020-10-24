  
<?php




// Route::get('/hello', 'WelcomeController@hello');

/*Route::get('/', function() {
	return view ('welcome');
});*/

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index'); 

Route::get('/article', 'Home1Controller@index');

Route::get('/manage', 'ArticleController@manage')->name('manage');

Route::get('/manage/add','ArticleController@add');

Route::post('/manage/create','ArticleController@create');

Route::get('/manage/edit/{id}','ArticleController@edit');

Route::post('/manage/update/{id}','ArticleController@update');

Route::get('/manage/delete/{id}','ArticleController@delete');

Route::get('/article/{id}', 'ArticleController@index');

Route::get('/about','AboutController@comment');

Route::get('/about/create','AboutController@create');

Route::get('/about/add','AboutController@add');

//Route::get('/about', 'AboutController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
