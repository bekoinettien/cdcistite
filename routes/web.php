<?php

use App\Http\Controllers\ControllerBackend;
use App\Http\Controllers\ControllerPages;
use Illuminate\Support\Facades\Route;



// route des vues

Route::get('/',[ControllerPages::class,'accueil']);
Route::get('/about',[ControllerPages::class,'about']);


Route::get('/gros',[ControllerPages::class,'gros'])->name('gros');
Route::post('/gros/create',[ControllerBackend::class,'createGros'])->name('create.Gros');
Route::get('/listegros',[ControllerPages::class,'listegros'])->name('listegros.store');



Route::get('/demi',[ControllerPages::class,'demi'])->name('demi.store');
Route::post('/demi/create',[ControllerBackend::class,'createDemi'])->name('create.Demi');
Route::get('/listedemi',[ControllerPages::class,'listedemi'])->name('listedemi.store');



Route::get('/king',[ControllerPages::class,'king'])->name('king');
Route::post('/king/create',[ControllerBackend::class,'createKing'])->name('create.King');
Route::get('/listeking',[ControllerPages::class,'listking'])->name('listking.store');



Route::get('/actualite',[ControllerPages::class,'actualite'])->name('actualite.store');
Route::post('/actualite/create',[ControllerBackend::class,'createActualite'])->name('create.Actualite');
Route::get('/listeactualite',[ControllerPages::class,'listeactualite'])->name('listeactualite.store');




// route des modifications
Route::get('/demi/edit',[ControllerBackend::class,'editDemi'])->name('editDemi');
Route::get('/gros/edit',[ControllerBackend::class,'editGros'])->name('editGros');
Route::get('/king/edit',[ControllerBackend::class,'editKing'])->name('editKing');


// route des suppressions
Route::post('/demi/delete',[ControllerBackend::class,'deleteDemi']);
Route::post('/gros/delete',[ControllerBackend::class,'deleteGros']);
Route::post('/king/delete',[ControllerBackend::class,'deleteKing']);



Route::get('/dashboard',[ControllerPages::class,'dashboard'])->name('dashboard');
Route::get('/listeadmindemi',[ControllerPages::class,'listeAdminDemi'])->name('listeadmindemi');
Route::get('/listeadmingros',[ControllerPages::class,'listeAdminGros'])->name('listeadmingros');
Route::get('/listeadminking',[ControllerPages::class,'listeAdminKing'])->name('listeadminking');
Route::get('/listeadminactualite',[ControllerPages::class,'listeAdminActualite'])->name('listeadminactualite');