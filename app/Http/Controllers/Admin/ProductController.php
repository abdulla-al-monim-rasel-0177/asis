<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
Use Auth;
use App\Models\Product;
use App\Models\Category;
use DB;
use Response;
use Str;
use DataTables;
class ProductController extends Controller
{
    public function createproduct(){
         $categories = Category::where('status', '1')->get();
            $data['categories'] = $categories;
         return view('admin.viewproduct.createproduct')->with($data);
    }

    public function allprodcucts(){
        if(request()->ajax()) {
        
             $data = Product::latest('updated_at')->get();
    
            return DataTables::of($data)
        
           ->addColumn('title', function($data){
               
                $title = '<a href="'.url('admin/product-view/' . $data->ticket_id).'">'.Str::limit($data->title, '40').'</a>';
                
                return $title;
            })
            ->addColumn('created_at',function($data){
                $created_at = $data->created_at->format('d-m-Y g:i A');
                return $created_at;
            })
            
            ->addColumn('category_id', function($data){
                if($data->category_id != null){
                    $category_id = Str::limit($data->category->name, '40');
                    return $category_id;
                }else{
                    return '~';
                }
            })
            
           ->addColumn('action', function($data){
    
                $button = '<div class = "d-flex">';
                
    
                    $button .= '<a href="'.url('admin/edit-product/' . $data->id).'" class="action-btns1 edit-testimonial"><i class="feather feather-edit text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i></a>';
               
                
                    $button .= '<a href="javascript:void(0)" data-id="'.$data->id.'" class="action-btns1" id="show-delete" ><i class="feather feather-trash-2 text-danger" data-id="'.$data->id.'"data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"></i></a>';
                
                
                $button .= '</div>';
                return $button;
            })
            ->rawColumns(['action','title','category_id','created_at'])
            ->addIndexColumn()
            ->make(true);
            
            


        }
        return view('admin.viewproduct.allproducts');
    }

    public function storeprodcuct( Request $request){
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'category' => 'required',
            'sort_description' => 'required',
            'description' => 'required',
            'main_image' => 'required',
            'image_one' => 'required',
            'image_two' => 'required',
            'banner' => 'required',
        ]);
        $main_image = null;
        if ($request->main_image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $main_image = $request->file('main_image');
                $name_gen = "main-thumbnail". time() . '.' . $main_image->extension();
                $location               = public_path('uploads/product/'.$name_gen);
                Image::make($main_image)->resize(765,507)->save($location);
                $main_image = 'uploads/product/'.$name_gen;
        }

        $image_one = null;
        if ($request->image_one) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image_one = $request->file('image_one');
                $name_gen = "image_one". time() . '.' . $image_one->extension();
                $location               = public_path('uploads/product/'.$name_gen);
                Image::make($image_one)->resize(375,238)->save($location);
                $image_one = 'uploads/product/'.$name_gen;
        }
        $image_two = null;
        if ($request->image_two) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image_two = $request->file('image_two');
                $name_gen = "image_two". time() . '.' . $image_two->extension();
                $location               = public_path('uploads/product/'.$name_gen);
                Image::make($image_two)->resize(375,238)->save($location);
                $image_two = 'uploads/product/'.$name_gen;
        }

        $banner = null;
        if ($request->banner) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $banner = $request->file('banner');
                $name_gen = "banner". time() . '.' . $banner->extension();
                $location               = public_path('uploads/product/'.$name_gen);
                Image::make($banner)->resize(1920,238)->save($location);
                $banner = 'uploads/product/'.$name_gen;
        }
        

        $file = null;
        if ( $request->file ) 
        {
            // if ($img->video) {
            //  unlink($img->video);
            // }
            $file                   = $request->file('file');
            $fileName = time().'.'.$request->file->extension();
            $request->file->move(public_path('uploads/product/'), $fileName);
            $file             = 'uploads/product/' . $fileName;
           
        }
            
        
        $ticket = Product::create([
            'title' => $request->input('title'),
            'slug'  => Str::slug($request->input('title')),
         
            'category_id' => $request->input('category'),
            'sort_description' => $request->input('sort_description'),
            'description' => $request->input('description'),
            
            'main_image' => $main_image,
            'image_one' => $image_one,
            'image_two' => $image_two,
            'banner' => $banner,
            'file' => $file,
            
           
             'created_at'            => Carbon::now(),
        ]);
        
        
        return response()->json(['success' => 'Product create' . $ticket->id], 200);

    }
    public function edit($id){
        $categories = Category::where('status', '1')->get();
        $data['categories'] = $categories;

        $product = Product::where('id',$id)->first();
        $data['product'] = $product;
         return view('admin.viewproduct.editproduct')->with($data);
    }

    public function updateprodcuct( Request $request){
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'category' => 'required',
            'sort_description' => 'required',
            'description' => 'required',
        ]);
        $product = Product::where('id',$request->id)->first();
        $main_image = $product->main_image;
        if ($request->main_image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $main_image = $request->file('main_image');
                $name_gen = "main-thumbnail". time() . '.' . $main_image->extension();
                $location               = public_path('uploads/product/'.$name_gen);
                Image::make($main_image)->resize(765,507)->save($location);
                $main_image = 'uploads/product/'.$name_gen;
        }

        $image_one = $product->image_one;
        if ($request->image_one) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image_one = $request->file('image_one');
                $name_gen = "image_one". time() . '.' . $image_one->extension();
                $location               = public_path('uploads/product/'.$name_gen);
                Image::make($image_one)->resize(375,238)->save($location);
                $image_one = 'uploads/product/'.$name_gen;
        }
        $image_two = $product->image_two;
        if ($request->image_two) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image_two = $request->file('image_two');
                $name_gen = "image_two". time() . '.' . $image_two->extension();
                $location               = public_path('uploads/product/'.$name_gen);
                Image::make($image_two)->resize(375,238)->save($location);
                $image_two = 'uploads/product/'.$name_gen;
        }

        $banner = $product->banner;
        if ($request->banner) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $banner = $request->file('banner');
                $name_gen = "banner". time() . '.' . $banner->extension();
                $location               = public_path('uploads/product/'.$name_gen);
                Image::make($banner)->resize(1920,238)->save($location);
                $banner = 'uploads/product/'.$name_gen;
        }
        

        $file = $product->file;
        if ( $request->file ) 
        {
            // if ($img->video) {
            //  unlink($img->video);
            // }
            $file                   = $request->file('file');
            $fileName = time().'.'.$request->file->extension();
            $request->file->move(public_path('uploads/product/'), $fileName);
            $file             = 'uploads/product/' . $fileName;
           
        }
            
        
        $ticket = Product::findOrFail($request->id)->update([
            'title' => $request->input('title'),
            'slug'  => Str::slug($request->input('title')),
         
            'category_id' => $request->input('category'),
            'sort_description' => $request->input('sort_description'),
            'description' => $request->input('description'),
            
            'main_image' => $main_image,
            'image_one' => $image_one,
            'image_two' => $image_two,
            'banner' => $banner,
            'file' => $file,
            
           
             'created_at'            => Carbon::now(),
        ]);
        
        
        return response()->json(['success' => 'Product Update Successfully'], 200);

    }

    public function destroy($id)
    {
        
        $ticket = Product::findOrFail($id);
        $ticket->delete();
        return response()->json(['error'=> 'The product was successfully deleted.']);
    }
}
