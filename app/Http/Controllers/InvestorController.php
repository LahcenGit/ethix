<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Ethix;
use App\Models\Property;
use App\Models\User;
use App\Models\Userinformation;
use App\Models\Userproperty;
use App\Models\Virment;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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
        $users = User::with('informations','documents')->where('type','investor')->get()->reverse();
        return view('admin.users',compact('users'));
    }
    public function edit($id){
        $user = User::find($id);
        return view('admin.modal-edit-user',compact('user'));
    }
    public function update(Request $request ,$id){
        $user = User::find($id);
        $user->status = $request->status;
        $user->save();
        return redirect('dashboard-admin/users');
    }

    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        return redirect('dashboard-admin/users');
    }

    public function properties(){
        $properties = Property::all();
        return view('investor.properties',compact('properties'));
    }


    public function dashboard(){
        $properties = Property::all();
        $user = Auth::user();
        $test_document = Document::where('documenttable_id',$user->id)->count();
        $test_info = Userinformation::where('user_id',$user->id)->count();
        return view('investor.dashboard-investor',compact('properties','user','test_document','test_info'));
    }
    public function detailProperty($id){
        $property = Property::find($id);
        $user = Auth::user();
        $ethix_val = Ethix::first();
        $test_document = Document::where('documenttable_id',$user->id)->count();
        $test_info = Userinformation::where('user_id',$user->id)->count();
        $value_ethix = Ethix::first();
        $property = Property::find($id);
        $ethix_property = Userproperty::where('property_id',$property->id)->sum('nbr_ethix');
        $ethix_total = intval($property->obj_financement / $ethix_val->value) -  $ethix_property ;
        return view('investor.detail-property',compact('property','user','test_document','test_info','value_ethix','ethix_total'));
    }

    public function showFile($id){
        $user = User::find($id);
        $test = Document::where('documenttable_id',$user->id)->first();
        return view('admin.modal-show-file',compact('user','test'));
    }

    public function downloadFile($name){
        $document = Document::where('link',$name)->first();
        $url = public_path('storage/documents/').$document->link;
        $ext = pathinfo($name, PATHINFO_EXTENSION);
        $image = file_get_contents($url);
         

        if($ext == 'png' || $ext == 'PNG'){

            $response = new Response($image, 200);
            $response->header('Content-Type', 'image/png');
            $response->header('Content-Disposition', 'attachment');

        }

            else if($ext == 'jpg' || $ext == 'jpeg' || $ext == 'JPEG' ||$ext == 'JPG'){
           
                $response = new Response($image, 200);
            $response->header('Content-Type', 'image/jpeg');
            $response->header('Content-Disposition', 'attachment');


            }

            else if($ext == 'gif' || $ext == 'GIF'){
        
                $response = new Response($image, 200);
                $response->header('Content-Type', 'image/gif');
                $response->header('Content-Disposition', 'attachment');

            }
            else{
                    $response = new Response($image, 200);
                    $response->header('Content-Type', 'application/pdf');
                    $response->header('Content-Disposition', 'attachment');
            }
             return $response;

         }

                
        public function getInvestor($id){
            $user = Userinformation::with('user')->where('user_id',$id)->first();
            $documents = Document::where('documenttable_id',$id)->get();
            $virement = Virment::where('user_id',$id)->first();

            return view('admin.view-investor',compact('user','documents','virement'));
        }

        public function showModal(){
            return view('investor.modal-show-info-virement');
        }

    }

