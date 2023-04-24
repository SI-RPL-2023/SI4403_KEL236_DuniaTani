<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailCommunityController extends Controller
{
    public function displayDetailCommunity(){
        return view('detailcommunity', [
            'title' => 'DetailCommunity'
        ]);
    }
}