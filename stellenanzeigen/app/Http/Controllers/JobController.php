<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class JobController extends Controller
{
    //  GET all Jobs
    public function index():View 
    {
        return view('jobs.index', ['jobs' => Job::all()]);
    }
    // GET a specific job
    public function show(Job $job): View
    {
        return view('jobs.show', ['job' => $job]);
    }
    // CREATE a job
    public function create(): View
    {
        return view('jobs.create');
    }
    public function store(Request $request)
    {
        Job::create($request->all());
        return redirect()->route('jobs.index')->with('success', ' - you have created a new Job');
    }
}
