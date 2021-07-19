<?php

namespace SoluzioneSoftware\LaravelPWA\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

class OfflineController extends Controller
{
    public function __invoke()
    {
        return View::make('pwa::offline');
    }
}
