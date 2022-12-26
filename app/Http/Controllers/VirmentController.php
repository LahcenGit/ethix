<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Userinformation;
use App\Models\Virment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VirmentController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(){
        $user = Auth::user();
        $test_document = Document::where('documenttable_id',$user->id)->count();
        $test_info = Userinformation::where('user_id',$user->id)->count();
        return view('investor.add-info-virment',compact('user','test_document','test_info'));
    }

    public function store(Request $request){
        $user = Auth::user();
        $virment = new Virment();
        $virment->user_id = $user->id;
        $virment->amount = $request->amount;
        $destination = 'public/images/virments';
        $path = $request->received->store($destination);
        $storageName = basename($path);
        $virment->received = $storageName;
        $virment->save();
        return redirect('/app')->with('success','Nous avons bien reçu votre reçu, Merci!');;
    }
}
