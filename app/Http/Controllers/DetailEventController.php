<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailEventController extends Controller
{
    public function displayDetailEvent(){
        return view('detailevent', [
            'title' => 'DetailEvent'
        ]);
    }
}
