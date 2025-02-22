<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\PermitController;
use App\Models\Permit;

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

Route::prefix('v1/vmond/')->group(function () {
    Route::get('tokoonline/resto', [ApiController::class, 'getApiResto']);
    Route::get('tokoonline/detail/{type}/{slug}', [ApiController::class, 'getApiDetail']);
    Route::get('tokoonline/biliard', [ApiController::class, 'getApiBiliard']);
    Route::get('tokoonline/meetingroom', [ApiController::class, 'getApiMeetingRoom']);
    Route::get('user/get-role', [ApiController::class, 'getRolesUser']);
    // Route::get('tokoonline/banner/{path}', [ApiController::class, 'getApiBanner'])->where('path', '.*');
    Route::get('tokoonline/banner', [ApiController::class, 'getApiBanner']);
    Route::get('tokoonline/paket-menu', [ApiController::class, 'getApiPaketMenu']);
});
