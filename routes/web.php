<?php

use App\Http\Controllers\ControllerBackend;
use App\Http\Controllers\ControllerPages;
use App\Http\Middleware\CheckRole;
use Illuminate\Support\Facades\Route;



// Accueil
Route::get('/',[ControllerPages::class,'accueil']);
Route::post('/accueil/create',[ControllerBackend::class,'createAccueil'])->name('Create.Accueil');
Route::get('/accueil/edit/{id}',[ControllerPages::class,'editAccueil'])->name('editAccueil');
Route::post('/accueil/update/{id}',[ControllerBackend::class,'updateAccueil'])->name('updateAccueil');
Route::get('/accueil/delete/{id}',[ControllerBackend::class,'deleteAccueil'])->name('deleteAccueil');

// Route pour les promotions
Route::get('/promotions',[ControllerPages::class,'promotions'])->name('promotions');
Route::post('/promotions/create',[ControllerBackend::class,'createPromotions'])->name('create.Promotion');
Route::get('/promotion/edit/{id}',[ControllerPages::class,'editPromotion'])->name('editPromotion');
Route::post('/promotion/update/{id}',[ControllerBackend::class,'updatePromotion'])->name('updatePromotion');
Route::get('/promotion/delete/{id}',[ControllerBackend::class,'deletePromotion'])->name('deletePromotion');

//about
Route::get('/about',[ControllerPages::class,'about']);


//gros
Route::post('/gros/create',[ControllerBackend::class,'createGros'])->name('create.Gros');
Route::get('/listegros',[ControllerPages::class,'listegros'])->name('listegros.store');
Route::get('/gros/edit/{id}',[ControllerPages::class,'editGros'])->name('editGros');
Route::post('/gros/update/{id}',[ControllerBackend::class,'updateGros'])->name('updateGros');
Route::get('/gros/delete/{id}',[ControllerBackend::class,'deleteGros'])->name('deleteGros');

//demi
Route::post('/demi/create',[ControllerBackend::class,'createDemi'])->name('create.Demi');
Route::get('/listedemi',[ControllerPages::class,'listedemi'])->name('listedemi.store');
Route::get('/demi/edit/{id}',[ControllerPages::class,'editDemi'])->name('editDemi');
Route::post('/demi/update/{id}',[ControllerBackend::class,'updateDemi'])->name('updateDemi');
Route::get('/demi/delete/{id}',[ControllerBackend::class,'deleteDemi'])->name('deleteDemi');

//King
Route::post('/king/create',[ControllerBackend::class,'createKing'])->name('create.King');
Route::get('/listeking',[ControllerPages::class,'listking'])->name('listking.store');
Route::get('/king/edit/{id}',[ControllerPages::class,'editKing'])->name('editKing');
Route::post('/king/update/{id}',[ControllerBackend::class,'updateKing'])->name('updateKing');
Route::get('/king/delete/{id}',[ControllerBackend::class,'deleteKing'])->name('deleteKing');


//Actualite
Route::post('/actualite/create',[ControllerBackend::class,'createActualite'])->name('create.Actualite');
Route::get('/listeactualite',[ControllerPages::class,'listeactualite'])->name('listeactualite.store');
Route::get('/actualite/edit/{id}',[ControllerPages::class,'editActualite'])->name('editActualite');
Route::post('/actualite/update/{id}',[ControllerBackend::class,'updateActualite'])->name('updateActualite');
Route::get('/actualite/delete/{id}',[ControllerBackend::class,'deleteActualite'])->name('deleteActualite');


// route admin
Route::middleware([CheckRole::class])->group(function () {
    Route::get('/dashboard',[ControllerPages::class,'dashboard'])->name('dashboard');
    Route::get('/accueil',[ControllerPages::class,'accueilviewadd']);
    Route::get('/listepromotions',[ControllerPages::class,'AddPromotions']);
    Route::get('/gros',[ControllerPages::class,'gros'])->name('gros');
    Route::get('/demi',[ControllerPages::class,'demi'])->name('demi.store');
    Route::get('/king',[ControllerPages::class,'king'])->name('king');
    Route::get('/actualite',[ControllerPages::class,'actualite'])->name('actualite.store');

    Route::get('/listeadmindemi',[ControllerPages::class,'listeAdminDemi'])->name('listeadmindemi');
    Route::get('/listeadmingros',[ControllerPages::class,'listeAdminGros'])->name('listeadmingros');
    Route::get('/listeadminking',[ControllerPages::class,'listeAdminKing'])->name('listeadminking');
    Route::get('/listeadminactualite',[ControllerPages::class,'listeAdminActualite'])->name('listeadminactualite');
    Route::get('/listeadminaccueil',[ControllerPages::class,'listeAdminAccueil'])->name('listeadminaccueil');
    Route::get('/listeadminpromotions',[ControllerPages::class,'listeAdminPromotions'])->name('listeadminpromotions');
    


    //USERS
    Route::get('/users',[ControllerPages::class,'users'])->name('users');
    Route::post('/users/create',[ControllerBackend::class,'createUsers'])->name('create.Users');
    Route::get('/login',[ControllerPages::class,'login'])->name('login');
    Route::post('/authenticate',[ControllerBackend::class,'authenticate'])->name('authenticate');
    Route::get('/logout',[ControllerBackend::class,'logout'])->name('logout');
    Route::get('/listeuser',[ControllerPages::class,'listeAdminUsers'])->name('listeadminusers');
    Route::get('/users/edit/{id}',[ControllerPages::class,'editUser'])->name('editUser');
    Route::post('/users/update/{id}',[ControllerBackend::class,'updateUser'])->name('updateUser');
    Route::get('/users/delete/{id}',[ControllerBackend::class,'deleteUser'])->name('deleteUser');
});
