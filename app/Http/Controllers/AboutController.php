<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function About(){
        return 'ini halaman /About menggunakan conrtroller <br>
         Nama: Mukhamad Faruq Al Fahmi <br>
         Nim: 2141720066';
    }
}
