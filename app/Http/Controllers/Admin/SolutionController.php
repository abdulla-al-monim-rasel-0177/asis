<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
Use Auth;
use App\Models\Solution;
use DB;
use Response;
use Str;
use DataTables;

class SolutionController extends Controller
{
    public function createsolution(){
      
         return view('admin.viewsolution.createsolution');
    }

    public function storesolution( Request $request){
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'sort_description' => 'required',
            'description' => 'required',
            'main_image' => 'required',
            'image_one' => 'required',
            'banner' => 'required',
        ]);
        $main_image = null;
        if ($request->main_image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $main_image = $request->file('main_image');
                $name_gen = "main-thumbnail". time() . '.' . $main_image->extension();
                $location               = public_path('uploads/solution/'.$name_gen);
                Image::make($main_image)->resize(900,450)->save($location);
                $main_image = 'uploads/solution/'.$name_gen;
        }

        
        $banner = null;
        if ($request->banner) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $banner = $request->file('banner');
                $name_gen = "banner". time() . '.' . $banner->extension();
                $location               = public_path('uploads/solution/'.$name_gen);
                Image::make($banner)->resize(1920,238)->save($location);
                $banner = 'uploads/solution/'.$name_gen;
        }
        $image_one = null;
        if ($request->image_one) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image_one = $request->file('image_one');
                $name_gen = "image_one". time() . '.' . $image_one->extension();
                $location               = public_path('uploads/product/'.$name_gen);
                Image::make($image_one)->resize(370,190)->save($location);
                $image_one = 'uploads/product/'.$name_gen;
        }

        $file = null;
        if ( $request->file ) 
        {
            // if ($img->video) {
            //  unlink($img->video);
            // }
            $file                   = $request->file('file');
            $fileName = time().'.'.$request->file->extension();
            $request->file->move(public_path('uploads/solution/'), $fileName);
            $file             = 'uploads/solution/' . $fileName;
           
        }
            
        
        $ticket = Solution::create([
            'title' => $request->input('title'),
            'slug'  => Str::slug($request->input('title')),
         
         
            'sort_description' => $request->input('sort_description'),
            'technical_training' => $request->input('technical_training'),
            'repair_warranty_center' => $request->input('repair_warranty_center'),
            'logistics_warehouse' => $request->input('logistics_warehouse'),
            'product_approvals' => $request->input('product_approvals'),
            'lmport_clearance' => $request->input('lmport_clearance'),
            'marketing_sales' => $request->input('marketing_sales'),
            'description' => $request->input('description'),
            'image_one' => $image_one,
            'main_image' => $main_image,
            'banner' => $banner,
            'brouchure_pdf' => $file,           
            'created_at'            => Carbon::now(),
        ]);
        
         
        return response()->json(['success' => 'Solution create Successfully' . $ticket->id], 200);

    }

    public function allsolutions(){
        if(request()->ajax()) {
        
             $data = Solution::latest('updated_at')->get();
    
            return DataTables::of($data)
        
           ->addColumn('title', function($data){
               
                $title = '<a href="'.url('admin/product-view/' . $data->ticket_id).'">'.Str::limit($data->title, '40').'</a>';
                
                return $title;
            })
            ->addColumn('created_at',function($data){
                $created_at = $data->created_at->format('d-m-Y g:i A');
                return $created_at;
            })
           ->addColumn('edit', function($data){
    
                $edit = '<div class = "d-flex">';
                
    
                    $edit .= '<a href="'.url('admin/edit-solution/' . $data->id).'" class="action-btns1 edit-testimonial"><i class="feather feather-edit text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i></a>';
                
                
                $edit .= '</div>';
                return $edit;
            })
           ->addColumn('delete', function($data){
    
                $delete = '<div class = "d-flex">';
            
               
                
                    $delete .= '<a href="javascript:void(0)" data-id="'.$data->id.'" class="action-btns1" id="show-delete" ><i class="feather feather-trash-2 text-danger" data-id="'.$data->id.'"data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"></i></a>';
                
                
                $delete .= '</div>';
                return $delete;
            })
            ->rawColumns(['edit','title','delete','created_at'])
            ->addIndexColumn()
            ->make(true);
            
            


        }
        return view('admin.viewsolution.allsolutions');
    }
    public function edit($id){
       

        $solution = Solution::where('id',$id)->first();
        $data['solution'] = $solution;
         return view('admin.viewsolution.editsolution')->with($data);
    }
    public function updatesolution( Request $request){
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'sort_description' => 'required',
            'description' => 'required',
        ]);
        $solution = Solution::where('id',$request->id)->first();
        $main_image = $solution->main_image;
        if ($request->main_image) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $main_image = $request->file('main_image');
                $name_gen = "main-thumbnail". time() . '.' . $main_image->extension();
                $location               = public_path('uploads/solution/'.$name_gen);
                Image::make($main_image)->resize(900,450)->save($location);
                $main_image = 'uploads/solution/'.$name_gen;
        }

        
        $banner = $solution->banner;
        if ($request->banner) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $banner = $request->file('banner');
                $name_gen = "banner". time() . '.' . $banner->extension();
                $location               = public_path('uploads/solution/'.$name_gen);
                Image::make($banner)->resize(1920,238)->save($location);
                $banner = 'uploads/solution/'.$name_gen;
        }
        
        $image_one = $solution->image_one;
        if ($request->image_one) {

            // if ($img->image) {
            //      unlink($img->image);
            // }
                $image_one = $request->file('image_one');
                $name_gen = "image_one". time() . '.' . $image_one->extension();
                $location               = public_path('uploads/solution/'.$name_gen);
                Image::make($image_one)->resize(375,238)->save($location);
                $image_one = 'uploads/solution/'.$name_gen;
        }
        $file = $solution->brouchure_pdf;
        if ( $request->file ) 
        {
            // if ($img->video) {
            //  unlink($img->video);
            // }
            $file                   = $request->file('file');
            $fileName = time().'.'.$request->file->extension();
            $request->file->move(public_path('uploads/solution/'), $fileName);
            $file             = 'uploads/solution/' . $fileName;
           
        }
       
        
        $ticket = Solution::findOrFail($request->id)->update([
            'title' => $request->input('title'),
            'slug'  => Str::slug($request->input('title')),
         
            'image_one' => $image_one,
            'sort_description' => $request->input('sort_description'),
            'technical_training' => $request->input('technical_training'),
            'repair_warranty_center' => $request->input('repair_warranty_center'),
            'logistics_warehouse' => $request->input('logistics_warehouse'),
            'product_approvals' => $request->input('product_approvals'),
            'lmport_clearance' => $request->input('lmport_clearance'),
            'marketing_sales' => $request->input('marketing_sales'),
            'description' => $request->input('description'),
            
            'main_image' => $main_image,
            'banner' => $banner,
            'brouchure_pdf' => $file,           
            'created_at'            => Carbon::now(),
        ]);
        
         
        return response()->json(['success' => 'Solution Update Successfully - '], 200);

    }

    public function destroy($id)
    {
        
        $ticket = Solution::findOrFail($id);
        $ticket->delete();
        return response()->json(['error'=> 'The Solution was successfully deleted.']);
    }
}
