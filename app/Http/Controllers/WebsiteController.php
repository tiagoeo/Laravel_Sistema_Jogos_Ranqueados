<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Website;

class WebsiteController extends Controller
{
    public function index(){
        $website = Website::find(1);
        return view('welcome', ['website' => $website]);
    }
}
