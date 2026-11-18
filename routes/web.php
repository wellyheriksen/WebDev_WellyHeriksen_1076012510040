<?php

use App\Http\Controllers\LaptopController;
use Illuminate\Support\Facades\Route;
// use App\Models\Program;
use App\Http\Controllers\ProgramController;
// Route::get('/', function () {
//     return view('index');
// });

// Route::view('/about', 'contact', [
//     "name" => "Enma",
//     "email" => "emma@yahoo.com"
// ]
// );
Route::get('/',[LaptopController::class,'index']);
Route::get('/create-laptop',[LaptopController::class,'create']);
Route::post('/save-laptop',[LaptopController::class,'store'])->name("save-laptop");
Route::post('/delete-laptop',[LaptopController::class,'destroy'])->name("delete-laptop");
Route::post('/update-laptop',[LaptopController::class,'update'])->name("update-laptop");
Route::get('/edit-laptop/{id}', [LaptopController::class, 'edit'])->name("edit-laptop");
Route::post('/update-laptop/{id}', [LaptopController::class, 'update'])->name("update-laptop");












// View
// Route::view('/contact',[ProgramController::class,'showabout']);
// Route::get('/contact',[ProgramController::class,'showabout']);


// // view
// Route::get('/', [ProgramController::class,'showindex']);
// Route::get('/project',[ProgramController::class,'show']);
// Route::get('/mahasiswaview',[MahasiswaController::class,'showmahasiswa']);

// Route::get('/project', function() {
//     return view("project",[
//         'title'=>'My Project',
//         'Programs'=> Program::allData(),
//         "description" => ["Lorem ipsum dolor sit amet","First Description","Last Description"],
//         "semester",
//         "desc"
//     ]);
// });
