@extends('layouts.web-app')

@section('content')
<div class="container-fluid">
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-primary to-secondary text-white py-5 mb-5 rounded-lg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-3">About CyberNova Solutions</h1>
                    <p class="lead mb-4">Innovating Tanzania's Digital Future Through Comprehensive Technology Solutions</p>
                    <p class="fs-5">We are a leading computer services company dedicated to empowering businesses, government institutions, and organizations across Tanzania with cutting-edge technology solutions.</p>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="bg-white bg-opacity-10 rounded-circle p-4 d-inline-block">
                        <i class="fas fa-rocket fa-5x text-white"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <!-- Company Overview -->
        <section class="row mb-5">
            <div class="col-lg-6 mb-4">
                <h2 class="h3 fw-bold text-primary mb-3">Who We Are</h2>
                <p class="text-muted mb-3">
                    CyberNova Solutions Tanzania is a comprehensive computer services company established to address the growing digital transformation needs across Tanzania. Founded with a vision to bridge the technology gap, we specialize in delivering affordable, high-quality technology solutions tailored specifically for the Tanzanian market.
                </p>
                <p class="text-muted mb-3">
                    With deep understanding of local business culture, regulatory requirements, and market dynamics, we provide end-to-end technology services that help organizations modernize their operations, improve efficiency, and achieve sustainable growth in the digital age.
                </p>
                <div class="d-flex align-items-center">
                    <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3">
                        <i class="fas fa-map-marker-alt text-primary"></i>
                    </div>
                    <div>
                        <h6 class="mb-1 fw-bold">Headquartered in Dar es Salaam</h6>
                        <small class="text-muted">Serving clients across Tanzania and East Africa</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6">
                        <div class="card border-0 shadow-sm h-100 text-center">
                            <div class="card-body">
                                <div class="bg-primary bg-opacity-10 rounded-circle p-3 d-inline-block mb-3">
                                    <i class="fas fa-calendar-alt text-primary fa-2x"></i>
                                </div>
                                <h5 class="fw-bold text-primary">2025</h5>
                                <p class="text-muted small mb-0">Founded</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card border-0 shadow-sm h-100 text-center">
                            <div class="card-body">
                                <div class="bg-success bg-opacity-10 rounded-circle p-3 d-inline-block mb-3">
                                    <i class="fas fa-users text-success fa-2x"></i>
                                </div>
                                <h5 class="fw-bold text-success">+</h5>
                                <p class="text-muted small mb-0">Clients Served</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card border-0 shadow-sm h-100 text-center">
                            <div class="card-body">
                                <div class="bg-warning bg-opacity-10 rounded-circle p-3 d-inline-block mb-3">
                                    <i class="fas fa-project-diagram text-warning fa-2x"></i>
                                </div>
                                <h5 class="fw-bold text-warning">+</h5>
                                <p class="text-muted small mb-0">Projects Completed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card border-0 shadow-sm h-100 text-center">
                            <div class="card-body">
                                <div class="bg-info bg-opacity-10 rounded-circle p-3 d-inline-block mb-3">
                                    <i class="fas fa-cogs text-info fa-2x"></i>
                                </div>
                                <h5 class="fw-bold text-info">6</h5>
                                <p class="text-muted small mb-0">Core Services</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mission, Vision, Values -->
        <section class="row mb-5">
            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center">
                        <div class="bg-primary bg-opacity-10 rounded-circle p-4 d-inline-block mb-3">
                            <i class="fas fa-bullseye text-primary fa-3x"></i>
                        </div>
                        <h4 class="fw-bold text-primary mb-3">Our Mission</h4>
                        <p class="text-muted">
                            To empower Tanzanian businesses and organizations with innovative, affordable, and reliable technology solutions that drive digital transformation and sustainable growth.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center">
                        <div class="bg-success bg-opacity-10 rounded-circle p-4 d-inline-block mb-3">
                            <i class="fas fa-eye text-success fa-3x"></i>
                        </div>
                        <h4 class="fw-bold text-success mb-3">Our Vision</h4>
                        <p class="text-muted">
                            To become East Africa's leading technology solutions provider, recognized for excellence, innovation, and transformative impact on digital development.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center">
                        <div class="bg-warning bg-opacity-10 rounded-circle p-4 d-inline-block mb-3">
                            <i class="fas fa-heart text-warning fa-3x"></i>
                        </div>
                        <h4 class="fw-bold text-warning mb-3">Our Values</h4>
                        <ul class="list-unstyled text-muted text-start">
                            <li class="mb-2"><i class="fas fa-check-circle text-warning me-2"></i>Excellence in service delivery</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-warning me-2"></i>Innovation and creativity</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-warning me-2"></i>Client-focused solutions</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-warning me-2"></i>Integrity and transparency</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Services -->
        <section class="mb-5">
            <div class="text-center mb-5">
                <h2 class="display-6 fw-bold text-primary mb-3">Our Comprehensive Services</h2>
                <p class="lead text-muted">We provide end-to-end technology solutions designed to meet diverse business needs</p>
            </div>

            <div class="row g-4">
                <!-- System Development -->
                <div class="col-lg-6 mb-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-start">
                                <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3 flex-shrink-0">
                                    <i class="fas fa-laptop-code text-primary fa-2x"></i>
                                </div>
                                <div>
                                    <h4 class="fw-bold text-primary mb-3">System Development</h4>
                                    <p class="text-muted mb-3">Custom software solutions tailored to your business needs.</p>
                                    <ul class="list-unstyled text-muted">
                                        <li class="mb-2"><i class="fas fa-arrow-right text-primary me-2"></i>Business Management Systems</li>
                                        <li class="mb-2"><i class="fas fa-arrow-right text-primary me-2"></i>Inventory & POS Systems</li>
                                        <li class="mb-2"><i class="fas fa-arrow-right text-primary me-2"></i>Database Management</li>
                                        <li class="mb-2"><i class="fas fa-arrow-right text-primary me-2"></i>System Integration</li>
                                        <li class="mb-2"><i class="fas fa-arrow-right text-primary me-2"></i>Legacy System Modernization</li>
                                    </ul>
                                    <div class="bg-light rounded p-2" >
                                        <small class="text-muted"><strong>Market Value:</strong> Custom per project</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Website Design -->
                <div class="col-lg-6 mb-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-start">
                                <div class="bg-success bg-opacity-10 rounded-circle p-3 me-3 flex-shrink-0">
                                    <i class="fas fa-globe text-success fa-2x"></i>
                                </div>
                                <div>
                                    <h4 class="fw-bold text-success mb-3">Website Design & Deployment</h4>
                                    <p class="text-muted mb-3">Professional websites that enhance your digital presence.</p>
                                    <ul class="list-unstyled text-muted">
                                        <li class="mb-2"><i class="fas fa-arrow-right text-success me-2"></i>Corporate Websites</li>
                                        <li class="mb-2"><i class="fas fa-arrow-right text-success me-2"></i>E-commerce Platforms</li>
                                        <li class="mb-2"><i class="fas fa-arrow-right text-success me-2"></i>Content Management Systems</li>
                                        <li class="mb-2"><i class="fas fa-arrow-right text-success me-2"></i>Web Hosting & Maintenance</li>
                                        <li class="mb-2"><i class="fas fa-arrow-right text-success me-2"></i>SEO Optimization</li>
                                    </ul>
                                    <div class="bg-light rounded p-2">
                                        <small class="text-muted"><strong>Market Value:</strong> Custom per project</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mobile App Development -->
                <div class="col-lg-6 mb-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-start">
                                <div class="bg-info bg-opacity-10 rounded-circle p-3 me-3 flex-shrink-0">
                                    <i class="fas fa-mobile-alt text-info fa-2x"></i>
                                </div>
                                <div>
                                    <h4 class="fw-bold text-info mb-3">Mobile App Development</h4>
                                    <p class="text-muted mb-3">Native and cross-platform mobile applications.</p>
                                    <ul class="list-unstyled text-muted">
                                        <li class="mb-2"><i class="fas fa-arrow-right text-info me-2"></i>Android Applications</li>
                                        <li class="mb-2"><i class="fas fa-arrow-right text-info me-2"></i>iOS Development</li>
                                        <li class="mb-2"><i class="fas fa-arrow-right text-info me-2"></i>Cross-platform Solutions</li>
                                        <li class="mb-2"><i class="fas fa-arrow-right text-info me-2"></i>Mobile Money Integration</li>
                                        <li class="mb-2"><i class="fas fa-arrow-right text-info me-2"></i>App Store Deployment</li>
                                    </ul>
                                    <div class="bg-light rounded p-2">
                                        <small class="text-muted"><strong>Market Value:</strong> Custom per project</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Graphics Design -->
                <div class="col-lg-6 mb-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-start">
                                <div class="bg-warning bg-opacity-10 rounded-circle p-3 me-3 flex-shrink-0">
                                    <i class="fas fa-palette text-warning fa-2x"></i>
                                </div>
                                <div>
                                    <h4 class="fw-bold text-warning mb-3">Graphics Design</h4>
                                    <p class="text-muted mb-3">Creative visual solutions for your brand identity.</p>
                                    <ul class="list-unstyled text-muted">
                                        <li class="mb-2"><i class="fas fa-arrow-right text-warning me-2"></i>Logo & Brand Identity</li>
                                        <li class="mb-2"><i class="fas fa-arrow-right text-warning me-2"></i>Marketing Materials</li>
                                        <li class="mb-2"><i class="fas fa-arrow-right text-warning me-2"></i>Digital Graphics</li>
                                        <li class="mb-2"><i class="fas fa-arrow-right text-warning me-2"></i>Social Media Graphics</li>
                                        <li class="mb-2"><i class="fas fa-arrow-right text-warning me-2"></i>Print Design</li>
                                    </ul>
                                    <div class="bg-light rounded p-2">
                                        <small class="text-muted"><strong>Market Value:</strong> Custom per project</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stationery Services -->
                <div class="col-lg-6 mb-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-start">
                                <div class="bg-secondary bg-opacity-10 rounded-circle p-3 me-3 flex-shrink-0">
                                    <i class="fas fa-file-alt text-secondary fa-2x"></i>
                                </div>
                                <div>
                                    <h4 class="fw-bold text-secondary mb-3">Stationery Services</h4>
                                    <p class="text-muted mb-3">Professional documentation and stationery solutions.</p>
                                    <ul class="list-unstyled text-muted">
                                        <li class="mb-2"><i class="fas fa-arrow-right text-secondary me-2"></i>Corporate Stationery</li>
                                        <li class="mb-2"><i class="fas fa-arrow-right text-secondary me-2"></i>Digital Documentation</li>
                                        <li class="mb-2"><i class="fas fa-arrow-right text-secondary me-2"></i>Custom Forms Design</li>
                                        <li class="mb-2"><i class="fas fa-arrow-right text-secondary me-2"></i>Document Templates</li>
                                        <li class="mb-2"><i class="fas fa-arrow-right text-secondary me-2"></i>Bulk Printing Services</li>
                                    </ul>
                                    <div class="bg-light rounded p-2">
                                        <small class="text-muted"><strong>Market Value:</strong> Custom per project</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cybersecurity Services -->
                <div class="col-lg-6 mb-4">
                    <div class="card border-0 shadow-sm h-100 border-start border-4 border-danger">
                        <div class="card-body">
                            <div class="d-flex align-items-start">
                                <div class="bg-danger bg-opacity-10 rounded-circle p-3 me-3 flex-shrink-0">
                                    <i class="fas fa-shield-alt text-danger fa-2x"></i>
                                </div>
                                <div>
                                    <h4 class="fw-bold text-danger mb-3">Cybersecurity Services</h4>
                                    <div class="badge bg-danger mb-2">HIGH DEMAND</div>
                                    <p class="text-muted mb-3">Comprehensive security solutions to protect your digital assets.</p>
                                    <ul class="list-unstyled text-muted">
                                        <li class="mb-2"><i class="fas fa-arrow-right text-danger me-2"></i>Security Assessments</li>
                                        <li class="mb-2"><i class="fas fa-arrow-right text-danger me-2"></i>Network Security</li>
                                        <li class="mb-2"><i class="fas fa-arrow-right text-danger me-2"></i>Data Protection & Backup</li>
                                        <li class="mb-2"><i class="fas fa-arrow-right text-danger me-2"></i>Security Training</li>
                                        <li class="mb-2"><i class="fas fa-arrow-right text-danger me-2"></i>Compliance Solutions</li>
                                    </ul>
                                    <div class="bg-light rounded p-2">
                                        <small class="text-muted"><strong>Market Value:</strong> Custom per project</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Us -->
        <section class="mb-5">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="h3 fw-bold text-primary mb-4">Why Choose CyberNova Solutions?</h2>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <div class="bg-primary bg-opacity-10 rounded-circle p-2 me-3 flex-shrink-0">
                                    <i class="fas fa-map-marker-alt text-primary"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-2">Local Expertise</h6>
                                    <p class="text-muted small mb-0">Deep understanding of Tanzanian business culture, regulations, and market needs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <div class="bg-success bg-opacity-10 rounded-circle p-2 me-3 flex-shrink-0">
                                    <i class="fas fa-tools text-success"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-2">Comprehensive Solutions</h6>
                                    <p class="text-muted small mb-0">One-stop solution for all your technology needs, reducing coordination complexity.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <div class="bg-info bg-opacity-10 rounded-circle p-2 me-3 flex-shrink-0">
                                    <i class="fas fa-dollar-sign text-info"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-2">Affordable Pricing</h6>
                                    <p class="text-muted small mb-0">Competitive pricing suitable for emerging markets with flexible payment terms.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <div class="bg-warning bg-opacity-10 rounded-circle p-2 me-3 flex-shrink-0">
                                    <i class="fas fa-headset text-warning"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-2">Ongoing Support</h6>
                                    <p class="text-muted small mb-0">Continuous technical support, maintenance, and training for long-term success.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm bg-primary text-white">
                        <div class="card-body text-center">
                            <i class="fas fa-quote-left fa-2x mb-3 opacity-50"></i>
                            <p class="mb-3">"CyberNova Solutions transformed our business operations with their comprehensive SMS system. Their local expertise and ongoing support made all the difference."</p>
                            <hr class="border-white opacity-25">
                            <!-- <small>- Private School Administrator</small> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <!-- Contact Information -->
        <section class="bg-primary text-white rounded-lg">
            <div class="container py-5">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h2 class="fw-bold mb-3">Ready to Transform Your Business?</h2>
                        <p class="mb-4">Contact CyberNova Solutions today and discover how our comprehensive technology services can drive your digital transformation journey.</p>
                    </div>
                    <div class="col-lg-4 text-center">
                        <a href="{{ route('contact') }}" class="btn btn-light btn-lg">
                            <i class="fas fa-phone me-2"></i>Get Started Today
                        </a>
                    </div>
                </div>
                <hr class="border-white opacity-25 my-4">
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-map-marker-alt fa-2x me-3"></i>
                            <div>
                                <h6 class="mb-1">Location</h6>
                                <p class="mb-0 opacity-75"> Tanzania</p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-4">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-envelope fa-2x me-3"></i>
                            <div>
                                <h6 class="mb-1">Email</h6>
                                <p class="mb-0 opacity-75">info@cybernovasolutions.co.tz</p>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-md-4">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-phone fa-2x me-3"></i>
                            <div>
                                <h6 class="mb-1">Phone</h6>
                                <p class="mb-0 opacity-75">+255 657 856 790</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<style>
.bg-gradient-to-r {
    background: linear-gradient(135deg, #007bff 0%, #28a745 100%);
}

.card:hover {
    transform: translateY(-2px);
    transition: transform 0.3s ease;
}

.rounded-lg {
    border-radius: 1rem !important;
}

.bg-opacity-10 {
    background-color: rgba(var(--bs-primary-rgb), 0.1) !important;
}
</style>
@endsection