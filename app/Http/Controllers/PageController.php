<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        echo "NIM : 2041720037";
        echo "<br> Nama : Abdulah Syahrony Kurniawan";
    }

    public function articles ($id){
        echo "Halaman Artikel dengan Id".$id;
    }
}
