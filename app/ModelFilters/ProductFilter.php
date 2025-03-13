<?php

namespace App\ModelFilters;

use EloquentFilter\ModelFilter;

class ProductFilter extends ModelFilter
{
    /**
    * Related Models that have ModelFilters as well as the method on the ModelFilter
    * As [relationMethod => [input_key1, input_key2]].
    *
    * @var array
    */
    public $relations = [];

    public function season($value)
    {
        return $this->whereIn('season', $value);
    }

    public function type($value)
    {
        return $this->whereIn('type', $value);
    }
    public function sizeXS($value)
    {
        if ($value){
            return $this->whereHas('size', function ($query) use ($value) {
                $query->where('XS', '>', 0);
            });
        }
    }
    public function sizeS($value)
    {
        if ($value){
            return $this->whereHas('size', function ($query) use ($value) {
                $query->where('S', '>', 0);
            });
        }
    }
    public function sizeM($value)
    {
        if ($value){
            return $this->whereHas('size', function ($query) use ($value) {
                $query->where('M', '>', 0);
            });
        }
    }
    public function sizeL($value)
    {
        if ($value){
            return $this->whereHas('size', function ($query) use ($value) {
                $query->where('L', '>', 0);
            });
        }
    }
    public function sizeXL($value)
    {
        if ($value){
            return $this->whereHas('size', function ($query) use ($value) {
                $query->where('XL', '>', 0);
            });
        }
    }
    public function compositionCotton($value)
    {
        if ($value){
            return $this->whereHas('composition', function ($query) use ($value) {
                $query->where('cotton', '>', 0);
            });
        }
    }
    public function compositionViscose($value)
    {
        if ($value){
            return $this->whereHas('composition', function ($query) use ($value) {
                $query->where('viscose', '>', 0);
            });
        }
    }
    public function compositionElastane($value)
    {
        if ($value){
            return $this->whereHas('composition', function ($query) use ($value) {
                $query->where('elastane', '>', 0);
            });
        }
    }
    public function compositionWool($value)
    {
        if ($value){
            return $this->whereHas('composition', function ($query) use ($value) {
                $query->where('wool', '>', 0);
            });
        }
    }
    public function compositionPolyester($value)
    {
        if ($value){
            return $this->whereHas('composition', function ($query) use ($value) {
                $query->where('polyester', '>', 0);
            });
        }
    }
    public function sorted($value)
    {
        switch ($value){
            case 'without': return $this->orderBy('id', 'asc'); break;
            case 'priceToUp': return $this->orderBy('price', 'asc'); break;
            case 'priceToDown': return $this->orderBy('price', 'desc'); break;
            default: return $this->orderBy('id', 'desc'); break;
        }
    }
}
