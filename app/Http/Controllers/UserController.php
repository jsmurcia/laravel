<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return $this->get('https://randomuser.me/api/?results=10')['results'];
    }
}
