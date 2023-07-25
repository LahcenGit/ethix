<?php

namespace App\Http\Controllers;

use App\Mail\FaqMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FaqMailController extends Controller
{
    public function store(Request $request){

          Mail::to('contact@ethix-invest.com')->send(new FaqMail($request));
          return 1;
      }
}
