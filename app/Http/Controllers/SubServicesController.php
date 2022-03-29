<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubService;

class SubServicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.Services.subServices',['SubServices'=>SubService::all()]);
    }

    public function store(Request $request){
        $request->validate([
            'title'=>'required',
            'content'=>'required',
            'image' => 'mimes:jpeg,jpg,png,gif|required'
        ]);
        if($request->hasFile('image')){
            $image = "data:image/png;base64,".base64_encode(file_get_contents($request->file('image')));
            SubService::create([
                'title'=>$request->title,
                'short_description'=>urlencode($request->content),
                'image'=>$image
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
            'content'=>'required',
        ]);
        if($request->hasFile('image')){
            $request->validate([
                'image' => 'mimes:jpeg,jpg,png,gif|required'
            ]);
            $image = "data:image/png;base64,".base64_encode(file_get_contents($request->file('image')));
            SubService::where('id',$request->id)->update([
                'title'=>$request->title,
                'short_description'=>urlencode($request->content),
                'image'=>$image
            ]);
            return redirect()->back()->with('message', 'Data Updated Successfully');
        }else{
            SubService::where('id',$request->id)->update([
                'title'=>$request->title,
                'short_description'=>urlencode($request->content),
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
        SubService::where('id',$id)->update([
            'status'=>$status
        ]);
        return redirect()->back()->with('message', 'Status Updated Successfully'); 
    }


    public function destroy($id){
        $id=base64_decode($id);
        SubService::where('id',$id)->delete();
        return redirect()->back()->with('message', 'Data deleted Successfully'); 
    }
}
