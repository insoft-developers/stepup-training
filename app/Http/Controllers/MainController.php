<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Information;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() 
    {
        $view = 'dashboard';
        $data = Information::first();
        $about = About::first();
        return view('pages.dashboard', compact('view', 'data', 'about'));
    }

    public function training($slug) 
    {
        $view = 'training';
        return view('pages.training', compact('view'));
    }
}
