<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Deal;
use App\Models\Seller;
use App\Http\Controllers\DealController;
use App\Http\Controllers\PipelineController;
use App\Http\Controllers\PipelineDealController;

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

Route::get('/pipelines/{pipeline}/deals', [PipelineDealController::class, 'index']);

// Route::get('/', [PipelineController::class, 'index']);
Route::redirect('/', '/pipelines/1/deals');
// Route::get('/pipelines', [PipelineController::class, 'index']);
// Route::post('/pipelines', [PipelineController::class, 'store']);
// Route::get('/pipelines/create', [PipelineController::class, 'create']);
// Route::get('/pipelines/{pipeline}', [PipelineController::class, 'show']);
// Route::put('/pipelines/{pipeline}', [PipelineController::class, 'update']);
// Route::get('/pipelines/{pipeline}/edit', [DealController::class, 'edit']);
// Route::put('/pipelines/deals/{deal}', [DealController::class, 'update']);

// Route::post('/pipelines', function () {
//     // dd('login the user out');
// });

// Route::get('/', function () {
//     return view('welcome');
// });

/*
Route::get('/show', function () {
    return Inertia::render('Show');
});

Route::get('/index', function () {
    // sleep(2);
    return Inertia::render('Index', [
        'deals' => Deal::all()
    ]);
});

Route::get('/seller/index', function () {
    return Inertia::render('seller/Index', [
        'sellers' => Seller::all()
    ]);
});

Route::get('/lab', function () {
    return Inertia::render('Lab', [
        'deals' => Deal::all(),
        'time' => now()->toTimeString(),
    ]);
});

Route::get('/drag', function () {
    // return Inertia::render('Play');
    return Inertia::render('Drag', [
        'deals' => Deal::all(),
        'time' => now()->toTimeString(),
    ]);
});

Route::post('/logout', function () {
    dd('login the user out');
});
*/