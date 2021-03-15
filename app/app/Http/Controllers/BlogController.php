<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use 
class BlogController extends Controller
{
    public function index(){
        $clients=Client::all();

        return view('client.index')->with(['clients'=>$clients]);
    }
}
