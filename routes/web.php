<?php

use App\Http\Controllers\ApplyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BootController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RaiseController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\universityController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PricingControlle;
use App\Http\Livewire\Admin\AdmiinDashboardComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Controllers\faqsController;
use App\Models\Apply;
use App\Models\PricingDetails;

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
//   return view('welcome');
// });


Route::get('/layout-page', [BootController::class, 'index']);
Route::get('/', [BootController::class, 'home']);
Route::get('/apply-page', [ApplyController::class, 'index']);
// Route::get('/faq-page', [BootController::class, 'faq']);
Route::get('/about-page', [BootController::class, 'aboutus']);
Route::get('/contact-page', [BootController::class, 'contact']);
Route::get('/login-page', [BootController::class, 'login']);
Route::get('/register-page', [BootController::class, 'register']);
Route::get('logout', 'App\Http\Controllers\BootController@logout');
Route::get('/priceedit/logout', 'App\Http\Controllers\BootController@logout');
Route::get('/uniedit/logout', 'App\Http\Controllers\BootController@logout');
Route::get('/signup',[BootController::class, 'sign']);

// Route::get('/user-profile', [BootController::class, 'user_profile']);


Route::middleware(['auth','auth:sanctum'])->group(function () {

  Route::get('/user-layout', [BootController::class, 'user_layout']);
  Route::get('/user-ongoing-order', [UserController::class, 'ongoing']);
  // Route::get('/user-ongoing-order',[BootController::class,'user_transcript']);
  Route::get('/user-transcript-current', [UserController::class, 'user_transcript']);
  Route::get('/user-transcript-previous', [BootController::class, 'user_previous']);
  Route::get('/user-payment', [BootController::class, 'user_payment']);
  Route::get('/user-raise', [BootController::class, 'user_raise']);
  Route::post('/post-query-created','App\Http\Controllers\RaiseController@create')->name('query.create');
  Route::get('/user-profile', [UserController::class, 'passwordEdit'])->name('password.edit');
  // Route::get('/user-profile',[UserController::class,'change_password']);
  Route::post('/user-profile-update',[UserController::class,'passwordUpdate'])->name('update.password');

});


Route::middleware(['authadmin', 'auth:sanctum'])->group(function () {

  Route::get('/admin-page', [BootController::class, 'admin']);
  Route::get('/adminTranscriptToday', [AdminController::class, 'transcript']);
  Route::get('/adminTranscriptWeek',[AdminController::class,'weekPay']);
  Route::get('/adminTranscriptMonth',[AdminController::class,'monthPay']);
  Route::get('/admin-manage-order-current', [AdminController::class, 'manage']);
  Route::get('/admin-manage-order-ongoing', [AdminController::class, 'manageInprogress']);
  Route::get('/admin-manage-order-completed', [AdminController::class, 'manageCompleted']);
  Route::get('/admin-manage-user', [AdminController::class, 'manageuser']);
  Route::get('/admin-manage-payment', [BootController::class, 'admin_manage_payment']);  
  Route::get('/admin-raise',[AdminController::class,'raise']);
  Route::get('/insertfaq','FaqController@insertfaq');
  Route::get('/university',[UniversityController::class, 'index']);
  Route::post('/post-uni-created','App\Http\Controllers\UniversityController@create')->name('uni.create');
  Route::get('/unidelete/{id}',[UniversityController::class, 'delete']);
  Route::get('/uniedit/{id}',[UniversityController::class, 'edit']);
  Route::Post('universityupdate',[UniversityController::class, 'update']);
  Route::get('/course',[CourseController::class, 'index']);
  Route::post('/post-course-created',[CourseController::class, 'create'])->name('cor.create');
  Route::get('/cordelete/{id}',[CourseController::class, 'delete']);
  Route::get('/coredit/{id}',[CourseController::class, 'edit']);
  Route::Post('/  ',[CourseController::class, 'update']);
  Route::get('/price',[ PricingControlle::class,'index']);
  Route::post('/post-create-price',[PricingControlle::class,'create'])->name('price.create');
  Route::get('/pricedelete/{id}',[PricingControlle::class, 'delete']);
  Route::get('/priceedit/{id}',[PricingControlle::class, 'edit']);
  Route::Post('/priceupdate',[PricingControlle::class, 'update']);
  Route::post('/post-insert-faq',[faqsController::class , 'create'])->name('faq.create');
  Route::get('/insert',[faqsController::class,'index']);
  Route::get('/faqdelete/{id}',[faqsController::class, 'delete']);
  Route::get('/faqedit/{id}',[faqsController::class, 'edit']);
  Route::post('/faqupdate',[faqsController::class, 'update']);
  Route::get('/contacts',[ContactController::class, 'index']);
  Route::Post('updateStatus',[AdminController::class,'updateStatus']);
  
  // Route::get('/admin-transcript','loginController@index');
  // Route::get('/admin-transcript', [loginController::class, 'index']);  

});

// Route::get('/',[ApplyController::class,'create'])->name('apply.create');
Route::get('/appy-page',[ApplyController::class,'index']);
Route::Post('/post-apply-created',[ApplyController::class,'create'])->name('apply.create');
Route::Post('/post-contact-created',[ContactController::class,'create'])->name('contact.create');
// Route::post('/post-query-created',[lastController::class,'create'])->name('query.create');
Route::get('/faq-page',[faqsController::class,'show']);
Route::get('/user-raise', 'App\Http\Controllers\RaiseController@index');
Route::post('sendOtp', [ApiController::class,'sendOtp']);
Route::get('applyafterLogin', 'App\Http\Controllers\ApiController@applyafterLogin');
Route::get('afterLogin', 'App\Http\Controllers\ApiController@afterLogin');
Route::Post('getCourse', 'App\Http\Controllers\ApplyController@getCourse');
Route::Post('getPrice', 'App\Http\Controllers\ApplyController@getPrice');
Route::Post('autoCal', 'App\Http\Controllers\ApplyController@autoCal');
Route::get('/tab',[UserController::class, 'tab']);