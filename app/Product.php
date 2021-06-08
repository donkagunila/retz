<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Product extends Model
{
    protected $guarded = [];

    public static function _getProducts()
    {
    	return self::all();
    }

    public static function percentage(){
    	$total_products = Self::all()->count();
    	$total_products_month = Self::whereMonth('created_at', '=', Carbon::now()->month)->count();
    	$percentage = ((int)$total_products_month / (int)$total_products) * 100;
    	return $percentage;
    }

    public static function getProductBySlug($slug){
        return Product::where('slug', $slug)->first();
    }
}
