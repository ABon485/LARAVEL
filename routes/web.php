<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

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
Route::get('/',function(){
    $html = '<h1>Học tại Unicode</h1>';
    return $html;
});
// Route::get('/unicode',function(){
//     return view('form');
//     // return 'phương thức get của path/unicode';
// });
// Route::post('/unicode', function(){
//     return 'phương thức post của path/unicode';
// });
// Route::put('/unicode', function(){
//     return 'phương thức put của path/unicode';
// });
// Route::delete('/unicode', function(){
//     return 'phương thức delete của path/unicode';
// });
// Route::patch('/unicode', function(){
//     return 'phương thức patch của path/unicode';
// });
// Route::any('unicode', function(){
//     return $_SERVER['REQUEST_METHOD'];
// });

// Route::match(['get','post'],'unicode', function(){
//     return $_SERVER['REQUEST_METHOD'];
// });
Route::prefix('admin')->group(function() {

    Route::get('show_form', function() {
        return view('form');
    });

    Route::get('unicode', function() {
        return 'phương thức get của path/unicode';
    });
    Route::prefix('product')->group (function(){
        Route::get('/', function() { 
            return 'danh sach san pham';
        });
        Route::get('add', function() {
            return 'them san pham';
        });
        Route::get('edit', function() {
            return 'sua san pham';
        });
        Route::get('delete', function() {
            return 'xoa san pham';
        });
    });

});
