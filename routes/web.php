<?php
//Config
use Illuminate\Support\Facades\Route;

// Includes
use App\Http\Controllers\ProdutoController;

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

Route::get('/produto', [ProdutoController::class, 'index']);
#Route::get('/user', [UserController::class, 'index']);


Route::get('/', function () {
    return view('welcome');
    #return view('produto.index');
});
