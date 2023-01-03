<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoffeeController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;

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

// HOME VIEW
Route::get('/', function () {
    return view('home');
});

 Route::view("home",'home');
 Route::view("contact",'contact');
 Route::view("index",'index');

 Route::get('single/{id}',[CoffeeController::class,'single']);

//CUSTOMER REGISTER
Route::view("register",'register');
Route::post('submit',[CustomerController::class,'create']);

//CUSTOMER LOGIN
Route::view("customerlogin",'customerlogin');
Route::post('customerlogin',[CustomerController::class,'customerLogin']);
Route::get('/index',[CustomerController::class,'index']);//  main page return /
        //Customer Panel
        Route::view("customerInfoShow",'customerInfoShow');   
        // Route::view("adminInfoEdit",'adminInfoEdit');   

        // Admin panel #Show Item
        Route::view("showMenu",'showMenu');
        Route::get('showMenu',[CoffeeController::class,'showMenu']);
        // Route::view("adminSettings",'adminSettings'); 
        //Route::view("customerprofile",'customerprofile');

//LOGOUT
    Route::get('/logout', function(){
        if(session()->has('user'))
        {
            session()->pull('user');
            Session::forget('cart');

        }

    return redirect('home');
    });

Route::get('/customerlogin', function(){
    if (session()->has('user'))
    {
        return redirect('index');
    }
    return view('customerlogin');
    });

// ADMIN
Route::view("/adminlogin",'adminlogin');
Route::post('/adminlogin',[AdminController::class,'adminLogin']);
Route::get('/adminprofile',[AdminController::class,'dashbord']);
// Route::view("adminprofile",'adminprofile');
    //Admin panel #Profile
    Route::view("adminInfoShow",'adminInfoShow');   
    Route::view("adminInfoEdit",'adminInfoEdit');   
   
    Route::view("adminSettings",'adminSettings');
    Route::post('passChange/{id}',[AdminController::class,'passChange']);

    Route::get('/adminlogin', function(){
    if (session()->has('user'))
    {
        return redirect('adminprofile');
    }
    return view('/adminlogin');
    });


    //Admin panel #Add Item
    Route::view("itemadd",'itemadd');
    Route::post('itemadd',[CoffeeController::class,'addItem']);
    // Admin panel #Show Item
    Route::view("showitem",'showitem');
    Route::get('showitem',[CoffeeController::class,'show']);

        //UPDATE ITEM
        Route::get('itemupdate/{id}',[CoffeeController::class,'editItem']);
        Route::post('itemupdate/{id}',[CoffeeController::class,'updateItem']);//action and function
        //Delete ITEM
        Route::get('delete/{id}',[CoffeeController::class,'delete']);
        Route::get('itemdelete/{id}',[CoffeeController::class,'deleteItem']);

    
    //Admin panel #ODER
    Route::get('bill',[BillController::class,'billShow']);
    Route::get("order",[BillController::class,'showOrder']);

    //  Route::get('/order',[CoffeeController::class,'ordershow']);
    // Route::post('itemupdate/{id}',[CoffeeController::class,'updateItem']);//action and function



    // Route::get('order',[CoffeeController::class,'showOrder']);
    // Route::get('orderadd/{price}',[BillController::class,'bill']);
    Route::get('/addtocart/{id}',[BillController::class,'getAddToCart']);
    Route::post('/addtocart',[BillController::class,'addToCart']);

    Route::get('reduce/{id}',[BillController::class,'getReduceOne']);

     Route::get('orderplace',[BillController::class,'getCart']);

     Route::post('cnfmOrder',[BillController::class,'checkout']);
     

     
    //Admin panel #Customer
    Route::get('showCustomer',[CoffeeController::class,'showCus']);

    Route::view("payment",'payment');
    Route::post('payment',[BillController::class,'pay']);

    Route::view("about",'about');

    Route::get('search',[CoffeeController::class,'search']);



        

        
