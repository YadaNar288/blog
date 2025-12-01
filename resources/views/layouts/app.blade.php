<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        /* Body & Background */
        body {
            background: linear-gradient(to bottom, #e0f0ff, #8cb0e5);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Navbar */
        .navbar {
            background: #1e3a8a; /* deep blue */
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .navbar-brand {
            font-weight: bold;
            color: #fff !important;
            font-size: 1.5rem;
        }
        .nav-link {
            color: #cbd5e1 !important; /* lighter blue */
            transition: 0.3s;
        }
        .nav-link:hover {
            color: #fff !important;
            background: rgba(255,255,255,0.1);
            border-radius: 5px;
        }

        /* Logged-in username */
        .user-name {
            font-weight: 500;
            color: #fff;
            margin-right: 20px;
            font-size: 1rem;
        }

        /* Buttons and icons */
        .nav-link i {
            margin-right: 5px;
        }

        /* Page content padding */
        main {
            padding: 2rem 1rem;
        }

        /* Footer */
        footer {
            background: #1e3a8a;
            color: #fff;
            padding: 40px 0;
            text-align: center;
        }
        footer a {
            color: #a5b4fc;
            margin: 0 10px;
            transition: 0.3s;
        }
        footer a:hover {
            color: #fff;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container d-flex align-items-center">

            <!-- Left side: logged-in user name -->
            @auth
                <span class="user-name">
                    <i class="fas fa-user"></i> {{ Auth::user()->name }}
                </span>
            @endauth

            <!-- Brand -->
            <a class="navbar-brand ms-2" href="{{ url('/') }}">
                <i class="fas fa-pen-nib"></i> My Blog
            </a>

            <!-- Right side nav -->
            <ul class="nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}"><i class="fas fa-house"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-address-card"></i> About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-phone"></i> Contact</a>
                </li>

                @auth
                    @if(Auth::user()->role === 'admin')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('posts.index') }}">
                                <i class="fas fa-newspaper"></i> Posts
                            </a>
                        </li>
                          <li class="nav-item">
                        <a class="nav-link" href="{{ route('users.index') }}">
                            <i class="fas fa-users"></i> Users
                        </a>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories.index') }}">
                            <i class="fas fa-list"></i> Categories
                        </a>
                    </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">
                            <i class="fas fa-right-from-bracket"></i> Logout
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                            <i class="fas fa-right-to-bracket"></i> Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">
                            <i class="fas fa-user-plus"></i> Register
                        </a>
                    </li>
                @endauth
            </ul>

        </div>
    </nav>

    <!-- Page Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 My Blog — Learn • Create • Inspire</p>
        <div>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
        </div>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
