<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;
use App\Models\Admin;
use App\Models\Food;


class AdminController extends Controller
{
    //ADMIN LOGIN

    function adminLogin(Request $req){
      // return redirect('showList');
    
      $req->validate([
            'email'=>'required' ,
            'pass'=>'required | min:4'
            ]);
      $data = $req->input();
      $email = $req->input('email');
      $password = $req->input('pass');
    
      $checkLogin = DB::table('admin')->where(['aEmail'=>$email])->get();
      if(count($checkLogin) > 0 && Hash::check($password, $checkLogin[0]->aPass))
      {
        // $req->session()->put('user', $data['email']);
        $req->session()->put('user',  $checkLogin);
        return redirect('/adminprofile');
    
        // $collection2= DB::table('food')->simplePaginate(3);
        // return view('adminprofile',['collection2'=>$collection2]);
        // echo "Login SuccessFull<br/>"; 
      }
      else
      {
        return redirect('adminlogin')->with('incorrect','User Email and Password doesnot match');
      ;
      }
    }
    
    
    
    // function adminLogin(Request $req){
    //     // return redirect('showList');

    //       $req->validate([
    //             'email'=>'required' ,
    //             'pass'=>'required | min:4'
    //             ]);
    //       $data = $req->input();
    //       $email = $req->input('email');
    //       $password = $req->input('pass');

    //       $checkLogin = DB::table('admin')->where(['aEmail'=>$email,'aPass'=>$password])->get();
    //         if(count($checkLogin)  >0)
    //         {
    //           // $req->session()->put('user', $data['email']);
    //           $req->session()->put('user',  $checkLogin);
    //           return redirect('/adminprofile');

    //           // $collection2= DB::table('food')->simplePaginate(3);
    //           // return view('adminprofile',['collection2'=>$collection2]);
    //           // echo "Login SuccessFull<br/>"; 
    //         }
    //         else
    //         {
    //           return redirect('adminlogin')->with('incorrect','User Email and Password doesnot match');
    //         ;
    //         }
    //    }

       
       function dashbord(Request $req){
         
        $collection2= DB::table('food')->simplePaginate(5);;
        return view('adminprofile',['collection2'=>$collection2]);
      }


//admin edit
       public function editAdmin(Request $req, Admin $post,$id)
       {
           $data=Admin::find($id);
           $data->fName=$req->name; //->uNmae(db)=->name(input)
           $data->fInfo=$req->info;
           $data->fPrice=$req->price;
           $data->fType=$req->type;

           $data->update();
           return redirect('demo2')->with('updatemessage','Item updated successfully');
       }   
//Pass change
public function passChange(Request $req, Admin $post,$id)
{
    $data=Admin::find($id);
    $data->aPass=$req->newPass; //->uNmae(db)=->name(input)
    

    $data->update();
    return redirect('adminInfoShow')->with('updatemessage','Item updated successfully');
}
}
