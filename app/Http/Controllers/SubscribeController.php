<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Event;
use App\Events\SendMail;

class SubscribeController extends Controller
{
    public function subscribed(){
        Event::dispatch(new SendMail(1));

        dd('User Subscribed');
    }
}
