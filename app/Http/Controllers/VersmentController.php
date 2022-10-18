<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Versment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VersmentController extends Controller
{
    //
    public function index(){
        $versments = Versment::all();
        return view('admin.versments',compact('versments'));
    }
    public function addVersment(){
        $users = User::where('type','investor')->get();
        return view('admin.modal-add-versment',compact('users'));
    }
    public function store(Request $request){
        $versment = new Versment();
        $user = User::find($request->user);
        $versment->user_id = $request->user;
        $versment->type = $request->type;
        $versment->montant = $request->montant;
        $versment->save();
        if($request->type == 1){
           (int)$user->solde = (int)$user->solde + $request->montant;
           
        }
        if($request->type == 0){
           (int)$user->solde = (int)$user->solde - $request->montant;
         }
         $user->save();
        return $versment;
    }
}
