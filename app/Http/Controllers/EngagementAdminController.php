<?php

namespace App\Http\Controllers;

use App\Models\Engagement;
use App\Models\Investor;
use App\Models\Property;
use App\Models\Userproperty;
use Illuminate\Http\Request;

class EngagementAdminController extends Controller
{
    public function index(){
        $engagements = Engagement::orderBy('created_at','desc')->get();
        return view('admin.engagements', compact('engagements'));
    }
    public function EngagementPrint($id){
        $engagement = Engagement::find($id);
        return view('admin.engagement-print', compact('engagement'));
    }

    public function showModalEditStatus($id){
        $engagement = Engagement::find($id);
        return view('admin.modal-edit-status-engagement',compact('engagement'));
    }

    public function updateStatus($id , $status){
        $engagement = Engagement::find($id);
        $property = Property::find($engagement->property_id);
        if($status == 1){
        $nbr_ethix = floor($engagement->montant / $property->ethix_value);
        $rest = $engagement->montant - ($nbr_ethix * $property->ethix_value);
        if($rest > 0){
            $investor = Investor::where('user_id',$engagement->user_id)->first();
            $investor->solde = $investor->solde + $rest;
            $investor->save();
        }
        $userproperty = new Userproperty();
        $userproperty->user_id = $engagement->user_id;
        $userproperty->property_id = $property->id;
        $userproperty->nbr_ethix = $nbr_ethix;
        $userproperty->value_ethix = $property->ethix_value;
        $userproperty->save();
        }
        $engagement->status = $status;
        $engagement->save();
        return $engagement;

    }

    public function destroy($id){
        $engagement = Engagement::find($id);
        $engagement->delete();
        return redirect('dashboard-admin/engagements');
    }
}
