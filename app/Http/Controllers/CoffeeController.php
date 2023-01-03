<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\Customer;
use App\Models\Admin;
use App\Models\Food;

class CoffeeController extends Controller
{


    



//FOOD ITEM add
    function addItem(Request $req){
      $req->validate([
      'name'=>'required',
      'type'=>'required',
      'price'=>'required'
      ]);

      $data= new Food;
      $data->fName=$req->name; //->uNmae(db)=->name(input)
      $data->fInfo=$req->info;
      $data->fPrice=$req->price;
      $data->fType=$req->type;
      // $data->pic=$req->image;
    // $data->pic='image';

      // $lastId=$data->id; 

      $image=$req->file('image');

      $image_name=$image->getClientOriginalName();
      
      $folder="foodImage/";
      $image->move($folder,$image_name);

      $imageUrl= $folder.$image_name;
      $data->pic=$imageUrl;

      $data->save();
      return redirect('addItem')->with('addItemMsg','Item added to the menu successfully!');//page url
      }



      

//FOOD ITEM SHOW
    function show(){
                
     $collection= DB::table('food')->simplePaginate(5);
      return view('showitem',['collection'=>$collection]);
      // user is view page and 'collection' is a key
      }
      
//FOOD ITEM SHOW in Customer
  function showMenu(){
              
  $collection= DB::table('food')->get();
    return view('showMenu',['collection'=>$collection]);
    // user is view page and 'collection' is a key
    }


//Food update View     
        public function editItem(Food $post,$id){
        $data=Food::find($id);
        return view('itemupdate',['posts'=>$data]);//update page 
        }
        
        
//Food update  
        public function updateItem(Request $req, Food $post,$id)
        {
            $data=Food::find($id);
            $data->fName=$req->name; //->uNmae(db)=->name(input)
            $data->fInfo=$req->info;
            $data->fPrice=$req->price;
            $data->fType=$req->type;

          
            
            // $image=$req->file('image');

            // $image_name=$image->getClientOriginalName();
            
            // $folder="foodImage/";
            // $image->move($folder,$image_name);

            // $imageUrl= $folder.$image_name;
            // $data->pic=$imageUrl;

            $data->update();
            return redirect('showitem')->with('updatemessage','Item updated successfully');
        }


//FOOD Delete View

        public function delete(Food $post,$id){
          $posts=Food::find($id);
          return view('itemdelete',['posts'=>$posts]);
          }

//FOOD Delete          

        public function deleteItem($id){
          $posts=Food::find($id);
          $posts->delete();
          return redirect('showitem')->with('dltMsg','Item deleted successfully');
          }

 


//Customer  SHOW
  function showCus(){
              
    $collection= DB::table('customer')->simplePaginate(10);
    return view('showCustomer',['collection'=>$collection]);
    // user is view page and 'collection' is a key
    } 




//Single Show
    public function single(Food $post,$id){
      $data=Food::find($id);
      return view('single',['posts'=>$data]);//update page 
      }

//Search
     public function search(Request $req){
        
         $data=Food::where('fName','like','%'.$req->input('search').'%')->get();

         return view('search',['items'=>$data]);
      }

    

 }
