<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboard_Controller extends Controller
{
    public function index()
    {
        return view('adminPage.dashboardAdmin.dashboard');
    }
}
