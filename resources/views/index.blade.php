<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body { background: linear-gradient(to bottom, #e0f0ff, #8cb0e5);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;}

        .navbar { background: #4269a3; }
        .navbar-brand, .nav-link { color: #fff !important; }

        .carousel-img {
            width: 100%;
            height: 450px;
            object-fit: cover;
            border-radius: 10px;
        }

        .section-title {
            text-align: center;
            font-size: 2rem;
            font-weight: 700;
            margin: 50px 0 20px;
            color: #333;
        }

        .blog-card {
            border-radius: 12px;
            overflow: hidden;
            transition: 0.3s;
        }
        .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        }

        .blog-header {
            background: #96b4e1;
            color: white;
            padding: 10px 15px;
            font-size: 18px;
            font-weight: 600;
        }

        footer {
            background: #1e3a8a;
            color: white;
            padding: 40px 0;
            margin-top: 60px;
        }
        .social-icons a { color: white; margin-right: 15px; font-size: 20px; }
    </style>
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand"><i class="fa-solid fa-pen-nib"></i> My Blog</a>

        <ul class="nav me-auto">
            @auth
                <li class="nav-item">
                    <span class="nav-link text-white">
                        <i class="fa-solid fa-user"></i> {{ Auth::user()->name }}
                    </span>
                </li>
            @endauth
        </ul>

        <ul class="nav ms-auto">
    <li class="nav-item"><a class="nav-link" href="/"><i class="fa-solid fa-house"></i> Home</a></li>
    <li class="nav-item"><a class="nav-link" href="/aboutus"><i class="fa-solid fa-address-card"></i> About</a></li>
    <li class="nav-item"><a class="nav-link" href="/contact"><i class="fa-solid fa-phone"></i> Contact</a></li>

    @auth
        @if(Auth::user()->role === 'admin')
            <li class="nav-item"><a class="nav-link" href="{{ route('posts.index') }}"><i class="fa-solid fa-newspaper"></i> Posts</a></li>
              <li class="nav-item">
            <a class="nav-link" href="{{ route('users.index') }}">
                <i class="fas fa-users"></i> Users
            </a>
        </li>
        @endif
        <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
    @else
        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}"><i class="fa-solid fa-right-to-bracket"></i> Login</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}"><i class="fa-solid fa-user-plus"></i> Register</a></li>
    @endauth
</ul>

    </div>
</nav>


<!-- Carousel -->
<div id="heroSlider" class="carousel slide mt-3" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="2"></button>
    </div>

    <div class="carousel-inner">
        
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <img src="https://images.unsplash.com/photo-1518770660439-4636190af475" class="carousel-img">
            <div class="carousel-caption d-none d-md-block">
                <h3>Welcome to My Blog</h3>
                <p>Explore tutorials, insights, and guides.</p>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2" class="carousel-img">
            <div class="carousel-caption d-none d-md-block">
                <h3>Learn New Skills</h3>
                <p>Programming · Web Dev · Technology</p>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1509114397022-ed747cca3f65" class="carousel-img">
            <div class="carousel-caption d-none d-md-block">
                <h3>Grow Your Knowledge</h3>
                <p>Daily posts & tips for developers</p>
            </div>
        </div>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<!-- About Section -->
<h2 class="section-title">About My Blog</h2>
<div class="container text-center mb-5">
    <p style="max-width: 800px; margin: auto;">
        My Blog is a platform where we share programming tutorials, tech news, personal growth tips,
        and everything that inspires digital creators. Join us and learn something new every day!
    </p>
</div>

<!-- Latest Blog Posts -->
<h2 class="section-title">Latest Posts</h2>
<div class="container">
    <div class="row g-4">

        <!-- Blog Card 1 -->
        <div class="col-md-4">
            <div class="card blog-card">
                <img src="https://images.unsplash.com/photo-1517430816045-df4b7de11d1d" height="200" style="object-fit:cover;">
                <div class="blog-header"><i class="fa-solid fa-code"></i> Web Development</div>
                <div class="card-body">
                    <h5>Learn HTML, CSS & JS</h5>
                    <p>Beginner-friendly guide to start web development.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>

        <!-- Blog Card 2 -->
        <div class="col-md-4">
            <div class="card blog-card">
                <img src="https://images.unsplash.com/photo-1505685296765-3a2736de412f" height="200" style="object-fit:cover;">
                <div class="blog-header"><i class="fa-solid fa-laptop-code"></i> Programming</div>
                <div class="card-body">
                    <h5>Top 5 Languages in 2025</h5>
                    <p>A helpful guide for beginners and students.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>

        <!-- Blog Card 3 -->
        <div class="col-md-4">
            <div class="card blog-card">
                <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d" height="200" style="object-fit:cover;">
                <div class="blog-header"><i class="fa-solid fa-lightbulb"></i> Productivity</div>
                <div class="card-body">
                    <h5>How to Stay Focused</h5>
                    <p>Improve your learning and coding habits.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Footer -->
<footer>
    <div class="container text-center">
        <p>&copy; 2025 My Blog — Learn • Create • Inspire</p>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
