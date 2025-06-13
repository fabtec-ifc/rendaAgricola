<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TermosPoliticasController;

use App\Http\Controllers\TipoUsuarioController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\FaixaEtariaController;
use App\Http\Controllers\TipoMaoDeObraController;
use App\Http\Controllers\TipoUsoTerraController;
use App\Http\Controllers\TipoAreaController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\UnidadeProducaoController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\UsoTerraController;
use App\Http\Controllers\PessoaProducaoController;
use App\Http\Controllers\AnoAgricolaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserUnidadeProducaoController;


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

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::resource("/tipoUsuario", TipoUsuarioController::class);
    Route::resource("/estado", EstadoController::class);
    Route::resource("/faixaEtaria", FaixaEtariaController::class);
    Route::resource("/tipoMaoDeObra", TipoMaoDeObraController::class);
    Route::resource("/tipoUsoTerra", TipoUsoTerraController::class);
    Route::resource("/tipoArea", TipoAreaController::class);
    Route::resource("/municipio", MunicipioController::class);
    Route::resource("/unidadeProducao", UnidadeProducaoController::class);
    Route::resource("/area", AreaController::class);
    Route::resource("/usoTerra", UsoTerraController::class);
    Route::resource("/pessoaProducao", PessoaProducaoController::class);
    Route::resource("/anoAgricola", AnoAgricolaController::class);
    Route::resource("/usuario", UserController::class);
    Route::post("/selectEstado", [UnidadeProducaoController::class, "selectEstado"])->name("selectEstado");
});



Route::get('/termos', [TermosPoliticasController::class, 'termos'])->name('termos');
Route::get('/politicas', [TermosPoliticasController::class, 'politicas'])->name('politicas');

require __DIR__.'/auth.php';
