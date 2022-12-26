<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Virment;
use Illuminate\Http\Request;

class VirmentAdminController extends Controller
{
    //
    public function index(){
        $virments = Virment::all()->reverse();
        return view('admin.virments',compact('virments'));
    }

    public function showModal($id_user , $id_virment){
        $user = User::find($id_user);
        $virment = Virment::find($id_virment);
        return view('admin.modal-edit-compte',compact('user','virment'));
    }

    public function store(Request $request){
        $user = User::find($request->investor);
        $user->solde = $user->solde + $request->amount;
        $user->save();
        $virment = Virment::find($request->virment);
        $virment->status = $request->virment;
        $virment->save();
        return $user;
    }
}
