<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function index(){
        $about=About::first();
        return view('about', compact('about'));
    }


    public function api(){
        $data=About::all();
        foreach ($data as $item) {
            $item->image = asset($item->image);
        }
    
         return response()->json($data, 200);

    }
    public function update(Request $request){
 
        $this->validate($request,[
            "overview"    => "required",
            "our_mission"  => "required",
            "our_team"  => "required" ,
            "image"  => "required|image" 
            
        ]);

        $featured = $request->image;
        $featured_new_name = time().$featured->getClientOriginalName();
        $featured->move('assets/images',$featured_new_name);

        $about = About::first();


        $about->overview =  $request->overview;
        $about->our_mission =  $request->our_mission;
        $about->our_team = $request->our_team;
        $about->image = 'assets/images/'.$featured_new_name;
        $about->save();
        
        return redirect()->back();


    }
}
