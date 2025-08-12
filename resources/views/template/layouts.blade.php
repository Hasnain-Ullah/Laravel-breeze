<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Laravel Application') | Your Brand</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css_style/style.css') }}">

</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-rocket"></i> HasnainUllah
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            More
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Blog</a></li>
                            <li><a class="dropdown-item" href="#">FAQ</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Documentation</a></li>
                        </ul>
                    </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            Profile
                        </a>
                        <ul class="dropdown-menu">
                             <li><a class="dropdown-item" href="#">{{ Auth::user()->name }}</a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <i class="fas fa-sign-out-alt me-1"></i> Logout
                                </button>
                                </form>
                            </li>
                            
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#"></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-content">
                    <h1 class="hero-title animate__animated animate__fadeInDown">Build Amazing Web Apps With Laravel</h1>
                    <p class="hero-subtitle animate__animated animate__fadeIn animate__delay-1s">A complete Bootstrap 5 template designed specifically for Laravel projects with modern UI components and responsive layout.</p>
                    <div class="d-flex gap-3 animate__animated animate__fadeIn animate__delay-2s">
                        <a href="#" class="btn btn-light btn-lg">Get Started</a>
                        <a href="#" class="btn btn-outline-light btn-lg">
                            <i class="fas fa-play me-2"></i> Watch Demo
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block animate__animated animate__fadeIn animate__delay-1s">
                    <img src="assets\ac3677a095c03297.jpg" width="350px" style="margin-left: 250px" alt="" class="img-fluid rounded-3 shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main>
        @yield('content')
        
        <!-- Features Section -->
        <section class="features-section">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="section-title">Amazing Features</h2>
                    <p class="section-subtitle">Discover all the powerful features that come with our template</p>
                </div>
                
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 animate-on-scroll">
                            <div class="card-body text-center p-4">
                                <div class="card-icon">
                                    <i class="fas fa-bolt"></i>
                                </div>
                                <h5 class="card-title">Lightning Fast</h5>
                                <p class="card-text">Optimized for performance with clean code and minimal dependencies to ensure your app runs smoothly.</p>
                                <a href="#" class="btn btn-link">Learn More <i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 animate-on-scroll">
                            <div class="card-body text-center p-4">
                                <div class="card-icon">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <h5 class="card-title">Fully Responsive</h5>
                                <p class="card-text">Looks perfect on all devices from smartphones to desktops with our mobile-first approach.</p>
                                <a href="#" class="btn btn-link">Learn More <i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 animate-on-scroll">
                            <div class="card-body text-center p-4">
                                <div class="card-icon">
                                    <i class="fas fa-cogs"></i>
                                </div>
                                <h5 class="card-title">Easy Customization</h5>
                                <p class="card-text">Change colors, fonts and layouts with simple CSS variables and well-organized code.</p>
                                <a href="#" class="btn btn-link">Learn More <i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 animate-on-scroll">
                            <div class="card-body text-center p-4">
                                <div class="card-icon">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <h5 class="card-title">Secure by Default</h5>
                                <p class="card-text">Built with security in mind following Laravel's best practices for authentication and authorization.</p>
                                <a href="#" class="btn btn-link">Learn More <i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 animate-on-scroll">
                            <div class="card-body text-center p-4">
                                <div class="card-icon">
                                    <i class="fas fa-database"></i>
                                </div>
                                <h5 class="card-title">Database Ready</h5>
                                <p class="card-text">Includes migration files and models to get your database structure set up quickly.</p>
                                <a href="#" class="btn btn-link">Learn More <i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 animate-on-scroll">
                            <div class="card-body text-center p-4">
                                <div class="card-icon">
                                    <i class="fas fa-code-branch"></i>
                                </div>
                                <h5 class="card-title">Modular Structure</h5>
                                <p class="card-text">Well-organized codebase that's easy to extend with new features as your project grows.</p>
                                <a href="#" class="btn btn-link">Learn More <i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Stats Section -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row text-center">
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <div class="display-4 fw-bold text-primary">10K+</div>
                        <p class="text-muted">Downloads</p>
                    </div>
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <div class="display-4 fw-bold text-primary">5K+</div>
                        <p class="text-muted">Active Users</p>
                    </div>
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <div class="display-4 fw-bold text-primary">99%</div>
                        <p class="text-muted">Satisfaction</p>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="display-4 fw-bold text-primary">24/7</div>
                        <p class="text-muted">Support</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Testimonials Section -->
        <section class="testimonial-section">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="section-title">What Our Users Say</h2>
                    <p class="section-subtitle">Don't just take our word for it - hear from some of our happy users</p>
                </div>
                
                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="testimonial-card h-100 animate-on-scroll">
                            <div class="testimonial-text">
                                "This template saved me weeks of development time. The clean code and documentation made it easy."
                            </div>
                            <div class="testimonial-author">
                                <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Sarah Johnson">
                                <div>
                                    <h6 class="author-name">Sarah Johnson</h6>
                                    <p class="author-title">CTO, TechStart</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="testimonial-card h-100 animate-on-scroll">
                            <div class="testimonial-text">
                                "As a freelance developer, I use this template as a starting point for all my Laravel projects. It's incredibly versatile."
                            </div>
                            <div class="testimonial-author">
                                <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Michael Chen">
                                <div>
                                    <h6 class="author-name">Michael Chen</h6>
                                    <p class="author-title">Freelance Developer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="testimonial-card h-100 animate-on-scroll">
                            <div class="testimonial-text">
                                "The responsive design works perfectly across all devices, and my clients love the modern look and interface."
                            </div>
                            <div class="testimonial-author">
                                <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Emma Rodriguez">
                                <div>
                                    <h6 class="author-name">Emma Rodriguez</h6>
                                    <p class="author-title">UI/UX Designer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <h2 class="cta-title">Ready to Get Started?</h2>
                <p class="lead mb-5">Join thousands of satisfied developers who have accelerated their Laravel projects with our template.</p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="#" class="btn btn-light btn-lg px-4">Download Now</a>
                    <a href="#" class="btn btn-outline-light btn-lg px-4">View Documentation</a>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <a href="#" class="footer-logo"><i class="fas fa-rocket me-2"></i> LaravelApp</a>
                    <p class="mt-3">A premium Bootstrap 5 template designed specifically for Laravel applications with modern UI components and responsive layout.</p>
                    <div class="social-icons mt-4">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-github"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <div class="col-6 col-md-3 col-lg-2 mb-4 mb-md-0">
                    <div class="footer-links">
                        <h5>Product</h5>
                        <ul>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">Changelog</a></li>
                            <li><a href="#">Roadmap</a></li>
                            <li><a href="#">Download</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-6 col-md-3 col-lg-2 mb-4 mb-md-0">
                    <div class="footer-links">
                        <h5>Company</h5>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-6 col-md-3 col-lg-2 mb-4 mb-md-0">
                    <div class="footer-links">
                        <h5>Support</h5>
                        <ul>
                            <li><a href="#">Help Center</a></li>
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">Community</a></li>
                            <li><a href="#">Tutorials</a></li>
                            <li><a href="#">Status</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-6 col-md-3 col-lg-2">
                    <div class="footer-links">
                        <h5>Legal</h5>
                        <ul>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">License</a></li>
                            <li><a href="#">Cookie Policy</a></li>
                            <li><a href="#">GDPR</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom text-center">
                <p class="mb-0">&copy; 2023 LaravelApp. All rights reserved. Designed with <i class="fas fa-heart text-danger"></i> for Laravel developers.</p>
            </div>
        </div>
    </footer>
    
    <!-- Back to Top Button -->
    <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
        
        // Back to top button
        const backToTopButton = document.querySelector('.back-to-top');
        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                backToTopButton.classList.add('active');
            } else {
                backToTopButton.classList.remove('active');
            }
        });
        
        backToTopButton.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Animation on scroll
        function animateOnScroll() {
            const elements = document.querySelectorAll('.animate-on-scroll');
            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const screenPosition = window.innerHeight / 1.2;
                
                if (elementPosition < screenPosition) {
                    element.classList.add('animated');
                }
            })
        }
        
        window.addEventListener('scroll', animateOnScroll);
        window.addEventListener('load', animateOnScroll);
    </script>
</body>
</html>