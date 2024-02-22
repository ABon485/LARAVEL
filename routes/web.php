<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\home;

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
Route::get('/', 'App\Http\Controllers\home@index')->name('home');
Route::get('/tin-tuc', 'home@getNew')->name('news');
Route::get('/categories', [home::class,'categories']);



Route::prefix('admin')->group(function() {

    Route::get('show_form', function() {
        return view('form');
    })->name('admin.show_form');

    Route::get('tin-tức/{slug}-{id}.html', function($slug=null,$id=null) {
        $content = 'phương thức get của path/unicode ';
        $content.='id ='.$id.'</br>';
        $content.='Slug = '. $slug ;
        return $content;
    })->where(
        [
            'slug'=>'[a-z-]+',
            'id ='=>'[0-9]+'
        ]
    );



    Route::prefix('product')->middleware('checkpermission')-> group (function(){
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
