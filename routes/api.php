<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ExpenseController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/expenses', [ExpenseController::class, 'index'])->name('expenses.all');
Route::post('/expenses', [ExpenseController::class, 'store'])->name('expenses.store');
Route::get('/expenses/{expense}', [ExpenseController::class, 'show'])->name('expenses.show');
Route::put('/expenses/{expense}', [ExpenseController::class, 'update'])->name('expenses.update');
Route::delete('/expenses/{expense}', [ExpenseController::class, 'destory'])->name('expenses.destroy');