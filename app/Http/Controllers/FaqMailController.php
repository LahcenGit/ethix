<?php

namespace App\Http\Controllers;

use App\Mail\FaqMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class FaqMailController extends Controller
{
    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'captcha' => 'required|captcha'
        ], ['captcha.captcha' => 'Le code Captcha est invalide.']);

        if ($validator->fails()) {
            return false;
        }

        Mail::to('benosmanhind@gmail.com')->send(new FaqMail($request));
        return true;
      }
}
