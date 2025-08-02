@extends('layouts.web-app')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/services.css') }}">

<!-- Hero Section -->
<section class="py-5 bg-gradient-secondary text-dark">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h1 class="display-4 fw-bold mb-4">Professional Stationery Services</h1>
                <p class="lead mb-4">Elevate your brand with premium printed materials that make lasting impressions and communicate professionalism.</p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="{{ route('contact') }}" class="btn btn-light btn-lg px-4">Request a Quote</a>
                    <a href="{{ route('portfolio') }}?filter=stationery" class="btn btn-outline-light btn-lg px-4">View Samples</a>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="https://images.unsplash.com/photo-1600857544200-b2f666a9a2ec?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" 
                     alt="Professional stationery" 
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
                <div class="card border-0 shadow-sm overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1603481546579-65d935ba9cdd?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" 
                         alt="Stationery examples" 
                         class="img-fluid">
                    <div class="card-body bg-light">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 bg-primary text-white rounded-circle p-3 me-3">
                                <i class="fas fa-print fa-lg"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">Premium Printing</h5>
                                <p class="mb-0 text-muted">High-quality materials and printing techniques</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4">The Power of Professional Stationery</h2>
                <p class="lead">Your stationery is more than just paper - it's a tangible representation of your brand.</p>
                <p>We create cohesive stationery sets that reinforce your brand identity and leave a memorable impression. From elegant business cards to complete corporate stationery packages, we combine exceptional design with premium printing techniques to deliver outstanding results.</p>
                <ul class="list-unstyled">
                    <li class="mb-2 d-flex align-items-start">
                        <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                        <span>Brand-consistent designs</span>
                    </li>
                    <li class="mb-2 d-flex align-items-start">
                        <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                        <span>Premium paper stocks and finishes</span>
                    </li>
                    <li class="mb-2 d-flex align-items-start">
                        <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                        <span>Fast turnaround times</span>
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
            <h2 class="fw-bold">Our Stationery Production Process</h2>
            <p class="lead text-muted">From concept to final delivery</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-3">
                            <span class="fs-2 fw-bold">1</span>
                        </div>
                        <h4 class="mb-3">Consultation</h4>
                        <p class="text-muted">We discuss your needs, brand guidelines, and preferences for materials and finishes.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-3">
                            <span class="fs-2 fw-bold">2</span>
                        </div>
                        <h4 class="mb-3">Design</h4>
                        <p class="text-muted">Our designers create stationery concepts that align with your brand identity.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-3">
                            <span class="fs-2 fw-bold">3</span>
                        </div>
                        <h4 class="mb-3">Proofing</h4>
                        <p class="text-muted">You review digital proofs and request any necessary adjustments.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-3">
                            <span class="fs-2 fw-bold">4</span>
                        </div>
                        <h4 class="mb-3">Production</h4>
                        <p class="text-muted">We print and finish your stationery with meticulous attention to detail.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-5">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Our Stationery Services</h2>
            <p class="lead text-muted">Comprehensive solutions for all your professional printing needs</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded p-2 mb-3 d-inline-block">
                            <i class="fas fa-id-card fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Business Cards</h4>
                        <ul class="text-muted ps-3">
                            <li class="mb-2">Standard & premium stocks</li>
                            <li class="mb-2">Spot UV coating</li>
                            <li class="mb-2">Foil stamping</li>
                            <li>Die-cut shapes</li>
                        </ul>
                        <div class="mt-3">
                            <a href="#" class="btn btn-sm btn-outline-primary">View Options</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded p-2 mb-3 d-inline-block">
                            <i class="fas fa-envelope fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Letterheads & Envelopes</h4>
                        <ul class="text-muted ps-3">
                            <li class="mb-2">Custom designs</li>
                            <li class="mb-2">Matching sets</li>
                            <li class="mb-2">Premium paper options</li>
                            <li>Branded envelopes</li>
                        </ul>
                        <div class="mt-3">
                            <a href="#" class="btn btn-sm btn-outline-primary">View Options</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded p-2 mb-3 d-inline-block">
                            <i class="fas fa-folder-open fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Presentation Folders</h4>
                        <ul class="text-muted ps-3">
                            <li class="mb-2">Custom die-cut designs</li>
                            <li class="mb-2">Pocket configurations</li>
                            <li class="mb-2">Embossing/debossing</li>
                            <li>Business card slots</li>
                        </ul>
                        <div class="mt-3">
                            <a href="#" class="btn btn-sm btn-outline-primary">View Options</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded p-2 mb-3 d-inline-block">
                            <i class="fas fa-sticky-note fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Notepads & Memos</h4>
                        <ul class="text-muted ps-3">
                            <li class="mb-2">Custom sizes</li>
                            <li class="mb-2">Perforated sheets</li>
                            <li class="mb-2">Self-adhesive options</li>
                            <li>Branded headers</li>
                        </ul>
                        <div class="mt-3">
                            <a href="#" class="btn btn-sm btn-outline-primary">View Options</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded p-2 mb-3 d-inline-block">
                            <i class="fas fa-receipt fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Invoices & Forms</h4>
                        <ul class="text-muted ps-3">
                            <li class="mb-2">Numbered forms</li>
                            <li class="mb-2">Carbonless copies</li>
                            <li class="mb-2">Custom fields</li>
                            <li>Security features</li>
                        </ul>
                        <div class="mt-3">
                            <a href="#" class="btn btn-sm btn-outline-primary">View Options</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded p-2 mb-3 d-inline-block">
                            <i class="fas fa-gift fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Corporate Gifts</h4>
                        <ul class="text-muted ps-3">
                            <li class="mb-2">Branded merchandise</li>
                            <li class="mb-2">Packaging design</li>
                            <li class="mb-2">Holiday cards</li>
                            <li>Promotional items</li>
                        </ul>
                        <div class="mt-3">
                            <a href="#" class="btn btn-sm btn-outline-primary">View Options</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Materials & Finishes Section -->
