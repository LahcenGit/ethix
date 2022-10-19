<?php

namespace App\Http\Controllers;

use App\Models\Ethix;
use Illuminate\Http\Request;

class EthixController extends Controller
{
    //
    public function getModal(){
        $ethix = Ethix::first();
        return view('admin.modal-update-ethix-value',compact('ethix'));
    }
    public function updateValue(Request $request){
        $ethix = Ethix::first();
        $ethix->value = $request->value;
        $ethix->save();
        return $ethix;
    }
}
