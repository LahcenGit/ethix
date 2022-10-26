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
        $new_investor = User::where('status',0)->count();
        $investor_email_valid = User::where('email_verified_at','!=',null)->count();
       
        $investor_waiting = User::where('status',1)->count();
        $investor_valid = User::where('status',2)->count();
        $investor_blocked = User::where('status',3)->count();

        $top_investors = Userproperty::selectRaw('sum(nbr_ethix) as sum')
                                        ->selectRaw('user_id')
                                        ->with('user')
                                        ->groupBy('user_id')
                                        ->orderBy('sum','desc')->limit('3')->get();
      
        $total = Userproperty::selectRaw('sum(nbr_ethix * value_ethix) as sum')
                               ->first();
       
        return view('admin.dashboard-admin',compact('nbr_properties','nbr_investor','nbr_ethix','users',
        'investissements','new_investor','investor_email_valid','investor_waiting','investor_valid','investor_blocked','top_investors','total'));
    }
}
