<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    public function index()
    {
        return view('admin.Services.service',['featured'=>false,'Services'=>Service::all()]);
    }
    public function FeatureIndex(){
        return view('admin.Services.service',['featured'=>true,'Services'=>Service::where('featured',true)->get()]);
    }

    public function store(Request $request){
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'content'=>'required',
            'image' => 'mimes:jpeg,jpg,png,gif|required',
            'icon'=>'required',
        ]);
        if($request->hasFile('image')){
            $image = "data:image/png;base64,".base64_encode(file_get_contents($request->file('image')));
            Service::create([
                'title'=>$request->title,
                'short_description'=>urlencode($request->content),
                'content'=>urlencode($request->description),
                'image'=>$image,
                'icon'=>$request->icon,
            ]);
            return redirect()->back()->with('message', 'Data Inserted Successfully');
        }else{
            return abort(404);   
        }
    }


    public function update(Request $request){
        $request->id=base64_decode($request->id);
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'content'=>'required',
            'icon'=>'required'
        ]);
        if($request->hasFile('image')){
            $request->validate([
                'image' => 'mimes:jpeg,jpg,png,gif|required'
            ]);
            $image = "data:image/png;base64,".base64_encode(file_get_contents($request->file('image')));
            Service::where('id',$request->id)->update([
                'title'=>$request->title,
                'content'=>urlencode($request->content),
                'short_description'=>urlencode($request->description),
                'image'=>$image,
                'icon'=>$request->icon
            ]);
            return redirect()->back()->with('message', 'Data Updated Successfully');
        }else{
            Service::where('id',$request->id)->update([
                'title'=>$request->title,
                'content'=>urlencode($request->content),
                'short_description'=>urlencode($request->description),
                'icon'=>$request->icon
            ]);
            return redirect()->back()->with('message', 'Data Updated Successfully'); 
        }   
    }


    public function updateStatus($status,$id){
        $status=base64_decode($status);
        $id=base64_decode($id);
        if($status=="Active"){
            $status=true;
        }else{
            $status=false;
        }
        Service::where('id',$id)->update([
            'status'=>$status
        ]);
        return redirect()->back()->with('message', 'Status Updated Successfully'); 
    }

    public function updateFeaturedStatus($status,$id){
        $status=base64_decode($status);
        $id=base64_decode($id);
        if($status=="True"){
            $status=true;
        }else{
            $status=false;
        }
        if(Service::where('featured',true)->get()->count()<4 || !$status){
            Service::where('id',$id)->update([
                'featured'=>$status
            ]);
            return redirect()->back()->with('message', 'Status Updated Successfully'); 
        }else{
            return redirect()->back()->withErrors(["Featured items can't be greater than 4."]);
        }
        
    }


    public function destroy($id){
        $id=base64_decode($id);
        Service::where('id',$id)->delete();
        return redirect()->back()->with('message', 'Data deleted Successfully'); 
    }
    
}
