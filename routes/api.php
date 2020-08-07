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
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Cache-Control, Pragma, Origin, Authorization, Content-Type, X-Requested-With');
header('Access-Control-Allow-Methods: GET, PUT, POST');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/numeros', function () {
    class numeros{
        public $y, $x, $value;
        public function __construct($y, $x, $value)
        {
            $this->y = $y;
            $this->x = $x;
            $this->value = $value;
        }
    }
    

    $obj = new numeros(0, 0, 5);
    $obj1 = new numeros(1, 0, 6);
    return [$obj, $obj1];
});

Route::get('/tablero',      'TableroController@tablero')->name('tablero');
Route::post('/saveBoard',   'TableroController@saveBoard')->name('saveBoard');
Route::get('/list',         'TableroController@listBoards')->name('list');
