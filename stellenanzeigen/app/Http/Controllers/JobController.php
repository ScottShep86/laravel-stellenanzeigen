<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class JobController extends Controller
{
    //  GET all Jobs
    public function show():View 
    {
        return view('jobs.show', ['jobs' => Job::all()]);
    }
    // CREATE a job
    public function store(Request $request)
    {
        Job::create($request->all());
        return redirect()->route('jobs.show')->with('success', ' - you have created a new Job');
    }
    public function create()
    {
        return view('jobs.create');
    }
}
