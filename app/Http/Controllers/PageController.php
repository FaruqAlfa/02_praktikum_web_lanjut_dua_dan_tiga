<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat datang';
    }

    public function About(){
        echo "Nama: Mukhamad Faruq Al Fahmi <br>";
        echo "Nim: 2141720066";
    }

    public function Articles($id){
        return 'Halaman Artikel dengan Id '.$id;
    }
}
