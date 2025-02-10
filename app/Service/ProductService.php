<?php

namespace App\Service;

use App\Models\Composition;
use App\Models\Image;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Support\Facades\Storage;

class ProductService
{
    public function store($data)
    {
        try {
//            DB::beginTransaction();
            $main_img_url = null;
            $second_img_url = null;
            $third_img_url = null;
            $fourth_img_url = null;
            $model_img_url = null;
            $main_img_path = null;
            $second_img_path = null;
            $third_img_path = null;
            $fourth_img_path = null;
            $model_img_path = null;

            if (isset($data['main_img'])) {
                $data['main_img'] = Storage::disk('public')->put('/images', $data['main_img']);
                $main_img_path = $data['main_img'];
                unset($data['main_img']);
                $main_img_url = url('/storage/' . $main_img_path);

            }
            if (isset($data['second_img'])) {
                $data['second_img'] = Storage::disk('public')->put('/images', $data['second_img']);
                $second_img_path = $data['second_img'];
                unset($data['second_img']);
                $second_img_url = url('/storage/' . $second_img_path);
            }
            if (isset($data['third_img'])) {
                $data['third_img'] = Storage::disk('public')->put('/images', $data['third_img']);
                $third_img_path = $data['third_img'];
                unset($data['third_img']);
                $third_img_url = url('/storage/' . $third_img_path);
            }
            if (isset($data['fourth_img'])) {
                $data['fourth_img'] = Storage::disk('public')->put('/images', $data['fourth_img']);
                $fourth_img_path = $data['fourth_img'];
                unset($data['fourth_img']);
                $fourth_img_url = url('/storage/' . $fourth_img_path);
            }
            if (isset($data['model_img'])) {
                $data['model_img'] = Storage::disk('public')->put('/images', $data['model_img']);
                $model_img_path = $data['model_img'];
                unset($data['model_img']);
                $model_img_url = url('/storage/' . $model_img_path);
            }

            $XS = $data['XS'];
            $S = $data['S'];
            $M = $data['M'];
            $L = $data['L'];
            $XL = $data['XL'];
            unset($data['XS']);
            unset($data['S']);
            unset($data['M']);
            unset($data['L']);
            unset($data['XL']);

            $cotton = $data['cotton'];
            $viscose = $data['viscose'];
            $elastane = $data['elastane'];
            $wool = $data['wool'];
            $polyester = $data['polyester'];
            unset($data['cotton']);
            unset($data['viscose']);
            unset($data['elastane']);
            unset($data['wool']);
            unset($data['polyester']);

            $product = Product::firstOrCreate($data);
            Composition::create([
                'cotton' => $cotton,
                'viscose' => $viscose,
                'elastane' => $elastane,
                'wool' => $wool,
                'polyester' => $polyester,
                'product_id' => $product->id,
            ]);
            Size::create([
                'XS' => $XS,
                'S' => $S,
                'M' => $M,
                'L' => $L,
                'XL' => $XL,
                'product_id' => $product->id,
            ]);
            Image::create([
                'main_img_path' => $main_img_path,
                'second_img_path' => $second_img_path,
                'third_img_path' => $third_img_path,
                'fourth_img_path' => $fourth_img_path,
                'model_img_path' => $model_img_path,
                'main_img' => $main_img_url,
                'second_img' => $second_img_url,
                'third_img' => $third_img_url,
                'fourth_img' => $fourth_img_url,
                'model_img' => $model_img_url,
                'product_id' => $product->id,
            ]);
//        DB::commit();
        } catch (\Exception $exception) {
//            DB::rollBack();
            abort(500);
        }
    }

    public function update($data, $product)
    {
        try {
//            DB::beginTransaction();
            if (isset($data['main_img'])) {
                $data['main_img'] = Storage::disk('public')->put('/images', $data['main_img']);
                $main_img_path = $data['main_img'];
                unset($data['main_img']);
                $main_img_url = url('/storage/' . $main_img_path);
                Image::find($product->id)->update(['main_img' => $main_img_url, 'main_img_path' => $main_img_path]);
            }
            if (isset($data['second_img'])) {
                $data['second_img'] = Storage::disk('public')->put('/images', $data['second_img']);
                $second_img_path = $data['second_img'];
                unset($data['second_img']);
                $second_img_url = url('/storage/' . $second_img_path);
                Image::find($product->id)->update(['second_img' => $second_img_url, 'second_img_path' => $second_img_path]);
            }
            if (isset($data['third_img'])) {
                $data['third_img'] = Storage::disk('public')->put('/images', $data['third_img']);
                $third_img_path = $data['third_img'];
                unset($data['third_img']);
                $third_img_url = url('/storage/' . $third_img_path);
                Image::find($product->id)->update(['third_img' => $third_img_url, 'third_img_path' => $third_img_path]);
            }
            if (isset($data['fourth_img'])) {
                $data['fourth_img'] = Storage::disk('public')->put('/images', $data['fourth_img']);
                $fourth_img_path = $data['fourth_img'];
                unset($data['fourth_img']);
                $fourth_img_url = url('/storage/' . $fourth_img_path);
                Image::find($product->id)->update(['fourth_img' => $fourth_img_url, 'fourth_img_path' => $fourth_img_path]);

            }
            if (isset($data['model_img'])) {
                $data['model_img'] = Storage::disk('public')->put('/images', $data['model_img']);
                $model_img_path = $data['model_img'];
                unset($data['model_img']);
                $model_img_url = url('/storage/' . $model_img_path);
                Image::find($product->id)->update(['model_img' => $model_img_url, 'model_img_path' => $model_img_path]);
            }

            $XS = $data['XS'] ?? null;
            $S = $data['S'] ?? null;
            $M = $data['M'] ?? null;
            $L = $data['L'] ?? null;
            $XL = $data['XL'] ?? null;
            unset($data['XS']);
            unset($data['S']);
            unset($data['M']);
            unset($data['L']);
            unset($data['XL']);

            $cotton = $data['cotton'] ?? null;
            $viscose = $data['viscose'] ?? null;
            $elastane = $data['elastane'] ?? null;
            $wool = $data['wool'] ?? null;
            $polyester = $data['polyester'] ?? null;
            unset($data['cotton']);
            unset($data['viscose']);
            unset($data['elastane']);
            unset($data['wool']);
            unset($data['polyester']);

            Product::find($product->id)->update($data);

            Composition::find($product->id)->update([
                'cotton' => $cotton,
                'viscose' => $viscose,
                'elastane' => $elastane,
                'wool' => $wool,
                'polyester' => $polyester,
            ]);

            Size::find($product->id)->update([
                'XS' => $XS,
                'S' => $S,
                'M' => $M,
                'L' => $L,
                'XL' => $XL,
            ]);
//            DB::commit();
        } catch (\Exception $exception) {
//            DB::rollBack();
            abort(500);
        }
    }
}
