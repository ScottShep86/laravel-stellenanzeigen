<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Company</title>
</head>
<body>
    <div>
        <form action='{{route('companies.store')}}' method='post'>
            @csrf
            <label for="name">Company Name: <input type="text" id='name' name='name'></label>
            <label for="category">Category: <input type="text" id='category' name='category'></label>
            <label for="address">Adress: </label><input type="text" id='address' name='address'>
            <label for="plz">PLZ: </label><input type="text" id='plz' name='plz'>
            <label for="city">City: </label><input type="text" id='city' name='city'>
            <label for="website">Website: <input type="text" id='website' name='website'></label>
            <label for="phone">Phone number: <input type="text" id='phone' name='phone'></label>
            <label for="email">Email: <input type="text" id='email' name='email'></label>
            <button type='submit'>Submit</button>
        </form>
        </div>
</body>
</html>