<?php

namespace App\Http\Controllers;

use App\Models\Company;
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
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'salary' => 'required|numeric',
        ]);

        // Extract job details from the validated data
        $jobTitle = $validatedData['title'];
        $jobDescription = $validatedData['description'];
        $jobCategory = $validatedData['category'];
        $companyName = $validatedData['company'];
        $jobLocation = $validatedData['location'];
        $jobSalary = $validatedData['salary'];

        // Check if the company exists
        $company = Company::where('name', $companyName)->first();

        if ($company) {
            // Retrieve the company ID
            $companyId = $company->id;

            // Create the job and associate it with the company
            $job = new Job();
            $job->title = $jobTitle;
            $job->description = $jobDescription;
            $job->category = $jobCategory;
            $job->company_id = $companyId; // Associate the job with the existing company
            $job->location = $jobLocation;
            $job->salary = $jobSalary;
            $job->save();

            // Job created successfully
            return redirect()->route('jobs.index')->with('success', 'Job created successfully!');
        } else {
            // Company does not exist
            return redirect()->back()->with('error', 'Company does not exist.');
        }
    }
}
