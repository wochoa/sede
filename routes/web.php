<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('inicio');
// });
// Route::view('/','inicio')->name('inicio');
Route::get('storage/notas-prensa/{file}', function ($file) {

	$rutaDeArchivo = storage_path() . '/app/public/notas-prensa/' . $file;
	//return $rutaDeArchivo;
	return response()->file($rutaDeArchivo);
});

Route::get('/','noticias@index');
Route::get('/noticias/{id}','noticias@show');
Route::get('/allnoticias','noticias@todo');// pagina de registro de pases devuelta a casa
route::get('/visitas','paginadiversa@visitas')->name('visitas');
Route::get('/lnormatividad/{textno}/{anio}','normatividad@index');// pagina de sugerenecias
Route::get('/lconvocatorias','paginadiversa@convocatoria');// pagina de sugerenecias
Route::get('/lfag','paginadiversa@fag');// pagina de sugerenecias 
Route::view('/link_denuncias','conte_denuncias')->name('conte_denuncias');// para denuncias y quejas PARA OCI denunca.blade.php
Route::view('/reclamaciones','libroreclamacion')->name('libroreclamacion');// libro reclamaciones
route::view('/logo','logo');
route::view('/lautoridades','autoridades');//
route::view('/organigrama','organigrama');
Route::get('/ldirectorio','paginadiversa@directorio')->name('directorio');
route::get('/dependencias','paginadiversa@dependencias')->name('dependencias');
route::get('/dependencias/{id}','paginadiversa@dependenciasid')->name('dependenciasid');



Route::view('/lsugerencias','sugerencias')->name('sugerencias');// pagina de sugerenecias
Route::get('/anuncios','paginadiversa@anuncios')->name('anuncios');// pagina de sugerenecias


route::get('/listamenus','paginadiversa@listamenus')->name('listamenus');
route::get('/listasubmenu','paginadiversa@listasubmenu')->name('listasubmenu');
route::get('/tema','paginadiversa@tema')->name('tema');


route::get('/pagina/{id}','paginadiversa@verpagina')->name('pagina');


Route::get('/oficial', function () {
	return redirect('/');
	 });
	
	Route::get('/oficial/index.php?tp=1', function () {
	return redirect('/');
	 });
	
	Route::get('/portal', function () {
	return redirect('http://www2.regionhuanuco.gob.pe');
	 });
	
	Route::get('/debate',function () {
	return redirect('http://www2.regionhuanuco.gob.pe/debate/');
	 });
	 
	 Route::get('/oficial/visitas.php',function(){
		return redirect('http://www.regionhuanuco.gob.pe/visitas');
	 });

	 