<?php

use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\CompanyController;
use App\Http\Controllers\Api\V1\CompanyWorkingSiteController;
use App\Http\Controllers\Api\V1\MeController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::post('/auth', [AuthController::class, 'index']);

    Route::middleware('auth:sanctum')->group(function () {
        Route::get('/me', [MeController::class, 'index']);

        Route::prefix('companies')
            ->scopeBindings()
            ->group(function () {
                Route::controller(CompanyController::class)->group(function () {
                    Route::get('/', 'index');
                    Route::get('/{company}', 'show');
                });

                Route::prefix('{company}/working-sites')
                    ->group(function () {
                        Route::controller(CompanyWorkingSiteController::class)->group(function () {
                            Route::get('/', 'index');
                            Route::get('/{companyWorkingSite}', 'show');
                        });
                    });
            });
    });
});
