<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RekamanController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LihatController;
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
//     return view('app');
// });

Route::get('/login',[AuthController::class,'formLogin'])->name('login');
Route::post('/login',[AuthController::class,'login']);
Route::get('/register',[AuthController::class,'formRegister'])->name('register');
Route::post('/register',[AuthController::class,'register']);
Route::get('/forget-pass',[ForgotPasswordController::class,'getEmail'])->name('forgot-pass');
Route::post('/forget-pass',[ForgotPasswordController::class,'postEmail']);
Route::get('/reset-pass/{token}',[ResetPasswordController::class,'getPass']);
Route::post('/reset-pass',[ResetPasswordController::class,'updatePass']);

//admin login dulu
Route::group(['middleware'=>'auth'], function(){
    Route::get('/$',[RekamanController::class,'index'])->name('$');
    Route::get('/$-rekaman',[RekamanController::class,'rekaman']);
    
    
    Route::get('/$1',[RekamanController::class,'tampil1']);
    Route::get('/$2',[RekamanController::class,'tampil2']);
    Route::get('/$3',[RekamanController::class,'tampil3']);
    Route::get('/$4',[RekamanController::class,'tampil4']);
    Route::get('/$5',[RekamanController::class,'tampil5']);
    Route::get('/$6',[RekamanController::class,'tampil6']);
    Route::get('/$7',[RekamanController::class,'tampil7']);
    Route::get('/$8',[RekamanController::class,'tampil8']);
    
    Route::post('/$1-rekaman',[RekamanController::class,'simpan1']);
    Route::post('/$2-rekaman',[RekamanController::class,'simpan2']);
    Route::post('/$3-rekaman',[RekamanController::class,'simpan3']);
    Route::post('/$4-rekaman',[RekamanController::class,'simpan4']);
    Route::post('/$5-rekaman',[RekamanController::class,'simpan5']);
    Route::post('/$6-rekaman',[RekamanController::class,'simpan6']);
    Route::post('/$7-rekaman',[RekamanController::class,'simpan7']);
    Route::post('/$8-rekaman',[RekamanController::class,'simpan8']);
    
    Route::put('/$-rekaman/{id}-Semester-I',[RekamanController::class,'update1']);
    Route::put('/$-rekaman/{id}-Semester-II',[RekamanController::class,'update2']);
    Route::put('/$-rekaman/{id}-Semester-III',[RekamanController::class,'update3']);
    Route::put('/$-rekaman/{id}-Semester-IV',[RekamanController::class,'update4']);
    Route::put('/$-rekaman/{id}-Semester-V',[RekamanController::class,'update5']);
    Route::put('/$-rekaman/{id}-Semester-VI',[RekamanController::class,'update6']);
    Route::put('/$-rekaman/{id}-Semester-VII',[RekamanController::class,'update7']);
    Route::put('/$-rekaman/{id}-Semester-VIII',[RekamanController::class,'update8']);
    
    Route::get('/$-rekaman/{id}/Semester-I',[RekamanController::class,'delete1']);
    Route::get('/$-rekaman/{id}/Semester-II',[RekamanController::class,'delete2']);
    Route::get('/$-rekaman/{id}/Semester-III',[RekamanController::class,'delete3']);
    Route::get('/$-rekaman/{id}/Semester-IV',[RekamanController::class,'delete4']);
    Route::get('/$-rekaman/{id}/Semester-V',[RekamanController::class,'delete5']);
    Route::get('/$-rekaman/{id}/Semester-VI',[RekamanController::class,'delete6']);
    Route::get('/$-rekaman/{id}/Semester-VII',[RekamanController::class,'delete7']);
    Route::get('/$-rekaman/{id}/Semester-VIII',[RekamanController::class,'delete8']);
    
    
    //tampil jumlah data dosen dan matkul
    Route::get('/$-MatKul',[MatkulController::class,'index']);
    Route::get('/$-Dosen',[DosenController::class,'index']);
    //tambah data matkul
    Route::post('/$-MatDos-mat',[MatkulController::class,'simpan']);
    //tambah data dosen
    Route::post('/$-MatDos-dos',[DosenController::class,'simpan']);
    
    Route::get('/$1-matkul',[MatkulController::class,'tampil1']);
    Route::get('/$2-matkul',[MatkulController::class,'tampil2']);
    Route::get('/$3-matkul',[MatkulController::class,'tampil3']);
    Route::get('/$4-matkul',[MatkulController::class,'tampil4']);
    Route::get('/$5-matkul',[MatkulController::class,'tampil5']);
    Route::get('/$6-matkul',[MatkulController::class,'tampil6']);
    Route::get('/$7-matkul',[MatkulController::class,'tampil7']);
    Route::get('/$8-matkul',[MatkulController::class,'tampil8']);
    
    Route::put('/$-matkul/{id}',[MatkulController::class,'update']);
    Route::get('/$-matkul/{id}',[MatkulController::class,'delete']);
    
    Route::get('/$1-dosen',[DosenController::class,'tampil1']);
    Route::get('/$2-dosen',[DosenController::class,'tampil2']);
    Route::get('/$3-dosen',[DosenController::class,'tampil3']);
    Route::get('/$4-dosen',[DosenController::class,'tampil4']);
    Route::get('/$5-dosen',[DosenController::class,'tampil5']);
    Route::get('/$6-dosen',[DosenController::class,'tampil6']);
    Route::get('/$7-dosen',[DosenController::class,'tampil7']);
    Route::get('/$8-dosen',[DosenController::class,'tampil8']);
    
    Route::put('/$-dosen/{id}',[DosenController::class,'update']);
    Route::get('/$-dosen/{id}',[DosenController::class,'delete']);
    
    Route::get('/$-dosen',[DosenController::class,'index']);
    
    Route::get('/$-blog',[BlogController::class,'index']);

    Route::get('/$-blog/edit/{id}/Semester-I',[BlogController::class,'edit1']);
    Route::get('/$-blog/edit/{id}/Semester-II',[BlogController::class,'edit2']);
    Route::get('/$-blog/edit/{id}/Semester-III',[BlogController::class,'edit3']);
    Route::get('/$-blog/edit/{id}/Semester-IV',[BlogController::class,'edit4']);
    Route::get('/$-blog/edit/{id}/Semester-V',[BlogController::class,'edit5']);
    Route::get('/$-blog/edit/{id}/Semester-VI',[BlogController::class,'edit6']);
    Route::get('/$-blog/edit/{id}/Semester-VII',[BlogController::class,'edit7']);
    Route::get('/$-blog/edit/{id}/Semester-VIII',[BlogController::class,'edit8']);

    Route::put('/$-blog/update/{id}',[BlogController::class,'update']);
    Route::get('/$-blog/delete/{id}/{semester}',[BlogController::class,'delete']);

    Route::post('/$-blog',[BlogController::class,'simpan']);

    Route::get('/$1-blog',[BlogController::class,'tampil1']);
    Route::get('/$2-blog',[BlogController::class,'tampil2']);
    Route::get('/$3-blog',[BlogController::class,'tampil3']);
    Route::get('/$4-blog',[BlogController::class,'tampil4']);
    Route::get('/$5-blog',[BlogController::class,'tampil5']);
    Route::get('/$6-blog',[BlogController::class,'tampil6']);
    Route::get('/$7-blog',[BlogController::class,'tampil7']);
    Route::get('/$8-blog',[BlogController::class,'tampil8']);


     // update password user
    Route::get('/$/sett/{id}','RekamanController@seting')->name('change.pass');
    Route::post('/$/{id}','RekamanController@updateUser');
    
     //log out
    Route::get('logout',[AuthController::class,'logout'])->name('logout');
    

});

