<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\CertificateController;

Route::get('/', function () {
    return Redirect::away(env('BASE_LINK'));
});
Route::get('/cert/{urlx}', [CertificateController::class, 'generate']);
Route::get('/cert/val/{urlx}', [CertificateController::class, 'validate']);