<?php

namespace App\Http\Controllers;

use App\Models\Opcr;
use App\Models\Driver;
use App\Models\Measure;
use App\Models\Division;
use App\Models\Province;
use App\Models\Objective;
use App\Models\AnnualTarget;
use Illuminate\Http\Request;
use App\Models\MonthlyTarget;

class ObjectiveController extends Controller
{
    public function index()
    {
        $opcrs_active = Opcr::where('is_active', 1)->get();

    

        $objectivesact = Objective::whereHas('opcr', function ($query) use ($opcrs_active) {
            $query->whereIn('opcr_ID', $opcrs_active->pluck('opcr_ID'));
        })->get();
    

        $driversact = Driver::join('divisions', 'divisions.division_ID', '=', 'drivers.division_ID')
                ->whereHas('opcr', function ($query) use ($opcrs_active) {
                    $query->whereIn('opcr_ID', $opcrs_active->pluck('opcr_ID'));
                })
                ->get(['drivers.*', 'divisions.division']);

        $monthly_targets = MonthlyTarget::join('annual_targets', 'annual_targets.annual_target_ID', '=', 'monthly_targets.annual_target_ID')
                ->get(['monthly_targets.*', 'annual_targets.*'])
                ->groupBy(['month', 'annual_target_ID']);
        // $monthly_targets = MonthlyTarget::all();
        
        
        $objectives = Objective::all();

        $measures = Measure::join('divisions', 'measures.division_ID', '=', 'divisions.division_ID')
            ->select('measures.*', 'divisions.division')
            ->get();
    
        $provinces = Province::select('province_ID', 'province')
            ->orderBy('province_ID')
            ->get();
    
        $annual_targets = AnnualTarget::whereIn('measure_ID', $measures->pluck('measure_ID'))
            ->whereIn('province_ID', $provinces->pluck('province_ID'))
            ->get()
            ->groupBy(['measure_ID', 'province_ID']);
        
        $divisions = Division::all();
        $opcrs = Opcr::all();

        


        
    
        return view('/welcome', compact('objectives','objectivesact', 'measures', 'provinces', 'annual_targets', 'divisions', 'opcrs', 'opcrs_active','driversact','monthly_targets'));
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
