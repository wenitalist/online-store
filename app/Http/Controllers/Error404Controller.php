<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class Error404Controller extends AbstractController
{
    public function show(): View {
        return view('error404');
    }
}
