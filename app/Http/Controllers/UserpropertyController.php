<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Ethix;
use App\Models\Property;
use App\Models\User;
use App\Models\Userproperty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserpropertyController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $investissements = Userproperty::with('property','user')->get();
        return view('admin.investissements',compact('investissements'));
    }

    public function achatEthix($id){
        $user = Auth::user();
        $max_ethix = $user->solde/100;
        $property = Property::find($id);
        $nbr_ethix = 0;
        $message = null;
        $test_document = Document::where('documenttable_id',$user->id)->count();
        return view('investor.achat-ethix',compact('user','max_ethix','property','message','nbr_ethix','test_document'));
    }

    public function storeEthix(Request $request){
        $user_auth = Auth::user();
        $user = User::find($user_auth->id);
        $value_ethix = Ethix::first();
        $max_ethix = $user->solde/$value_ethix->value;
        $property = Property::where('id',$request->property)->first();
        $max_ethix_property = $property->max_ethix;
        $nbr_ethix = $request->nbr_ethix;
        
        $test_document = Document::where('documenttable_id',$user->id)->count();
        if($request->nbr_ethix > $max_ethix){
         $message = 'le nombre d éthixs doit être inférieur ou égale à '.$max_ethix;
            return view('investor.achat-ethix',compact('user','max_ethix','property','message','nbr_ethix','test_document'));
        }
        else if($request->nbr_ethix > $max_ethix_property){
            $message = 'le nombre d éthixs doit être inférieur à '.$max_ethix_property;
            return view('investor.achat-ethix',compact('user','max_ethix','property','message','nbr_ethix','test_document'));
        }
        else{
            $userproperty = new Userproperty();
            $userproperty->user_id = $user->id;
            $userproperty->property_id = $request->property;
            $userproperty->nbr_ethix = $request->nbr_ethix;
            $userproperty->value_ethix = $value_ethix->value;
            $userproperty->save();

            (int)$user->solde = (int)$user->solde-($nbr_ethix * (int)$value_ethix->value);
            $user->save();
            return redirect('app/investissements');
        }
    }

    public function investissements(){
        $investissements = Userproperty::with('property')->where('user_id',Auth::user()->id)->get();
        $user = Auth::user();
        $test_document = Document::where('documenttable_id',$user->id)->count();
        return view('investor.investissements',compact('investissements','user','test_document'));
    }
}
