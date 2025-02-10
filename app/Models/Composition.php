<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Composition extends Model
{
    protected $table = 'compositions';

    protected $guarded = false;

    use softDeletes;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
