<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Auth;
use Session;
use App\Category;
class ProductController extends Controller
{
    private $dir = 'app.product.';

    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('role:super', ['only'=>'show']);
        $this->adminModel = config('multiauth.models.admin');
    }

    public function index()
    {
        $products = Product::_getProducts();
        // $products = [];
        return view($this->dir. 'index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Log::channel('app')->info('Admin: show Products create page');
        // return response
        $categories = Category::all();
        return view($this->dir. 'create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => "required|unique:products",
        ]);

         if($request->file('file')){
            $image = $request->file('file');
            $imageName = time() . $image->getClientOriginalName();
            $image->move(public_path('uploads/products/'),$imageName);
        } else {
             $imageName = "product.png";
        }



        Product::create([
            'admin_id' => Auth::id(),
            'title' => request('title'),
            'category' => request('category'),
            'summary' => request('summary'),
            'price' => request('price'),
            'featured' => 1,
            'slug'  => Str::slug(request('title')),
            'cover' => $imageName,
            'description' => request('description'),
        ]);

        return redirect()->route('admin.product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product, $slug)
    {

        $product = Product::getProductBySlug($slug);

        if (!$product) {
            return redirect()->back();
        }
        $category = Category::getCategory($product->category);
        $categories = Category::all();
        return view($this->dir. 'show', compact('product', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

         if($request->file('file')){
            $image = $request->file('file');
            $imageName = time() . $image->getClientOriginalName();
            $image->move(public_path('uploads/products/'),$imageName);
            $product->cover = $imageName;
        } else {
             $imageName = "product.png";
        }

        $product->title = request('title');
        $product->price = request('price');
        $product->summary = request('summary');
        $product->description = request('description');
        $product->save();

        Session::flash('success', 'Product Updated Successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
