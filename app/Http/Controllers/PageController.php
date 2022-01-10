<?php

namespace App\Http\Controllers;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function show($slug){
        if(Page::where('slug',$slug)->first() && Page::where('slug',$slug)->first()->status){
            return view('pages.page',['data'=>Page::where('slug',$slug)->first()]);
        }else{abort(404);}
    }
}
