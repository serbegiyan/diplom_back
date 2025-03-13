<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Composition;
use App\Models\Image;
use App\Models\Product;
use App\Models\Size;
use App\Service\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BaseController extends Controller
{
   public $service;

   public function __construct(ProductService $service)
   {
        $this->service = $service;
   }

}
