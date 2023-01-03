<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table ='customer';
    protected $fillable=['id','cName','cPass','cEmail','cPhone','cAddress','cPay','cSex','cHash'];
    public $timestamps= false;

    public function orders(){
        return $this->hasMany('App\Models\Order');
    }
}
