<?php

namespace App\Models;


class Cart
{
   public $items =null;
   public $totalQty =0;
   public $totalPrice=0 ;
  
   public $charge =55;


   public function __construct($oldCart)
   {
       if($oldCart){
           $this->items= $oldCart->items;
           $this->totalQty= $oldCart->totalQty;
           $this->totalPrice= $oldCart->totalPrice;
          
       }
   }

   public function add($item, $id){
    $storedItem =['id'=> $item->id,'qty'=>0, 'price'=> $item->fPrice,'name'=> $item->fName,'info'=> $item->fInfo, 'type'=> $item->fType, 'pic'=> $item->pic,'item' =>$item];
       if($this->items){
           if(array_key_exists($id, $this->items)){
            $storedItem = $this->items[$id];
           }           
       }
       $storedItem['qty']++;
       $storedItem['price']= $item->fPrice * $storedItem['qty'];
       $this->items[$id]=$storedItem;
       $this->totalQty++;
       $this->totalPrice += $item->fPrice;

   }
   public function reduceOne($id){
    if (isset($this->items[$id]) && is_object($this->items[$id])) {
        $this->items[$id]->qty--;
        $this->items[$id]->price -= $this->items[$id]->item->price;
        $this->totalQty--;
        $this->totalPrice -= $this->items[$id]->item->price;
    }
}

}
