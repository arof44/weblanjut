  
<?php

// Route::get('/hello', 'WelcomeController@hello');

Route::get('/', function() {
	return view ('welcome');
});

//Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index');

Route::get('/home', 'HomeController@index')->name('home'); 

Route::get('/article', 'Home1Controller@index');

//article
Route::get('/managearticle', 'ManageArticleController@manage')->name('manage'); //manage arttcle

Route::get('/managearticle/add','ManageArticleController@add'); // add article

Route::post('/managearticle/create','ManageArticleController@create'); //create article

Route::get('/managearticle/edit/{id}','ManageArticleController@edit'); //edit article

Route::post('/managearticle/update/{id}','ManageArticleController@update'); //update article

Route::get('/managearticle/delete/{id}','ManageArticleController@delete'); //delete article

Route::get('/managearticle/cetak_pdf', 'ManageArticleController@cetak_pdf'); //cetak PDF

//----------------
Route::get('/article/{id}', 'ArticleController@index'); //menampilkan article per ID

Route::get('/about','AboutController@comment'); 

Route::get('/about/create','AboutController@create'); //create about

Route::get('/about/add','AboutController@add'); //add about

//user
Route::get('/manageuser','UserController@manageuser'); //manage user

Route::get('/manageuser/add','UserController@add'); // add user

Route::post('/manageuser/create','UserController@create'); // add user

Route::get('/manageuser/edit/{id}','UserController@edit'); //edit user

Route::post('/manageuser/update/{id}','UserController@update'); //update user

Route::get('/manageuser/delete/{id}','UserController@delete'); //delete user

Route::get('/manageuser/cetak_pdf', 'UserController@cetak_pdf'); //cetak PDF

Route::get('/user', 'UserController@index');

//Route::get('/about', 'AboutController@index');

Auth::routes();


