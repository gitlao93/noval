<?php

namespace App\Http\Controllers;

use App\Models\Opcr;
use Illuminate\Http\Request;

class OpcrController extends Controller
{
    public function store(Request $request)
    {
       
        $validatedData = $request->validate([
            'opcr' => 'required',
        ]);
        // Create the objective
        $opcr = new Opcr;
        $opcr->opcr = $validatedData['opcr'];
        $opcr->save();
        // Redirect to the objectives index page
        return redirect()->route('objectives.index')->with('success', 'opcr created successfully!');
    }
}
