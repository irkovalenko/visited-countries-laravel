<?php

namespace App\Http\Controllers;

use Inertia\Response;

class DashboardController extends Controller
{
    public function dashboard(): Response
    {
        return inertia('Dashboard');
    }
}
