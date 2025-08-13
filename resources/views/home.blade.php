<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delicious Bites - Food Lovers Paradise</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        :root {
            --primary-color: #ff6b6b;
            --secondary-color: #ffa502;
            --dark-color: #2f3542;
            --light-color: #f1f2f6;
        }
        
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f8f9fa;
        }
        
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            margin-bottom: 30px;
        }
        
        .navbar {
            background-color: var(--dark-color) !important;
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
        }
        
        .nav-link {
            color: white !important;
            font-weight: 500;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-outline-light:hover {
            color: var(--dark-color);
        }
        
        .food-card {
            transition: transform 0.3s;
            margin-bottom: 20px;
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .food-card:hover {
            transform: translateY(-10px);
        }
        
        .food-card img {
            height: 200px;
            object-fit: cover;
        }
        
        .card-body {
            background-color: white;
        }
        
        .category-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: var(--primary-color);
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
        }
        
        footer {
            background-color: var(--dark-color);
            color: white;
            padding: 30px 0;
            margin-top: 50px;
        }
        
        .auth-card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/">
                <i class="fas fa-utensils me-2"></i>Delicious Bites
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/recipes">Recipes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                    
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a class="dropdown-item" href="{{ route('logout') }}" 
                                               onclick="event.preventDefault(); this.closest('form').submit();">
                                                Log Out
                                            </a>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">Discover Amazing Recipes</h1>
            <p class="lead mb-5">Find and share the best recipes from around the world</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="{{ route('register') }}" class="btn btn-primary btn-lg px-4">Join Our Community</a>
                <a href="/recipes" class="btn btn-outline-light btn-lg px-4">Explore Recipes</a>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container">
        @yield('content')
        
        <!-- Featured Recipes -->
        <section class="mb-5">
            <h2 class="text-center mb-4">Featured Recipes</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="food-card">
                        <span class="category-badge">Italian</span>
                        <img src="https://images.unsplash.com/photo-1516100882582-96c3a05fe590" class="card-img-top" alt="Pasta">
                        <div class="card-body">
                            <h5 class="card-title">Creamy Garlic Pasta</h5>
                            <p class="card-text">Delicious pasta with creamy garlic sauce and fresh herbs.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted"><i class="fas fa-clock"></i> 25 mins</small>
                                <a href="#" class="btn btn-sm btn-outline-primary">View Recipe</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="food-card">
                        <span class="category-badge">Mexican</span>
                        <img src="https://images.unsplash.com/photo-1518779578993-ec3579fee39f" class="card-img-top" alt="Tacos">
                        <div class="card-body">
                            <h5 class="card-title">Street-Style Tacos</h5>
                            <p class="card-text">Authentic Mexican tacos with flavorful meat and fresh toppings.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted"><i class="fas fa-clock"></i> 35 mins</small>
                                <a href="#" class="btn btn-sm btn-outline-primary">View Recipe</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="food-card">
                        <span class="category-badge">Dessert</span>
                        <img src="https://images.unsplash.com/photo-1562440499-64c9a111f713" class="card-img-top" alt="Cheesecake">
                        <div class="card-body">
                            <h5 class="card-title">New York Cheesecake</h5>
                            <p class="card-text">Classic creamy cheesecake with strawberry topping.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted"><i class="fas fa-clock"></i> 4 hours</small>
                                <a href="#" class="btn btn-sm btn-outline-primary">View Recipe</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Call to Action -->
        <section class="text-center py-5 mb-5 bg-light rounded-3">
            <h2>Ready to share your own recipes?</h2>
            <p class="lead mb-4">Join our community of food enthusiasts today!</p>
            <a href="{{ route('register') }}" class="btn btn-primary btn-lg px-4">Sign Up Now</a>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>Delicious Bites</h5>
                    <p>Sharing the joy of cooking with food lovers around the world.</p>
                    <div class="social-icons">
                        <a href="#" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>
                <div class="col-md-2 mb-4 mb-md-0">
                    <h5>Explore</h5>
                    <ul class="list-unstyled">
                        <li><a href="/" class="text-white">Home</a></li>
                        <li><a href="/recipes" class="text-white">Recipes</a></li>
                        <li><a href="/about" class="text-white">About</a></li>
                        <li><a href="/contact" class="text-white">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-2 mb-4 mb-md-0">
                    <h5>Categories</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Italian</a></li>
                        <li><a href="#" class="text-white">Mexican</a></li>
                        <li><a href="#" class="text-white">Asian</a></li>
                        <li><a href="#" class="text-white">Desserts</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Newsletter</h5>
                    <p>Subscribe to get weekly recipe inspiration</p>
                    <form class="mb-3">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Your email">
                            <button class="btn btn-primary" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
            <hr class="my-4 bg-secondary">
            <div class="text-center">
                <p class="mb-0">&copy; 2023 Delicious Bites. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>