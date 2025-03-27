<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = Activity::all(); //fetch all albums

        return view('activities.index', compact('activities')); //return the view with activities
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'activity_name' => 'required|string|max:255',
        'activity_location' => 'required|string|max:255',
        'activity_desc' => 'required|string',
        'activity_rules' => 'required|string',
        'activity_price' => 'required|numeric',
        'activity_images' => 'required|array',
        'activity_images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);
    
    // Handle multiple image uploads
    $imagePaths = [];
    if ($request->hasFile('activity_images')) {
        foreach ($request->file('activity_images') as $image) {
            $path = $image->store('activities', 'public');
            $imagePaths[] = $path;
        }
    }
    
    $activity = new Activity();
    $activity->activity_name = $validated['activity_name'];
    $activity->activity_location = $validated['activity_location'];
    $activity->activity_desc = $validated['activity_desc'];
    $activity->activity_rules = $validated['activity_rules'];
    $activity->activity_price = $validated['activity_price'];
    $activity->activity_images = implode(',', $imagePaths); // Store as comma-separated string
    $activity->save();
    
    return redirect()->route('activities.index')->with('success', 'Activity created successfully');
}

    
    public function create()
    {
        return view('activities.create');
    }

    /**
     * Display the specified resource.
     */
    public function show($id) {
        $activity = Activity::findOrFail($id);
        return view('activities.show', compact('activity'));
    }
    
    public function search(Request $request)
    {
        $query = $request->input('query');
        $activities = Activity::where('activity_name', 'like', "%{$query}%")
                            ->orWhere('activity_location', 'like', "%{$query}%")
                            ->get();
    
        return view('activities.index', compact('activities'));
    }
}

