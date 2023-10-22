<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
class WebsiteController extends Controller
{
    public function index(){

        return view('website.index');
    }

    public function about(){

        return view('website.about');
    }

    public function news(){

        return view('website.news');
    }
    public function contact(){

        return view('website.contact');
    }
    public function services(){

        return view('website.services');
    }
    public function products(){
            $categories = Category::where('status', '1')->get();
            $data['categories'] = $categories;
            $products = Product::orderBy('id', 'DESC')->with('category')->get();
            $data['products'] = $products;

        return view('website.products')->with($data);
    }

    public function product($id,$title){

        $product = Product::where('id', $id)->with('category')->first();
           

        return view('website.product',compact('product'));
    }

}
