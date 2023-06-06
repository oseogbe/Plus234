<?php

namespace App\Http\Controllers\Planner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = [];
        return inertia('Planner/Events/Index', compact('events'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'category_id' => ['required', 'exists:categories,id'],
            'name' => ['required', 'string'],
            'description' => ['required', 'string'],
            'location' => ['required', 'string'],
            'tags' => ['required', 'array', 'max:5'],
            'tags.*' => ['string'],
            'poster' => ['required', 'image', 'mimes:png,jpg,jpeg'],
            'post_at' => ['required', 'date'],
        ]);
    }
}
