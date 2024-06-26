<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\User;
use App\Models\Userinformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDocumentController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index (){
        $user = Auth::user();
        $test_document = Document::where('documenttable_id',$user->id)->count();
        $test_info = Userinformation::where('user_id',$user->id)->count();
       return view('add-files',compact('user','test_document','test_info'));

    }
    public function store(Request $request){

        $validated = $request->validate([
            'file_one' => 'max:5000',

        ],
        [
        'file_one.max' => 'La taille de fichier ne doit pas dépasser 5 Mo',

        ]
    );
        $user_auth = Auth::user();
        $user = User::find($user_auth->id);
        $file = $request->file_one;
        $destination = 'public/documents';
        $path = $file->store($destination);
        $storageName = basename($path);

        $document = new Document();
        $document->link = $storageName;
        $user->documents()->save($document);
        $user->status = 1;
        $user->save();
        return redirect('app')->with('success','Nous avons bien reçu vos documents, Merci!');
   }


}
