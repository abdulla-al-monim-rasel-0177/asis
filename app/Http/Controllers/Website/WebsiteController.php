<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Solution;
use App\Models\Contact;
class WebsiteController extends Controller
{
    public function index(){
        $products = Product::orderBy('id', 'DESC')->with('category')->get();
        $data['products'] = $products;
        $solution = Solution::orderBy('id', 'DESC')->get()->take(6);
        $data['solutions'] = $solution;
        return view('website.index')->with($data);
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
    public function solutions(){
        $solutions = Solution::orderBy('id','DESC')->get();
        return view('website.solutions',compact('solutions'));
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

    public function solution($id,$slug){
        $solution = Solution::where('id', $id)->first();
           
        $solutions = Solution::orderBy('id','DESC')->get();
        return view('website.solution',compact('solution','solutions'));
    }
    public function contactus(Request $request){
        $contact = Contact::create([
            'name'              => $request->name,
            'email'             => $request->email,
            'phone'             => $request->phone,
            'subject'           => $request->subject,
            'message'           => $request->message,
        ]);
        return view('website.contact');
    }

}
