<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class DashboardFactsController extends Controller
{
    public function dashboardFacts(): View {
        return view('dashboardFacts');
    }
}
