<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display dashboard page.
     *
     * @return Renderable
     */
    public function dashboard()
    {
        return view('dashboard.index');
    }
}
