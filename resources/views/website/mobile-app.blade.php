@extends('layouts.web-app')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/services.css') }}">

<!-- Hero Section -->
<section class="py-5 bg-dark text-white">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h1 class="display-4 fw-bold mb-4">Custom Mobile App Development</h1>
                <p class="lead mb-4">We build high-performance iOS, Android, and cross-platform apps that engage users and drive business growth.</p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="{{ route('contact') }}" class="btn btn-primary btn-lg px-4">Get a Free Consultation</a>
                    <a href="{{ route('portfolio') }}?filter=mobile" class="btn btn-outline-light btn-lg px-4">View Our App Portfolio</a>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="https://images.unsplash.com/photo-1555774698-0b77e0d5fac6?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" 
                     alt="Mobile app development" 
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
                <img src="https://images.unsplash.com/photo-1607252650355-f7fd0460ccdb?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" 
                     alt="Mobile app development process" 
                     class="img-fluid rounded-3 shadow">
            </div>
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4">Tailored Mobile Solutions</h2>
                <p class="lead">Off-the-shelf apps often don't meet your specific business requirements.</p>
                <p>Our custom mobile app development services create solutions designed for your target audience, business objectives, and technical requirements. We focus on building secure, scalable, and user-friendly apps that deliver real value.</p>
                <ul class="list-unstyled">
                    <li class="mb-2 d-flex align-items-start">
                        <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                        <span>Native iOS (Swift) and Android (Kotlin) development</span>
                    </li>
                    <li class="mb-2 d-flex align-items-start">
                        <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                        <span>Cross-platform solutions (Flutter, React Native)</span>
                    </li>
                    <li class="mb-2 d-flex align-items-start">
                        <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                        <span>UI/UX design optimized for mobile</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="py-5 bg-light">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Our Mobile App Development Process</h2>
            <p class="lead text-muted">A structured approach to deliver successful mobile applications</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-3">
                            <span class="fs-2 fw-bold">1</span>
                        </div>
                        <h4 class="mb-3">Discovery & Planning</h4>
                        <p class="text-muted">We conduct workshops to define app features, user flows, and technical requirements.</p>
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
                        <p class="text-muted">Our designers create wireframes, prototypes, and pixel-perfect interfaces.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-3">
                            <span class="fs-2 fw-bold">3</span>
                        </div>
                        <h4 class="mb-3">Agile Development</h4>
                        <p class="text-muted">We build the app in sprints with regular testing and feedback cycles.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-3">
                            <span class="fs-2 fw-bold">4</span>
                        </div>
                        <h4 class="mb-3">Deployment & Support</h4>
                        <p class="text-muted">We handle app store submission and provide ongoing maintenance.</p>
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
            <h2 class="fw-bold">Our Mobile App Development Services</h2>
            <p class="lead text-muted">Comprehensive solutions for all mobile platforms</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded p-2 mb-3 d-inline-block">
                            <i class="fab fa-apple fa-2x"></i>
                        </div>
                        <h4 class="mb-3">iOS App Development</h4>
                        <ul class="text-muted ps-3">
                            <li class="mb-2">Swift/SwiftUI development</li>
                            <li class="mb-2">iPhone & iPad optimization</li>
                            <li class="mb-2">Apple Watch integration</li>
                            <li>App Store deployment</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded p-2 mb-3 d-inline-block">
                            <i class="fab fa-android fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Android App Development</h4>
                        <ul class="text-muted ps-3">
                            <li class="mb-2">Kotlin/Java development</li>
                            <li class="mb-2">Material Design implementation</li>
                            <li class="mb-2">Multi-device compatibility</li>
                            <li>Play Store deployment</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded p-2 mb-3 d-inline-block">
                            <i class="fas fa-mobile fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Cross-Platform Apps</h4>
                        <ul class="text-muted ps-3">
                            <li class="mb-2">Flutter development</li>
                            <li class="mb-2">React Native development</li>
                            <li class="mb-2">Single codebase</li>
                            <li>Faster development</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded p-2 mb-3 d-inline-block">
                            <i class="fas fa-sync-alt fa-2x"></i>
                        </div>
                        <h4 class="mb-3">App Migration</h4>
                        <ul class="text-muted ps-3">
                            <li class="mb-2">Legacy app modernization</li>
                            <li class="mb-2">Platform migration</li>
                            <li class="mb-2">Technology upgrade</li>
                            <li>Performance optimization</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technology Stack Section -->
