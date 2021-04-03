<?php

//use App\Http\Controllers\Api\AuthController;
//use App\Http\Controllers\Api\BusinessController;
//use App\Http\Controllers\Api\ImageUploadController;
//use App\Http\Controllers\Api\ProductController;
//use App\Http\Controllers\Api\RequestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//
//Route::group(['namespace' => 'App\Http\Controllers\Api','prefix' => 'v1/'], function ($router) {
//
//    Route::post('image/upload', 'ImageUploadController@saveImg');
//
////    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail');
////    Route::post('password/reset', 'ResetPasswordController@reset');
//
//    Route::prefix('auth')->group(function () {
//        Route::post('login', 'AuthController@login');
//        Route::post('register', 'AuthController@register');
//        Route::post('logout', 'AuthController@logout');
//        Route::post('refresh', 'AuthController@refresh');
//        Route::post('update', 'AuthController@update');
//        Route::post('admin_update', 'AuthController@adminUpdate')->middleware('isAdmin');
//        Route::delete('delete/{id}','AuthController@destroy');
//        Route::post('update/image', 'AuthController@imageUpdate');
//        Route::post('user', 'AuthController@me');
////        Route::get('user/search', 'UserController@userSearch');
////        Route::get('user/all', 'UserController@allUser')->middleware('isAdmin');
//        Route::post('me', 'AuthController@me');
////        Route::get('followers/id', 'FollowersController@followersId');
////        Route::get('/user/{username}/profile', 'AuthController@profile');
////        Route::get('/user/followers', 'FollowersController@getMyFollowers');
////        Route::get('/user/{username}/followers', 'FollowersController@getFollowers');
////        Route::get('/user/{username}/followings', 'FollowersController@getFollowings');
////        Route::get('resend/email', 'Auth\VerificationController@apiResend');
////        Route::get('user/{username}/media', 'UserController@media');
//        Route::post('change_pass', 'AuthController@changePassword');
//
//    });
//});
//
//Route::group(['prefix' => 'v1/'], function ($router) {
//    Route::post('business/search', [BusinessController::class, 'search']);
//    Route::post('admin/business/search', [BusinessController::class, 'adminSearch']);
//    Route::get('business/search/{id}', [BusinessController::class, 'search']);
//    Route::get('business/topbrands', [BusinessController::class, 'topBrands']);
//
//    Route::get('{id}/products', [ProductController::class, 'products']);
//    Route::get('{id}/requests', [BusinessController::class, 'requests']);
//
//    Route::resource('business', BusinessController::class);
//
//});
//
//Route::group(['middleware' => 'jwt.auth','prefix' => 'v1/'], function ($router) {
//
//    Route::post('admin/business/all', [BusinessController::class,'allBusinesses']);
//    Route::post('/admin/update/business/{id}', [BusinessController::class,'adminUpdateBusiness']);
//
//
//    Route::resource('product', ProductController::class);
//    Route::resource('request', RequestController::class);
//    Route::get('request/read/{id}', [RequestController::class, 'read']);
//
//
//    Route::post('business/update/logo', [BusinessController::class,'updateLogo']);
//    Route::post('business/update/banner', [BusinessController::class,'updateBanner']);
//    Route::get('my/business', [BusinessController::class,'myBusiness']);
//    Route::post('a/image/upload', [ImageUploadController::class,'authSaveImg']);
//
//});

