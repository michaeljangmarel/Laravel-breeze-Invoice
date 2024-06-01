<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\movie;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\MovieController;
use Barryvdh\DomPDF\Facade\Pdf;


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
        $data = movie::where("id" , '8')->first();

          return view('allMovie'  , compact("data"));
    }


    // public function books(){

    //     $detail = book::get()->orderBy('created_at' , 'desc');

    //     return [$detail] ;
    // }


    public function books(){


        $all_book = book::get();


        return  response()->json($all_book, 200);
    }

    public function printas($id){

       $data = book::find($id);

        $pdf = Pdf::loadView( "admin.invoice" , compact("data"));
    return $pdf->download('orderDetail.pdf' );
    }

    public function second(){

        return view('dashboardTest');
        }

}


