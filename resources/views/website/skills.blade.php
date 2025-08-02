@extends('layouts.web-app')

    <title>Our Services | {{ config('app.name', 'Creative Solutions') }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/skills.css') }}">
    @section('content')
    <!-- Services Hero Section -->
    <section class="services-hero">
        <div class="service-hero-content">
        <h1>Our Professional Services</h1>
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
                            <li>CMS integration (WordPress, etc.)</li>
                            <li>Performance optimization</li>
                            <li>Ongoing maintenance</li>
                        </ul>
                        <div class="service-cta">
                            <!-- <div class="price-tag">$1,200+ <span>starting price</span></div> -->
                            <button class="btn-service">Get a Service</button>
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
                            <!-- <div class="price-tag">$2,500+ <span>starting price</span></div> -->
                            <button class="btn-service">Get a Service</button>
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
                            <!-- <div class="price-tag"><span>project-based</span></div> -->
                            <button class="btn-service">Get a Service</button>
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
        
        <!-- 1. Brand Identity Design (Tanzania-Focused) -->
        <div class="service-card">
            <div class="service-card-header" style="background-image: url('https://images.unsplash.com/photo-1613909207039-6b173b755cc1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80')">
                <div class="service-card-icon">
                    <i class="fas fa-brush"></i>
                </div>
                <h3 class="service-card-title">Brand Identity Design</h3>
            </div>
            <div class="service-card-body">
                <p><strong>For Tanzanian businesses:</strong> Create a unique brand that stands out in Dar es Salaam, Arusha, Mwanza & beyond.</p>
                <ul class="service-features">
                    <li><strong>Logo design</strong> (Swahili-inspired, modern, or traditional)</li>
                    <li><strong>Color palette</strong> (aligned with Tanzanian culture & market trends)</li>
                    <li><strong>Typography system</strong> (English & Swahili-friendly fonts)</li>
                    <li><strong>Brand guidelines</strong> (for consistent use across print & digital)</li>
                    <li><strong>Stationery design</strong> (business cards, letterheads, envelopes)</li>
                    <li><strong>Social media branding</strong> (profile banners, post templates)</li>
                </ul>
                <div class="service-cta">
                    <!-- <div class="price-tag">TZS 1,500,000+ <span>(Full Package)</span></div> -->
                    <button class="btn-service">Get Started</button>
                </div>
            </div>
        </div>

        <!-- 2. Print & Advertising Design (Tanzania-Specific) -->
        <div class="service-card">
            <div class="service-card-header" style="background-image: url('https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80')">
                <div class="service-card-icon">
                    <i class="fas fa-print"></i>
                </div>
                <h3 class="service-card-title">Print & Advertising Design</h3>
            </div>
            <div class="service-card-body">
                <p><strong>High-impact designs</strong> for billboards, flyers, posters, and magazines in Tanzania.</p>
                <ul class="service-features">
                    <li><strong>Billboard ads</strong> (strategic for Dar es Salaam highways)</li>
                    <li><strong>Flyer & brochure design</strong> (for events, shops, promotions)</li>
                    <li><strong>Newspaper & magazine ads</strong> (The Citizen, Mwananchi, etc.)</li>
                    <li><strong>Product packaging</strong> (locally appealing designs)</li>
                    <li><strong>Vehicle branding</strong> (boda-boda, bajaji, company cars)</li>
                    <li><strong>Shop signage & banners</strong> (Swahili & English options)</li>
                </ul>
                <div class="service-cta">
                    <!-- <div class="price-tag">From TZS 300,000 <span>(per design)</span></div> -->
                    <button class="btn-service">Get Started</button>
                </div>
            </div>
        </div>

        <!-- 3. Digital & Social Media Graphics (Tanzania Market) -->
        <div class="service-card">
            <div class="service-card-header" style="background-image: url('https://images.unsplash.com/photo-1611162617213-6d7a0a9f0b8f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1374&q=80')">
                <div class="service-card-icon">
                    <i class="fas fa-hashtag"></i>
                </div>
                <h3 class="service-card-title">Digital & Social Media Graphics</h3>
            </div>
            <div class="service-card-body">
                <p><strong>Eye-catching visuals</strong> for Instagram, Facebook, TikTok & WhatsApp marketing in Tanzania.</p>
                <ul class="service-features">
                    <li><strong>Social media posts</strong> (trending Tanzanian styles)</li>
                    <li><strong>YouTube thumbnails & banners</strong></li>
                    <li><strong>WhatsApp status & flyers</strong> (for local promotions)</li>
                    <li><strong>Animated ads (GIFs)</strong> (for better engagement)</li>
                    <li><strong>Email newsletter designs</strong></li>
                    <li><strong>E-commerce product images</strong> (Jumia, Masoko, Kilimall)</li>
                </ul>
                <div class="service-cta">
                    <!-- <div class="price-tag">From TZS 200,000 <span>(per project)</span></div> -->
                    <button class="btn-service">Get Started</button>
                </div>
            </div>
        </div>

        <!-- 4. Custom Illustrations & Art (Tanzanian Themes) -->
        <div class="service-card">
            <div class="service-card-header" style="background-image: url('https://images.unsplash.com/photo-1589998059171-988d887df646?ixlib=rb-4.0.3&auto=format&fit=crop&w=1476&q=80')">
                <div class="service-card-icon">
                    <i class="fas fa-pencil-alt"></i>
                </div>
                <h3 class="service-card-title">Custom Illustrations & Art</h3>
            </div>
            <div class="service-card-body">
                <p><strong>Unique hand-drawn & digital art</strong> inspired by Tanzanian culture, wildlife, and landscapes.</p>
                <ul class="service-features">
                    <li><strong>Book & magazine illustrations</strong></li>
                    <li><strong>Character design</strong> (for animations & branding)</li>
                    <li><strong>Traditional Tingatinga-style art</strong> (digital adaptation)</li>
                    <li><strong>Wall murals & decor</strong> (for cafes, offices, homes)</li>
                    <li><strong>NFT & digital art</strong> (for global & local markets)</li>
                    <li><strong>Custom portraits</strong> (for gifts & personal branding)</li>
                </ul>
                <div class="service-cta">
                    <!-- <div class="price-tag">From TZS 500,000 <span>(per artwork)</span></div> -->
                    <button class="btn-service">Get Started</button>
                </div>
            </div>
        </div>
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
                            <!-- <div class="price-tag">$300+ <span>starting price</span></div> -->
                            <button class="btn-service">Order Now</button>
                        </div>
                    </div>
                </div>
                <!-- Add more stationery services here -->
            </div>
        </div>

        <div class="service-category">
    <h2><i class="fas fa-mobile-alt"></i> Mobile Application Development</h2>
    <div class="service-grid">
        <!-- Service Cards for Mobile Development -->
        <div class="service-card">
            <div class="service-card-header" style="background-image: url('https://images.unsplash.com/photo-1555774698-0b77e0d5fac6?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80')">
                <div class="service-card-icon">
                    <i class="fas fa-apple"></i>
                </div>
                <h3 class="service-card-title">iOS App Development</h3>
            </div>
            <div class="service-card-body">
                <p>Premium native iOS applications built with Swift for optimal performance.</p>
                <ul class="service-features">
                    <li>SwiftUI or UIKit development</li>
                    <li>App Store optimization</li>
                    <li>iPhone & iPad compatibility</li>
                    <li>Apple Watch integration</li>
                    <li>In-app purchase setup</li>
                </ul>
                <div class="service-cta">
                    <button class="btn-service">Request Quote</button>
                </div>
            </div>
        </div>

        <div class="service-card">
            <div class="service-card-header" style="background-image: url('https://images.unsplash.com/photo-1607252650355-f7fd0460ccdb?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80')">
                <div class="service-card-icon">
                    <i class="fab fa-android"></i>
                </div>
                <h3 class="service-card-title">Android App Development</h3>
            </div>
            <div class="service-card-body">
                <p>Custom Android applications developed with Kotlin for seamless performance.</p>
                <ul class="service-features">
                    <li>Kotlin/Java development</li>
                    <li>Material Design implementation</li>
                    <li>Play Store deployment</li>
                    <li>Device compatibility testing</li>
                    <li>Google Play billing integration</li>
                </ul>
                <div class="service-cta">
                    <button class="btn-service">Request Quote</button>
                </div>
            </div>
        </div>

        <div class="service-card">
            <div class="service-card-header" style="background-image: url('https://images.unsplash.com/photo-1633356122544-f134324a6cee?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80')">
                <div class="service-card-icon">
                    <i class="fas fa-mobile"></i>
                </div>
                <h3 class="service-card-title">Cross-Platform Development</h3>
            </div>
            <div class="service-card-body">
                <p>Single codebase solutions for both iOS and Android platforms.</p>
                <ul class="service-features">
                    <li>Flutter or React Native development</li>
                    <li>Cost-effective solution</li>
                    <li>Consistent UI across platforms</li>
                    <li>Faster development cycle</li>
                    <li>Native performance optimization</li>
                </ul>
                <div class="service-cta">
                    <button class="btn-service">Request Quote</button>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>


    <!-- CTA Section -->
    <section class="cta-section">
        <h2>Ready to Transform Your Business?</h2>
        <p>Let's discuss how we can help you achieve your goals with our professional services.</p>
        <a href="{{ route('contact') }}" class="btn-cta text-dark">Get in Touch</a>
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