<?php
use Maatwebsite\Excel\Classes\PHPExcel;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('test/index');
// });
// Route::get('/dynamic_table', function () {
//     return view('test/dynamic_table');
// });
// Route::get('/index', function () {
//     return view('test/horizontal_menu');
// // });
// Route::get('/',)
Route::get('/assets','AssetController@index');
Route::post('/getdevicefromasset','AssetController@getdevicefromasset');
Route::get('/device','DeviceController@index');
Route::post('/getassetfromdevice','DeviceController@getassetfromdevice');
Route::post('/createdevice','DeviceController@createdevice');
Route::get('/people','PeopleController@index');
Route::post('/createpeople','PeopleController@createpeople');
Route::get('/service','ServiceController@index');
Route::post('/createservice','ServiceController@createservice');
Route::get('/editdevice/{id}','DeviceController@edit');
Route::post('/editdevice/{id}','DeviceController@editdevice');
Route::post('/deleteasset','AssetController@deleteAsset');
Route::post('/deletedevice','DeviceController@deletedevice');
Route::post('/deletedeviceall','DeviceController@deletedeviceall');
Route::get('/test',function(){
	$rows = array( array( 'id' => 1, 'name' => 'marlon' ) );
	PHPExcel::create($name, function($excel) use ($rows) {
    $excel->sheet('当天报名', function($sheet) use ($rows) {
        $sheet->fromArray($rows);
    });
})->store('xls', storage_path('excel'));
});