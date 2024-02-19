<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>All Companies</h1>
    @foreach ($companies as $company)
    <h3>{{$company->name}}</h3>
    <h4>{{$company->category}}</h4>
    <p>{{$company->address}}, {{$company->plz}} {{$company->city}}</p>
    <p>{{$company->phone}} / {{$company->email}}</p>
    <ul>
        @foreach ($company->jobs as $job)
            <li>{{$job->title}} - {{$job->location}} - Salary: {{$job->salary}}</li>
        @endforeach
    </ul>
    @endforeach
    <a href="{{ route('companies.create') }}">Add New Company</a>
</body>
</html>