<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanetController extends Controller
{
    public function index()
    {
        return $this->get('https://swapi.dev/api/planets')['results'];
    }
}
