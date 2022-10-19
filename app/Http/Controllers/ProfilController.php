<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $user = Auth::user();
        $message = null;
        $test_document = Document::where('documenttable_id',$user->id)->count();
        return view('investor.profil',compact('user','message','test_document'));
    }
    public function update(Request $request , $id){
        $user = User::find($id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->username = $request->username;
        if($request->password){
            $user->password = Hash::make($request->password);
          }
        $user->save();
        $message = 'La modification a été bien enregistrer';
        return view('investor.profil',compact('message','user'));
    }
}
