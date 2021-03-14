<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;
use App\Http\Controllers\BlogController;





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


Route::get('post/create', function () {
    DB::table('post')->insert([
        'title'=>'Lab 4 Database',
        'body'=>'i thought i wouldn\"t finish the project,but i did',
    ]);
});
Route::get('post',[BlogController::class, 'index']);


Route::get('post/add',function(){
    return view('blog.create');
});

Route::post('post/add',[BlogController:: class,'store' ])->name('add-post');


 



