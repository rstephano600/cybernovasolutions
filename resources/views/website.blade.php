@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/services.css') }}">

<!-- Hero Section -->
<section class="py-5 bg-primary text-white">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h1 class="display-4 fw-bold mb-4">Professional Website Design Services</h1>
                <p class="lead mb-4">We create stunning, high-performance websites that convert visitors into customers and establish your digital presence.</p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="{{ route('contact') }}" class="btn btn-light btn-lg px-4">Get a Free Consultation</a>
                    <a href="{{ route('portfolio') }}?filter=web" class="btn btn-outline-light btn-lg px-4">View Our Portfolio</a>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-4.0.3&auto=format&fit=crop&w=1528&q=80" 
                     alt="Website design" 
                     class="img-fluid rounded-3 shadow">
            </div>
        </div>
    </div>
</section>

<!-- Introduction Section -->
<section class="py-5">
    <div class="container py-4">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4">Your Digital Storefront Deserves Excellence</h2>
                <p class="lead">In today's digital-first world, your website is often the first impression customers have of your business.</p>
                <p>We design websites that are not just visually appealing but strategically crafted to achieve your business goals. Whether you need a simple brochure site, a complex e-commerce platform, or a custom web application, our team combines technical expertise with creative design to deliver exceptional results.</p>
                <ul class="list-unstyled">
                    <li class="mb-2 d-flex align-items-start">
                        <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                        <span>Mobile-first responsive design</span>
                    </li>
                    <li class="mb-2 d-flex align-items-start">
                        <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                        <span>SEO-optimized structure</span>
                    </li>
                    <li class="mb-2 d-flex align-items-start">
                        <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                        <span>Conversion-focused layouts</span>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1469&q=80" 
                         alt="Website design process" 
                         class="img-fluid">
                    <div class="card-body bg-light">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 bg-primary text-white rounded-circle p-3 me-3">
                                <i class="fas fa-trophy fa-lg"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">Award-Winning Designs</h5>
                                <p class="mb-0 text-muted">Recognized for excellence in user experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="py-5 bg-light">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Our Website Development Process</h2>
            <p class="lead text-muted">A proven methodology to deliver outstanding results</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-3">
                            <span class="fs-2 fw-bold">1</span>
                        </div>
                        <h4 class="mb-3">Discovery & Strategy</h4>
                        <p class="text-muted">We analyze your business goals, target audience, and competitors to create a strategic plan.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-3">
                            <span class="fs-2 fw-bold">2</span>
                        </div>
                        <h4 class="mb-3">UI/UX Design</h4>
                        <p class="text-muted">Our designers create wireframes and mockups focusing on user experience and conversions.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-3">
                            <span class="fs-2 fw-bold">3</span>
                        </div>
                        <h4 class="mb-3">Development</h4>
                        <p class="text-muted">We build your site using the latest technologies, ensuring speed and responsiveness.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-3">
                            <span class="fs-2 fw-bold">4</span>
                        </div>
                        <h4 class="mb-3">Testing & Launch</h4>
                        <p class="text-muted">Rigorous testing across devices before your site goes live with full support.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Solutions Section -->
<section class="py-5">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Our Website Design Solutions</h2>
            <p class="lead text-muted">Tailored solutions for every business need</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded p-2 mb-3 d-inline-block">
                            <i class="fas fa-briefcase fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Business Websites</h4>
                        <ul class="text-muted ps-3">
                            <li class="mb-2">Professional corporate designs</li>
                            <li class="mb-2">CMS integration</li>
                            <li class="mb-2">SEO-optimized structure</li>
                            <li>Lead generation focus</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded p-2 mb-3 d-inline-block">
                            <i class="fas fa-shopping-cart fa-2x"></i>
                        </div>
                        <h4 class="mb-3">E-Commerce Stores</h4>
                        <ul class="text-muted ps-3">
                            <li class="mb-2">WooCommerce/Shopify solutions</li>
                            <li class="mb-2">Secure payment gateways</li>
                            <li class="mb-2">Product management</li>
                            <li>Mobile-optimized checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded p-2 mb-3 d-inline-block">
                            <i class="fas fa-mobile-alt fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Web Applications</h4>
                        <ul class="text-muted ps-3">
                            <li class="mb-2">Custom functionality</li>
                            <li class="mb-2">User authentication</li>
                            <li class="mb-2">Database integration</li>
                            <li>API development</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded p-2 mb-3 d-inline-block">
                            <i class="fas fa-rocket fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Landing Pages</h4>
                        <ul class="text-muted ps-3">
                            <li class="mb-2">High-conversion designs</li>
                            <li class="mb-2">A/B testing capabilities</li>
                            <li class="mb-2">Lead capture forms</li>
                            <li>Campaign tracking</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technology Stack Section -->
