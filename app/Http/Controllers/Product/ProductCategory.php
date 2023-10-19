<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use DataTables;
class ProductCategory extends Controller
{
    public function index(){
        
            
        if(request()->ajax()) {

           $data = Category::get();
           return DataTables::of($data)->addColumn('name', function($data){
                    return Str::limit($data->name, '40');
                })->addColumn('action', function($data){
                    if(Auth::user()->can('Category Edit')){
                        $button = '<div class = "d-flex"><a href="javascript:void(0)" data-id="'.$data->id.'" class="action-btns1 edit-testimonial"><i class="feather feather-edit text-primary" data-id="'.$data->id.'"data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i></a></div>';
                    }else{
                        $button = '<span  class="badge badge-pill badge-info mt-2" >
                        ' ."~"  . '</span>';
                    }
                    
                  
                    
                  return $button;
                })->rawColumns(['name','action',])
                ->addIndexColumn()
                ->make(true);
        }

        return view('admin.category.index');
    }}
