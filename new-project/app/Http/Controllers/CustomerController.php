<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    //
    public function index()
    {
        $customers = DB::select('select * from customers');
        return view('customer',['users'=>$customers]);
    }
}
