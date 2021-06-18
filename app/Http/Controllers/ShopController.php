<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class ShopController extends Controller
{
    public function index(){

        $categories = Category::_getCategories();
        $products = Product::paginate(20);

        return view('site.shop.all', compact('categories', 'products'));
    }
}
