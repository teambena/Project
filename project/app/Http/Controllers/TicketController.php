<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    //
    public function index(){
        $users = DB::select('select * from ticket');
        return view('user',['users'=>$users]);
    }

}
