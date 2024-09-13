<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use Illuminate\App\Mail\EnquiryEmail;

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

//Route::get('/', function () {
  //  return view('frontend.home');
//});

Route::view('/trial','frontend.trial');
Route::view('/aboutus','frontend.aboutus');

Route::view('/gallery','frontend.gallery');
Route::view('/services','frontend.services');
Route::view('/privacy','frontend.privacy');
Route::view('/disclaimer','frontend.disclaimer');
Route::view('/terms','frontend.terms');
Route::view('/crypto','frontend.crypto');


Route::POST('/contactus', function(){
    $data = request(['Name', 'Email', 'Message']);

    \Illuminate\Support\Facades\Mail::to('komal.jim.mca.2022@gmail.com')
      ->send(new App\Mail\EnquiryEmail($data));


      return redirect(to:'/contactus')
        ->with('flash', 'Message Sent Successfully');

        
});


Route::view('/contactus','frontend.contactus');

Route::POST('/', function(){
  $data = request(['Name', 'Code1','MobileNo', 'Email']);

  \Illuminate\Support\Facades\Mail::to('komal.jim.mca.2022@gmail.com')
    ->send(new App\Mail\EnquiryEmail1($data));


    return redirect(to:'/')
      ->with('flash', 'Message Sent Successfully');

      
});


Route::view('/','frontend.home');