<section class="py-5 bg-primary text-white">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Our Mobile Development Stack</h2>
            <p class="lead text-white-50">Cutting-edge technologies for high-performance apps</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 bg-primary bg-opacity-10 border-light">
                    <div class="card-body text-center p-4">
                        <div class="bg-white bg-opacity-10 text-white rounded p-3 mb-3">
                            <i class="fab fa-apple fa-3x"></i>
                        </div>
                        <h4 class="mb-3">iOS</h4>
                        <!-- <div class="d-flex flex-wrap justify-content-center gap-2" style="display:none">
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">Swift</span>
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">SwiftUI</span>
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">UIKit</span>
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">Core Data</span>
                        </div> -->
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 bg-primary bg-opacity-10 border-light">
                    <div class="card-body text-center p-4">
                        <div class="bg-white bg-opacity-10 text-white rounded p-3 mb-3">
                            <i class="fab fa-android fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Android</h4>
                        <!-- <div class="d-flex flex-wrap justify-content-center gap-2" style="display:none">
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">Kotlin</span>
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">Jetpack Compose</span>
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">Room DB</span>
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">Coroutines</span>
                        </div> -->
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 bg-primary bg-opacity-10 border-light">
                    <div class="card-body text-center p-4">
                        <div class="bg-white bg-opacity-10 text-white rounded p-3 mb-3">
                            <i class="fas fa-mobile-alt fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Cross-Platform</h4>
                        <div class="d-flex flex-wrap justify-content-center gap-2">
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">Flutter</span>
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">React Native</span>
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">Dart</span>
                            <!-- <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">Firebase</span> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Case Studies Section -->
