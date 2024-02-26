<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class home extends Controller
{
    //
    public function index(){
        $title = 'Học lập trình web tại unicode';
        $content = 'học lập trình laravel 8.x tại Unicode';
        
        // compact('title','content')
        // return view('home')->with(['title'=>$title, 'content'=>$content]);
        return view::make('home',compact('title','content'));
    }
    public function getNew(){
        return 'danh sach tin tuc';
    }

    public function categories(){
        return 'chuyên mục';
    }
    public function  getProductDetail($id){
        return view('clients.products.detail',compact('id'));
    }
}
