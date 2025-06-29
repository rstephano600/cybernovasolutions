@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/services.css') }}">

<!-- Hero Section -->
<section class="py-5 bg-gradient-primary text-white">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h1 class="display-4 fw-bold mb-4">Creative Graphic Design Solutions</h1>
                <p class="lead mb-4">We craft visually stunning designs that communicate your brand's story and captivate your audience.</p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="{{ route('contact') }}" class="btn btn-light btn-lg px-4">Get a Free Consultation</a>
                    <a href="{{ route('portfolio') }}?filter=design" class="btn btn-outline-light btn-lg px-4">View Design Portfolio</a>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="https://images.unsplash.com/photo-1613909207039-6b173b755cc1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1374&q=80" 
                     alt="Graphic design work" 
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
                <h2 class="fw-bold mb-4">Visual Identity That Makes an Impact</h2>
                <p class="lead">Your brand's visual identity is often the first thing potential customers notice.</p>
                <p>Our graphic design services go beyond aesthetics to create meaningful visual communications that resonate with your target audience. We combine creative excellence with strategic thinking to deliver designs that not only look beautiful but also drive results.</p>
                <ul class="list-unstyled">
                    <li class="mb-2 d-flex align-items-start">
                        <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                        <span>Strategic brand identity development</span>
                    </li>
                    <li class="mb-2 d-flex align-items-start">
                        <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                        <span>Print and digital design expertise</span>
                    </li>
                    <li class="mb-2 d-flex align-items-start">
                        <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                        <span>Industry-specific design solutions</span>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-4.0.3&auto=format&fit=crop&w=1528&q=80" 
                         alt="Design process" 
                         class="img-fluid">
                    <div class="card-body bg-light">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 bg-primary text-white rounded-circle p-3 me-3">
                                <i class="fas fa-palette fa-lg"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">Award-Winning Designs</h5>
                                <p class="mb-0 text-muted">Recognized for creative excellence and innovation</p>
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
            <h2 class="fw-bold">Our Design Process</h2>
            <p class="lead text-muted">A structured approach to exceptional visual communication</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-3">
                            <span class="fs-2 fw-bold">1</span>
                        </div>
                        <h4 class="mb-3">Discovery</h4>
                        <p class="text-muted">We learn about your business, audience, and goals to inform our design strategy.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-3">
                            <span class="fs-2 fw-bold">2</span>
                        </div>
                        <h4 class="mb-3">Concept Development</h4>
                        <p class="text-muted">Our designers create multiple concepts for your review and feedback.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-3">
                            <span class="fs-2 fw-bold">3</span>
                        </div>
                        <h4 class="mb-3">Refinement</h4>
                        <p class="text-muted">We refine the selected concept based on your input and prepare final files.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-3">
                            <span class="fs-2 fw-bold">4</span>
                        </div>
                        <h4 class="mb-3">Delivery</h4>
                        <p class="text-muted">You receive all final files in required formats with full ownership rights.</p>
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
            <h2 class="fw-bold">Our Graphic Design Services</h2>
            <p class="lead text-muted">Comprehensive design solutions for all your visual needs</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded p-2 mb-3 d-inline-block">
                            <i class="fas fa-flag fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Brand Identity</h4>
                        <ul class="text-muted ps-3">
                            <li class="mb-2">Logo design</li>
                            <li class="mb-2">Brand guidelines</li>
                            <li class="mb-2">Color palette</li>
                            <li>Typography system</li>
                        </ul>
                        <div class="mt-3">
                            <a href="#" class="btn btn-sm btn-outline-primary">View Samples</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded p-2 mb-3 d-inline-block">
                            <i class="fas fa-print fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Print Design</h4>
                        <ul class="text-muted ps-3">
                            <li class="mb-2">Business stationery</li>
                            <li class="mb-2">Brochures & flyers</li>
                            <li class="mb-2">Packaging design</li>
                            <li>Signage & banners</li>
                        </ul>
                        <div class="mt-3">
                            <a href="#" class="btn btn-sm btn-outline-primary">View Samples</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded p-2 mb-3 d-inline-block">
                            <i class="fas fa-desktop fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Digital Design</h4>
                        <ul class="text-muted ps-3">
                            <li class="mb-2">Social media graphics</li>
                            <li class="mb-2">Email templates</li>
                            <li class="mb-2">Digital ads</li>
                            <li>Presentation design</li>
                        </ul>
                        <div class="mt-3">
                            <a href="#" class="btn btn-sm btn-outline-primary">View Samples</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded p-2 mb-3 d-inline-block">
                            <i class="fas fa-book fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Marketing Collateral</h4>
                        <ul class="text-muted ps-3">
                            <li class="mb-2">Annual reports</li>
                            <li class="mb-2">Product catalogs</li>
                            <li class="mb-2">Sales sheets</li>
                            <li>Trade show materials</li>
                        </ul>
                        <div class="mt-3">
                            <a href="#" class="btn btn-sm btn-outline-primary">View Samples</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded p-2 mb-3 d-inline-block">
                            <i class="fas fa-tshirt fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Merchandise Design</h4>
                        <ul class="text-muted ps-3">
                            <li class="mb-2">Apparel graphics</li>
                            <li class="mb-2">Promotional products</li>
                            <li class="mb-2">Label & tag design</li>
                            <li>Branded merchandise</li>
                        </ul>
                        <div class="mt-3">
                            <a href="#" class="btn btn-sm btn-outline-primary">View Samples</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded p-2 mb-3 d-inline-block">
                            <i class="fas fa-icons fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Illustration</h4>
                        <ul class="text-muted ps-3">
                            <li class="mb-2">Custom illustrations</li>
                            <li class="mb-2">Infographics</li>
                            <li class="mb-2">Character design</li>
                            <li>Icon sets</li>
                        </ul>
                        <div class="mt-3">
                            <a href="#" class="btn btn-sm btn-outline-primary">View Samples</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Design Tools Section -->
