<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\PlanillasController;

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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');






//Route::get('/contactanos/preguntas', function () { return view('contactanos.preguntas'); })->name('preguntas');






Route::middleware(['auth'])->group(function () { 
    Route::get('planillas',[PlanillasController::class,'index'])->name('planillas.index');
    Route::get('planillas/create',[PlanillasController::class,'create'])->name('planillas.create');
    Route::get('planillas/{planillas}/edit',[PlanillasController::class,'edit'])->name('planillas.edit');
    Route::post('planillas', [PlanillasController::class, 'store'])->name('planillas.store');
    Route::patch('planillas/{planillas}',[PlanillasController::class,'update'])->name('planillas.update');
    Route::delete('planillas/{planillas}',[PlanillasController::class,'delete'])->name('planillas.delete');
    Route::get('planillas/pendientes',[PlanillasController::class,'pendientes'])->name('planillas.pendientes');


    Route::get('planillas/{planillas}/consultar',[PlanillasController::class,'consultar'])->name('planillas.consultar');
    Route::post('planillas/{planillas}',[PlanillasController::class,'restar'])->name('planillas.restar');

});
   

    /*contactanos*/

    Route::get('/contactanos/contact', function () {
        return view('contactanos.contact');
    });

    Route::get('/contactanos/preguntas', function () {
        return view('contactanos.preguntas');
    });
    
    /*End conductores*/


    /*Conductores*/ 

    Route::get('/conductores/requisitosAfiliacion', function () {
        return view('conductores.requisitosAfiliacion');
    });
    
    Route::get('/conductores/requisitosAfiliacionCompensacion', function () {
        return view('conductores.requisitosAfiliacionCompensacion');
    });

    /* End conductores */

    /*Pasajeros */
    
    Route::get('pasajeros/tarifas', function () {
        return view('pasajeros.tarifas');
    });

    Route::get('pasajeros/SolicitaAqui', function () {
        return view('pasajeros.SolicitaAqui');
    });

    Route::get('pasajeros/appPasajero', function () {
        return view('pasajeros.appPasajero');
    });    

