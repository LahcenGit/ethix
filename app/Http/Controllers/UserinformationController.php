<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Document;
use App\Models\User;
use App\Models\Userinformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserinformationController extends Controller
{
    //
    public function index(){
        $countries = Country::all();
        $user = Auth::user();
        $test_document = Document::where('documenttable_id',$user->id)->count();
        $test_info = Userinformation::where('user_id',$user->id)->count();
        return view('investor.add-info',compact('countries','user','test_document','test_info'));
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
        $user->status = 1;
        $user->save();
        return redirect('app')->with('success','Nous avons bien reçu vos informations, Merci!');
    }
}
