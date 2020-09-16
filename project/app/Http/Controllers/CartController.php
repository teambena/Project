<?php

namespace App\Http\Controllers;

use Cart;
use Illuminate\Http\Request;


class CartController extends Controller
{
    //
    
    public function cart(){
        $data = Cart:: getContent();
        return view('ticket',['data' => $data]);
    }

    public function add(Request $request){
    $add = Cart::add([
        'movie_id' => $request->movie_id,
        'theater_id' => $request->theater_id,
        'seat_id' => $request->seat_id
    ]);

    if($add){
        return view('check', ['data' => Cart::getContent()]);
    }
    }
}
