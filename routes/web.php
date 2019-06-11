<?php
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sample', 'MasterController@User');
Route::post('/sample', 'MasterController@Store');
Route::get('/sample/{id}', 'MasterController@Show');
Route::get('/sample/{action}/{id}', 'MasterController@Update');
// Route::get('/sample', function () {
//     $data['data']=["Go to Bazzar",
//             "Go to Market",
//             "Go to Store"
//           ];
//     return view('sample',$data);
// });
Route::get('/report', function () {
    return view('report','ReportController@Show');
});

Auth::routes();
// Route::get('/home', 'HomeController@index');
Route::get('/testmail', 'MasterController@MailScript');

Route::get('/add','CarController@create');
Route::post('/add','CarController@store');
// Route::get('/car','CarController@index');
Route::get('/add/{id}','CarController@create');
Route::post('/edit','CarController@update');
Route::delete('/remove/{id}','CarController@destroy');
Route::get('/show','CarController@showList');

