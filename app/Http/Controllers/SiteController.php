<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class SiteController extends Controller
{
    public function index()
    {
    	$products = Product::where('featured', 1)->inRandomOrder()->take(8)->get();
    	return view('site.index', compact('products'));
    }

    public function product(Request $request, $slug)
    {

        $product = Product::getProductBySlug($slug);
        $category = Category::getCategory($product->category);

        $products = Product::where('category', $product->category)->inRandomOrder()->take(4)->get();

        // return $products;
    	return view('site.product.show', compact('product', 'category', 'products'));
    }
}
