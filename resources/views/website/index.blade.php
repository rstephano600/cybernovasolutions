@extends('layouts.web-app')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">

    <!-- Hero Section -->
    <section class="hero-section ">
        <div class="hero-content">
            <h1 class="hero-title">Transforming Ideas Into Digital Reality</h1>
            <p class="hero-subtitle">Professional web development, stunning designs, and robust systems tailored to your business needs</p>
            <div class="hero-buttons">
                <a href="{{ route('contact') }}" class="btn-primary">Get a Free Quote</a>
                <a href="{{ route('skills') }}" class="btn-primary text-dark">View Our Work</a>
            </div>
        </div>
        <div class="hero-image">
            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Digital creative work">
        </div>
    </section>

<!-- 
    <section class="clients-section">
        <h3 class="clients-title">Trusted By Industry Leaders</h3>
        <div class="client-logos">
            <img src="https://via.placeholder.com/150x60?text=Client+1" alt="Client Logo" class="client-logo">
            <img src="https://via.placeholder.com/150x60?text=Client+2" alt="Client Logo" class="client-logo">
            <img src="https://via.placeholder.com/150x60?text=Client+3" alt="Client Logo" class="client-logo">
            <img src="https://via.placeholder.com/150x60?text=Client+4" alt="Client Logo" class="client-logo">
            <img src="https://via.placeholder.com/150x60?text=Client+5" alt="Client Logo" class="client-logo">
        </div> -->

    </section>
    <!-- Services Preview -->
    <section class="services-section">
        <h2 class="section-title">Our Expertise</h2>
        <div class="services-grid">
            <!-- Web Development -->
            <div class="service-preview">
                <div class="service-icon">
                    <i class="fas fa-code"></i>
                </div>
                <h3 class="service-name">Web Development</h3>
                <p class="service-description">Custom websites and web applications built with modern technologies to drive your business forward.</p>
                <a href="{{ route('website') }}#web-development" class="service-link">
                    Learn more <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <!-- System Development -->
            <div class="service-preview">
                <div class="service-icon">
                    <i class="fas fa-server"></i>
                </div>
                <h3 class="service-name">System Development</h3>
                <p class="service-description">Tailored software solutions that streamline operations and boost productivity.</p>
                <a href="{{ route('system') }}#system-development" class="service-link">
                    Learn more <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <div class="service-preview">
                <div class="service-icon">
                    <i class="fas fa-phone"></i>
                </div>
                <h3 class="service-name">Mobile applications Dev</h3>
                <p class="service-description">Tailored Mobile app's solutions that streamline operations and boost productivity.</p>
                <a href="{{ route('system') }}#system-development" class="service-link">
                    Learn more <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <!-- Graphic Design -->
            <div class="service-preview">
                <div class="service-icon">
                    <i class="fas fa-palette"></i>
                </div>
                <h3 class="service-name">Graphic Design</h3>
                <p class="service-description">Visually stunning designs that communicate your brand's story effectively.</p>
                <a href="{{ route('graphics') }}#graphic-design" class="service-link">
                    Learn more <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <!-- Stationery Services -->
            <div class="service-preview">
                <div class="service-icon">
                    <i class="fas fa-print"></i>
                </div>
                <h3 class="service-name">Stationery Services</h3>
                <p class="service-description">Professional printed materials that make lasting impressions.</p>
                <a href="{{ route('stationary') }}#stationery" class="service-link">
                    Learn more <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>


    <section class="about-section">
        <div class="about-container">
            <div class="about-image">
                <img src="https://images.unsplash.com/photo-1580927752452-89d86da3fa0a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="About Me">
                <div class="about-badge">Expert Experience</div>
            </div>
            <div class="about-content">
                <h2>Hi, CyberNovaSolutions <span> ICT digital Sevices</span></h2>
                <p>We are full-stack developer and designer with a passion for creating digital experiences that combine beautiful aesthetics with flawless functionality.</p>
                <p>With a background in both computer science and visual arts, We'r bring a unique perspective to every project, ensuring the technical implementation matches the creative vision.</p>
                
                <div class="skills-list">
                    <span class="skill-tag">Web Development</span>
                    <span class="skill-tag">UI/UX Design</span>
                    <span class="skill-tag">System Architecture</span>
                    <span class="skill-tag">Brand Identity</span>
                    <span class="skill-tag">E-Commerce</span>
                    <span class="skill-tag">Mobile Apps</span>
                </div>
                
                <a href="{{ route('about') }}" class="btn-primary">Our Full Story</a>
            </div>
        </div>
    </section>

    <!-- Portfolio Showcase -->
    <section class="portfolio-section">
        <h2 class="section-title">Our Recent Work</h2>
        <div class="portfolio-filter">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="web">Web Development</button>
            <button class="filter-btn" data-filter="system">Systems</button>
            <button class="filter-btn" data-filter="design">Design</button>
        </div>
        <div class="portfolio-grid">
            <!-- Portfolio Item 1 -->
            <div class="portfolio-item" data-category="web">
                <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1528&q=80" alt="Web Project" class="portfolio-image">
                <div class="portfolio-overlay">
                    <h3 class="portfolio-title">E-Commerce Platform</h3>
                    <p class="portfolio-category">Web Development</p>
                    <a href="#" class="portfolio-link">View Project <i class="fas fa-external-link-alt ml-1"></i></a>
                </div>
            </div>

            <!-- Portfolio Item 2 -->
            <div class="portfolio-item" data-category="system">
                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="System Project" class="portfolio-image">
                <div class="portfolio-overlay">
                    <h3 class="portfolio-title">Inventory Management</h3>
                    <p class="portfolio-category">System Development</p>
                    <a href="#" class="portfolio-link">View Project <i class="fas fa-external-link-alt ml-1"></i></a>
                </div>
            </div>

            <!-- Portfolio Item 3 -->
            <div class="portfolio-item" data-category="design">
                <img src="https://images.unsplash.com/photo-1613909207039-6b173b755cc1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80" alt="Design Project" class="portfolio-image">
                <div class="portfolio-overlay">
                    <h3 class="portfolio-title">Brand Identity</h3>
                    <p class="portfolio-category">Graphic Design</p>
                    <a href="#" class="portfolio-link">View Project <i class="fas fa-external-link-alt ml-1"></i></a>
                </div>
            </div>

            <!-- Portfolio Item 4 -->
            <div class="portfolio-item" data-category="web">
                <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80" alt="Web Project" class="portfolio-image">
                <div class="portfolio-overlay">
                    <h3 class="portfolio-title">Corporate Website</h3>
                    <p class="portfolio-category">Web Development</p>
                    <a href="#" class="portfolio-link">View Project <i class="fas fa-external-link-alt ml-1"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <!-- <section class="stats-section">
        <div class="stats-container">
            <div class="stat-item">
                <div class="stat-number">Plus+</div>
                <div class="stat-label">Projects Completed</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">98%</div>
                <div class="stat-label">Client Satisfaction</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">Plus+</div>
                <div class="stat-label"> Experience</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">50+</div>
                <div class="stat-label">Happy Clients</div>
            </div>
        </div>
    </section> -->


    <!-- <section class="blog-section">
        <div class="blog-header">
            <h2 class="blog-title">Latest Insights</h2>
            <a href="{{ route('skills') }}" class="view-all">View All Articles <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="blog-grid">
    
            <div class="blog-card">
                <div class="blog-image">
                    <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Blog Post">
                </div>
                <div class="blog-content">
                    <div class="blog-date"><i class="far fa-calendar-alt"></i> June 15, 2025</div>
                    <h3 class="blog-post-title">Web Design Trends to Watch in 2023</h3>
                    <p class="blog-excerpt">Discover the emerging design trends that will dominate the web this year and how to implement them in your projects.</p>
                    <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

  
            <div class="blog-card">
                <div class="blog-image">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Blog Post">
                </div>
                <div class="blog-content">
                    <div class="blog-date"><i class="far fa-calendar-alt"></i> May 28, 2023</div>
                    <h3 class="blog-post-title">Optimizing Website Performance</h3>
                    <p class="blog-excerpt">Learn proven techniques to speed up your website and improve user experience with these performance optimization strategies.</p>
                    <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

    
            <div class="blog-card">
                <div class="blog-image">
                    <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1528&q=80" alt="Blog Post">
                </div>
                <div class="blog-content">
                    <div class="blog-date"><i class="far fa-calendar-alt"></i> April 10, 2023</div>
                    <h3 class="blog-post-title">Building Scalable Web Applications</h3>
                    <p class="blog-excerpt">Explore architectural patterns and best practices for creating web applications that can grow with your user base.</p>
                    <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section> -->


    <!-- Testimonials Section -->
    <section class="testimonials-section" style="display:none">
        <h2 class="section-title">Client Testimonials</h2>
        <div class="testimonial-grid">
            <!-- Testimonial 1 -->
            <div class="testimonial-card">
                <div class="testimonial-content">
                    "The web application they developed transformed our business operations. The team was professional, met all deadlines, and delivered beyond our expectations."
                </div>
                <div class="testimonial-author">
                    <div class="testimonial-avatar" style="background-image: url('https://randomuser.me/api/portraits/men/32.jpg')"></div>
                    <div class="author-info">
                        <h4>Silas hardware shop</h4>
                        <p>Director, Hardware shop.</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="testimonial-card">
                <div class="testimonial-content">
                    "Our new brand identity has received countless compliments. They perfectly captured our company's essence in the logo and visual system."
                </div>
                <div class="testimonial-author">
                    <div class="testimonial-avatar" style="background-image: url('https://randomuser.me/api/portraits/women/44.jpg')"></div>
                    <div class="author-info">
                        <h4>CCT USCF UDOM CHAPLAINCY</h4>
                        <p>The chair person</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="newsletter-container">
            <h2 class="newsletter-title">Stay Updated</h2>
            <p class="newsletter-text">Subscribe to my newsletter for the latest tips, insights, and project updates delivered straight to your inbox.</p>
            <form class="newsletter-form">
                <input type="email" placeholder="Your email address" class="newsletter-input text-dark" required>
                <button type="submit" class="newsletter-button">Subscribe</button>
            </form>
            <p class="newsletter-note">No spam ever. Unsubscribe anytime.</p>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="cta-content">
            <h2 class="cta-title">Ready to Start Your Project?</h2>
            <p class="cta-text">Let's discuss how we can help you achieve your business goals with our professional services.</p>
            <a href="{{ route('contact') }}" class="btn-primary">Get in Touch</a>
        </div>
    </section>

    <!-- Footer would go here -->

    <script>

        // Initialize Swiper for client logos
        const clientSwiper = new Swiper('.client-logos', {
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            slidesPerView: 5,
            spaceBetween: 30,
            breakpoints: {
                320: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                480: {
                    slidesPerView: 3,
                    spaceBetween: 30
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 40
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 50
                }
            }
        });

        // Portfolio Filter
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const portfolioItems = document.querySelectorAll('.portfolio-item');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    const filterValue = this.getAttribute('data-filter');
                    
                    portfolioItems.forEach(item => {
                        if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });

            // Animation for elements when they come into view
            const animateOnScroll = function() {
                const elements = document.querySelectorAll('.service-preview, .portfolio-item, .stat-item, .testimonial-card');
                
                elements.forEach(element => {
                    const elementPosition = element.getBoundingClientRect().top;
                    const screenPosition = window.innerHeight / 1.3;
                    
                    if (elementPosition < screenPosition) {
                        element.style.opacity = '1';
                        element.style.transform = 'translateY(0)';
                    }
                });
            };

            // Set initial state
            const services = document.querySelectorAll('.service-preview');
            services.forEach((service, index) => {
                service.style.opacity = '0';
                service.style.transform = 'translateY(20px)';
                service.style.transition = `all 0.5s ease ${index * 0.1}s`;
            });

            const portfolioItems = document.querySelectorAll('.portfolio-item');
            portfolioItems.forEach((item, index) => {
                item.style.opacity = '0';
                item.style.transform = 'translateY(20px)';
                item.style.transition = `all 0.5s ease ${index * 0.1}s`;
            });

            const stats = document.querySelectorAll('.stat-item');
            stats.forEach((stat, index) => {
                stat.style.opacity = '0';
                stat.style.transform = 'translateY(20px)';
                stat.style.transition = `all 0.5s ease ${index * 0.1}s`;
            });

            const testimonials = document.querySelectorAll('.testimonial-card');
            testimonials.forEach((testimonial, index) => {
                testimonial.style.opacity = '0';
                testimonial.style.transform = 'translateY(20px)';
                testimonial.style.transition = `all 0.5s ease ${index * 0.1}s`;
            });

            // Run on load and scroll
            animateOnScroll();
            window.addEventListener('scroll', animateOnScroll);
        });
    </script>

@endsection


