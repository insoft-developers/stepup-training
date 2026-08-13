<?php

use App\Http\Controllers\Backoffice\AboutController;
use App\Http\Controllers\Backoffice\ClientController;
use App\Http\Controllers\Backoffice\ContactController;
use App\Http\Controllers\Backoffice\DashboardController;
use App\Http\Controllers\Backoffice\InformationController;
use App\Http\Controllers\Backoffice\InhouseController;
use App\Http\Controllers\Backoffice\TrainingController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Landing Page
|--------------------------------------------------------------------------
*/

Route::get('/', [MainController::class, 'index']);

Route::get('/training/{slug}', [MainController::class, 'training']);


/*
|--------------------------------------------------------------------------
| Backoffice
|--------------------------------------------------------------------------
*/


Route::get('/backoffice/seed/run', function () {

    Artisan::call('db:seed', [
        '--force' => true,
    ]);

    return back()->with(
        'success',
        'Semua seeder berhasil dijalankan.'
    );

})->name('backoffice.seed.run');


Route::prefix('backoffice')
    ->name('backoffice.')
    ->middleware('auth')
    ->group(function () {

        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        Route::get('/profile', [ProfileController::class, 'edit'])
            ->name('profile.edit');

        Route::patch('/profile', [ProfileController::class, 'update'])
            ->name('profile.update');

        Route::delete('/profile', [ProfileController::class, 'destroy'])
            ->name('profile.destroy');


        Route::resource('/information', InformationController::class);
        Route::resource('/about', AboutController::class);
        Route::resource('/clients', ClientController::class);
        Route::put('/clients_update_title', [ClientController::class, 'updateTitle'])->name('clients.update-title');

        Route::resource('/contact', ContactController::class);
        Route::resource('/inhouses', InhouseController::class);
        Route::put('/inhouse_update_title', [InhouseController::class, 'updateTitle'])->name('inhouse.update.title');

        Route::resource('/trainings', TrainingController::class);
           
    });


/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
*/

require __DIR__ . '/auth.php';
