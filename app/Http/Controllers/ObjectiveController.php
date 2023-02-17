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
        // $objandmeas = Measure::with('objective')
        //             ->select('objective_ID', 'measure')
        //             ->groupBy('objective_ID', 'measure')
        //             ->get();
         $objectives = Objective::all();
        // $provinces = Province::all();
        // $measures = Measure::all();
        // return view('/welcome', compact('objandmeas', 'measures', 'objectives', 'provinces'));

        $measures = Measure::with('objective')
        ->select('objective_ID', 'objective_ID', 'measure')
        ->orderBy('objective_ID')
        ->get();

        $provinces = Province::select('province_ID', 'province')
            ->orderBy('province_ID')
            ->get();

        $targets = AnnualTarget::select('measure_ID', 'province_ID', 'annual_target')
            ->whereIn('measure_ID', $measures->pluck('measure_ID'))
            ->whereIn('province_ID', $provinces->pluck('province_ID'))
            ->get()
            ->groupBy(['measure_ID', 'province_ID']);

        return view('/welcome', compact('measures', 'provinces', 'targets', 'objectives'));
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
