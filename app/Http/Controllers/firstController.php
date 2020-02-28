<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class firstController extends Controller
{
    public function form(){
        return view('form');
    }
    public function postForm(Request $data){
        $jumlah = $data->input('jumlah');
        return view('player',['jumlah'=>$jumlah]);
    }

}
