<?php

namespace App\Http\Controllers;

use App\Https\Controllers\Controller;
use App\Mail\DemoMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send()
    {
        $objDemo= new \stdClass();
        $objDemo->demo_one ='Demo One Value:';
        $objDemo->demo_two ='Demo Two Value:';
        $objDemo->sender= 'Damir Syzdykov';
        $objDemo->receiver= 'Damir Syzdykov';

        Mail::to("atomunicorn2007@gmail.com")->send(new DemoEmail($objDemo));

    }
}
