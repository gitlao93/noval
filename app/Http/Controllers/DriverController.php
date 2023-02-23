<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function store(Request $request)
    {
       
        $validatedData = $request->validate([
            'driver' => 'required',
            'opcr_ID' => 'required'
        ]);
        // Create the objective
        $driver = new Driver;
        $driver->driver = $validatedData['driver'];
        $driver->opcr_ID = $validatedData['opcr_ID'];
        $driver->save();
        // Redirect to the objectives index page
        return redirect()->route('objectives.index')->with('success', 'driver created successfully!');
    }
}
