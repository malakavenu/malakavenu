<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class VenuController extends Controller
{
    public function contact(Request $request)
    {
        $message = $request->get('content');

       Mail::send('emails.contact', ['content' => $message], function ($m) {

            $m->to('venu.malaka@gmail.com','Malaka Venu')->subject('Email From malakavenu.com');
        });
    }
}
