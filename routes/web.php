<?php

use App\Http\Controllers\ControllerBackend;
use App\Http\Controllers\ControllerPages;
use Illuminate\Support\Facades\Route;



// Accueil
Route::get('/',[ControllerPages::class,'accueil']);
Route::post('/accueil/create',[ControllerBackend::class,'createAccueil'])->name('Create.Accueil');
Route::get('/accueil',[ControllerPages::class,'accueilviewadd']);
Route::get('/accueil/edit/{id}',[ControllerPages::class,'editAccueil'])->name('editAccueil');
Route::post('/accueil/update/{id}',[ControllerBackend::class,'updateAccueil'])->name('updateAccueil');


// Route pour les promotions
Route::get('/promotions',[ControllerPages::class,'promotions'])->name('promotions');
Route::post('/promotions/create',[ControllerBackend::class,'createPromotions'])->name('create.Promotion');
Route::get('/listepromotions',[ControllerPages::class,'AddPromotions']);
Route::get('/promotion/edit/{id}',[ControllerPages::class,'editPromotion'])->name('editPromotion');
Route::post('/promotion/update/{id}',[ControllerBackend::class,'updatePromotion'])->name('updatePromotion');




//about
Route::get('/about',[ControllerPages::class,'about']);



//gros
Route::get('/gros',[ControllerPages::class,'gros'])->name('gros');
Route::post('/gros/create',[ControllerBackend::class,'createGros'])->name('create.Gros');
Route::get('/listegros',[ControllerPages::class,'listegros'])->name('listegros.store');
Route::get('/gros/edit/{id}',[ControllerPages::class,'editGros'])->name('editGros');
Route::post('/gros/update/{id}',[ControllerBackend::class,'updateGros'])->name('updateGros');




//demi
Route::get('/demi',[ControllerPages::class,'demi'])->name('demi.store');
Route::post('/demi/create',[ControllerBackend::class,'createDemi'])->name('create.Demi');
Route::get('/listedemi',[ControllerPages::class,'listedemi'])->name('listedemi.store');
Route::get('/demi/edit/{id}',[ControllerPages::class,'editDemi'])->name('editDemi');
Route::post('/demi/update/{id}',[ControllerBackend::class,'updateDemi'])->name('updateDemi');



//King
Route::get('/king',[ControllerPages::class,'king'])->name('king');
Route::post('/king/create',[ControllerBackend::class,'createKing'])->name('create.King');
Route::get('/listeking',[ControllerPages::class,'listking'])->name('listking.store');
Route::get('/king/edit/{id}',[ControllerPages::class,'editKing'])->name('editKing');
Route::post('/king/update/{id}',[ControllerBackend::class,'updateKing'])->name('updateKing');



//Actualite
Route::get('/actualite',[ControllerPages::class,'actualite'])->name('actualite.store');
Route::post('/actualite/create',[ControllerBackend::class,'createActualite'])->name('create.Actualite');
Route::get('/listeactualite',[ControllerPages::class,'listeactualite'])->name('listeactualite.store');
Route::get('/actualite/edit/{id}',[ControllerPages::class,'editActualite'])->name('editActualite');
Route::post('/actualite/update/{id}',[ControllerBackend::class,'updateActualite'])->name('updateActualite');


// route admin
Route::get('/dashboard',[ControllerPages::class,'dashboard'])->name('dashboard');
Route::get('/listeadmindemi',[ControllerPages::class,'listeAdminDemi'])->name('listeadmindemi');
Route::get('/listeadmingros',[ControllerPages::class,'listeAdminGros'])->name('listeadmingros');
Route::get('/listeadminking',[ControllerPages::class,'listeAdminKing'])->name('listeadminking');
Route::get('/listeadminactualite',[ControllerPages::class,'listeAdminActualite'])->name('listeadminactualite');
Route::get('/listeadminaccueil',[ControllerPages::class,'listeAdminAccueil'])->name('listeadminaccueil');
Route::get('/listeadminpromotions',[ControllerPages::class,'listeAdminPromotions'])->name('listeadminpromotions');