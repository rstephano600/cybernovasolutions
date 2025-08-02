@extends('layouts.web-app')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/services.css') }}">

<!-- Hero Section -->
<section class="py-5 bg-dark text-white">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h1 class="display-4 fw-bold mb-4">Custom System Development Solutions</h1>
                <p class="lead mb-4">We build robust, scalable software systems that streamline operations, automate processes, and drive business growth.</p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="{{ route('contact') }}" class="btn btn-primary btn-lg px-4">Get a Free Consultation</a>
                    <a href="{{ route('portfolio') }}?filter=system" class="btn btn-outline-light btn-lg px-4">View Our Systems Portfolio</a>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" 
                     alt="System development" 
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
                <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?ixlib=rb-4.0.3&auto=format&fit=crop&w=1469&q=80" 
                     alt="System development process" 
                     class="img-fluid rounded-3 shadow">
            </div>
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4">Tailored Software for Your Business Needs</h2>
                <p class="lead">Off-the-shelf solutions often come with limitations that hinder your business growth.</p>
                <p>Our custom system development services create software specifically designed for your workflows, requirements, and business objectives. We focus on building secure, maintainable, and scalable systems that grow with your business.</p>
                <ul class="list-unstyled">
                    <li class="mb-2 d-flex align-items-start">
                        <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                        <span>Process automation to reduce manual work</span>
                    </li>
                    <li class="mb-2 d-flex align-items-start">
                        <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                        <span>Integration with existing tools and databases</span>
                    </li>
                    <li class="mb-2 d-flex align-items-start">
                        <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                        <span>Role-based access control for security</span>
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
            <h2 class="fw-bold">Our System Development Methodology</h2>
            <p class="lead text-muted">A structured approach to deliver reliable software solutions</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-3">
                            <span class="fs-2 fw-bold">1</span>
                        </div>
                        <h4 class="mb-3">Requirement Analysis</h4>
                        <p class="text-muted">We conduct in-depth interviews and workshops to fully understand your business processes and needs.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-3">
                            <span class="fs-2 fw-bold">2</span>
                        </div>
                        <h4 class="mb-3">System Design</h4>
                        <p class="text-muted">Our architects create technical specifications, database schemas, and system architecture.</p>
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
                        <p class="text-muted">We build the system in iterative sprints with regular demonstrations and feedback cycles.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-3">
                            <span class="fs-2 fw-bold">4</span>
                        </div>
                        <h4 class="mb-3">Deployment & Training</h4>
                        <p class="text-muted">We handle deployment, data migration, and provide comprehensive user training.</p>
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
            <h2 class="fw-bold">Our System Development Services</h2>
            <p class="lead text-muted">Comprehensive solutions for business automation</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded p-2 mb-3 d-inline-block">
                            <i class="fas fa-boxes fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Inventory Management</h4>
                        <ul class="text-muted ps-3">
                            <li class="mb-2">Real-time stock tracking</li>
                            <li class="mb-2">Barcode/RFID integration</li>
                            <li class="mb-2">Automated reordering</li>
                            <li>Multi-location support</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded p-2 mb-3 d-inline-block">
                            <i class="fas fa-users-cog fa-2x"></i>
                        </div>
                        <h4 class="mb-3">CRM Systems</h4>
                        <ul class="text-muted ps-3">
                            <li class="mb-2">Customer data management</li>
                            <li class="mb-2">Sales pipeline tracking</li>
                            <li class="mb-2">Marketing automation</li>
                            <li>Reporting & analytics</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded p-2 mb-3 d-inline-block">
                            <i class="fas fa-file-invoice-dollar fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Accounting Systems</h4>
                        <ul class="text-muted ps-3">
                            <li class="mb-2">Financial reporting</li>
                            <li class="mb-2">Invoice management</li>
                            <li class="mb-2">Expense tracking</li>
                            <li>Tax compliance</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded p-2 mb-3 d-inline-block">
                            <i class="fas fa-tasks fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Workflow Automation</h4>
                        <ul class="text-muted ps-3">
                            <li class="mb-2">Process digitization</li>
                            <li class="mb-2">Approval workflows</li>
                            <li class="mb-2">Task assignment</li>
                            <li>Notification systems</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technology Stack Section -->
<section class="py-5 bg-primary text-white" style="display:none">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Our Development Stack</h2>
            <p class="lead text-white-50">Cutting-edge technologies for robust systems</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 bg-primary bg-opacity-10 border-light">
                    <div class="card-body text-center p-4">
                        <div class="bg-white bg-opacity-10 text-white rounded p-3 mb-3">
                            <i class="fas fa-laptop-code fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Frontend</h4>
                        <div class="d-flex flex-wrap justify-content-center gap-2">
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">React</span>
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">Angular</span>
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">Vue.js</span>
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">TypeScript</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 bg-primary bg-opacity-10 border-light">
                    <div class="card-body text-center p-4">
                        <div class="bg-white bg-opacity-10 text-white rounded p-3 mb-3">
                            <i class="fas fa-server fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Backend</h4>
                        <div class="d-flex flex-wrap justify-content-center gap-2">
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">Node.js</span>
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">Laravel</span>
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">Django</span>
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">.NET Core</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 bg-primary bg-opacity-10 border-light">
                    <div class="card-body text-center p-4">
                        <div class="bg-white bg-opacity-10 text-white rounded p-3 mb-3">
                            <i class="fas fa-database fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Database</h4>
                        <div class="d-flex flex-wrap justify-content-center gap-2">
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">PostgreSQL</span>
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">MySQL</span>
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">MongoDB</span>
                            <span class="badge bg-white bg-opacity-10 text-white py-2 px-3">SQL Server</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Case Studies Section -->
