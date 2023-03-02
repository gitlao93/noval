<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MonthlyTarget;

class MonthlyTargetController extends Controller
{
    public function store(Request $request)
    {

        // dd($request);
        $validatedData = $request->validate([
            'monthly_target' => 'required',
            'annual_target_ID' => 'required',
            'division_ID' => 'required',
            'month' => 'required'
        ]);
        
        // Create the measure
        $monthlyTarget = new MonthlyTarget;
        $monthlyTarget->monthly_target = $validatedData['monthly_target'];
        $monthlyTarget->annual_target_ID = $validatedData['annual_target_ID'];
        $monthlyTarget->division_ID = $validatedData['division_ID'];
        $monthlyTarget->month = $validatedData['month'];
        $monthlyTarget->save();

        // Redirect to the measure index page
        return redirect()->route('objectives.index')->with('success', 'Annual Target successfully!');
    }
}
