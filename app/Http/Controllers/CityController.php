<?php

namespace App\Http\Controllers;

use App\Models\City;
use Inertia\Response;

class CityController extends Controller
{
    public function index(): Response
    {
        return inertia('Cities/Index', [
            'cities' => City::all(),
        ]);
    }
}
