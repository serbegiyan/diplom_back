<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderItems extends Model
{
    protected $table = 'order_items';

    protected $guarded = false;


    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
