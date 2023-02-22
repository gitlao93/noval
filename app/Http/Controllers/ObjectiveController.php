<?php

namespace App\Http\Controllers;

use App\Models\Opcr;
use App\Models\Measure;
use App\Models\Division;
use App\Models\Province;
use App\Models\Objective;
use App\Models\AnnualTarget;
use Illuminate\Http\Request;

class ObjectiveController extends Controller
{
    public function index()
    {
        // $opcrs_act = Opcr::where('is_active', 1)->get();

        // $objectives = Objective::whereHas('opcr', function ($query) {
        //     $query->where('is_active', 1);
        // })->get();
        $objectives = Objective::all();

        $measures = Measure::all();
    
        $provinces = Province::select('province_ID', 'province')
            ->orderBy('province_ID')
            ->get();
    
        $annual_targets = AnnualTarget::whereIn('measure_ID', $measures->pluck('measure_ID'))
            ->whereIn('province_ID', $provinces->pluck('province_ID'))
            ->get()
            ->groupBy(['measure_ID', 'province_ID']);
        
        $divisions = Division::all();
        $opcrs = Opcr::all();
        
    
        return view('/welcome', compact('objectives', 'measures', 'provinces', 'annual_targets', 'divisions', 'opcrs'));
    }

    public function store(Request $request)
    {
       
        $validatedData = $request->validate([
            'objective' => 'required',
            'opcr_ID' => 'required'
        ]);
        // Create the objective
        $objective = new Objective;
        $objective->objective = $validatedData['objective'];
        $objective->opcr_ID = $validatedData['opcr_ID'];
        $objective->save();
        // Redirect to the objectives index page
        return redirect()->route('objectives.index')->with('success', 'Objective created successfully!');
    }

}
