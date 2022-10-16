<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $properties = Property::all();
        return view('admin.properties',compact('properties'));
    }
    public function create(){
        return view('admin.add-property');
    }

    public function store(Request $request){
        $property = new Property();
        $property->designation = $request->designation;
        $property->addresse = $request->address;
        $property->description = $request->description; 
        $property->type = $request->type;
        $property->valuation = $request->valuation;
        $property->profitability = $request->profitability;
        $property->obj_revenu = $request->obj_revenu;
        $property->obj_financement = $request->obj_financement;
        $property->footage = $request->footage;
        $property->nbr_bedroom =$request->nbr_bedroom;
        $property->nbr_bathroom = $request->nbr_bathroom;
        $property->max_ethix = $request->max_ethix;
        $property->save();
        $hasFile = $request->hasFile('photos');
      
        if($hasFile){
            foreach($request->file('photos') as $file){
                $destination = 'public/images/properties';
                $path = $file->store($destination);
                $storageName = basename($path);
                $image = new Image();
                $image->link= $storageName;
                $property->images()->save($image);
            } 
            }
        return redirect('dashboard-admin/properties');
    }
}
