<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SocialLink;

class SocialLinksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.SocialLinks.social',['SocialLinks'=>SocialLink::all()]);
    }

    public function store(Request $request){
        $request->validate([
            'icon'=>'required',
            'link'=>'required',
        ]);
        SocialLink::create([
                'icon'=>$request->icon,
                'link'=>urlencode($request->link)
            ]);
            return redirect()->back()->with('message', 'Data Inserted Successfully');
    }


    public function update(Request $request){
        $request->id=base64_decode($request->id);
        $request->validate([
            'icon'=>'required',
            'link'=>'required',
        ]);

        SocialLink::where('id',$request->id)->update([
                'icon'=>$request->icon,
                'link'=>urlencode($request->link),
            ]);
            return redirect()->back()->with('message', 'Data Updated Successfully'); 
    }


    public function updateStatus($status,$id){
        $status=base64_decode($status);
        $id=base64_decode($id);
        if($status=="Active"){
            $status=true;
        }else{
            $status=false;
        }
        SocialLink::where('id',$id)->update([
            'status'=>$status
        ]);
        return redirect()->back()->with('message', 'Status Updated Successfully'); 
    }


    public function destroy($id){
        $id=base64_decode($id);
        SocialLink::where('id',$id)->delete();
        return redirect()->back()->with('message', 'Data deleted Successfully'); 
    }
}
