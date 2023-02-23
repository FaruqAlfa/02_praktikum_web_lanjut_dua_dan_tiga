<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [PageController::class,'index']);

// Route::get('/About', [PageController::class,'About']);

// Route::get('/Articles/{id}', [PageController::class,'Articles']);


// Route::get('/', [HomeController::class,'index']);

// Route::get('/About', [AboutController::class,'About']);

// Route::get('/Articles/{id}', [ArticleController::class,'Articles']);

Route::get('/', function(){
    echo "<h1 style= text-align:center>Ini Halaman Home</h1>";
});

Route::prefix('product')->group(function (){
    Route::get('/marbel-edu-games', function(){
        echo"ini halaman edu games";
    });

    Route::get('/marbel-and-friends-kids-games', function(){
        echo"ini halaman marbel aand friends-kids-games";
    });

    Route::get('/riri-story-books', function(){
        echo"ini halaman riri story books";
    });

    Route::get('/kolak-kids-songs', function(){
        echo"ini halaman kolak kids songs";
    });

});

Route::get('/news/{links?}', function ($links = ''){
    if($links== ''){
        echo "ini halaman News";
    }
    else{
        echo "ini halaman educa studio berbagi untuk warga sekitar terdampak covid 19";
    }
});

Route::prefix('program')->group(function(){
    Route::get('/karir', function(){
        echo"ini halaman karir";
    });

    Route::get('/magang', function(){
        echo"ini halaman magang";
    });

    Route::get('/kunjungan-industri', function(){
        echo"ini halaman kunjungan industri";
    });
});

Route::get('/AboutUs', function(){
    return 'ini halaman About Us';
});

Route::resource('/contact-us', ContactController::class)->only([
'show'
]);