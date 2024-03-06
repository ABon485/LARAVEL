<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\Dashboard;
use App\Http\Controllers\home;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
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
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/san-pham',[HomeController::class,'products'])->name('product');


// Client Routes
// route::get('/',[home::class, 'index'])->name('home')->middleware('auth.admin');

// Route:Route::middleware('auth.admin')->prefix('categories')->group(function(){
//     // danh sách chuyên mục
//     Route::get('/',[CategoriesController::class,'index'])->name('categories.list');

//     // lấy chi tiết 1 chuyên mục (áp dụng show form chuyen mục)
//     Route::get('/edit/{id}',[CategoriesController::class, 'getCategory'])->name('categories.edit');

//     // xử lý update chuyên mục
//     Route::post('/update/{id}',[CategoriesController::class, 'updateCategory']);

//     // hiểN thị form add dữ liệu
//     Route::get('/add',[CategoriesController::class, 'addCategory'])->name('categories.add');
//     // xử lý chuyên mục
//     Route::post('/add',[CategoriesController::class, 'handleAddCategory']);

//     // xoá chuyên mục
//     Route::delete('/delete/{id}', [CategoriesController::class, 'deleteCategory'])->name('categories.delete');

//     // xử lý file
//     Route::post('/upload',[CategoriesController::class,'handleFile'])->name('categories.upload');

//     // hieenr thij form
//     Route::get('/upload',[CategoriesController::class,'getFile']);

// });

// Route::get('san-pham/{id}',[home::class, 'getProductDetail']);

// Route::middleware('auth.login')->prefix('admin')->group(function(){
//     Route::get('/',[Dashboard::class,'index']);
//     Route::resource('products', ProductsController::class)->middleware('auth.admin.product');

// });



// Route::get('/',function(){
//     return view('home');
// });

// // Route::get('myroute/{ten}',function($ten){
// //     return 'chào bạn '. $ten;
// // });

// Route::get('myroute/{userId}/{name?}',function($ten='default'){
//     return 'chào bạn '. $ten;
// });



// Route::get('/',function(){
//     $html = '<h1>Học tại Unicode</h1>';
//     return $html;
// });
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
// Route::get('/', 'App\Http\Controllers\home@index')->name('home');
// Route::get('/tin-tuc', 'home@getNew')->name('news');
// Route::get('/categories', [home::class,'categories']);


// Route::prefix('admin')->group(function() {

//     Route::get('show_form', function() {
//         return view('form');
//     })->name('admin.show_form');

//     Route::get('tin-tức/{slug}-{id}.html', function($slug=null,$id=null) {
//         $content = 'phương thức get của path/unicode ';
//         $content.='id ='.$id.'</br>';
//         $content.='Slug = '. $slug ;
//         return $content;
//     })->where(
//         [
//             'slug'=>'[a-z-]+',
//             'id ='=>'[0-9]+'
//         ]
//     );

//     Route::prefix('product')->middleware('checkpermission')-> group (function(){
//         Route::get('/', function() { 
//             return 'danh sach san pham';
//         });
//         Route::get('add', function() {
//             return 'them san pham';
//         });
//         Route::get('edit', function() {
//             return 'sua san pham';
//         });
//         Route::get('delete', function() {
//             return 'xoa san pham';
//         });
//     });

// });
