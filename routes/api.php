 <?php

use Illuminate\Http\Request;

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

 Route::get('/read', 'ReadingController@store');

 Route::post('/read', 'ReadingController@store');

 Route::get('/test', function (Request $request){

     return "a =".$request->a.", and b = ".$request->b;
 });


 Route::get('/pos', function (Request $request){

     return $request->all();
 });

 Route::post('/login', 'MobileAppController@login');

 Route::post('/getdata', 'MobileAppController@getdata');

 Route::post('/data', 'KeyController@data');
