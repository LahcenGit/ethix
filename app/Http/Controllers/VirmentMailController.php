<?php

namespace App\Http\Controllers;

use App\Mail\Virement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class VirmentMailController extends Controller
{
    //
    public function index()
    {
      $user = Auth::user();
      Mail::to($user->email)->send(new Virement());
      return redirect('/app');
    }
}
