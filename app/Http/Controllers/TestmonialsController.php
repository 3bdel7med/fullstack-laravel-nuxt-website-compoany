<?php

namespace App\Http\Controllers;

use App\Models\Testmonial;
use Illuminate\Http\Request;

class TestmonialsController extends Controller
{
    public function api(){
        $data=Testmonial::all();
        foreach ($data as $item) {
            $item->image = asset($item->image);
        }
    
         return response()->json($data, 200);

    }
}
