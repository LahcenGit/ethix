<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDocumentController extends Controller
{
    //
    public function store(Request $request , User $user){
        
        $user_id = $request->user()->id;

        $file = $request->file_one;
        $destination = 'public/documents';
        $path = $file->store($destination);
        $storageName = basename($path);
       
        $document = new Document();
        $document->link = $storageName;
        $user->documents()->save($document);

        $file = $request->file_two;
        $destination = 'public/documents';
        $path = $file->store($destination);
        $storageName = basename($path);
       
        $document = new Document();
        $document->link = $storageName;
        $user->documents()->save($document);

       

    }
   

}
