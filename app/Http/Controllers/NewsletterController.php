<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    //
    public function store(Request $request){
        $newsletter = new Newsletter();
        $newsletter->email= $request->email;
        $newsletter->save();
        return redirect('/');
    }
}
