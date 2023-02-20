<?php

namespace App\Http\Controllers;

use App\Models\Measure;
use App\Models\Province;
use App\Models\Objective;
use App\Models\AnnualTarget;
use Illuminate\Http\Request;

class ObjectiveController extends Controller
{
    public function index()
    {

        $objectives = Objective::all();

        $measures = Measure::all();
    
        $provinces = Province::select('province_ID', 'province')
            ->orderBy('province_ID')
            ->get();
    
        $annual_targets = AnnualTarget::whereIn('measure_ID', $measures->pluck('measure_ID'))
            ->whereIn('province_ID', $provinces->pluck('province_ID'))
            ->get()
            ->groupBy(['measure_ID', 'province_ID']);
    
        return view('/welcome', compact('objectives', 'measures', 'provinces', 'annual_targets'));
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
