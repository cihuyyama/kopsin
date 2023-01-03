<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\Customer;
use App\Models\Admin;
use App\Models\Food;
use App\Models\Cart;
use App\Models\Carts;
use App\Models\Order;
use App\Models\Payment;
use Session;


class BillController extends Controller
{
    

    //BILL
    function billShow(){
                    
      // $collection= DB::select("select * from orders");
      $collection= DB::table('orders')->simplePaginate(10);
      return view('bill',['collection'=>$collection]);
     
    }
//Add to cart
    function getAddToCart(Request $req, $id){
                    
        //$product= DB::table('food')->where(['id'=>$id])->get();
        $product = DB::table('food')->find($id); 
        $oldCart= Session::has('cart')? Session::get('cart'):null;
        $cart =new Cart($oldCart);
        $cart->add($product, $product->id);

        $req->session()->put('cart', $cart);
        // dd($req->session()->get('cart'));
        return redirect('index');
        // user is view page and 'collection' is a key
    }


 //Sending Data to orderplace  
    function getCart(){
                   if(!Session::has('cart')){
                    return redirect('index');
                   } 
                   $oldCart=Session::get('cart');
                   $cart= new Cart($oldCart);
                   $totalCharge= $cart->totalPrice + $cart->charge;
                   $charge=$cart->charge;
                   $discount=0.1 * $cart->totalPrice;
                   $total= $totalCharge- $discount;
                   
                   return view('orderplace',['products'=>$cart->items, 'totalPrice'=>$cart->totalPrice,'discount'=>$discount, 'totalCharge'=>$totalCharge,'charge'=>$charge, 'total'=>$total]);
    }

 //Saving to data base  
   public function checkout(Request $req){

        if(!Session::has('cart')){
            return redirect('index');
        }
        else{
        
             $user= Session::get('user');
            
            $userId=$user[0]->id;
            
           
            $oldCart = Session::get('cart');
            $cart= new Cart($oldCart);
    
            $order= new Order;
            $order->cart=$req->productId; 
            $order->payment_id=$req->qty; 
           // $order->cart = serialize($cart);
            
            $order->name= $req->DelName;
            $order->address= $req->DelAddress;
           
            // $order->payment_id = ++$order->payment_id;
            $order->user_id= $userId;
           $total= $req->total;
           $discount= $req->discount;
          $charge= $req->charge;
           
            // orders()->save($order);
            $order->save();
           Session::forget('cart');
        //    $orderid->DB::table('orders')->find($id); 
        $orderid=$order->id;
          
        }

    //    return redirect('payment')->with('orderConfirm','Order Confirm! Choose Payment Method');
 return view('payment',['orders'=>$order,'order_id'=>$orderid ,'total'=>$total,'charge'=>$charge,'discount'=>$discount])->with('orderConfirm','Order Confirm! Choose Payment Method');

    }


    public function showOrder(){
        
    

        // $orders= DB::table('orders')->get();
        //  $orders->transform(function($order, $key){
        //    // $order->cart= unserialize($order->cart);
        //     return $order;

        // });

            // $pattern='!s:(\d+):"(.*?)";!e';
            // $order->cart = preg_replace_callback( $pattern,'!s:(\d+):"(.*?)";!e',"'s:'.strlen('$2').':\"$2\";'",  $order->cart);
            // var_dump(unserialize( $order->cart));
           
            $user= Session::get('user');
            $userId=$user[0]->id;

            $items= DB::table('orders')->join('food','orders.cart','=','food.id')->where('orders.user_id',$userId)->select('food.*')->get();
            $pay= DB::table('payment')->get();
      
            $orders= DB::table('orders')->where('orders.user_id',$userId)->get();
       

        return view('order',['orders'=>$orders,'items'=>$items,'pay'=>$pay]);

    }






    
    function getReduceOne( $id){
                    
        //$product= DB::table('food')->where(['id'=>$id])->get();
       
        $oldCart= Session::has('cart')? Session::get('cart'):null;
        $cart =new Cart($oldCart);
        $cart->reduceOne($id);

        Session::put('cart',$cart);
        
        return redirect('orderplace');
      
    }

 //Saving to data base  
 public function pay(Request $req){

    
  
    
         $user= Session::get('user');
        
        $userId=$user[0]->id;
        
       
      
        $payment= new Payment;
        // $order->cart=$req->productId; 
       echo  $payment->user_id= $userId;       
       echo  $payment->pType= $req->type;
       echo  $payment->amount= $req->total;
       echo  $payment->discount= $req->discount;
       echo  $payment->charge= $req->charge;
       echo  $payment->order_id = $req->order_id;
      
        
       
        // orders()->save($order);
       $payment->save();
        Session::forget('cart');
      
    

   return redirect('index')->with('orderConfirm','Order Confirm! Choose Payment Method');


}  

}
