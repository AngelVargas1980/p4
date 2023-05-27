<?php

use app\Http\Controllers\PersonasController;
use app\Http\Controllers\TransporteController;
use app\Http\Controllers\CamionController;
use app\Http\Controllers\PredioController;
use app\Http\Controllers\MercanciaController;
use app\Http\Controllers\TipoMercanciaController;
use app\Http\Controllers\ControladorController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout/home');
});

//Piloto
Route::get('/index', [\App\Http\Controllers\PersonasController::class, 'index'])->name('personas.index');
Route::get('/create', [\App\Http\Controllers\PersonasController::class, 'create'])->name('personas.create');
Route::post('/store', [\App\Http\Controllers\PersonasController::class, 'store'])->name('personas.store');
Route::get('/edit/{id}', [\App\Http\Controllers\PersonasController::class, 'edit'])->name('personas.edit');
Route::put('/update/{id}', [\App\Http\Controllers\PersonasController::class, 'update'])->name('personas.update');
Route::get('/show/{id}', [\App\Http\Controllers\PersonasController::class, 'show'])->name('personas.show');
Route::delete('/destroy/{id}', [\App\Http\Controllers\PersonasController::class, 'destroy'])->name('personas.destroy');

//Transporte
Route::get('/indext', [\App\Http\Controllers\TransporteController::class, 'indext'])->name('transportes.indext');
Route::get('/createt', [\App\Http\Controllers\TransporteController::class, 'createt'])->name('transportes.createt');
Route::post('/storet', [\App\Http\Controllers\TransporteController::class, 'storet'])->name('transportes.storet');
Route::get('/editt/{id}', [\App\Http\Controllers\TransporteController::class, 'editt'])->name('transportes.editt');
Route::put('/updatet/{id}', [\App\Http\Controllers\TransporteController::class, 'updatet'])->name('transportes.updatet');
Route::get('/showt/{id}', [\App\Http\Controllers\TransporteController::class, 'showt'])->name('transportes.showt');
Route::delete('/destroyt/{id}', [\App\Http\Controllers\TransporteController::class, 'destroyt'])->name('transportes.destroyt');

//Camion
Route::get('/indexc', [\App\Http\Controllers\CamionController::class, 'indexc'])->name('camiones.indexc');
Route::get('/createc', [\App\Http\Controllers\CamionController::class, 'createc'])->name('camiones.createc');
Route::post('/storec', [\App\Http\Controllers\CamionController::class, 'storec'])->name('camiones.storec');
Route::get('/editc/{id}', [\App\Http\Controllers\CamionController::class, 'editc'])->name('camiones.editc');
Route::put('/updatec/{id}', [\App\Http\Controllers\CamionController::class, 'updatec'])->name('camiones.updatec');
Route::get('/showc/{id}', [\App\Http\Controllers\CamionController::class, 'showc'])->name('camiones.showc');
Route::delete('/destroyc/{id}', [\App\Http\Controllers\CamionController::class, 'destroyc'])->name('camiones.destroyc');

//Predio
Route::get('/indexp', [\App\Http\Controllers\PredioController::class, 'indexp'])->name('predios.indexp');
Route::get('/createp', [\App\Http\Controllers\PredioController::class, 'createp'])->name('predios.createp');
Route::post('/storep', [\App\Http\Controllers\PredioController::class, 'storep'])->name('predios.storep');
Route::get('/editp/{id}', [\App\Http\Controllers\PredioController::class, 'editp'])->name('predios.editp');
Route::put('/updatep/{id}', [\App\Http\Controllers\PredioController::class, 'updatep'])->name('predios.updatep');
Route::get('/showp/{id}', [\App\Http\Controllers\PredioController::class, 'showp'])->name('predios.showp');
Route::delete('/destroyp/{id}', [\App\Http\Controllers\PredioController::class, 'destroyp'])->name('predios.destroyp');

//Tipo de Mercancia
Route::get('/indextm', [\App\Http\Controllers\TipoMercanciaController::class, 'indextm'])->name('tmercancias.indextm');
Route::get('/createtm', [\App\Http\Controllers\TipoMercanciaController::class, 'createtm'])->name('tmercancias.createtm');
Route::post('/storetm', [\App\Http\Controllers\TipoMercanciaController::class, 'storetm'])->name('tmercancias.storetm');
Route::get('/edittm/{id}', [\App\Http\Controllers\TipoMercanciaController::class, 'edittm'])->name('tmercancias.edittm');
Route::put('/updatetm/{id}', [\App\Http\Controllers\TipoMercanciaController::class, 'updatetm'])->name('tmercancias.updatetm');
Route::get('/showtm/{id}', [\App\Http\Controllers\TipoMercanciaController::class, 'showtm'])->name('tmercancias.showtm');
Route::delete('/destroytm/{id}', [\App\Http\Controllers\TipoMercanciaController::class, 'destroytm'])->name('tmercancias.destroytm');

//Mercancia
Route::get('/indexm', [\App\Http\Controllers\MercanciaController::class, 'indexm'])->name('mercancias.indexm');
Route::get('/createm', [\App\Http\Controllers\MercanciaController::class, 'createm'])->name('mercancias.createm');
Route::post('/storem', [\App\Http\Controllers\MercanciaController::class, 'storem'])->name('mercancias.storem');
Route::get('/editm/{id}', [\App\Http\Controllers\MercanciaController::class, 'editm'])->name('mercancias.editm');
Route::put('/updatem/{id}', [\App\Http\Controllers\MercanciaController::class, 'updatem'])->name('mercancias.updatem');
Route::get('/showm/{id}', [\App\Http\Controllers\MercanciaController::class, 'showm'])->name('mercancias.showm');
Route::delete('/destroym/{id}', [\App\Http\Controllers\MercanciaController::class, 'destroym'])->name('mercancias.destroym');

//Prueba
Route::get('/fhome', [\App\Http\Controllers\ControladorController::class,  'fhome'])->name('layout/home');










//Route::get('/', [\App\Http\Controllers\PersonasController::class, 'index'])->name('personas.index');
//Route::get('/create', [\App\Http\Controllers\PersonasController::class, 'create'])->name('personas.create');
//Route::post('/store', [\App\Http\Controllers\PersonasController::class, 'store'])->name('personas.store');
//Route::get('/edit/{id}', [\App\Http\Controllers\PersonasController::class, 'edit'])->name('personas.edit');
//Route::put('/update/{id}', [\App\Http\Controllers\PersonasController::class, 'update'])->name('personas.update');
//Route::get('/show/{id}', [\App\Http\Controllers\PersonasController::class, 'show'])->name('personas.show');
//Route::delete('/destroy/{id}', [\App\Http\Controllers\PersonasController::class, 'destroy'])->name('personas.destroy');
//
//Route::get('/', [\App\Http\Controllers\TransporteController::class, 'indext'])->name('transportes.indext');
//Route::get('/createt', [\App\Http\Controllers\TransporteController::class, 'createt'])->name('transportes.createt');
//Route::post('/storet', [\App\Http\Controllers\TransporteController::class, 'storet'])->name('transportes.storet');
