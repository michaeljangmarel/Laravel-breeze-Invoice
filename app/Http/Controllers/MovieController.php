<?php

namespace App\Http\Controllers;

use App\Models\movie;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\MovieController;

class MovieController extends Controller
{
    //

    public function  urll(){
         return view('createUrl');
    }

    public function databa(Request $r){

         movie::create([
            'name' => $r->name ,
            'vd' => $r->url
         ]);

         return redirect()->route('allmn');
    }

    public function allmm(){
        $data = movie::where("id" , '5')->first();

          return view('allMovie'  , compact("data"));
    }
}
