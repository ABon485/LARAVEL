<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public $data = [];
    public function  index(){
        $this->data['title'] = 'trang chủ';
        return view('clients.home',$this->data);
    }
    public function product(){
        $this->data['title'] = 'sản phẩm';
        return view('clients.products',$this->data);
    }
    public function getAdd(){
        $this->data['title'] = 'Thêm sản phẩm ';
        return view('clients.add',$this->data);
    }
    public function postAdd(request $request){

    }
    public function putAdd(request $request){
        return 'Phương thức put';
    }
}
