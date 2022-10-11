<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class InvestorController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $users = User::where('type','investor')->get();
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
    

    public function dashboard(){
        $properties = Property::all();
        $user = Auth::user();
        $test_document = Document::where('documenttable_id',$user->id)->count();
        return view('investor.dashboard-investor',compact('properties','user','test_document'));
    }
    public function detailProperty($id){
        $property = Property::find($id);
        $user = Auth::user();
        $test_document = Document::where('documenttable_id',$user->id)->count();
        return view('investor.detail-property',compact('property','user','test_document'));
    }

    public function showFile($id){
        $user = User::find($id);
        $test = Document::where('documenttable_id',$user->id)->first();
        return view('admin.modal-show-file',compact('user','test')); 
    }

    public function downloadFile($link){
        $document = Document::where('link',$link)->first();
        $file ='storage/documents/'.$document->link;
         $ext = pathinfo($link, PATHINFO_EXTENSION);

            if($ext == 'png' || 'PNG'){
            $headers = array(
                'Content-Type:image/png',
                );
            }

            else if($ext == 'jpg' || 'jpeg' || 'JPEG' || 'JPG'){
            $headers = array(
                'Content-Type:image/jpeg',
                );
            }

            else if($ext == 'gif' || 'GIF'){
            $headers = array(
                'Content-Type:image/gif',
                );
            }
            else{
                $headers = array(
                    'Content-Type:application/pdf',
                    );
            }
             return response()->download($file , $link , $headers);
                
                }
   
    }

