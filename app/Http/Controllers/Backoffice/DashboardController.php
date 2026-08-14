<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Facility;
use App\Models\Testimony;
use App\Models\Training;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $view = 'dashboard';


        /*
        |--------------------------------------------------------------------------
        | Statistik
        |--------------------------------------------------------------------------
        */

        $totalTrainings = Training::count();

        $totalClients = Client::count();

        $totalTestimonies = Testimony::count();

        $totalFacilities = Facility::count();


        /*
        |--------------------------------------------------------------------------
        | Training
        |--------------------------------------------------------------------------
        */

        $upcomingTrainings = Training::whereDate(
            'start_at',
            '>=',
            Carbon::today()
        )
            ->orderBy('start_at')
            ->limit(5)
            ->get();


        $recentTrainings = Training::latest()
            ->limit(5)
            ->get();


        /*
        |--------------------------------------------------------------------------
        | Training Bulan Ini
        |--------------------------------------------------------------------------
        */

        $trainingsThisMonth = Training::whereMonth(
            'start_at',
            Carbon::now()->month
        )
            ->whereYear(
                'start_at',
                Carbon::now()->year
            )
            ->count();


        /*
        |--------------------------------------------------------------------------
        | Training Selesai
        |--------------------------------------------------------------------------
        */

        $completedTrainings = Training::whereDate(
            'finish_at',
            '<',
            Carbon::today()
        )->count();


        return view('backoffice.pages.dashboard', compact(
            'totalTrainings',
            'totalClients',
            'totalTestimonies',
            'totalFacilities',
            'upcomingTrainings',
            'recentTrainings',
            'trainingsThisMonth',
            'completedTrainings'
        ));
    }
}
