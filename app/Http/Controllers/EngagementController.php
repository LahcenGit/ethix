<?php

namespace App\Http\Controllers;

use App\Models\Engagement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class EngagementController extends Controller
{

    

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'property' => 'required',
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'ville' => 'required|string|max:255',
            'signed' => 'required|string',
            'mtn' => 'required|numeric',
        ]);

        $engagement = new Engagement();
        $engagement->user_id = Auth::user()->id;
        $engagement->property_id = $request->property;
        $engagement->nom= $request->nom;
        $engagement->prenom = $request->prenom;
        $engagement->date_naissance = $request->date_naissance;
        $engagement->adresse = $request->adresse;
        $engagement->ville = $request->adresse;
        $engagement->signature = $request->signed;
        $engagement->montant = $request->mtn;
        $engagement->save();
       
   
        return redirect('/app');

    }
}
