<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button><a href="{{ url('/jobs') }}">Back to all Jobs</a></button>
    <h1>{{$job->title}}</h1>
    <h2>{{$job->company}}</h2>
    <h3>{{$job->location}}</h3>
    <p>{{$job->salary}}€</p>
</body>
</html>