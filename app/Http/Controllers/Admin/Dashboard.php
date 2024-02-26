<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    //
    public function _contruct(){
        // return 'khoi dong dashboard';
        echo 'khoi dong dashboard';

    }
    public function index(){
        return '<h2> Dashboard wellcome</h2>';
    }
}
