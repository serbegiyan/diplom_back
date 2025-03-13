<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    protected $table = 'orders';

    protected $guarded = false;


    public function OrderItems(){
        return $this->hasMany('App\Models\OrderItem');
    }
}
