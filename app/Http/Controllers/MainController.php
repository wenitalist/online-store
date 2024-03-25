<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends AbstractController
{
    public function show(): View {
        return view('main');
    }
}
