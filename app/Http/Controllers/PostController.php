<?php

namespace App\Http\Controllers;

use Inertia\Response;

class PostController extends Controller
{
    public function index(): Response
    {
        return inertia('Posts/Index');
    }
}
