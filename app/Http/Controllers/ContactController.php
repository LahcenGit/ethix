<?php

namespace App\Http\Controllers;

use App\Mail\MailContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index(){
      return view('contact');
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'captcha' => 'required|captcha'
        ], ['captcha.captcha' => 'Le code Captcha est invalide.']);

        if ($validator->fails()) {
            return false;
        }

        Mail::to('contact@ethix-invest.com')->send(new MailContact($request));
        return true;
    }
    public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
