<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $view = 'dashboard';

        return view('backoffice.pages.dashboard', compact('view'));
    }
}
