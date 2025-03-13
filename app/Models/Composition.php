<?php

namespace App\Models;

use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Composition extends Model
{
    protected $table = 'compositions';

    protected $guarded = false;

    use softDeletes;
    use Filterable;


    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
