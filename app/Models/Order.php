<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $table ='Orders';
    protected $fillable=['id','user_id','cart','address','name','payment_id','payment_method'];
    

    public function customer(){
        return $this->belongsTo('App\Models\Customer');
    }
}
