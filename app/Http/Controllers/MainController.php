<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Information;
use App\Models\Inhouse;
use App\Models\Training;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $view = 'dashboard';
        $data = Information::first();
        $about = About::first();
        $clients = Client::where('is_active', 1)->get();
        $contact = Contact::first();
        $inhouses = Inhouse::where('is_active', 1)
            ->latest()
            ->get();

        $trainings = Training::where('is_active', 1)
            ->latest()
            ->get();

        return view('pages.dashboard', compact('view', 'data', 'about', 'clients', 'contact', 'inhouses', 'trainings'));
    }

    public function training($slug)
    {
        $view = 'training';
        $data = Training::where('slug', $slug)->first();
        return view('pages.training', compact('view', 'data'));
    }
}