<section class="py-5 bg-primary text-white">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Our Design Toolkit</h2>
            <p class="lead text-white-50">Professional tools for exceptional results</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 bg-primary bg-opacity-10 border-light">
                    <div class="card-body text-center p-4">
                        <div class="bg-white bg-opacity-10 text-white rounded p-3 mb-3">
                            <i class="fas fa-pencil-ruler fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Design Software</h4>
                        <div class="d-flex flex-wrap justify-content-center gap-2">
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">Adobe Photoshop</span>
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">Illustrator</span>
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">InDesign</span>
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">Figma</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 bg-primary bg-opacity-10 border-light">
                    <div class="card-body text-center p-4">
                        <div class="bg-white bg-opacity-10 text-white rounded p-3 mb-3">
                            <i class="fas fa-cubes fa-3x"></i>
                        </div>
                        <h4 class="mb-3">3D & Motion</h4>
                        <div class="d-flex flex-wrap justify-content-center gap-2">
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">Blender</span>
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">After Effects</span>
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">Cinema 4D</span>
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">Premiere Pro</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 bg-primary bg-opacity-10 border-light">
                    <div class="card-body text-center p-4">
                        <div class="bg-white bg-opacity-10 text-white rounded p-3 mb-3">
                            <i class="fas fa-font fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Typography & Assets</h4>
                        <div class="d-flex flex-wrap justify-content-center gap-2">
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">Adobe Fonts</span>
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">Google Fonts</span>
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">Stock Libraries</span>
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">Custom Assets</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section class="py-5 bg-light">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Design Portfolio Highlights</h2>
            <p class="lead text-muted">Examples of our creative work across industries</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1541140134513-85a161dc4a00?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" 
                         class="card-img-top" 
                         alt="Brand identity project">
                    <div class="card-body">
                        <span class="badge bg-primary bg-opacity-10 text-primary mb-2">Brand Identity</span>
                        <h5 class="mb-3">Organic Food Co. Rebrand</h5>
                        <p class="text-muted">Complete visual identity refresh for health food brand including logo, packaging, and marketing materials.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">View Project</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1605000797499-95a51c5269ae?ixlib=rb-4.0.3&auto=format&fit=crop&w=1471&q=80" 
                         class="card-img-top" 
                         alt="Packaging design">
                    <div class="card-body">
                        <span class="badge bg-primary bg-opacity-10 text-primary mb-2">Packaging Design</span>
                        <h5 class="mb-3">Craft Beer Label Series</h5>
                        <p class="text-muted">Eye-catching label designs for microbrewery's seasonal beer collection.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">View Project</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" 
                         class="card-img-top" 
                         alt="Digital design">
                    <div class="card-body">
                        <span class="badge bg-primary bg-opacity-10 text-primary mb-2">Digital Design</span>
                        <h5 class="mb-3">Tech Startup Campaign</h5>
                        <p class="text-muted">Complete digital assets for SaaS company's product launch campaign.</p>
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
<section class="py-5">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Design Service Packages</h2>
            <p class="lead text-muted">Flexible options for businesses of all sizes</p>
        </div>
        
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h4 class="text-center mb-3">Starter Package</h4>
                        <div class="text-center mb-4">
                            <span class="display-4 fw-bold">$499</span>
                            <span class="text-muted">/project</span>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Single design deliverable</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>2 initial concepts</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>2 rounds of revisions</span>
                            </li>
                            <li class="d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Final files in standard formats</span>
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
                        <h4 class="text-center mb-3">Professional Package</h4>
                        <div class="text-center mb-4">
                            <span class="display-4 fw-bold">$1,299</span>
                            <span class="text-muted">/project</span>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Multiple design deliverables</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>3-5 initial concepts</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Unlimited revisions</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Source files included</span>
                            </li>
                            <li class="d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Brand style guide</span>
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
                        <h4 class="text-center mb-3">Enterprise Package</h4>
                        <div class="text-center mb-4">
                            <span class="display-4 fw-bold">$3,999</span>
                            <span class="text-muted">/project</span>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Complete brand system</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Custom illustrations</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Photography direction</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Print and digital assets</span>
                            </li>
                            <li class="d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Ongoing design support</span>
                            </li>
                        </ul>
                        <div class="text-center mt-auto">
                            <a href="{{ route('contact') }}" class="btn btn-outline-primary w-100">Get Started</a>
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
            <p class="lead text-muted">Common questions about our design services</p>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h3 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What's included in a brand identity package?
                            </button>
                        </h3>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Our comprehensive brand identity package includes primary and secondary logo designs, color palette, typography system, brand patterns/textures, business stationery designs, brand guidelines document, and social media profile assets. We also provide all source files and various file formats for different use cases.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h3 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How do you handle revisions?
                            </button>
                        </h3>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We include specific numbers of revisions based on your package (2 for Starter, unlimited for Professional and Enterprise). Revisions are handled through our project management system where you can provide clear feedback. We continue refining until you're completely satisfied with the results.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h3 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Can you work with our existing brand guidelines?
                            </button>
                        </h3>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Absolutely. We're happy to work within your existing brand guidelines to ensure consistency across all materials. If needed, we can also suggest updates or expansions to your current guidelines to better serve your evolving needs.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h3 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                What file formats will I receive?
                            </button>
                        </h3>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                You'll receive all final designs in the appropriate formats for their intended use. This typically includes vector files (AI, EPS, PDF), high-resolution raster files (PNG, JPG), and editable files (PSD, INDD) where applicable. For web graphics, we provide optimized files in multiple resolutions.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 shadow-sm">
                        <h3 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Do you provide printing services?
                            </button>
                        </h3>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                While we focus on design, we have established relationships with premium printers and can coordinate printing on your behalf. We prepare all files to meet specific printer requirements and can provide recommendations based on your budget, quantity, and quality needs.
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
                <h2 class="fw-bold mb-4">Ready to Elevate Your Visual Identity?</h2>
                <p class="lead mb-5">Let's create designs that make your brand stand out and connect with your audience.</p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="{{ route('contact') }}" class="btn btn-light btn-lg px-4">Start Your Project</a>
                    <a href="tel:+1234567890" class="btn btn-outline-light btn-lg px-4">
                        <i class="fas fa-phone me-2"></i> Call to Discuss
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection