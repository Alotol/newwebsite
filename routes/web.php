<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;
use App\Http\Controllers\FormController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\NewsiteController;
use App\Http\Controllers\PhoneController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/news', function(){
//     return 'NEWS PAGE';
// });

// Route::get('news/{id}', function($id){
//     return "news : $id";
// })->whereNumber('id');

// Route::get('users/{name}', function($name){
//    return "Welcome : $name";
// })->whereAlpha('name');



// Route::prefix('/adminpanel')->Group(function() {

//     Route::get('posts',function()
//     {return 'admin posts';
//     });
//     Route::get('news',function(){
//         return 'admin news';
//     });
//     Route::get('articles',function(){
//         return 'admin articles';
//     });
//     Route::get('users',function(){
//         return 'admin users';
//     });
//     Route::get('services',function(){
//         return 'admin services';
//         });
// });

// Route::get('contact-us', function(){
//     return "contact us website";
//  })->name('contactus');


// Route::get('test',[TestController::class , 'index']);


Route::get('test',[TestController::class , 'index']);

Route::prefix('/Newsite')->group(function(){

Route::get('/',[NewsiteController::class,'index'])->name('homepage');
Route::get('/about',[NewsiteController::class,'about'])->name('aboutpage');
Route::get('/post/{title}',[NewsiteController::class,'post'])->name('postpage');
Route::get('/contact',[NewsiteController::class,'contact'])->name('contactpage');

});


Route::get('form1',[FormController::class,'form1']);
Route::post('form1',[FormController::class,'form1Submit'])->name('form1');


Route::get('form2',[FormController::class,'form2']);
Route::post('form2',[FormController::class,'form2Submit'])->name('form2');


Route::get('form3',[FormController::class,'form3']);
Route::post('form3',[FormController::class,'form3Submit'])->name('form3');


Route::get('form4',[FormController::class,'form4']);
Route::post('form4',[FormController::class,'form4Submit'])->name('form4');

Route::get('form5',[FormController::class,'form5']);
Route::post('form5',[FormController::class,'form5Submit'])->name('form5');




// Route::prefix('courses')->name('courses.')->group(function(){

//     Route::get('/', [CourseController::class,'index'])->name('index');

//     Route::get('/create', [CourseController::class,'create'])->name('create');
//     Route::post('/create', [CourseController::class,'store'])->name('store');

//     Route::get('/{id}/edit', [CourseController::class,'edit'])->name('edit');
//     Route::put('/{id}/edit', [CourseController::class,'update'])->name('update');

//     Route::delete('/{id}/delete',[CourseController::class,'destroy'])->name('destroy');
// });i



Route::resource('courses', CourseController::class);

Route::resource('phone', PhoneController::class);



