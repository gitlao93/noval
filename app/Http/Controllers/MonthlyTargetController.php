<?php

namespace App\Http\Controllers;

use App\Models\AnnualTarget;
use Illuminate\Http\Request;
use App\Models\MonthlyTarget;

class MonthlyTargetController extends Controller
{
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'monthly_target' => 'required',
            'annual_target_ID' => 'required',
            'division_ID' => 'required',
            'month' => 'required'
        ]);

        // Get the annual target for the given annual_target_ID
        $annualTarget = AnnualTarget::find($validatedData['annual_target_ID']);

        // Get the sum of monthly targets for the given annual_target_ID
        $monthlyTargetSum = MonthlyTarget::where('annual_target_ID', $validatedData['annual_target_ID'])->sum('monthly_target');

        // Check if the sum of monthly targets and the new monthly target exceeds the annual target
        if (($monthlyTargetSum + $validatedData['monthly_target']) > $annualTarget->annual_target) {
            return redirect()->back()->with('error', 'Monthly target exceeds the annual target.');
        }
        
        // Create the monthly target
        $monthlyTarget = new MonthlyTarget;
        $monthlyTarget->monthly_target = $validatedData['monthly_target'];
        $monthlyTarget->annual_target_ID = $validatedData['annual_target_ID'];
        $monthlyTarget->division_ID = $validatedData['division_ID'];
        $monthlyTarget->month = $validatedData['month'];
        $monthlyTarget->save();

        return redirect()->route('objectives.index')->with('success', 'Annual Target successfully!');
    }
}
