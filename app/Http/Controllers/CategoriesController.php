<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function __construct(Request $request){

        /*
          *nếu là danh sách chuyên mục => hiển thị ra dòng chữ: xin chào Unicode
         */
        if($request->is('categories')){
            echo '<h3>Xin chào Unicode</h3>';
        }
    }
    // hiển thị  danh sách chuyên mục (phương thức GET)
    public function index(Request $request){

        // $request = new Request();
    //    $path = $request->path();
    //     echo $path;
        // $url = $request->url();
        // $fullUrl = $request->fullUrl();
        // echo $fullUrl;

        // $method = $request->method();
        // echo $method;
        // $ip = $request->ip();
        // echo $ip;

        // if($request->isMethod('GET')){
        //     echo 'Phương thức GET';
        // }
        // $serve = $request->server();
        //     dd($serve['REQUEST_URI']););

        // $header = $request->headers(['user-agent']);
        // dd($header);

            // $id = $request->input('id');
            // echo $id;
            $query = $request->query();
            dd($query);


        // $input = $request->input();
        //     dd($input);

        //   $name = request('name','Unicode');
        //     dd($name);








        return view ('clients/categories/list');
    }
    // lấy ra 1 chuyên mục theo id(phương thức GET)
    public function getCategory($id){
        return view ('clients/categories/edit');
    }
    // sửa 1 chuyên mục (Phương thức Post)
    public function updateCategory($id){
        return 'Submit chuyên mục: '.$id;
    }
    // show form thêm dữ liệu (phương thúcw GET)
    public function addCategory(Request $request){
        // $path = $request->path();
        // echo $path;
        $cateName = $request->old('category_name');
        

        return view ('clients/categories/add');
    }
    // thêm dữ liệu vào chuyên mục
    public function handleAddCategory(Request $request){

        // $allData = $request ->all();
        // dd($allData);
        
        // if($request->isMethod('POST')){
        //     echo 'Phương thức POST';
        // }
        // return redirect(route('categories.add'));
        // return 'Submit thêm chuyên mục:';

        // $cateName = $request->query();

        if($request->has('category_name')){
            $cateName = $request->category_name;
            $request ->flash();
            return redirect(route('categoríe.add'));
        }else{
            return 'không có category';
        }

    }
    // xoá dữ liệu (phương thức delete)
    public function deleteCategory($id){
        return 'Submit xoá chuyên mục:'.$id;

    }
    public function getFile(){
        return view('clients/categories/file');
    }
    // xuwr lys laays thoong tin file
    public function handleFile(Request $request){
        // $file = $request->file('photo');
        if($request->hasFile('photo')){
            iff($request->photo->isValid()){
                $file = $request->photo;
                // $path = $file->path();
                // $ext = $file->extension();
                // $path = $file->store('file-txt','local');
                // $path = $file->storeAs('file-txt','khoa-hoc.txt');
                // $fileName = $file->getClientOriginaName();
                

                // đổi tên
                $fileName = md5(uniqid(()).'.'.$ext);
                dd($fileName);
            }else{
                return 'upload file khoong thanh cong';
            }
        }else{
            return 'vui longf chonj file';
        }

    }
}