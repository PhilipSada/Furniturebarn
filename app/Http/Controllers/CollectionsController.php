<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CollectionsController extends Controller
{
    public function showBedroom(){
        $beds = Product::all()->where('category_id','3');
        $dressers = Product::all()->where('category_id','4');
        return view('pages/bedroom', [
            'beds'=>$beds,
            'dressers'=>$dressers
        ]);
    }
    public function showDiningRoom(){
        $diningChairs = Product::all()->where('category_id','6');
        $diningTables = Product::all()->where('category_id','7');
        return view('pages/diningroom', [
            'diningChairs'=>$diningChairs,
            'diningTables'=>$diningTables
        ]);
    }
    public function showLivingRoom(){
        $sofas = Product::all()->where('category_id','1');
        $sectionals = Product::all()->where('category_id','2');
        $ottomans = Product::all()->where('category_id','8');
        $coffeeTables = Product::all()->where('category_id','5');

        return view('pages/livingroom', [
            'sofas'=>$sofas,
            'sectionals'=>$sectionals,
            'ottomans'=>$ottomans,
            'coffeeTables'=>$coffeeTables
        ]);
    }
    public function showFaq(){
        return view('pages/faq');
    }
    public function singleProduct($slug){

        $product = Product::where('title', $slug)->first();
        $similarProducts = Product::all()->where('title', '!=', $slug)->where('category_id', $product->category_id);
       
        return view('pages/single-product', [
            'product'=>$product,
            'similarProducts'=>$similarProducts
        ]);
    }
    
}
