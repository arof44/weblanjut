  
<?php




// Route::get('/hello', 'WelcomeController@hello');

/*Route::get('/', function() {
	return view ('welcome');
});*/

Route::get('/', 'HomeController@index');

Route::get('/article', 'Home1Controller@index');

Route::get('/home', 'HomeController@index'); 

Route::get('/about', 'AboutController@index');

Route::get('/article/{id}', 'ArticleController@index');

//Route::get('/article/1', 'ArticleController@index1');

//Route::get('/article/2', 'ArticleController@index2');

//Route::get('/article/3', 'ArticleController@index3');

//Route::get('/service', 'ServiceController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
