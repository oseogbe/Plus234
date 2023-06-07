<?php

namespace App\Http\Controllers\Planner;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateEventRequest;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = [];
        return inertia('Planner/Events/Index', compact('events'));
    }

    public function store(CreateEventRequest $request)
    {
        $validated = $request->validated();
    }
}
