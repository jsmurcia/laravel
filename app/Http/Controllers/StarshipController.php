<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StarshipController extends Controller
{
    public function index()
    {
        return $this->get('https://swapi.dev/api/starships')['results'];
    }
}
