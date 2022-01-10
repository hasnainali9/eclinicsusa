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
    
    public function show($id){
        $id=base64_decode($id);
        if(is_numeric($id)){
            if(Service::where('id',$id)->first() && Service::where('id',$id)->first()->status){
                return view('services.service',['data'=>Service::where('id',$id)->first()]);
            }else{abort(404);}
        }else{abort(404);}
    }    
}
