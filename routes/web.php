<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LokerController;
use App\Http\Controllers\PekerjaController;


Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/inputpekerja', function () {
    return view('inputpekerja');
});


Route::get('/manager/homepage', [LokerController::class, 'index']);

Route::get('/loker/{id}', [LokerController::class, 'detail']);
Route::get('/lokers/create', [LokerController::class, 'create'])->middleware('auth');
Route::post('/lokers/store', [LokerController::class, 'store'])->middleware('auth');
Route::get('/lokers/data', [LokerController::class, 'dataLoker'])->middleware('auth');//data
Route::get('/lokers/{id}/edit', [LokerController::class, 'edit'])->name('edit.loker');//edit
Route::put('/lokers/{id}/update', [LokerController::class, 'update'])->name('lokers.update');//->middleware('auth')//update
Route::get('/lokers/delete/{id}', [LokerController::class, 'delete'])->name('lokers.delete')->middleware('auth');//Delete

Route::get('/pekerja/datapekerja', [PekerjaController::class, 'index'])->name('pekerja.index');
Route::get('/pekerja/detailpekerja/{id}', [PekerjaController::class, 'detail'])->name('pekerja.detail');
Route::get('/pekerja/create/{id}', [PekerjaController::class, 'create'])->name('pekerja.create');
Route::post('/pekerja/store/{id}', [PekerjaController::class, 'store'])->name('pekerja.store')->middleware('auth');
Route::get('/pekerja/{pekerja_id}/edit', [PekerjaController::class, 'edit'])->name('pekerja.edit');
Route::put('/pekerja/{pekerja}', [PekerjaController::class, 'update'])->name('pekerja.update');
Route::delete('/pekerja/{pekerja}', [PekerjaController::class, 'destroy'])->name('pekerja.destroy');
Route::get('/pekerja/print/{id}', [PekerjaController::class, 'print'])->name('pekerja.print');


// Route::get('/datapekerja', [LokerController::class, 'datapekerja'])->middleware('auth');//
// Route::get('/pekerjas/{id}/edit', [LokerController::class, 'editpekerja'])->name('edit.pekerja');
// Route::put('/pekerjas/{id}/update', [LokerController::class, 'updatepekerja'])->name('pekerjas.update');//->middleware('auth');
// Route::get('/pekerjas/delete/{id}', [LokerController::class, 'deletepekerja'])->name('pekerjas.delete');//->middleware('auth');//Delete

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


