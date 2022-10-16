<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserpropertyController extends Controller
{
    //
    public function achatEthix(){
        $user = Auth::user();
        return view('investor.modal-achat-ethix',compact('user'));
    }
}
