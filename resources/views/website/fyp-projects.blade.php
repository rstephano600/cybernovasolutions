@extends('layouts.web-app')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/services.css') }}">

<!-- Hero Section -->
<section class="py-5 bg-primary text-white">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h1 class="display-5 fw-bold mb-3">Final Year Project Support</h1>
                <p class="lead">Get expert guidance for your computer science, IT, or engineering final year project</p>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <!-- Project Form -->
            <div class="col-lg-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body p-4 p-md-5">
                        <h2 class="fw-bold mb-4"><i class="fas fa-file-alt text-primary me-2"></i> Submit Project Details</h2>
                        
                        <form action="#" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone">
                            </div>
                            
                            <div class="mb-3">
                                <label for="university" class="form-label">University/Institution</label>
                                <input type="text" class="form-control" id="university" name="university" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="course" class="form-label">Course of Study</label>
                                <input type="text" class="form-control" id="course" name="course" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="project_title" class="form-label">Project Title</label>
                                <input type="text" class="form-control" id="project_title" name="project_title" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="description" class="form-label">Project Description</label>
                                <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                            </div>
                            
                            <div class="mb-3">
                                <label for="requirements" class="form-label">Specific Requirements</label>
                                <textarea class="form-control" id="requirements" name="requirements" rows="3"></textarea>
                            </div>
                            
                            <div class="mb-4">
                                <label for="document" class="form-label">Upload Project Proposal (Optional)</label>
                                <input class="form-control" type="file" id="document" name="document">
                                <div class="form-text">PDF, DOCX, or PPT files only (Max 5MB)</div>
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn-lg w-100">
                                <i class="fas fa-paper-plane me-2"></i> Submit Project
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Support Options -->
            <div class="col-lg-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body p-4 p-md-5">
                        <h2 class="fw-bold mb-4"><i class="fas fa-headset text-primary me-2"></i> Get Immediate Support</h2>
                        
                        <div class="d-flex align-items-start mb-4">
                            <div class="me-3 text-primary">
                                <i class="fas fa-envelope fa-2x"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold">Email Support</h5>
                                <p class="mb-1">Send us your questions directly</p>
                                <a href="mailto:cybernovasolutions600@gmail.com" class="btn btn-sm btn-outline-primary mt-2">
                                    cybernovasolutions600@gmail.com
                                </a>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-start mb-4">
                            <div class="me-3 text-primary">
                                <i class="fab fa-whatsapp fa-2x"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold">WhatsApp Chat</h5>
                                <p class="mb-1">Get quick responses from our team</p>
                                <a href="https://wa.me/255657856790" class="btn btn-sm btn-success mt-2">
                                    <i class="fab fa-whatsapp me-1"></i> Chat Now
                                </a>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-start mb-4">
                            <div class="me-3 text-primary">
                                <i class="fas fa-phone-alt fa-2x"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold">Call Us</h5>
                                <p class="mb-1">Available Mon-Fri, 9AM-5PM</p>
                                <a href="tel:+255657856790" class="btn btn-sm btn-outline-secondary mt-2">
                                    +255 657856790
                                </a>
                            </div>
                        </div>
                        
                        <hr class="my-4">
                        
                        <h5 class="fw-bold mb-3">FYP Support Services</h5>
                        <ul class="list-group list-group-flush mb-4">
                            <li class="list-group-item d-flex align-items-center">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Project Topic Selection Guidance
                            </li>
                            <li class="list-group-item d-flex align-items-center">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                System Design & Architecture
                            </li>
                            <li class="list-group-item d-flex align-items-center">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Full Project Development
                            </li>
                            <li class="list-group-item d-flex align-items-center">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Documentation Assistance
                            </li>
                            <li class="list-group-item d-flex align-items-center">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                Presentation Preparation
                            </li>
                        </ul>
                        
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle me-2"></i>
                            Average response time: 2-4 hours during business days
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Success Stories -->
<section class="py-5 bg-light" style="display:none">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Recent Successful FYP Projects</h2>
            <p class="lead text-muted">We've helped students from universities across Tanzania</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-3">
                            <i class="fas fa-graduation-cap fa-2x"></i>
                        </div>
                        <h4 class="mb-3">University of Dodoma</h4>
                        <p class="text-muted">"Smart Campus Navigation System using Augmented Reality"</p>
                        <div class="badge bg-primary bg-opacity-10 text-primary">Computer Science</div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-3">
                            <i class="fas fa-graduation-cap fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Nelson Mandela African Institute</h4>
                        <p class="text-muted">"IoT-Based Agricultural Monitoring System"</p>
                        <div class="badge bg-primary bg-opacity-10 text-primary">Information Technology</div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-3">
                            <i class="fas fa-graduation-cap fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Dodoma University</h4>
                        <p class="text-muted">"Blockchain-Based Student Credential Verification"</p>
                        <div class="badge bg-primary bg-opacity-10 text-primary">Computer Engineering</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-primary text-white">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="fw-bold mb-4">Need Urgent Help With Your Project?</h2>
                <p class="lead mb-4">Our team of experts is ready to assist you with any aspect of your final year project.</p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="tel:+255657856790" class="btn btn-light btn-lg px-4">
                        <i class="fas fa-phone me-2"></i> Call Now
                    </a>
                    <a href="https://wa.me/255657856790" class="btn btn-success btn-lg px-4">
                        <i class="fab fa-whatsapp me-2"></i> WhatsApp Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .form-label {
        font-weight: 500;
    }
    .card {
        border-radius: 0.5rem;
    }
    textarea {
        min-height: 120px;
    }
</style>
@endsection