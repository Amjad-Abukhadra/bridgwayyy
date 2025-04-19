<?php

namespace App\Http\Controllers;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function ProfileForm(REQUEST $request)
    {
        $validated = $request->validate
        ([
            'name' => 'required|string',
            'location' => 'required|string',
            'type' => 'required|string',
            'contact_info' => 'required|string',
            'description' => 'required|string'
        ]);

        
        Company::create($validated);

        return redirect()->back();
    }
}
