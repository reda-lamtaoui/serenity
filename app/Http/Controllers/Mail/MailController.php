<?php

namespace App\Http\Controllers\Mail;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\Promo;

class MailController extends Controller
{

    public function store()
    {
        Mail::to("medreda.lamtaoui@gmail.com")->send(new Promo());
        dd("Email is Sent.");
    }
}
