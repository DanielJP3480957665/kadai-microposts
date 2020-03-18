<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserfollowController extends Controller
{
    public function store (Request $reqest, $id){
        \Auth::user()->follow($id);
        return back();
    }
    
    public function destroy($id){
        \Auth::user()->follow($id);
        return back();
    }
    
}
