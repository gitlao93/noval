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
}
