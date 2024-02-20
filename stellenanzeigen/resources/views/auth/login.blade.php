<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="{{ route('login') }}" id='loginForm' method="post">
    @csrf
    <input type="text" name="username" placeholder="Username or Email">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Login</button>
</form>
<p>Not a member? <a href="{{ url('/signup') }}">Sign Up</a></p>

<script>
    document.getElementById('loginForm').addEventListener('submit', function(event) {
        console.log('Form submitted successfully!');
    });
</script>
</body>
</html>