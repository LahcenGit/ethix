<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\User;
use App\Models\Userproperty;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $nbr_properties = Property::count();
        $nbr_investor = User::where('type','investor')->count();
        $nbr_ethix = Userproperty::sum('nbr_ethix');
        $users = User::limit('5')->orderBy('created_at','desc')->get();
        $investissements = Userproperty::limit('5')->orderBy('created_at','desc')->get();
        return view('admin.dashboard-admin',compact('nbr_properties','nbr_investor','nbr_ethix','users','investissements'));
    }
}
