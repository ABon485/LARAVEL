<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public $data = [];
    public function  index(){
        $this->data['wellcome'] ='Học trình Laravel tại <b> Unicode</b>';
        $this->data['content'] ='<h3> Chương1: nhập môn Laravel</h3>
        <p> Kiến thức 1<p/>
        <p> Kiến thức 2<p/>
        <p> Kiến thức 3<p/>';

        $this->data = ['index'] = 1;
        $this->$data['dataArr'] = [
            'Item 1',
            'Item 2'
        ];
        return view('home',$this->data);
    }
}
