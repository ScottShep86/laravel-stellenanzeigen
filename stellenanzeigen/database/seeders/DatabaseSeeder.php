<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Company;
use App\Models\Job;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Read the JSON file
        $json = File::get(database_path('data.json'));
        // Decode the JSON data
        $data = json_decode($json, true);

        // Seed the companies
        foreach($data['companies'] as $companyData) {
            Company::create($companyData);
        }

        // Seed the jobs
        foreach($data['jobs'] as $jobData) {
            $companyId = Company::where('name', $jobData['company'])->value('id');
            $jobData['company_id'] = $companyId;
            unset($jobData['company']);
            Job::create($jobData);
        }
    }
}
