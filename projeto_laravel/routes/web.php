<?php
/*  Rota padrão 
	Route::get('/', function () {
    	return view('welcome');
	});
*/

Route::get('/painel/produtos/tests','Painel\ProdutoController@tests');
Route::resource('/painel/produtos','Painel\ProdutoController');

Route::group(['namespace' => 'Site'], function(){

    	Route::get('/', 'SiteController@index');
//        Route::get('/',  function (){
//            return view('welcome');
//        });
	Route::get('/contato', 'SiteController@contato');
        Route::get('/categoria/{id}', 'SiteController@categoria');
	Route::get('/categoria2/{id?}', 'SiteController@categoriaOp');
        
});
