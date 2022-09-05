<?php


use App\Http\Livewire\Home;
use App\Http\Livewire\Article;
use App\Http\Livewire\Coba;
use App\Http\Livewire\Contact;
use App\Http\Livewire\Gallery;
use App\Http\Livewire\Login;
use App\Http\Livewire\Report;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CreateGuest;
use App\Http\Livewire\Guest;
use App\Http\Livewire\GuestEng;
use App\Http\Livewire\Siswa\Index;

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
// Route::get('/', function () {
//     return view('app');
// });
Route::get('/', Home::class)->name('home');

// Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
//     return view('home');
// })->name('home');

// Route::get('/coba', function () {
//     return view('coba');
// });
// Route::get('/report', function () {
//     return view('report');
// });
Route::get('/login', function () {
    return view('login');
});
Route::get('/form', function () {
    return view('form');
});
// Route::get('/article', function () {
//     return view('livewire.article');
// });

// Route::get('/article', Article::class)->name('livewire.article');
// Route::get('/report', function () {
//         return view('livewire.report');
// });
Route::get('/login', Login::class)->name('livewire.login');
Route::get('/report', Report::class)->name('livewire.report');
Route::get('/gallery', Gallery::class)->name('livewire.gallery');
Route::get('/report/{id}', Report::class);
Route::get('/coba', Coba::class)->name('livewire.coba');
Route::post('/submit', [Guest::class,'submit'])->name('submit');
Route::get('/guest', Guest::class)->name('guest');
Route::get('/guest-eng', GuestEng::class)->name('guest-eng');
Route::get('/contact', Contact::class)->name('livewire.contact');
// Route::get('/contact', Contact::class)->name('contact');
// Route::get('/form', Contact::class)->name('contact');
Route::get('/list-siswa', Index::class)->name('index');;