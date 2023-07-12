<?php

namespace App\Http\Controllers;


use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function api(){
        $data=Team::all();
        foreach ($data as $item) {
            $item->image = asset($item->image);
        }
    
         return response()->json($data, 200);

    }
    public function create(){
        return view('teams.create');
    }

    public function store(Request $request){
 
        $this->validate($request,[
            "name"    => "required",
            "about"  => "required",
            "jop"   =>"required",
            "image"  => "required|image" 
            
        ]);

        $featured = $request->image;
        $featured_new_name = time().$featured->getClientOriginalName();
        $featured->move('assets/images/teams/',$featured_new_name);

        $work =Team::create([
            "name"    => $request->name,
            "jop"    => $request->jop,
            "about"    => $request->about,
            "image" => '/assets/images/teams/'.$featured_new_name

        ]);
        
        return redirect()->back();


    }
}
