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
