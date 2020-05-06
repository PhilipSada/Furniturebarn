<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $products = Product::paginate(8);
        return view('admin/inventory/all',[
            'products'=>$products
        ]);
    }
    
    public function create(){
        $productCategories = Category::all();
        return view('admin/inventory/create',[
            'productCategories'=>$productCategories
        ]);
    }

    public function store(){
        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image_url' => ['required', 'string'], 
            'category_id' => ['required']
        ]);
        
        $product = new Product();
        $product->title = request('title');
        $product->image_url= request('image_url');
        $product->category_id = request('category_id');
        $product->description = request('description');
        $product->save();

        return redirect('/admin/inventory-items');
    }
    public function edit($id){
        $product = Product::find($id);
        $productCategories = Category::all();

        return view('admin/inventory/edit', [
            'product'=>$product,
            'productCategories'=>$productCategories
        ]);
    }

    public function update($id){
        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image_url' => ['required', 'string'],
            'category_id' => ['required']
        ]);

        $product = Product::find($id);
        $product->title = request('title');
        $product->image_url= request('image_url');
        $product->category_id = request('category_id');
        $product->description = request('description');
        $product->save();

        return redirect('/admin/inventory-items');
    }
    
    public function delete($id){
        $product = Product::find($id);
        $product->delete();

        return redirect('/admin/inventory-items');
    }
}
