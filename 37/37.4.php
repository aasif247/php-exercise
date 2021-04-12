লারাভেলে পোস্ট রিকোয়েস্ট ম্যানেজ করা এবং মিসিং সিএসআরএফ টোকেন ইস্যু ফিক্স করা

<?php

use Illuminate\Http\Request; // write it but this isn't include in laraver 8 ,will know more about it later
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/world',function () {
  return "Hello World";
});

Route::post('/say',function (Request $request) {
    $newName = $request->post('name'); // http post verb
    echo "Hello {$newName}";
  });



  // add route address '/say' in midleware>csrf token that's why this route would be ignored from checking