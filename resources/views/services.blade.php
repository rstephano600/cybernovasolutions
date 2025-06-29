@extends('layouts.app')

    <title>Our Services | {{ config('app.name', 'Creative Solutions') }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/services.css') }}">

    @section('content')
    <!-- Services Hero Section -->
    <section class="services-hero">
        <div class="hero-service">
        <h1>Meet Our Professional Services</h1>
        <p>We deliver cutting-edge solutions tailored to your business needs. Explore our comprehensive range of services designed to elevate your digital presence.</p>
        </div>
    </section>

    <!-- Web Development Services -->
    <div class="services-container">
        <div class="service-category">
            <h2><i class="fas fa-code"></i> Web Development</h2>
            <div class="service-grid">
                <!-- Service Card 1 -->
                <div class="service-card">
                    <div class="service-card-header" style="background-image: url('https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80')">
                        <div class="service-card-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3 class="service-card-title">Custom Website Development</h3>
                    </div>
                    <div class="service-card-body">
                        <p>Bespoke websites designed to reflect your brand identity and drive conversions with optimal user experience.</p>
                        <ul class="service-features">
                            <li>Responsive design (mobile-friendly)</li>
                            <li>SEO-optimized structure</li>
                            <li>CMS integration </li>
                            <li>Performance optimization</li>
                            <li>Ongoing maintenance</li>
                        </ul>
                        <div class="service-cta">
                            <div class="price-tag">Customer <span>starting price</span></div>
                            <button class="btn-service">Get Services</button>
                        </div>
                    </div>
                </div>

                <!-- Service Card 2 -->
                <div class="service-card">
                    <div class="service-card-header" style="background-image: url('https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80')">
                        <div class="service-card-icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <h3 class="service-card-title">E-Commerce Solutions</h3>
                    </div>
                    <div class="service-card-body">
                        <p>Complete online store setup with secure payment gateways and inventory management systems.</p>
                        <ul class="service-features">
                            <li>Shopify/ WooCommerce development</li>
                            <li>Payment gateway integration</li>
                            <li>Product catalog setup</li>
                            <li>Secure checkout process</li>
                            <li>Marketing tools integration</li>
                        </ul>
                        <div class="service-cta">
                            <div class="price-tag">Custom <span>starting price</span></div>
                            <button class="btn-service">Get Services</button>
                        </div>
                    </div>
                </div>

                <!-- Service Card 3 -->
                <div class="service-card">
                    <div class="service-card-header" style="background-image: url('https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1528&q=80')">
                        <div class="service-card-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h3 class="service-card-title">Web Application Development</h3>
                    </div>
                    <div class="service-card-body">
                        <p>Custom web applications built to streamline your business processes and improve efficiency.</p>
                        <ul class="service-features">
                            <li>Custom CRM/ERP solutions</li>
                            <li>Database integration</li>
                            <li>User authentication systems</li>
                            <li>API development</li>
                            <li>Cloud deployment</li>
                        </ul>
                        <div class="service-cta">
                            <div class="price-tag">Custom <span>project-based</span></div>
                            <button class="btn-service">Get Quote</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- System Development Services -->
        <div class="service-category">
            <h2><i class="fas fa-server"></i> System Development</h2>
            <div class="service-grid">
                <!-- Service Cards for System Development -->
                <div class="service-card">
                    <div class="service-card-header" style="background-image: url('https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80')">
                        <div class="service-card-icon">
                            <i class="fas fa-database"></i>
                        </div>
                        <h3 class="service-card-title">Custom Software Solutions</h3>
                    </div>
                    <div class="service-card-body">
                        <p>Tailored software applications designed to solve your specific business challenges.</p>
                        <ul class="service-features">
                            <li>Requirement analysis</li>
                            <li>Custom architecture design</li>
                            <li>Scalable solutions</li>
                            <li>Legacy system modernization</li>
                            <li>Ongoing support</li>
                        </ul>
                        <div class="service-cta">
                            <div class="price-tag">Custom <span>pricing</span></div>
                            <button class="btn-service">Consult Now</button>
                        </div>
                    </div>
                </div>
                <!-- Add more system development services here -->
            </div>
        </div>

        <!-- Graphic Design Services -->
        <div class="service-category">
            <h2><i class="fas fa-palette"></i> Graphic Design</h2>
            <div class="service-grid">
                <!-- Service Cards for Graphic Design -->
                <div class="service-card">
                    <div class="service-card-header" style="background-image: url('https://images.unsplash.com/photo-1613909207039-6b173b755cc1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80')">
                        <div class="service-card-icon">
                            <i class="fas fa-brush"></i>
                        </div>
                        <h3 class="service-card-title">Brand Identity Design</h3>
                    </div>
                    <div class="service-card-body">
                        <p>Complete visual identity packages to establish your brand in the market.</p>
                        <ul class="service-features">
                            <li>Logo design</li>
                            <li>Color palette</li>
                            <li>Typography system</li>
                            <li>Brand guidelines</li>
                            <li>Stationery design</li>
                        </ul>
                        <div class="service-cta">
                            <div class="price-tag">Customized <span>package</span></div>
                            <button class="btn-service">Get Started</button>
                        </div>
                    </div>
                </div>
                <!-- Add more graphic design services here -->
            </div>
        </div>

        <!-- Stationery Services -->
        <div class="service-category">
            <h2><i class="fas fa-print"></i> Stationery Services</h2>
            <div class="service-grid">
                <!-- Service Cards for Stationery -->
                <div class="service-card">
                    <div class="service-card-header" style="background-image: url('https://images.unsplash.com/photo-1600189261867-8a325a6d22e3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80')">
                        <div class="service-card-icon">
                            <i class="fas fa-business-time"></i>
                        </div>
                        <h3 class="service-card-title">Corporate Stationery</h3>
                    </div>
                    <div class="service-card-body">
                        <p>Professional printed materials that make lasting impressions.</p>
                        <ul class="service-features">
                            <li>Business card design & printing</li>
                            <li>Letterhead & envelope sets</li>
                            <li>Presentation folders</li>
                            <li>Brochures & flyers</li>
                            <li>Full design + print service</li>
                        </ul>
                        <div class="service-cta">
                            <div class="price-tag">Customized <span> price</span></div>
                            <button class="btn-service">Order Now</button>
                        </div>
                    </div>
                </div>
                <!-- Add more stationery services here -->
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <!-- <section class="testimonials">
        <h2>What Our Clients Say</h2>
        <div class="testimonial-grid">

            <div class="testimonial-card">
                <div class="testimonial-content">
                    "The web application they developed transformed our business operations. The team was professional, met all deadlines, and delivered beyond our expectations."
                </div>
                <div class="testimonial-author">
                    <div class="testimonial-avatar" style="background-image: url('https://randomuser.me/api/portraits/men/32.jpg')"></div>
                    <div class="author-info">
                        <h4>Michael Johnson</h4>
                        <p>CEO, TechSolutions Inc.</p>
                    </div>
                </div>
            </div>


            <div class="testimonial-card">
                <div class="testimonial-content">
                    "Our new brand identity has received countless compliments. They perfectly captured our company's essence in the logo and visual system."
                </div>
                <div class="testimonial-author">
                    <div class="testimonial-avatar" style="background-image: url('https://randomuser.me/api/portraits/women/44.jpg')"></div>
                    <div class="author-info">
                        <h4>Sarah Williams</h4>
                        <p>Marketing Director, Bloom Cosmetics</p>
                    </div>
                </div>
            </div>


            <div class="testimonial-card">
                <div class="testimonial-content">
                    "The e-commerce site they built increased our online sales by 200% in the first quarter. Their attention to UX details made all the difference."
                </div>
                <div class="testimonial-author">
                    <div class="testimonial-avatar" style="background-image: url('https://randomuser.me/api/portraits/men/75.jpg')"></div>
                    <div class="author-info">
                        <h4>David Chen</h4>
                        <p>Owner, UrbanFashion</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- CTA Section -->
    <section class="cta-section">
        <h2>Ready to Transform Your Business?</h2>
        <p>Let's discuss how we can help you achieve your goals with our professional services.</p>
        <a href="{{ route('contact') }}" class="btn-cta">Get in Touch</a>
    </section>

    @endsection
    <!-- Footer would go here -->

    <script>
        // Simple animation for service cards when they come into view
        document.addEventListener('DOMContentLoaded', function() {
            const serviceCards = document.querySelectorAll('.service-card');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, { threshold: 0.1 });

            serviceCards.forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'all 0.5s ease-out';
                observer.observe(card);
            });
        });
    </script>
</body>
</html>