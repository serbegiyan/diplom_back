<?php

namespace App\Models;

use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    protected $table = 'products';

    protected $guarded = false;

    use softDeletes;
    use Filterable;

    public function composition()
    {
        return $this->hasOne(Composition::class);
    }

    public function size()
    {
        return $this->hasOne(Size::class);
    }

    public function image()
    {
        return $this->hasOne(Image::class);
    }
}
