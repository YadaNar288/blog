<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5" style="max-width: 500px;">
    <div class="card p-4 shadow">
        <h3 class="text-center mb-3">Create Account</h3>

        <form>
            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name">
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email">
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Create a password">
            </div>

            <button class="btn btn-success w-100">Register</button>

            <p class="text-center mt-3">
                Already have an account? <a href="/login">Login</a>
            </p>
        </form>
    </div>
</div>

</body>
</html>
