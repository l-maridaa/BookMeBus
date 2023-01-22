<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth; // include for AUTH



use App\Providers\RouteServiceProvider;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  // include DB Class
use Illuminate\Support\Facades\Route;

class dashboardController extends Controller
{
    //
    public function show_dashboard(){
        return view('user.profile');
    }

    public function show_booked_list(){
        return view('user.booked');
    }
}
