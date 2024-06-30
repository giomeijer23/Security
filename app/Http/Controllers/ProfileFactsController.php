<?php

namespace App\Http\Controllers;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function profileFacts(): View {
        return view('profileFacts');
    }
}
