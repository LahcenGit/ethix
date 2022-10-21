<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Userinformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserinformationController extends Controller
{
    //
    public function index(){
        return view('investor.add-info');
    }

    public function store(Request $request){
        $user_auth = Auth::user();
        $user = User::find($user_auth->id);
        $info = new Userinformation();
        $info->user_id = $user->id;
        $info->country_of_residence = $request->country_of_residence;
        $info->country_of_birth = $request->country_of_birth;
        $info->cite_of_birth = $request->cite_of_birth;
        $info->date_of_birth = $request->date_of_birth;
        $info->address = $request->address;
        $info->num_department = $request->num_department;
        $info->code_postal = $request->code_postal;
        $info->genre = $request->genre;
        $info->save();
        $user->status = 3;
        $user->save();
        return redirect('app');
    }
}
