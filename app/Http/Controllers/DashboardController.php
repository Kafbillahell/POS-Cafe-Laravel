<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard1()
{
    return view('dashboard.dashboard1');
}

}
