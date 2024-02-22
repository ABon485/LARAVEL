<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{
    //
    public function index(){
        return 'home';
    }
    public function getNew(){
        return 'danh sach tin tuc';
    }

    public function categories(){
        return 'chuyên mục';
    }
}
