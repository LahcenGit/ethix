<?php

namespace App\Http\Controllers;

use App\Mail\Reminder;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReminderController extends Controller
{
    //
    public function index()
    {
        $utilisateursSansDocuments = User::doesntHave('documents')->get();

        foreach($utilisateursSansDocuments as $item){
             Mail::to($item->email)->send(new Reminder());
        }

        return true;
    }
}
