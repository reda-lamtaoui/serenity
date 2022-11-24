<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Mail\MailController;
use App\Http\Controllers\TypeaheadController;



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
# Socialite URLs


// La redirection vers le provider
Route::get("redirect/{provider}", [LoginController::class, 'redirect'])->name('socialite.redirect');

// Le callback du provider
Route::get("{provider}/callback", [LoginController::class, 'callback'])->name('socialite.callback');


Route::get("/logout", [LoginController::class, 'logout']);

Route::get("/send", [MailController::class, 'store'])->name('send');


Route::get('/', function () {
    return view('welcome');
});
Route::get('/QuiSommesNous', function () {
    return view('quiNous');
});
Route::get('/contactezNous', function () {
    return view('contactezNous');
});
Route::get('/bienEtreMental', function () {
    return view('bienEtreMental');
});
Route::get('/praticien', function () {
    return view('praticien');
});
Route::get('/bienEtrePhysique', function () {
    return view('bienEtrePhysique');
});
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/relaxation', function () {
    return view('Relaxation');
});
Route::get('/prestation', function () {
    return view('prestation');
});
Route::get('/rdv', function () {
    return view('rdv');
});
Route::get('/rdv2', function () {
    return view('rdv2');
});
Route::get('/rdv3', function () {
    return view('rdv3');
});
Route::get('/apropos', function () {
    return view('aproposDuPraticien');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/blog2', function () {
    return view('blog2');
});
Route::get('/reservation', function () {
    return view('reservation');
});
Route::get('/aide', function () {
    return view('aide');
});
Route::get('/favoris', function () {
    return view('favoris');
});
Route::get('/mention', function () {
    return view('mention');
});
Route::get('/parametre', function () {
    return view('parametre');
});
Route::get('/dashbord', function () {
    return view('dashboard');
});


Route::get('/admin_praticien', function () {
    return view('admin_praticien');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index', function () {
    return view('static/welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',
        [DashboardController::class, 'redirect'])->name('dashboard');
    Route::get('/index', function () {
    return view('static/welcome');
});
    Route::get('/dashboard2', function () {
        return view('dashboard');
    })->name('dashboard2');
    Route::get('/praticien2', function () {
    return view('praticien2');
});
     Route::get('/praticien3', function () {
    return view('praticien3');
});
     Route::get("/praticien3", [HomeController::class, 'liste'])->name('praticien3');
     Route::get('/promo', function () {
        return view('promo');
    })->name('promo');
      Route::get('/parametre2', function () {
        return view('parametre2');
    })->name('parametre2');
    
});
 Route::get('/admin/login', function () {
    return view('auth/login2');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'role:client'])->group(function () {
   Route::get('/profil_client', function () {
    return view('profil_client');
})->name('profil_client');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'role:praticien'])->group(function () {
  Route::get('/profil_praticien', function () {
    return view('profil');
})->name('profil_praticien');
});

Route::get('/autocomplete-search', [TypeaheadController::class, 'autocompleteSearch']);