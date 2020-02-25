<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class firstController extends Controller
{
    public function index(){
        $nama = "Andre Aditya";
        $pelajaran = ["pertama","kedua","ketiga"];
        $budi = "ini budi";
        return view('test',['nama'=> $nama,'matkul'=> $pelajaran,'budi'=>$budi]);
    }
    public function mahasiswa($nama){
        return $nama;

    }
    public function form(){
        return view('form');
    }
    public function postForm(Request $data){
        $nama = $data->input('nama');
        return 'nama:'.$nama;
    }
    public function blade1(){
        return view('blade1');
    }
    public function blade2(){
        return view('blade2');
    }
}
