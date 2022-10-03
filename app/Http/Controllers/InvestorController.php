<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;

class InvestorController extends Controller
{
    //
    public function index(){
        $users = User::all();
        return view('admin.users',compact('users'));
    }
    public function edit($id){
        $user = User::find($id);
        return view('admin.modal-edit-user',compact('user'));
    }
    public function update(Request $request ,$id){
        $user = User::find($id);
        $user->status = $request->status;
        $user->solde = $request->solde;
        $user->save();
        return $user;
    }

    public function properties(){
        $properties = Property::all();
        return view('investor.properties',compact('properties'));
    }
}
