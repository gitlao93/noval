<?php

namespace App\Http\Controllers;

use App\Models\Opcr;
use App\Models\Measure;
use App\Models\Division;
use App\Models\Province;
use App\Models\Objective;
use App\Models\AnnualTarget;
use Illuminate\Http\Request;

class RegionalController extends Controller
{
    public function index(){
        $opcrs_active = Opcr::where('is_active', 1)->get();

        $objectivesact = Objective::whereHas('opcr', function ($query) use ($opcrs_active) {
            $query->whereIn('opcr_ID', $opcrs_active->pluck('opcr_ID'));
        })->get();

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
        return view('/regional', compact('objectives','objectivesact', 'measures', 'provinces', 'annual_targets', 'divisions', 'opcrs', 'opcrs_active'));
    }
}
