<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShareController extends Controller
{
    public function share(){
        return view ('share');
    }

    public function store(Request $request){
        return 'done';
    }
}
