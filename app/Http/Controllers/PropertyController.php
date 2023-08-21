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
        $property->valuation = $request->valorisation;
        $property->profitability = $request->profitability;
        $property->obj_financement = $request->obj_financement;
        $property->footage = $request->footage;
        $property->nbr_bedroom =$request->nbr_bedroom;
        $property->nbr_bathroom = $request->nbr_bathroom;
        $property->max_ethix = 0;
        $property->nbr_ethix = $request->nbr_ethix;
        $property->reserve = $request->reserve;
        $property->acquisition_price = $request->acquisition_price;
        $property->remuneration_ethix = $request->remuneration_ethix;
        $property->notary_fees = $request->notary_fees;
        $property->money_reserve_acquisition = $request->money_reserve_acquisition;
        $property->rent_collected = $request->rent_collected;
        $property->charge = $request->charge;
        $property->property_tax = $request->property_tax;
        $property->money_reserve_rendement = $request->money_reserve_rendement;
        $property->total_valorisation = $request->reserve + $request->valorisation;
        $property->total_acquisition = $request->acquisition_price + $request->remuneration_ethix + $request->notary_fees +$request->money_reserve_acquisition;
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

    public function edit($id){
        $property = Property::find($id);

        return view('admin.edit-property',compact('property'));
    }

    public function update(Request $request , $id){
        $property = Property::find($id);
        $property->designation = $request->designation;
        $property->addresse = $request->address;
        $property->description = $request->description;
        $property->type = $request->type;
        $property->valuation = $request->valorisation;
        $property->profitability = $request->profitability;
        $property->obj_financement = $request->obj_financement;
        $property->footage = $request->footage;
        $property->nbr_bedroom =$request->nbr_bedroom;
        $property->nbr_bathroom = $request->nbr_bathroom;
        $property->max_ethix = 0;
        $property->nbr_ethix = $request->nbr_ethix;
        $property->reserve = $request->reserve;
        $property->acquisition_price = $request->acquisition_price;
        $property->remuneration_ethix = $request->remuneration_ethix;
        $property->notary_fees = $request->notary_fees;
        $property->money_reserve_acquisition = $request->money_reserve_acquisition;
        $property->rent_collected = $request->rent_collected;
        $property->charge = $request->charge;
        $property->property_tax = $request->property_tax;
        $property->money_reserve_rendement = $request->money_reserve_rendement;
        $property->total_valorisation = $request->reserve + $request->valorisation;
        $property->total_acquisition = $request->acquisition_price + $request->remuneration_ethix + $request->notary_fees +$request->money_reserve_acquisition;
        $property->save();
        $hasFile = $request->hasFile('photos');

        if($hasFile){
            $image = Image::where('property_id',$id)->count();
            if($image == 0){
            foreach($request->file('photos') as $file){
                $destination = 'public/images/properties';
                $path = $file->store($destination);
                $storageName = basename($path);
                $image = new Image();
                $image->link= $storageName;
                $property->images()->save($image);
            }
            }
            else{
                $images = Image::where('property_id',$id)->get();
                foreach($images as $image){
                    $image->delete();
                    Storage::disk('public')->delete('images/properties/'.$image->link);
                }
            foreach($request->file('photos') as $file){
                $destination = 'public/images/properties';
                $path = $file->store($destination);
                $storageName = basename($path);
                $image = new Image();
                $image->link= $storageName;
                $property->images()->save($image);
                }
            }
            }
        return redirect('dashboard-admin/properties');
    }

    public function destroy($id){
        $property = Property::find($id);
        $property->delete();
        return redirect('dashboard-admin/properties');
    }
}
