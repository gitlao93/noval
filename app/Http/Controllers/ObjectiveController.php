<?php

namespace App\Http\Controllers;

use App\Models\Measure;
use App\Models\Objective;
use Illuminate\Http\Request;

class ObjectiveController extends Controller
{
    public function index()
    {
        $measures = Measure::with('objective')
                    ->select('objective_ID', 'measure')
                    ->groupBy('objective_ID', 'measure')
                    ->get();
        $objectives = Objective::all();
        return view('/welcome', compact('measures', 'objectives'));
    }
    

    public function store(Request $request)
    {
       
        $validatedData = $request->validate([
            'objective' => 'required',
        ]);

        // Create the objective
        $objective = new Objective;
        $objective->objective = $validatedData['objective'];
        $objective->save();

        // Redirect to the objectives index page
        return redirect()->route('objectives.index')->with('success', 'Objective created successfully!');
    }
}
