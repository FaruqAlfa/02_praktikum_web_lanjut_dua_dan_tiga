<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function Articles($id){
        echo"ini url /Article dengan menggunakan controller <br>
        Halaman Artikel dengan Id ".$id;
    }
}
