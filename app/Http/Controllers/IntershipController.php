<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\InternshipOpportunity;

class IntershipController extends Controller
{
    public function Post(Request $request)
    {
        $validated = $request->validate
        ([
            'title' => 'required|string',
            'description' => 'required|string',
            'requirments' => 'required|string',
            'strat_date' => 'required|date',
            'end_date' => 'required|date'
        ]);

        InternshipOpportunity::create($validated);
        return redirect()->back()->message('entrklsadhi');

    }
}
