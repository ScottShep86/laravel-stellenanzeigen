<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
</head>
<body>
    <h2>Sign Up</h2>
<form action="{{ route('register') }}" method="POST">
    @csrf
    <select id="role" name="role">
        <option value="" disabled selected>Select one</option>
        <option value="job_seeker">Job Seeker</option>
        <option value="company">Company</option>
    </select>
    <input type="text" name="name" id="name" placeholder="Name">
    <input type="email" name="email" id="email" placeholder="Email">
    <input type="password" name="password" id="password" placeholder="Password">
    <button type="submit">Sign Up</button>
</form>
<p>Already a member? <a href="{{ url('/login') }}">Login</a></p>

<script>
    const roleSelect = document.getElementById('role');
    const usernameInput = document.getElementById('name');
    roleSelect.addEventListener('change', function() {
        const selectedRole = roleSelect.value;
        if (selectedRole === 'job_seeker') {
            usernameInput.placeholder = 'Full Name';
        } else if (selectedRole === 'company') {
            usernameInput.placeholder = 'Company Name';
        }
    });
</script>
</body>
</html>