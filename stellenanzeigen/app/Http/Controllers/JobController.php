<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Job;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    //  GET all Jobs
    public function index()
    {
        $jobs = Job::orderBy('created_at', 'desc')->get();
        return view('jobs.index', compact('jobs'));
    }

    // GET a specific job
    public function show(Job $job)
{
    // Check if the job has a company associated with it
    if ($job->company_id) {
        // Retrieve the company by its ID
        $company = Company::findOrFail($job->company_id);

        // Pass the company details to the view
        return view('jobs.show', ['job' => $job, 'company' => $company]);
    }

    // If no company is associated with the job, pass null as the company
    return view('jobs.show', ['job' => $job, 'company' => null]);
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

    // CHECK: does if the company exists. If yes then retrieve the company ID and link the job to that company
        $company = Company::where('name', $companyName)->first();

        if ($company) {
            $companyId = $company->id;

            $job = new Job();
            $job->title = $jobTitle;
            $job->description = $jobDescription;
            $job->category = $jobCategory;
            $job->company_id = $companyId;
            $job->location = $jobLocation;
            $job->salary = $jobSalary;
            $job->save();

            return redirect()->route('dashboard')->with('success', 'Job created successfully!');
        } else {
            return redirect()->back()->with('error', 'Company does not exist.');
        }
    }
    // DELETE a job
    public function destroy(Job $job)
{
    // Delete the job
    $job->delete();

    // Redirect back with success message
    return redirect()->back()->with('success', 'Job deleted successfully');
}
}
