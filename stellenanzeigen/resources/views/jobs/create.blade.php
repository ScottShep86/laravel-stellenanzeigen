<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Job</title>
</head>
<body>
    <div>
        <form action='{{route('jobs.store')}}' method='post'>
            @csrf
            <label for="title">Job Title: <input type="text" id='title' name='title'></label>
            <label for="description">Job Description: <input type="textarea" id='description' name='description'></label>
            <label for="category">Category: <input type="text" id='category' name='category'></label>
            <label for="company">Company: <input type="text" id='company' name='company'></label>
            <label for="location">Location: <input type="text" id='location' name='location'></label>
            <label for="salary">Salary: <input type="text" id='salary' name='salary'></label>
            <button type='submit'>Submit</button>
        </form>
        </div>
</body>
</html>