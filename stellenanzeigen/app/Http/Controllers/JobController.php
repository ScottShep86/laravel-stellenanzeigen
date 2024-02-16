<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Contracts\View\View;

class JobController extends Controller
{
    public function show():View 
    {
        return view('jobs', ['jobs' => Job::all()]);
    }
}
