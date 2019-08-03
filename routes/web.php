<?php

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

/* Route::get('/', function () {
    return view('welcome');
}); */

/* 首頁 */
Route::get('/', 'UserAuthController@indexPage');

// 使用者
Route::get('/user/auth/sign-up', 'UserAuthController@signUpPage');
Route::post('/user/auth/sign-up', 'UserAuthController@signUpProcess');
Route::get('/user/auth/sign-in', 'UserAuthController@signInPage');
Route::post('/user/auth/sign-in', 'UserAuthController@signInProcess');
Route::get('/user/auth/sign-out', 'UserAuthController@signOut');

//商品
Route::get('/merchandise', 'MerchandiseController@merchandiseListPage');
Route::get('/merchandise/create', 'MerchandiseController@merchandiseCreateProcess');
Route::get('/merchandise/manage', 'MerchandiseController@merchandiseManageListPage');
Route::get('/merchandise/{merchandise_id}', 'MerchandiseController@merchandiseItemPage');
Route::get('/merchandise/{merchandise_id}/edit', 'MerchandiseController@merchandiseItemEditPage');
Route::put('/merchandise/{merchandise_id}', 'MerchandiseController@merchandiseItemUpdateProcess');
Route::post('/merchandise/{merchandise_id}/buy', 'MerchandiseController@merchandiseItemBuyProcess');

//交易
Route::get('/transaction', 'TransactionController@transactionListPage');