<?php

namespace App\Http\Controllers;

use App\Models\Homestay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomestayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $homestays = Homestay::all(); //fetch all albums

        return view('homestays.index', compact('homestays')); //return the view with homestays
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'homestay_name' => 'required|string|max:255',
        'homestay_location' => 'required|string|max:255',
        'homestay_desc' => 'required|string',
        'homestay_rules' => 'required|string',
        'homestay_price' => 'required|numeric',
        'homestay_images' => 'required|array',
        'homestay_images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);
    
    // Handle multiple image uploads
    $imagePaths = [];
    if ($request->hasFile('homestay_images')) {
        foreach ($request->file('homestay_images') as $image) {
            $path = $image->store('homestays', 'public');
            $imagePaths[] = $path;
        }
    }
    
    $homestay = new Homestay();
    $homestay->homestay_name = $validated['homestay_name'];
    $homestay->homestay_location = $validated['homestay_location'];
    $homestay->homestay_desc = $validated['homestay_desc'];
    $homestay->homestay_rules = $validated['homestay_rules'];
    $homestay->homestay_price = $validated['homestay_price'];
    $homestay->homestay_images = implode(',', $imagePaths); // Store as comma-separated string
    $homestay->save();
    
    return redirect()->route('homestays.index')->with('success', 'Homestay created successfully');
}

    
    public function create()
    {
        return view('homestays.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Homestay $homestay)
    {
        $reviewCreateUrl = route('reviews.create', [
            'type' => 'homestay', 
            'id' => $homestay->homestay_id
        ]);
    
        return view('homestays.show', [
            'homestay' => $homestay,
            'reviewCreateUrl' => $reviewCreateUrl
        ]);
    }
    
    public function search(Request $request)
    {
        $query = $request->input('query');
        $homestays = Homestay::where('homestay_name', 'like', "%{$query}%")
                            ->orWhere('homestay_location', 'like', "%{$query}%")
                            ->get();
    
        return view('homestays.index', compact('homestays'));
    }
}

