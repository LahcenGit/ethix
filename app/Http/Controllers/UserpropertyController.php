<?php

namespace App\Http\Controllers;

use App\Models\Ethix;
use App\Models\Property;
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

    public function achatEthix($id){
        $user = Auth::user();
        $max_ethix = $user->solde/100;
        $property = Property::find($id);
        $nbr_ethix = 0;
        $message = null;
        return view('investor.achat-ethix',compact('user','max_ethix','property','message','nbr_ethix'));
    }

    public function storeEthix(Request $request){
        $user = Auth::user();
        $value_ethix = Ethix::first();
        $max_ethix = $user->solde/$value_ethix->value;
        $property = Property::where('id',$request->property)->first();
        $max_ethix_property = $property->max_ethix;
        $nbr_ethix = $request->nbr_ethix;
        if($request->nbr_ethix > $max_ethix){
         $message = 'le nombre d ethix doit etre inférieur ou égale a 5';
            return view('investor.achat-ethix',compact('user','max_ethix','property','message','nbr_ethix'));
        }
        else if($request->nbr_ethix > $max_ethix_property){
            $message = 'le nombre d ethix doit etre inférieur a 20';
            return view('investor.achat-ethix',compact('user','max_ethix','property','message','nbr_ethix'));
        }
        else{
            $userproperty = new Userproperty();
            $userproperty->user_id = $user->id;
            $userproperty->property_id = $request->property;
            $userproperty->nbr_ethix = $request->nbr_ethix;
            $userproperty->value_ethix = $value_ethix->value;
            $userproperty->save();
            return redirect('app/investissements');
        }
    }

    public function investissements(){
        $investissements = Userproperty::with('property')->where('user_id',Auth::user()->id)->get();
         return view('investor.investissements',compact('investissements'));
    }
}
