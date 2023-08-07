<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\MedicoPacienteController;
use App\Http\Controllers\PacienteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', AuthController::class);

Route::group(['prefix' => 'cidades'], function() {
   Route::get('/', [CidadeController::class, 'list'])->name('get-cidade');
});


Route::get('/medicos', [MedicoController::class, 'list'])->name('get-medicos');
Route::get('/{cidadeId}/medicos', [MedicoController::class, 'listByCity'])->name('get-medicos-cidade');


Route::middleware('api')->post('/medicos/{id_medico}/pacientes', [MedicoPacienteController::class, 'vinculate'])
    ->name('vinculate');

Route::middleware('api')->post('/pacientes', [PacienteController::class, 'create'])->name('pacientes-create');
Route::middleware('api')->post('/pacientes/{pacienteId}', [PacienteController::class, 'update'])->name('pacientes-update');
Route::middleware('api')->get('/pacientes', [PacienteController::class, 'list'])->name('get-pacientes');

