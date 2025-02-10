<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Size extends Model
{
    protected $table = 'sizes';

    protected $guarded = false;

    use softDeletes;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
