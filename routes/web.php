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

