<?php

namespace App\Http\Controllers;

use App\Models\AnnualTarget;
use Illuminate\Http\Request;

class AnnualTargetController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'annual_target' => 'required',
            'measure_ID' => 'required',
            'province_ID' => 'required',
        ]);
        
        // Create the measure
        $annualTarget = new AnnualTarget;
        $annualTarget->annual_target = $validatedData['annual_target'];
        $annualTarget->measure_ID = $validatedData['measure_ID'];
        $annualTarget->province_ID = $validatedData['province_ID'];
        $annualTarget->save();

        // Redirect to the measure index page
        return redirect()->route('objectives.index')->with('success', 'Annual Target successfully!');
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'annual_target_ID' => 'required',
            'measure_ID' => 'required',
            'province_ID' => 'required',
            'annual_target' => 'required',
        ]);
        
        // update
        $annual_target_id = $request->input('annual_target_ID');
        $annual_target = AnnualTarget::find($annual_target_id);
        $annual_target->annual_target = $request->input('annual_target');
        $annual_target->save();

        // Redirect to the measure index page
        return redirect()->route('objectives.index')->with('success', 'Annual Target updated successfully!');
    }
}
