<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function api(){
        $data=Service::all();
        foreach ($data as $item) {
            $item->image = asset($item->image);
        }
    
         return response()->json($data, 200);

    }
}
