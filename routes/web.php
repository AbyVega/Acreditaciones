<?php
Route::get(' / ','Controller@index');

Route::resource('Index','indexController');

Route::resource('evaluaciones','evaluacionController');

Route::resource('preguntas','preguntaController');

Route::resource('Procesos','repProContrl');

Route::resource('registros','registrosContrl');

Route::resource('ProEdu','PeCntrl');

Route::resource('Entidad','EntidadContrl');

Route::resource('Observacion','ObservacionContrl');

Route::resource('registrarUsuarios', 'regiUsuContrl');

Route::resource('reporteProcesos', 'reporteprocessContrl');

Route::resource('gestion', 'gestProcessCtrl');

Route::resource('Usuarios', 'UsuariosContrl');

Route::resource('Fortaleza', 'FortalezaContrl');

Route::resource('Oportunidad', 'OportunidadContrl');

Route::resource('Indica11','Indica11Contrl');
Route::resource('Indica12', 'Indica12Contrl');

Route::get('Guia/{id}',['as' => 'Guia.mostrarGuia', 'uses' => 'Indica12Contrl@mostrarGuia']);
Route::get('cat1',['as' => 'categoria.categoria1', 'uses' => 'categoriasController@categoria1']);
Route::get('cat11',['as' => 'categoria.categoria11', 'uses' => 'categoriasController@categoria11']);
Route::get('cat2',['as' => 'categoria.categoria2', 'uses' => 'categoriasController@categoria2']);
Route::get('cat21',['as' => 'categoria.categoria21', 'uses' => 'categoriasController@categoria21']);
Route::get('cat3',['as' => 'categoria.categoria3', 'uses' => 'categoriasController@categoria3']);
Route::get('cat31',['as' => 'categoria.categoria31', 'uses' => 'categoriasController@categoria31']);
Route::get('cat32',['as' => 'categoria.categoria32', 'uses' => 'categoriasController@categoria32']);
Route::get('cat4',['as' => 'categoria.categoria4', 'uses' => 'categoriasController@categoria4']);
Route::get('cat41',['as' => 'categoria.categoria41', 'uses' => 'categoriasController@categoria41']);
Route::get('cat5',['as' => 'categoria.categoria5', 'uses' => 'categoriasController@categoria5']);
Route::get('cat51',['as' => 'categoria.categoria51', 'uses' => 'categoriasController@categoria51']);
Route::get('cat52',['as' => 'categoria.categoria52', 'uses' => 'categoriasController@categoria52']);
Route::get('acreditacion',['as' => 'acreditacion.Acreditacion', 'uses' => 'categoriasController@acreditacion']);
Route::get('ciees',['as' => 'ciees.ciees', 'uses' => 'categoriasController@ciees']);


//Route::get('area',['as' => 'area.area', 'uses' => 'categoriasController@area']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('auth/logout', 'Auth\LoginController@logout')->name('logout');