<section class="py-5 bg-light" style="display:none">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Mobile App Case Studies</h2>
            <p class="lead text-muted">Successful apps delivering real business results</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow-sm overflow-hidden">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <img src="https://images.unsplash.com/photo-1601784551446-20c9e07cdbdb?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" 
                                 class="img-fluid h-100 object-fit-cover" 
                                 alt="E-commerce app">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <span class="badge bg-primary bg-opacity-10 text-primary mb-2">E-Commerce</span>
                                <h3 class="mb-3">Fashion Retail Mobile App</h3>
                                <p class="text-muted mb-4">Developed a shopping app that increased conversions by 65% and reduced cart abandonment by 42% through optimized UX and one-click checkout.</p>
                                <div class="d-flex flex-wrap gap-2 mb-3">
                                    <span class="badge bg-light text-dark">iOS & Android</span>
                                    <span class="badge bg-light text-dark">Payment integration</span>
                                    <span class="badge bg-light text-dark">AR try-on</span>
                                </div>
                                <a href="#" class="btn btn-outline-primary">Read Case Study</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow-sm overflow-hidden">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" 
                                 class="img-fluid h-100 object-fit-cover" 
                                 alt="Healthcare app">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <span class="badge bg-primary bg-opacity-10 text-primary mb-2">Healthcare</span>
                                <h3 class="mb-3">Telemedicine Solution</h3>
                                <p class="text-muted mb-4">Built a HIPAA-compliant app connecting patients with doctors, reducing appointment wait times by 75% and increasing patient satisfaction scores.</p>
                                <div class="d-flex flex-wrap gap-2 mb-3">
                                    <span class="badge bg-light text-dark">Cross-platform</span>
                                    <span class="badge bg-light text-dark">Video consultation</span>
                                    <span class="badge bg-light text-dark">E-prescriptions</span>
                                </div>
                                <a href="#" class="btn btn-outline-primary">Read Case Study</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-4">
            <a href="{{ route('portfolio') }}" class="btn btn-link">View All Case Studies <i class="fas fa-arrow-right ms-2"></i></a>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="py-5" style="display:none">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold">App Development Packages</h2>
            <p class="lead text-muted">Flexible options to suit your project requirements</p>
        </div>
        
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h4 class="text-center mb-3">Basic App</h4>
                        <div class="text-center mb-4">
                            <i class="fas fa-mobile-alt text-primary fa-3x mb-3"></i>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Simple UI with basic features</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Single platform (iOS or Android)</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Basic backend integration</span>
                            </li>
                            <li class="d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Ideal for MVPs</span>
                            </li>
                        </ul>
                        <div class="text-center mt-auto">
                            <a href="{{ route('contact') }}" class="btn btn-outline-primary w-100">From $5,000</a>
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
                        <h4 class="text-center mb-3">Business App</h4>
                        <div class="text-center mb-4">
                            <i class="fas fa-briefcase text-primary fa-3x mb-3"></i>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Custom UI/UX design</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Cross-platform development</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>API integrations</span>
                            </li>
                            <li class="d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Ideal for growing businesses</span>
                            </li>
                        </ul>
                        <div class="text-center mt-auto">
                            <a href="{{ route('contact') }}" class="btn btn-primary w-100">From $15,000</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h4 class="text-center mb-3">Enterprise Solution</h4>
                        <div class="text-center mb-4">
                            <i class="fas fa-building text-primary fa-3x mb-3"></i>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Advanced features & security</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Native iOS & Android apps</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Custom backend development</span>
                            </li>
                            <li class="d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Ongoing support & maintenance</span>
                            </li>
                        </ul>
                        <div class="text-center mt-auto">
                            <a href="{{ route('contact') }}" class="btn btn-outline-primary w-100">From $50,000</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5 bg-light">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Frequently Asked Questions</h2>
            <p class="lead text-muted">Common questions about our mobile app development services</p>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h3 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                How long does it take to develop a mobile app?
                            </button>
                        </h3>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Development time varies based on complexity. A basic MVP can take 2-3 months, while a full-featured enterprise app may take 6-12 months. We provide detailed timelines after understanding your requirements.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h3 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Should we build native or cross-platform apps?
                            </button>
                        </h3>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Native apps (Swift/Kotlin) offer best performance and access to all device features. Cross-platform (Flutter/React Native) is cost-effective for simpler apps needing both iOS and Android. We'll recommend the best approach for your needs.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h3 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What about app maintenance after launch?
                            </button>
                        </h3>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We offer maintenance packages covering bug fixes, OS updates, feature enhancements, and performance optimization. All apps come with 3 months free maintenance post-launch.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h3 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                How do you handle app store submissions?
                            </button>
                        </h3>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We handle the entire submission process to Apple App Store and Google Play Store, including preparing screenshots, descriptions, and meeting all guidelines. We also provide ASO (App Store Optimization) services.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 shadow-sm">
                        <h3 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Can you help with app marketing?
                            </button>
                        </h3>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, we offer app marketing services including ASO, social media campaigns, influencer marketing, and paid advertising to help drive downloads and engagement.
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
                <h2 class="fw-bold mb-4">Ready to Build Your Mobile App?</h2>
                <p class="lead mb-5">Let's discuss how a custom mobile solution can transform your business.</p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="{{ route('contact') }}" class="btn btn-light btn-lg px-4">Get a Free Consultation</a>
                    <a href="tel:+1234567890" class="btn btn-outline-light btn-lg px-4">
                        <i class="fas fa-phone me-2"></i> Call Our Experts
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

