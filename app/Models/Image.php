<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    protected $table = 'images';

    protected $guarded = false;

    use softDeletes;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
