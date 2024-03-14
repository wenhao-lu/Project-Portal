<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;



class PortfolioCMSController extends Controller
{
    public function index()
    {
        return view('portfolioCMS.index');
    }
}
