<?php

namespace App\Traits;

use Illuminate\Support\Facades\Http;

trait HttpCommunicationTrait
{
    public function get($url)
    {
        return Http::get($url)->json();
    }
}
