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
}
