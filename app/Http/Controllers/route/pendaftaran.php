<?php

namespace App\Http\Controllers\route;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pendaftaran extends Controller
{
    public function index()
    {
        return view('page.pendaftaran');
    }
}
