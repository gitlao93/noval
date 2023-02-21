<?php

namespace App\Http\Controllers;

use App\Models\Measure;
use Illuminate\Http\Request;

class MeasureController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'measure' => 'required',
            'objective_ID' => 'required',
            'division_ID' => 'required'
        ]);

        // Create the measure
        $measure = new Measure;
        $measure->measure = $validatedData['measure'];
        $measure->objective_ID = $validatedData['objective_ID'];
        $measure->division_ID = $validatedData['division_ID'];
        $measure->save();

        // Redirect to the measure index page
        return redirect()->route('objectives.index')->with('success', 'Measure created successfully!');
    }
}
