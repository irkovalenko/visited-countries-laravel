<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Inertia\Response;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        return inertia('Countries/Index', [
            'countries' => Country::all()->map(fn(Country $country) => [
                'id' => $country->id,
                'name' => $country->name,
                'flagUrl' => $country->countryFlagUrl(),
            ]),
        ]);
    }
}
