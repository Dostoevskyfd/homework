<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\MainController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\AvtoController;

Route::get('/', [MainController::class,   'showIndex'])->name('home');
Route::get('/array', [MainController::class, 'showArray'])->name('array');
Route::get('/reports', [ReportController::class, 'index'])->name('report.index');
//Route::delete('/reports/{report}', [ReportController::class, 'destroy'])->name('report.destroy');
Route::delete('/reports/{report}', [ReportController::class, 'destroy'])->name('reports.destroy');
Route::post('/reports', [ReportController::class,'store']) -> name('reports.store');

Route::get('/reports/{report}', [ReportController::class, 'show'])->name('reports.show');
Route::put('/reports/{report}', [ReportController::class, 'update'])->name('reports.update');