<section class="py-5 bg-light">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold">System Development Case Studies</h2>
            <p class="lead text-muted">Real-world solutions delivering measurable results</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow-sm overflow-hidden">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" 
                                 class="img-fluid h-100 object-fit-cover" 
                                 alt="Inventory system">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <span class="badge bg-primary bg-opacity-10 text-primary mb-2">Inventory Management</span>
                                <h3 class="mb-3">Retail Chain Inventory System</h3>
                                <p class="text-muted mb-4">Developed a centralized inventory management system for a 25-store retail chain, reducing stock discrepancies by 78% and improving reorder efficiency.</p>
                                <div class="d-flex flex-wrap gap-2 mb-3">
                                    <span class="badge bg-light text-dark">Real-time tracking</span>
                                    <span class="badge bg-light text-dark">Automated reporting</span>
                                    <span class="badge bg-light text-dark">Barcode integration</span>
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
                            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" 
                                 class="img-fluid h-100 object-fit-cover" 
                                 alt="CRM system">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <span class="badge bg-primary bg-opacity-10 text-primary mb-2">CRM System</span>
                                <h3 class="mb-3">Manufacturing CRM Solution</h3>
                                <p class="text-muted mb-4">Custom-built CRM for industrial equipment manufacturer that increased sales conversion by 42% and reduced response time to inquiries by 65%.</p>
                                <div class="d-flex flex-wrap gap-2 mb-3">
                                    <span class="badge bg-light text-dark">Lead management</span>
                                    <span class="badge bg-light text-dark">Sales automation</span>
                                    <span class="badge bg-light text-dark">Integration with ERP</span>
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
<section class="py-5">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Development Engagement Models</h2>
            <p class="lead text-muted">Flexible options to suit your project requirements</p>
        </div>
        
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h4 class="text-center mb-3">Fixed Price</h4>
                        <div class="text-center mb-4">
                            <i class="fas fa-file-invoice-dollar text-primary fa-3x mb-3"></i>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Well-defined project scope</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Predictable budget</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Strict timeline</span>
                            </li>
                            <li class="d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Ideal for smaller projects</span>
                            </li>
                        </ul>
                        <div class="text-center mt-auto">
                            <a href="{{ route('contact') }}" class="btn btn-outline-primary w-100">Request Quote</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card h-100 border-0 shadow-lg">
                    <div class="card-header bg-primary text-white text-center py-3">
                        <span class="badge bg-white text-primary rounded-pill">Most Flexible</span>
                    </div>
                    <div class="card-body p-4">
                        <h4 class="text-center mb-3">Time & Materials</h4>
                        <div class="text-center mb-4">
                            <i class="fas fa-clock text-primary fa-3x mb-3"></i>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Pay only for work done</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Adapt to changing requirements</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Regular progress updates</span>
                            </li>
                            <li class="d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Ideal for evolving projects</span>
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
                        <h4 class="text-center mb-3">Dedicated Team</h4>
                        <div class="text-center mb-4">
                            <i class="fas fa-users text-primary fa-3x mb-3"></i>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Exclusive development team</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Monthly billing</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Full control over priorities</span>
                            </li>
                            <li class="d-flex align-items-start">
                                <i class="fas fa-check text-primary me-2 mt-1"></i>
                                <span>Ideal for long-term projects</span>
                            </li>
                        </ul>
                        <div class="text-center mt-auto">
                            <a href="{{ route('contact') }}" class="btn btn-outline-primary w-100">Build Your Team</a>
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
            <p class="lead text-muted">Common questions about our system development services</p>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h3 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                How do you ensure the system meets our business needs?
                            </button>
                        </h3>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We begin with comprehensive requirements gathering through stakeholder interviews, process mapping, and documentation review. Our iterative development approach includes regular demos and feedback sessions to ensure alignment with your expectations throughout the project.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h3 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What about data security in custom systems?
                            </button>
                        </h3>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Security is built into every layer of our systems. We implement role-based access control, data encryption, regular security audits, and follow OWASP guidelines. All systems include comprehensive logging and monitoring capabilities.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h3 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Can you integrate with our existing software?
                            </button>
                        </h3>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, we specialize in system integration. Whether it's ERP, accounting software, CRM, or proprietary systems, we can develop APIs, middleware, or direct integrations to ensure seamless data flow between systems.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h3 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                What ongoing support do you provide after launch?
                            </button>
                        </h3>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We offer tiered support packages including bug fixes, performance optimization, feature enhancements, and 24/7 emergency support. All systems come with a 3-month warranty period for any issues arising from the initial development.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 shadow-sm">
                        <h3 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                How do you handle data migration from old systems?
                            </button>
                        </h3>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Our data migration process includes assessment, data cleaning, transformation, validation, and testing. We develop custom migration scripts to ensure accurate transfer of your historical data to the new system with minimal downtime.
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
                <h2 class="fw-bold mb-4">Ready to Transform Your Business with Custom Software?</h2>
                <p class="lead mb-5">Let's discuss how a tailored system can streamline your operations and drive growth.</p>
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