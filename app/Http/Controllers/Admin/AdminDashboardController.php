<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Response;
use Str;
use DataTables;
use Carbon\Carbon;
use App\Models\Contact;
class AdminDashboardController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function contact(){
        if(request()->ajax()) {
        
             $data = Contact::latest('updated_at')->get();
    
            return DataTables::of($data)
        
           ->addColumn('name', function($data){
               
                $name = '<a href="">'.Str::limit($data->name, '40').'</a>';
                
                return $name;
            })
           ->addColumn('email', function($data){
               
                $email = $data->email;
                
                return $email;
            })
           ->addColumn('phone', function($data){
               
                $phone = $data->phone;
                
                return $phone;
            })
           ->addColumn('subject', function($data){
               
                $subject = $data->subject;
                
                return $subject;
            })
           ->addColumn('message', function($data){
               
                $message = $data->message;
                
                return $message;
            })
            ->addColumn('created_at',function($data){
                $created_at = $data->created_at->format('d-m-Y g:i A');
                return $created_at;
            })
            ->rawColumns(['name','email','phone','subject','message','created_at'])
            ->addIndexColumn()
            ->make(true);
            
            


        }
        return view('admin.contact');
    }
}
