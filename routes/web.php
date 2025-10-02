<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::prefix('/admin')->middleware(['userType:admin,employee,superadmin'])->group(function () {

    Route::get('/', function () {
        return view('admin.home');
    })->name('admin.index');

    Route::get('/servicos', function () {
        return view('admin.home');
    })->name('admin.servicos');

    Route::get('/atendimentos', function () {
        return view('admin.home');
    })->name('admin.atendimentos');

    Route::get('/profissionais', function () {
        return view('admin.home');
    })->name('admin.profissionais');

    Route::get('/financeiro', function () {
        return view('admin.home');
    })->name('admin.financeiro');

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
