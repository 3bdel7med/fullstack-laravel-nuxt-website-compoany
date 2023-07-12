<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function api(){
        $data=Work::all();
        foreach ($data as $item) {
            $item->image = asset($item->image);
        }
    
         return response()->json($data, 200);
    }



    public function create(){
        return view('works.create');
    }

    public function store(Request $request){
 
        $this->validate($request,[
            "name"    => "required",
            "about"  => "required",

            "image"  => "required|image" 
            
        ]);

        $featured = $request->image;
        $featured_new_name = time().$featured->getClientOriginalName();
        $featured->move('assets/images/works/',$featured_new_name);

        $work =Work::create([
            "name"    => $request->name,
            "about"    => $request->about,
            "image" => 'assets/images/works/'.$featured_new_name

        ]);
        
        return redirect()->back();


    }
}
