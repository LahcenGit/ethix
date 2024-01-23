<?php

namespace App\Http\Controllers;

use App\Models\Engagement;
use Illuminate\Http\Request;

class EngagementAdminController extends Controller
{
    public function index(){
        $engagements = Engagement::all();
        return view('admin.engagements', compact('engagements'));
    }
    public function EngagementPrint($id){
        $engagement = Engagement::find($id);
        return view('admin.engagement-print', compact('engagement'));
    }

    public function destroy($id){
        $engagement = Engagement::find($id);
        $engagement->delete();
        return redirect('dashboard-admin/engagements');
    }
}