<section class="py-5 bg-dark text-white">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Our Technology Stack</h2>
            <p class="lead text-muted">Industry-leading technologies for superior results</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 bg-dark border-secondary">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded p-3 mb-3">
                            <i class="fas fa-laptop-code fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Frontend</h4>
                        <div class="d-flex flex-wrap justify-content-center gap-2">
                            <span class="badge bg-primary bg-opacity-10 text-primary py-2 px-3">HTML5</span>
                            <span class="badge bg-primary bg-opacity-10 text-primary py-2 px-3">CSS3/Sass</span>
                            <span class="badge bg-primary bg-opacity-10 text-primary py-2 px-3">JavaScript</span>
                            <span class="badge bg-primary bg-opacity-10 text-primary py-2 px-3">React</span>
                            <span class="badge bg-primary bg-opacity-10 text-primary py-2 px-3">Vue.js</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 bg-dark border-secondary">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded p-3 mb-3">
                            <i class="fas fa-server fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Backend</h4>
                        <div class="d-flex flex-wrap justify-content-center gap-2">
                            <span class="badge bg-primary bg-opacity-10 text-primary py-2 px-3">PHP</span>
                            <span class="badge bg-primary bg-opacity-10 text-primary py-2 px-3">Laravel</span>
                            <span class="badge bg-primary bg-opacity-10 text-primary py-2 px-3">Node.js</span>
                            <span class="badge bg-primary bg-opacity-10 text-primary py-2 px-3">Python</span>
                            <span class="badge bg-primary bg-opacity-10 text-primary py-2 px-3">MySQL</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 bg-dark border-secondary">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded p-3 mb-3">
                            <i class="fas fa-cogs fa-3x"></i>
                        </div>
                        <h4 class="mb-3">CMS & Platforms</h4>
                        <div class="d-flex flex-wrap justify-content-center gap-2">
                            <span class="badge bg-primary bg-opacity-10 text-primary py-2 px-3">WordPress</span>
                            <span class="badge bg-primary bg-opacity-10 text-primary py-2 px-3">Shopify</span>
                            <span class="badge bg-primary bg-opacity-10 text-primary py-2 px-3">WooCommerce</span>
                            <span class="badge bg-primary bg-opacity-10 text-primary py-2 px-3">Drupal</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="py-5 bg-light">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Flexible Pricing Options</h2>
            <p class="lead text-muted">Tailored solutions to fit different business needs and budgets</p>
        </div>
        
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h4 class="text-center mb-3">Basic Website</h4>
                        <div class="text-center mb-4">
                            <span class="display-4 fw-bold">$999</span>
                            <span class="text-muted">+</span>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Up to 5 pages</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Mobile responsive design</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Basic SEO setup</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Contact form</span>
                            </li>
                            <li class="d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>1 year hosting included</span>
                            </li>
                        </ul>
                        <div class="text-center mt-auto">
                            <a href="{{ route('contact') }}" class="btn btn-outline-primary w-100">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card h-100 border-0 shadow-lg">
                    <div class="card-header bg-primary text-white text-center py-3">
                        <span class="badge bg-white text-primary rounded-pill">Most Popular</span>
                    </div>
                    <div class="card-body p-4">
                        <h4 class="text-center mb-3">Business Website</h4>
                        <div class="text-center mb-4">
                            <span class="display-4 fw-bold">$2,499</span>
                            <span class="text-muted">+</span>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Up to 15 pages</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>CMS integration</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Advanced SEO</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Custom design</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Blog setup</span>
                            </li>
                            <li class="d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>1 year hosting & support</span>
                            </li>
                        </ul>
                        <div class="text-center mt-auto">
                            <a href="{{ route('contact') }}" class="btn btn-primary w-100">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h4 class="text-center mb-3">E-Commerce Website</h4>
                        <div class="text-center mb-4">
                            <span class="display-4 fw-bold">$4,999</span>
                            <span class="text-muted">+</span>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Product catalog</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Secure checkout</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Payment gateway setup</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Inventory management</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Mobile optimized</span>
                            </li>
                            <li class="d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>6 months support</span>
                            </li>
                        </ul>
                        <div class="text-center mt-auto">
                            <a href="{{ route('contact') }}" class="btn btn-outline-primary w-100">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <div class="card border-0 bg-light">
                <div class="card-body p-4">
                    <h4 class="mb-3">Need something more complex?</h4>
                    <p class="mb-4">We build custom web applications tailored to your specific requirements.</p>
                    <a href="{{ route('contact') }}" class="btn btn-secondary">Request Custom Solution</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Frequently Asked Questions</h2>
            <p class="lead text-muted">Common questions about our website design services</p>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h3 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                How long does it take to build a website?
                            </button>
                        </h3>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                The timeline depends on the complexity of your project. A basic website typically takes 2-4 weeks, while more complex e-commerce sites or web applications may take 8-12 weeks. We'll provide a detailed timeline after our initial consultation.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h3 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Do you provide website hosting?
                            </button>
                        </h3>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, we offer premium hosting solutions optimized for performance and security. Our hosting packages include regular backups, security monitoring, and technical support. We can also help migrate your existing site to our hosting.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h3 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Will my website be mobile-friendly?
                            </button>
                        </h3>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Absolutely. All websites we build are fully responsive and tested across various devices and screen sizes. Mobile optimization is standard in all our web design packages.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h3 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Can you help with content creation?
                            </button>
                        </h3>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, we offer professional copywriting services and can coordinate with photographers/videographers to create compelling content that enhances your website's effectiveness.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h3 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                What about SEO?
                            </button>
                        </h3>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                All our websites are built with SEO best practices in mind. We offer basic on-page SEO with all packages and can provide advanced SEO services as an add-on to improve your search rankings.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 shadow-sm">
                        <h3 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Do you provide training?
                            </button>
                        </h3>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, we provide comprehensive training on how to manage your website's content through the CMS. We also offer documentation and video tutorials for future reference.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA Section -->
<section class="py-5 bg-primary text-white">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="fw-bold mb-4">Ready to Elevate Your Online Presence?</h2>
                <p class="lead mb-5">Let's discuss how we can create a website that drives results for your business.</p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="{{ route('contact') }}" class="btn btn-light btn-lg px-4">Get a Free Quote</a>
                    <a href="tel:+1234567890" class="btn btn-outline-light btn-lg px-4">
                        <i class="fas fa-phone me-2"></i> Call Us Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection