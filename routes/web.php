<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmailController;
use App\Http\Controllers\TokenController;
use App\Http\Middleware\CheckUserEnabled;
use App\Http\Middleware\UserRoute;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\TermosPoliticasController;

use App\Http\Controllers\TipoUsuarioController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\FaixaEtariaController;
use App\Http\Controllers\TipoMaoDeObraController;
use App\Http\Controllers\TipoUsoTerraController;
use App\Http\Controllers\TipoAreaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/enviar-email', [EmailController::class, 'enviarEmail'])->name('enviar-email');
Route::get('/enviar-email-senha', [EmailController::class, 'enviarEmailSenha'])->name('enviar-email-senha');

Route::get('/validarEmail', function(){
    return view('validarEmail');
})->name('validarEmail');

Route::post('/verifytoken', [TokenController::class, 'verify'])->middleware('auth')->name('verify.token');


Route::get("/", function(){
    return redirect("/tipoUsuario");
})->name("home");

Route::resource("/tipoUsuario", TipoUsuarioController::class);
Route::resource("/estado", EstadoController::class);
Route::resource("/faixaEtaria", FaixaEtariaController::class);
Route::resource("/tipoMaoDeObra", TipoMaoDeObraController::class);
Route::resource("/tipoUsoTerra", TipoUsoTerraController::class);
Route::resource("/tipoArea", TipoAreaController::class);

/*
Route::get('/', function () {
    return redirect('/login');
})->middleware(CheckUserEnabled::class)->name('home');
*/

Route::get('/termos', [TermosPoliticasController::class, 'termos'])->name('termos');
Route::get('/politicas', [TermosPoliticasController::class, 'politicas'])->name('politicas');

Route::middleware('auth', CheckUserEnabled::class)->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth', CheckUserEnabled::class, UserRoute::class)->group(function () {

    /*
    Route::post('/trabalho/addTag', [TrabalhoController::class, 'addTag'])->name('trabalho.addTag');
    Route::post('/trabalho/delTag', [TrabalhoController::class, 'delTag'])->name('trabalho.delTag');
    Route::post('/trabalho/addPalavraChave', [TrabalhoController::class, 'addPalavraChave'])->name('trabalho.addPalavraChave');
    Route::post('/trabalho/delPalavraChave', [TrabalhoController::class, 'delPalavraChave'])->name('trabalho.delPalavraChave');
    */
});

/*
Route::get('/dashboard', function() {
    return redirect('/usuario');
});
*/

require __DIR__.'/auth.php';
