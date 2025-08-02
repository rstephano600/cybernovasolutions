<header>
    <!-- Top Bar with Contact Info -->
    <div class="bg-dark text-white py-2 d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="d-flex align-items-center gap-4">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-phone-alt me-2 text-primary"></i>
                            <small>+255 657 856 790</small>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-envelope me-2 text-primary"></i>
                            <small>cybernovasolutions600@gmail.com</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-end">
                    <div class="d-flex align-items-center justify-content-end gap-3">
                        <span class="text-white-50">Follow Us:</span>
                        <a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container">
            <!-- Brand Logo -->
            <a class="navbar-brand d-flex align-items-center" href="{{ route('index') }}">
                <img src="{{ asset('assets/images/1745931296420.jpg') }}" 
                     alt="CyberNova Solutions Logo" 
                     class="rounded-circle me-2" 
                     style="width: 40px; height: 40px; object-fit: cover;">
                <span class="fw-bold text-primary">CyberNova</span>
                <span class="text-dark">Solutions</span>
            </a>

            <!-- Mobile Toggle Button -->
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#sideMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Desktop Navigation -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
                    </li>
                    
                    <!-- Services Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Services
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg">
                            <li><h6 class="dropdown-header text-primary fw-bold">Development Services</h6></li>
                            <li><a class="dropdown-item d-flex align-items-center" href="{{ route('website') }}">
                                <i class="fas fa-code me-2 text-primary"></i>Web Development</a></li>
                            <li><a class="dropdown-item d-flex align-items-center" href="{{ route('system') }}">
                                <i class="fas fa-server me-2 text-success"></i>System Development</a></li>
                            <li><a class="dropdown-item d-flex align-items-center" href="{{ route('mobile-app') }}">
                                <i class="fas fa-mobile-alt me-2 text-info"></i>Mobile App Development</a></li>
                            <li><hr class="dropdown-divider"></li>
                            
                            <li><h6 class="dropdown-header text-primary fw-bold">Design Services</h6></li>
                            <li><a class="dropdown-item d-flex align-items-center" href="{{ route('graphics') }}">
                                <i class="fas fa-palette me-2 text-danger"></i>Graphic Design</a></li>
                            <li><a class="dropdown-item d-flex align-items-center" href="{{ route('stationary') }}">
                                <i class="fas fa-print me-2 text-warning"></i>Stationery Services</a></li>
                            <li><hr class="dropdown-divider"></li>
                            
                            <li><h6 class="dropdown-header text-primary fw-bold">Special Services</h6></li>
                            <li><a class="dropdown-item d-flex align-items-center" href="{{ route('fyp-projects') }}">
                                <i class="fas fa-graduation-cap me-2 text-secondary"></i>FYP Support</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                    
                    <!-- Login/Register Button -->
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-primary px-3" href="{{ route('login') }}">
                            <i class="fas fa-sign-in-alt me-1"></i> Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Mobile Offcanvas Menu -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="sideMenu">
        <div class="offcanvas-header border-bottom">
            <div class="d-flex align-items-center">
                <img src="{{ asset('assets/images/1745931296420.jpg') }}" 
                     alt="CyberNova Logo" 
                     class="rounded-circle me-2" 
                     style="width: 40px; height: 40px;">
                <h5 class="offcanvas-title mb-0">CyberNova Solutions</h5>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        
        <div class="offcanvas-body">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('index') }}">
                        <i class="fas fa-home text-primary me-2"></i> Home
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">
                        <i class="fas fa-info-circle text-info me-2"></i> About Us
                    </a>
                </li>
                
                <li class="nav-item">
                    <h6 class="mt-4 mb-2 ps-3 text-uppercase text-muted small fw-bold">Our Services</h6>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('website') }}">
                        <i class="fas fa-globe text-primary me-2"></i> Web Development
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('system') }}">
                        <i class="fas fa-server text-success me-2"></i> System Development
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('mobile-app') }}">
                        <i class="fas fa-mobile-alt text-info me-2"></i> Mobile App Development
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('graphics') }}">
                        <i class="fas fa-palette text-danger me-2"></i> Graphic Design
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('stationary') }}">
                        <i class="fas fa-print text-warning me-2"></i> Stationery Services
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('fyp-projects') }}">
                        <i class="fas fa-graduation-cap text-secondary me-2"></i> FYP Support
                    </a>
                </li>
                
                <li class="nav-item">
                    <h6 class="mt-4 mb-2 ps-3 text-uppercase text-muted small fw-bold">Company</h6>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('mission') }}">
                        <i class="fas fa-bullseye text-success me-2"></i> Mission & Vision
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('timetable') }}">
                        <i class="fas fa-clock text-primary me-2"></i> Our Timetable
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('updates') }}">
                        <i class="fas fa-calendar-alt text-info me-2"></i> Year Updates
                    </a>
                </li>
                
                <li class="nav-item mt-4">
                    <a class="btn btn-primary w-100" href="{{ route('login') }}">
                        <i class="fas fa-sign-in-alt me-2"></i> Login / Register
                    </a>
                </li>
            </ul>
            
            <div class="mt-4 pt-3 border-top">
                <h6 class="text-uppercase text-muted small fw-bold mb-3">Contact Info</h6>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <i class="fas fa-phone-alt text-primary me-2"></i>
                        +255 657 856 790
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-envelope text-primary me-2"></i>
                        cybernovasolutions600@gmail.com
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Space for fixed navbar -->
    <div class="fixeddivspace" style="height: 5px;"></div>

    <style>
        /* Custom Styles */
        .navbar {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.25rem;
        }
        
        .nav-link {
            font-weight: 500;
            padding: 0.5rem 1rem;
        }
        
        .dropdown-menu {
            border-radius: 0.5rem;
            padding: 0.5rem 0;
        }
        
        .dropdown-item {
            padding: 0.5rem 1.5rem;
            border-radius: 0.25rem;
            margin: 0.15rem 0.5rem;
            width: auto;
        }
        
        .dropdown-item:hover {
            background-color: #f8f9fa;
        }
        
        .offcanvas {
            width: 300px;
        }
        
        .fixeddivspace {
            margin-top: 20px;
        }
        
        @media (max-width: 991.98px) {
            .navbar-collapse {
                padding-top: 1rem;
            }
        }
    </style>
</header>