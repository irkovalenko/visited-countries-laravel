<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Inertia\Response;

class RegionController extends Controller
{
    public function index(): Response
    {
        return inertia('Regions/Index', [
            'regions' => Region::all(),
        ]);
    }
}
