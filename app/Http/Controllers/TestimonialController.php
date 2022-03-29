<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.Testimonials.testimonial',['Testimonials'=>Testimonial::all()]);
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'content'=>'required',
        ]);
        Testimonial::create([
                'name'=>$request->name,
                'content'=>$request->content
            ]);
            return redirect()->back()->with('message', 'Data Inserted Successfully');
    }


    public function update(Request $request){
        $request->id=base64_decode($request->id);
        $request->validate([
            'name'=>'required',
            'content'=>'required',
        ]);
        Testimonial::where('id',$request->id)->update([
            'name'=>$request->name,
            'content'=>$request->content,
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
        Testimonial::where('id',$id)->update([
            'status'=>$status
        ]);
        return redirect()->back()->with('message', 'Status Updated Successfully'); 
    }


    public function destroy($id){
        $id=base64_decode($id);
        Testimonial::where('id',$id)->delete();
        return redirect()->back()->with('message', 'Data deleted Successfully'); 
    }
}
