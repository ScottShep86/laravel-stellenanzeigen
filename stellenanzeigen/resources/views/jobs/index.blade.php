<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>All Jobs</h1>
    @foreach ($jobs as $job)
    <a href="{{ route('jobs.show', ['job' => $job->id]) }}"><h3>{{$job->title}}</h3></a>
    
    @endforeach
    <a href="{{ route('jobs.create') }}">Add New Job</a>
</body>
</html>