<section class="py-5 bg-primary text-white">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Premium Materials & Finishes</h2>
            <p class="lead text-white-50">Elevate your stationery with our high-quality options</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 bg-primary bg-opacity-10 border-light">
                    <div class="card-body text-center p-4">
                        <div class="bg-white bg-opacity-10 text-white rounded p-3 mb-3">
                            <i class="fas fa-layer-group fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Paper Stocks</h4>
                        <div class="d-flex flex-wrap justify-content-center gap-2">
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">100-400 GSM</span>
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">Matte</span>
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">Linen</span>
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">Recycled</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 bg-primary bg-opacity-10 border-light">
                    <div class="card-body text-center p-4">
                        <div class="bg-white bg-opacity-10 text-white rounded p-3 mb-3">
                            <i class="fas fa-sparkles fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Special Finishes</h4>
                        <div class="d-flex flex-wrap justify-content-center gap-2">
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">Foil Stamping</span>
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">Spot UV</span>
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">Embossing</span>
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">Letterpress</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 bg-primary bg-opacity-10 border-light">
                    <div class="card-body text-center p-4">
                        <div class="bg-white bg-opacity-10 text-white rounded p-3 mb-3">
                            <i class="fas fa-cut fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Customization</h4>
                        <div class="d-flex flex-wrap justify-content-center gap-2">
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">Die-Cutting</span>
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">Rounded Corners</span>
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">Fold Options</span>
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">Edge Painting</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section class="py-5 bg-light" style="display:none">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Stationery Portfolio</h2>
            <p class="lead text-muted">Examples of our premium printed stationery</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1600857544200-b2f666a9a2ec?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" 
                         class="card-img-top" 
                         alt="Luxury business cards">
                    <div class="card-body">
                        <span class="badge bg-primary bg-opacity-10 text-primary mb-2">Business Cards</span>
                        <h5 class="mb-3">Gold Foil Business Cards</h5>
                        <p class="text-muted">Premium 400GSM stock with gold foil stamping and spot UV coating.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">View Project</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1603481546579-65d935ba9cdd?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" 
                         class="card-img-top" 
                         alt="Corporate stationery">
                    <div class="card-body">
                        <span class="badge bg-primary bg-opacity-10 text-primary mb-2">Full Stationery Suite</span>
                        <h5 class="mb-3">Law Firm Stationery</h5>
                        <p class="text-muted">Complete corporate stationery set with embossed logo and linen texture.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">View Project</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1601986313628-012dcd9df884?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" 
                         class="card-img-top" 
                         alt="Creative stationery">
                    <div class="card-body">
                        <span class="badge bg-primary bg-opacity-10 text-primary mb-2">Creative Stationery</span>
                        <h5 class="mb-3">Design Agency Materials</h5>
                        <p class="text-muted">Die-cut shapes with vibrant Pantone colors and unique folding.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">View Project</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-4">
            <a href="{{ route('portfolio') }}" class="btn btn-link">View Full Portfolio <i class="fas fa-arrow-right ms-2"></i></a>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="py-5" style="display:none">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Pricing Packages</h2>
            <p class="lead text-muted">Quality printing at competitive prices</p>
        </div>
        
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h4 class="text-center mb-3">Basic Stationery</h4>
                        <div class="text-center mb-4">
                            <span class="display-4 fw-bold">$149</span>
                            <span class="text-muted">/set</span>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>250 Business Cards</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>100 Letterheads</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>100 Envelopes</span>
                            </li>
                            <li class="d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Standard paper stock</span>
                            </li>
                        </ul>
                        <div class="text-center mt-auto">
                            <a href="{{ route('contact') }}" class="btn btn-outline-primary w-100">Order Now</a>
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
                        <h4 class="text-center mb-3">Professional Stationery</h4>
                        <div class="text-center mb-4">
                            <span class="display-4 fw-bold">$349</span>
                            <span class="text-muted">/set</span>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>500 Premium Business Cards</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>250 Letterheads</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>250 Envelopes</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Premium paper stock</span>
                            </li>
                            <li class="d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>1 special finish</span>
                            </li>
                        </ul>
                        <div class="text-center mt-auto">
                            <a href="{{ route('contact') }}" class="btn btn-primary w-100">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h4 class="text-center mb-3">Executive Stationery</h4>
                        <div class="text-center mb-4">
                            <span class="display-4 fw-bold">$799</span>
                            <span class="text-muted">/set</span>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>1000 Luxury Business Cards</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>500 Letterheads</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>500 Envelopes</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Luxury paper stock</span>
                            </li>
                            <li class="d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Multiple special finishes</span>
                            </li>
                        </ul>
                        <div class="text-center mt-auto">
                            <a href="{{ route('contact') }}" class="btn btn-outline-primary w-100">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <div class="card border-0 bg-light">
                <div class="card-body p-4">
                    <h4 class="mb-3">Need custom quantities or items?</h4>
                    <p class="mb-4">We offer fully customized stationery packages tailored to your specific needs.</p>
                    <a href="{{ route('contact') }}" class="btn btn-secondary">Request Custom Quote</a>
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
            <p class="lead text-muted">Common questions about our stationery services</p>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h3 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What's your typical turnaround time?
                            </button>
                        </h3>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Standard production time is 7-10 business days after final approval. Rush services are available for an additional fee (3-5 business days). For large or complex orders, we'll provide a specific timeline during the quoting process.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h3 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Do you provide design services for stationery?
                            </button>
                        </h3>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, we offer complete stationery design services. Our designers will create concepts that align with your brand identity. If you already have existing brand guidelines, we'll ensure all stationery pieces maintain consistency with your visual identity.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h3 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What file formats do you accept for printing?
                            </button>
                        </h3>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We prefer vector files (AI, EPS, PDF) for logos and text elements, and high-resolution (300dpi) raster files (TIFF, PSD) for images. For best results, all text should be converted to outlines or embedded with fonts. Our team can help prepare your files if needed.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h3 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Can I see a proof before printing?
                            </button>
                        </h3>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Absolutely. We provide digital proofs for all orders before going to print. For premium packages, we can also provide hardcopy proofs or Pantone color matching proofs for an additional fee. Your approval is required before we begin production.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 shadow-sm">
                        <h3 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Do you offer international shipping?
                            </button>
                        </h3>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, we ship worldwide. Domestic orders typically arrive within 2-3 business days after shipping. International delivery times vary by destination (5-10 business days typically). Shipping costs will be calculated based on your location and order size.
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
                <h2 class="fw-bold mb-4">Ready to Elevate Your Professional Image?</h2>
                <p class="lead mb-5">Impression matters. Let's create stationery that reflects the quality of your business.</p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="{{ route('contact') }}" class="btn btn-light btn-lg px-4">Get Started</a>
                    <a href="tel:+1234567890" class="btn btn-outline-light btn-lg px-4">
                        <i class="fas fa-phone me-2"></i> Call for Samples
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection