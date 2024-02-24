<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    // public function_construct(){

    // }
    // hiển thị  danh sách chuyên mục (phương thức GET)
    public function index(){
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
    public function addCategory(){
        return view ('clients/categories/add');
    }
    // thêm dữ liệu vào chuyên mục
    public function handleAddCategory(){
        return redirect(route('categories.add'));
        // return 'Submit thêm chuyên mục:';
    }
    // xoá dữ liệu (phương thức delete)
    public function deleteCategory($id){
        return 'Submit xoá chuyên mục:'.$id;

    }
}
