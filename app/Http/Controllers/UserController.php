<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    public function index(){
        $users = DB::select('select * from users');
        return view('user',['users'=>$users]);
    }

    public function show($id) {
        $users = DB::select('select * from users where user_id = ?',[$id]);
        return view('user_update',['users'=>$users]);
     }

     public function edit(Request $request,$id) {
        $name = $request->input('name');
        DB::update('update users set name = ? where user_id = ?',[$name,$id]);
        $lastname = $request->input('lastname');
        DB::update('update users set lastname = ? where user_id = ?',[$lastname,$id]);
        echo "Record updated successfully.<br/>";
        echo '<a href = "/edit-records">Click Here</a> to go back.';
        
     }

     public function destroy($id) {
        DB::delete('delete from users where user_id = ?',[$id]);
        echo "Record deleted successfully.<br/>";
        echo '<a href = "/delete-records">Click Here</a> to go back.';
     }

}

