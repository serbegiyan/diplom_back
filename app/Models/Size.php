<?php

namespace App\Models;

use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Size extends Model
{
    protected $table = 'sizes';

    protected $guarded = false;

    use softDeletes;
    use Filterable;


    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
