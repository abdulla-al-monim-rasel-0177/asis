<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use DB;
use Response;
use Str;
use DataTables;
use Auth;
use Illuminate\Support\Facades\Validator;
class ProductCategory extends Controller
{
    public function index(){
        $data = Category::get();

            
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
                })->addColumn('groupcategory', function($data){
                    if(Auth::user()->can('Category Assign To Groups')){
                        if (!empty($data->groupscategoryc)){
                            $button = '<a href="javascript:void(0)" data-id="'.$data->id.'" id="assigneds" class="badge badge-pill badge-info mt-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Assign to group">
                        '. $data->groupscategoryc->group->groupname.'
                        </a>';
                        }
                        else{
                            $button = '<a href="javascript:void(0)" data-id="'.$data->id.'" id="assigneds" class="badge badge-pill badge-info mt-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Assign to group">
                        ' ."~"  .' 
                        </a>';
                        }
                    
                        
                            
                        return $button;
                        
                        
                    }
                    else{
                        if (!empty($data->groupscategoryc)){
                            $button = '<span  class="badge badge-pill badge-info mt-2" >
                        ' . $data->groupscategoryc->group->groupname.' </span>';
                        }
                        else{
                            $button = '<span  class="badge badge-pill badge-info mt-2" >
                        ' ."~"  . '</span>';
                        }
                        return $button;
                    }
                })->addColumn('status', function($data){
                    
                        if($data->status == '1'){
                            $button = '
                            <label class="custom-switch form-switch mb-0">
                                <input type="checkbox" name="status" data-id="'.$data->id.'" id="myonoffswitch'.$data->id.'" value="1" class="custom-switch-input tswitch" checked>
                                <span class="custom-switch-indicator"></span>
                            </label>';
                        }else{
                            $button = ' 
                                <label class="custom-switch form-switch mb-0">
                                    <input type="checkbox" name="status" data-id="'.$data->id.'" id="myonoffswitch'.$data->id.'" value="1" class="custom-switch-input tswitch">
                                    <span class="custom-switch-indicator"></span>
                                </label> ';
                        }
                        return $button;
                    
                })->addColumn('action', function($data){
                    
                        $button = '<div class = "d-flex"><a href="javascript:void(0)" data-id="'.$data->id.'" class="action-btns1 edit-testimonial"><i class="feather feather-edit text-primary" data-id="'.$data->id.'"data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i></a></div>';
                    
                    
                  
                    
                  return $button;
                })->rawColumns(['name','status','action',])
                ->addIndexColumn()
                ->make(true);
        }

        return view('admin.category.index');
    }

    public function store(Request $request){
         
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
            ]);
            if($validator->passes()){
            $testiId = $request->testimonial_id;
            $categoryfind = Category::find($testiId);
            if($categoryfind){
                

                    $testi =  [
                        'name' => $request->name,
                        'status' => $request->status ?  '1' :  '0',
                    ];
               
                
            }
            if(!$categoryfind){
                $testi =  [
                    'name' => $request->name,
                  
                   
                  
                    'status' => $request->status ?  '1' :  '0',
                ];
            }        
            $testimonial = Category::updateOrCreate(['id' => $testiId], $testi);
            return response()->json(['code'=>200, 'success'=> 'Create Successfully','data' => $testimonial], 200);
            }
            else
            {
                return Response::json(['errors' => $validator->errors()]);
            }
        
    }

    public function show($id)
    {
       
        $post = Category::find($id);
        
        $data = [
            'post' => $post,
        ];
        return response()->json($data);

    }
}
