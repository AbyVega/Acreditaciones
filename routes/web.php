<?php
Route::get(' / ','Controller@index');

Route::resource('acreditacion','acreditacionContrl');

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

Route::resource('Ciees','CieesContrl');


Route::resource('Fortaleza', 'FortalezaContrl');

Route::resource('Oportunidad', 'OportunidadContrl');

Route::get('Guia/{id}',['as' => 'Guia.mostrarGuia', 'uses' => 'Indica12Contrl@mostrarGuia']);

Route::resource('Cat1','Cat1Contrl');
Route::resource('Cat11','Cat11Contrl');
Route::resource('Indica11','Indica11Contrl');
Route::resource('Indica12', 'Indica12Contrl');
Route::resource('Cat2','Cat2Contrl');
Route::resource('Cat21','Cat21Contrl');


Route::resource('Cat3','Cat3Contrl');
Route::resource('Cat31','Cat31Contrl');
Route::resource('Indica31','Indica31Contrl');
Route::resource('Indica32','Indica32Contrl');
Route::resource('Cat32','Cat32Contrl');

Route::resource('Cat4','Cat4Contrl');
Route::resource('Cat41','Cat41Contrl');

Route::resource('Cat5','Cat5Contrl');
Route::resource('Cat51','Cat51Contrl');
Route::resource('Cat52','Cat52Contrl');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('auth/logout', 'Auth\LoginController@logout')->name('logout');