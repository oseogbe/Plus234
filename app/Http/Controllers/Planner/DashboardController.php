<?php

namespace App\Http\Controllers\Planner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return inertia('Planner/Dashboard/Index');
    }
}
