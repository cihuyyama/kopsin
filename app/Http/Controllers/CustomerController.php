<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;
use App\Models\Admin;
use App\Models\Food;


class CustomerController extends Controller
{
      
//New Customer ADD
    function create(Request $req){
        $req->validate([
        'name'=>'required',
        'email'=>'required |email|unique:customer,cEmail',
        'pass'=>'required | min:4',
        
        ]);
    
        $data= new Customer;
        $data->cName=$req->name; //->uNmae(db)=->name(input)
        $data->cEmail=$req->email;
        $data->cPass=Hash::make($req->pass);
        $data->cPhone=$req->phone;
        $data->cAddress=$req->address;
        $data->cPay=$req->pay;
        $data->cSex=$req->sex;

        $data->save();
        return redirect('customerlogin')->with('successfull','Account created successfully! Login now!');//page url
        }



//Customer Login    

function customerLogin(Request $req){
    
  $req->validate([
        'email'=>'required' ,
        'pass'=>'required | min:4'
        ]);
  $data = $req->input();

  $email = $req->input('email');
  $password = $req->input('pass');

  $user = DB::table('customer')->where('cEmail', $email)->first();
    if ($user && Hash::check($password, $user->cPass))
    {
        $req->session()->put('user',  $user);
        return redirect('/index'); 
    }
    else
    {
        return redirect('customerlogin')->with('incorrect','Wrong input data found!');
    }
}

    // function customerLogin(Request $req){
    
    //   $req->validate([
    //         'email'=>'required' ,
    //         'pass'=>'required | min:4'
    //         ]);
    //   $data = $req->input();

    //   $email = $req->input('email');
    //   $password = $req->input('pass');
  
    //     //echo session('user');

    //   $checkLogin = DB::table('customer')->where(['cEmail'=>$email,'cPass'=>$password])->get();
    //     if(count($checkLogin)  >0)
    //     {
          

    //       // $collection= DB::table('customer')->where(['cEmail'=>$email])->get();
        
    //       $req->session()->put('user',  $checkLogin);

    //     //  return view('customerprofile',['collection2'=>$collection2]);
    //       return redirect('/index'); 
    //     }
    //     else
    //     {
    //       return redirect('customerlogin')->with('incorrect','Wrong input data found!');
    //     }
    // }
///
    function index(Request $req){
         
      $collection2= DB::table('food')->simplePaginate(20);;
      return view('index',['collection2'=>$collection2]);
    }
//Pass change
// public function passChange(Request $req, Admin $post,$id)
// {
//     $data=Admin::find($id);
//     $data->aPass=$req->newPass; //->uNmae(db)=->name(input)
    

//     $data->update();
//     return redirect('adminInfoShow')->with('updatemessage','Item updated successfully');
// }

}
