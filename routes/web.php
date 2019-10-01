<?php

Route::get('/', function(){
    return 'Home';
});

Route::get('/usuarios', 'UserController@index');

Route::get('/usuarios/{id}', 'UserController@show')->where('id', '[0-9]+');

Route::get('/usuarios/nuevo', 'UserController@create');

Route::get('/saludo/{name}/{nickname?}', 'WelcomeUserController');

Route::get('/proveedores', 'ProviderController@index');

Route::get('/operaciones', 'OperationController@index');

Route::get('/operaciones/{opr}/{num1}/{num2}', 'OperationController@operations')->where('num1', '[0-9]+')->where('num2', '[0-9]+');
