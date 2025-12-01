<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5" style="max-width: 450px;">
    <div class="card p-4 shadow">
        <h3 class="text-center mb-3"><i class="fa-solid fa-arrow-right-to-bracket"></i>&nbsp;Login</h3>

        <form>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email">
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter your password">
            </div>

            <button class="btn btn-primary w-100">Login</button>

            <p class="text-center mt-3">
                Don't have an account? <a href="/register">Register</a>
            </p>
        </form>
    </div>
</div>

</body>
</html>
