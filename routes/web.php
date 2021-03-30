<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Models\TheLoai;
use App\Models\loaitin;


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
Route::get('foo',function(){
    $a=10;
    $b=8;
    return $a. '+' .$b. '='.($a + $b);
});
Route::get('User/{age}',function($age){
    return 'Tuoi' .$age;
})->middleware('checkage');
Route::get('user/{name?}',function ($name = 'PhungVanTan')
{
    return $name;
});
Route::get('posts/{post}/comments/{comment}', function($postID, $commentID){
    return 'Post: '.$postID. '<br>'.' Comment: '.$commentID;
});
// Route::prefix('Admin')->group(function(){
//     Route::get('User/{id}',function($id){
//         return 'User'.$id;
//     }
// // });

/**
 * Route for The Loai
 */
// Index URI: theloais
Route::get('theloais', function(){
    $listTheLoai = TheLoai::all();
    return view('theloai.index', array('listTheLoai' => $listTheLoai));
})->name('theloais.index');

// Create URI: theloais/create
Route::get('theloais/create', function(){
    return view('theloai.create');
})->name('theloais.create');

// Store URI: theloais
Route::post('theloais', function(Request $request){
    TheLoai::create($request->all());
    return redirect()->route('theloais.index');
})->name('theloais.store');

// Show URI: theloais/{id}

Route::get('theloais/{id}', function($id){
    $theloai = TheLoai::find($id);
    return view('theloai.show', array('theloai' => $theloai));
})->name('theloais.show');

// Edit URI: theloais/{id}/edit
Route::get('theloais/{id}/edit', function($id){
    $theloai = TheLoai::find($id);
    return view('theloai.edit', array('theloai' => $theloai));
})->name('theloais.edit');

// Update URI: theloais/{id}
Route::put('theloais/{id}', function($id, Request $request){
    $theloai = TheLoai::find($id);
    $theloai->update($request->all());
    return redirect()->route('theloais.index');
})->name('theloais.update');

// Delete URI: theloais/{id}
Route::delete('theloais/{id}', function($id){
    TheLoai::destroy($id);
})->name('theloais.destroy');




/*************************
 * Route for Loai Tin
 *************************/
// Index URI: loaitin
Route::get('loaitin', function(){
    $listLoaiTin = loaitin::all();
    return view('loaitin.index', array('listLoaiTin' => $listLoaiTin));
})->name('loaitin.index');

// Create URI: loaitin/create
Route::get('loaitin/create', function(){
    return view('loaitin.create');
})->name('loaitin.create');

// Store URI: loaitin
Route::post('loaitin', function(Request $request){
    loaitin::create($request->all());
return redirect()->route('loaitin.index');
})->name('loaitin.store');

// Show URI: loaitin/{id}

Route::get('loaitin/{id}', function($id){
    $loaitin = loaitin::find($id);
    return view('loaitin.show', array('loaitin' => $loaitin));
})->name('loaitin.show');

// Edit URI: loaitin/{id}/edit
Route::get('loaitin/{id}/edit', function($id){
    $loaitin = loaitin::find($id);
    return view('loaitin.edit', array('loaitin' => $loaitin));
})->name('loaitin.edit');

// Update URI: loaitin/{id}
Route::put('loaitin/{id}', function($id, Request $request){
    $loaitin = loaitin::find($id);
    $loaitin->update($request->all());
    return redirect()->route('loaitin.index');
})->name('loaitin.update');

// Delete URI: loaitin/{id}
Route::delete('loaitin/{id}', function($id){
    loaitin::destroy($id);
})->name('loaitin.destroy');