Route::get('/',[LihatController::class,'index']);

Route::get('/!1',[LihatController::class,'sms1']);
Route::get('/!2',[LihatController::class,'sms2']);
Route::get('/!3',[LihatController::class,'sms3']);
Route::get('/!4',[LihatController::class,'sms4']);
Route::get('/!5',[LihatController::class,'sms5']);
Route::get('/!6',[LihatController::class,'sms6']);
Route::get('/!7',[LihatController::class,'sms7']);
Route::get('/!8',[LihatController::class,'sms8']);

Route::get('/!1/{id}-{slug}',[LihatController::class,'matkul1']);
Route::get('/!2/{id}-{slug}',[LihatController::class,'matkul2']);
Route::get('/!3/{id}-{slug}',[LihatController::class,'matkul3']);
Route::get('/!4/{id}-{slug}',[LihatController::class,'matkul4']);
Route::get('/!5/{id}-{slug}',[LihatController::class,'matkul5']);
Route::get('/!6/{id}-{slug}',[LihatController::class,'matkul6']);
Route::get('/!7/{id}-{slug}',[LihatController::class,'matkul7']);
Route::get('/!8/{id}-{slug}',[LihatController::class,'matkul8']);

Route::get('/!1/stream/{id}/{slug}',[LihatController::class,'stream1']);
Route::get('/!2/stream/{id}/{slug}',[LihatController::class,'stream2']);
Route::get('/!3/stream/{id}/{slug}',[LihatController::class,'stream3']);
Route::get('/!4/stream/{id}/{slug}',[LihatController::class,'stream4']);
Route::get('/!5/stream/{id}/{slug}',[LihatController::class,'stream5']);
Route::get('/!6/stream/{id}/{slug}',[LihatController::class,'stream6']);
Route::get('/!7/stream/{id}/{slug}',[LihatController::class,'stream7']);
Route::get('/!8/stream/{id}/{slug}',[LihatController::class,'stream8']);

Route::get('/!-Videos',[LihatController::class,'video']);
Route::get('/!-Artikel',[BlogController::class,'artikel']);
Route::get('/reading-artikel-materi/{id}/{matkul}/{slug}',[BlogController::class,'reading']);
Route::get('/!-Artikel-Mata-Kuliah/{id}/{slug}',[BlogController::class,'readingMat']);

Route::get('/contact_us',[AuthController::class,'contact']);
Route::post('/contact_us/send',[AuthController::class,'kirim']);