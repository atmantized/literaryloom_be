<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/coba", function(){
    return response()->json([
        "nama"=>"Difa"
    ]); 
}); 

Route::post("/login", function(Request $request){
    return response()->json([
        "nama"=>"Difa"
    ]);
});

Route::post("/signup", function(Request $request){
    $email=$request->input('email');
    $password=$request->input('password');
    $user = new User();
    $user->email=$email;
    $user->password=bcrypt($password);
    $user->save();

    return response()->json([
        "status"=>"success"
    ]);
});