<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Ethix;
use App\Models\Property;
use App\Models\User;
use App\Models\Userinformation;
use App\Models\Userproperty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $property = Property::find($id);
        $ethix_val = $property->ethix_value;
        $max_ethix = $user->solde/$ethix_val;
        $ethix_property = Userproperty::where('property_id',$property->id)->sum('nbr_ethix');
        $ethix_total = intval($property->obj_financement / $ethix_val) -  $ethix_property ;
        $nbr_ethix = 0;
        $message = null;
        $test_document = Document::where('documenttable_id',$user->id)->count();
        $test_info = Userinformation::where('user_id',$user->id)->count();

        return view('investor.achat-ethix',compact('user','max_ethix','property','message','nbr_ethix','test_document','test_info','ethix_total'));
    }

    public function storeEthix(Request $request){
        $user_auth = Auth::user();
        $user = User::find($user_auth->id);
        $property = Property::where('id',$request->property)->first();
        $ethix_val = $property->ethix_value;
        $max_ethix = $user->solde/$ethix_val;
        $ethix_property = Userproperty::where('property_id',$property->id)->sum('nbr_ethix');
        $ethix_total = intval($property->obj_financement / $ethix_val)  -  $ethix_property;
        $max_ethix_property = $property->max_ethix;
        $nbr_ethix = $request->nbr_ethix;
        $test_info = Userinformation::where('user_id',$user->id)->count();
        $test_document = Document::where('documenttable_id',$user->id)->count();
        if($nbr_ethix <= 0){
            $message = 'le nombre doit être supérieur à 0 ';
            return view('investor.achat-ethix',compact('user','max_ethix','property','message','nbr_ethix','test_document','test_info','ethix_total'));
        }
        if($max_ethix >= $ethix_total){
           $max = $ethix_total;
        }
        else{
            $max = $max_ethix;
        }
        if($nbr_ethix > $max){
            $message = 'le nombre doit être inférieur ou égale à '.$max;
            return view('investor.achat-ethix',compact('user','max_ethix','property','message','nbr_ethix','test_document','test_info','ethix_total'));
        }

        if($nbr_ethix > $max_ethix){
         $message = 'le nombre doit être inférieur ou égale à '.$max_ethix;
            return view('investor.achat-ethix',compact('user','max_ethix','property','message','nbr_ethix','test_document','$test_info','ethix_total'));
        }
       /* else if($request->nbr_ethix > $max_ethix_property){
            $message = 'le nombre doit être inférieur à '.$max_ethix_property;
            return view('investor.achat-ethix',compact('user','max_ethix','property','message','nbr_ethix','test_document','ethix_total'));
        }*/
        else{
            $userproperty = new Userproperty();
            $userproperty->user_id = $user->id;
            $userproperty->property_id = $request->property;
            $userproperty->nbr_ethix = $request->nbr_ethix;
            $userproperty->value_ethix = $ethix_val;
            $userproperty->save();

            (int)$user->solde = (int)$user->solde-($nbr_ethix * (int)$ethix_val);
            $user->save();
            return redirect('app/investissements')->with('success','Achat effectué avec succès ('.$nbr_ethix.' ethix), Merci!');
        }
    }


    public function engagementEthix($id){
        $user = Auth::user();
        $property = Property::find($id);
        $ethix_val = $property->ethix_value;
        $max_ethix = $user->solde/$ethix_val;
        $ethix_property = Userproperty::where('property_id',$property->id)->sum('nbr_ethix');
        $ethix_total = intval($property->obj_financement / $ethix_val) -  $ethix_property ;
        $nbr_ethix = 0;
        $message = null;
        $test_document = Document::where('documenttable_id',$user->id)->count();
        $test_info = Userinformation::where('user_id',$user->id)->count();
        return view('investor.engagement',compact('user','max_ethix','property','message','nbr_ethix','test_document','test_info','ethix_total'));
    }


    public function investissements(){
        $investissements = Userproperty::with('property')->where('user_id',Auth::user()->id)
                                        ->groupBy('property_id')
                                        ->selectRaw('*, sum(nbr_ethix) as sum_ethix')
                                        ->get();
        $user = Auth::user();
        $test_document = Document::where('documenttable_id',$user->id)->count();
        $test_info = Userinformation::where('user_id',$user->id)->count();
        return view('investor.investissements',compact('investissements','user','test_document','test_info'));
    }
}
