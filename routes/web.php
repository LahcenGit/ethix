<?php

use App\Http\Controllers\InvestorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UserpropertyController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\UserDocumentController;
use App\Http\Controllers\VersmentController;
use App\Http\Controllers\EthixController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\UserinformationController;
use App\Http\Controllers\VirmentController;
use App\Http\Controllers\VirmentAdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqMailController;
use Illuminate\Support\Facades\Auth;

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



Route::get('/symlink', function () {

    $target =$_SERVER['DOCUMENT_ROOT'].'/storage/app/public';
    $link = $_SERVER['DOCUMENT_ROOT'].'/public/storage';

    symlink($target, $link);
    echo "Done";
 });


Route::get('/', function () {
    return view('welcome');
});
Route::get('/add-file', function () {
    return view('add-files');
});
Route::get('/politique-confidentialite', function () {
    return view('politique-confidentialite');
});
Route::get('/ccm', function () {
    return view('ccm');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/blogs', function () {
    return view('blogs');
});
Route::get('/detail-blog', function () {
    return view('detail-blog');
});

Route::get('/logout', function () {
    return redirect('/login'); // Redirige l'utilisateur vers la page login.
});

//admin route
Route::resource('/dashboard-admin/properties',PropertyController::class)->middleware('can:admin');
Route::resource('/dashboard-admin/users',InvestorController::class)->middleware('can:admin');
Route::resource('/dashboard-admin/versments',VersmentController::class)->middleware('can:admin');
Route::resource('/dashboard-admin/blogs',BlogController::class)->middleware('can:admin');
Route::resource('/dashboard-admin/investissements',UserpropertyController::class)->middleware('can:admin');
Route::resource('/dashboard-admin/virments',VirmentAdminController::class)->middleware('can:admin');
Route::get('/dashboard-admin/edit-compte/{id_user}/{id_virment}', [App\Http\Controllers\VirmentAdminController::class, 'showModal']);
Route::resource('/newsletter',NewsletterController::class);
Route::get('/dashboard-admin/view-investor/{id}',[App\Http\Controllers\InvestorController::class,'getInvestor']);
Route::get('/modal-update-ethix',[App\Http\Controllers\EthixController::class,'getModal']);
Route::post('/update-ethix',[App\Http\Controllers\EthixController::class,'updateValue']);
Route::get('dashboard-admin/add-versment',[App\Http\Controllers\VersmentController::class,'addVersment']);
Route::get('reminder-mail',[App\Http\Controllers\ReminderController::class,'index']);

//investor route
Route::get('/app/show-modal-virement-info', [App\Http\Controllers\InvestorController::class, 'showModal']);
Route::get('/show-file/{id}',[App\Http\Controllers\InvestorController::class,'showFile']);
Route::get('app/achat-ethix/{id}',[App\Http\Controllers\UserpropertyController::class,'achatEthix']);
Route::get('app/investissements',[App\Http\Controllers\UserpropertyController::class,'investissements']);
Route::post('app/store-ethix',[App\Http\Controllers\UserpropertyController::class,'storeEthix']);
Route::get('/downolad-file/{link}',[App\Http\Controllers\InvestorController::class,'downloadFile']);
Route::resource('/app/add-file',UserDocumentController::class);
Route::resource('/app/add-info',UserinformationController::class);
Route::get('/app/properties', [App\Http\Controllers\InvestorController::class, 'properties']);
Route::get('/app', [App\Http\Controllers\InvestorController::class, 'dashboard'])->middleware('verified');
Route::resource('/app/profil', ProfilController::class);
Route::resource('/app/virment', VirmentController::class);
Route::get('/send-mail', [App\Http\Controllers\VirmentMailController::class, 'index']);
Route::get('/app/detail-property/{id}', [App\Http\Controllers\InvestorController::class, 'detailProperty']);
Auth::routes(['verify' => true]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/dashboard-admin',AdminController::class)->middleware('can:admin');
// contact route
Route::resource('/contact',ContactController::class);
Route::get('refresh_captcha', [App\Http\Controllers\ContactController::class, 'refreshCaptcha'])->name('refresh_captcha');
//faq mail route
Route::resource('/faq-mail',FaqMailController::class);
