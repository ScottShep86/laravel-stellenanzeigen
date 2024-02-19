<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    // GET all companies
    public function index(): View
    {
        return view('companies.index', ['companies' => Company::all()]);
    }
    // CREATE a company
    public function create(): View
    {
        return view('companies.create');
    }
    public function store(Request $request)
    {
        Company::create($request->all());
        return redirect()->route('companies.index')->with('success', ' - you have created a new Company');
    }
}
