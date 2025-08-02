@extends('layouts.web-app')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">

<!-- Hero Section -->
<section class="py-5 bg-primary text-white">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 fw-bold mb-3">Get In Touch</h1>
                <p class="lead mb-4">We'd love to hear from you! Whether you have a project inquiry or just want to say hello, our team is ready to assist you.</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="py-5">
    <div class="container">
        <div class="row g-5">
            <!-- Contact Form -->
            <div class="col-lg-7">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-4 p-md-5">
                        <h2 class="fw-bold mb-4">Send Us a Message</h2>
                        
                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf
                                        <!-- Success/Error Messages -->
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="fas fa-exclamation-circle me-2"></i>{{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                        <label for="email">Email Address</label>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone Number">
                                        <label for="phone">Phone Number (Optional)</label>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-floating">
                                        <select class="form-select" id="service" name="service" required>
                                            <option value="" selected disabled>Select a service</option>
                                            <option value="web-development">Web Development</option>
                                            <option value="mobile-app">Mobile App Development</option>
                                            <option value="system-development">System Development</option>
                                            <option value="graphic-design">Graphic Design</option>
                                            <option value="fyp-support">FYP Support</option>
                                            <option value="other">Other Inquiry</option>
                                        </select>
                                        <label for="service">Service Interested In</label>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="message" name="message" style="height: 150px" placeholder="Your Message" required></textarea>
                                        <label for="message">Your Message</label>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-lg px-4 py-3 w-100">
                                        <i class="fas fa-paper-plane me-2"></i> Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Contact Info -->
            <div class="col-lg-5">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4 p-md-5">
                        <h2 class="fw-bold mb-4">Contact Information</h2>
                        
                        <div class="d-flex mb-4">
                            <div class="me-3 text-primary">
                                <i class="fas fa-map-marker-alt fa-2x"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Our Location</h5>
                                <p class="mb-0"> Dodoma, Tanzania</p>
                            </div>
                        </div>
                        
                        <div class="d-flex mb-4">
                            <div class="me-3 text-primary">
                                <i class="fas fa-envelope fa-2x"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Email Us</h5>
                                <p class="mb-0">cybernovasolutions600@gmail.com</p>
                                <p class="mb-0">rstephano600@gmail.com</p>
                            </div>
                        </div>
                        
                        <div class="d-flex mb-4">
                            <div class="me-3 text-primary">
                                <i class="fas fa-phone-alt fa-2x"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Call Us</h5>
                                <p class="mb-0">+255 657 856 790</p>
                            </div>
                        </div>
                        
                        <hr class="my-4">
                        
                        <h5 class="fw-bold mb-3">Follow Us</h5>
                        <div class="d-flex gap-3">
                            <a href="#" class="btn btn-outline-primary rounded-circle p-2">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="btn btn-outline-primary rounded-circle p-2">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="btn btn-outline-primary rounded-circle p-2">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="btn btn-outline-primary rounded-circle p-2">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="btn btn-outline-primary rounded-circle p-2">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                        
                        <hr class="my-4">
                        
                        <h5 class="fw-bold mb-3">Business Hours</h5>
                        <ul class="list-unstyled">
                            <li class="d-flex justify-content-between mb-2">
                                <span>Monday - Friday</span>
                                <span>8:00 AM - 5:00 PM</span>
                            </li>
                            <li class="d-flex justify-content-between mb-2">
                                <span>Saturday</span>
                                <span>9:00 AM - 2:00 PM</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span>Sunday</span>
                                <span>Closed</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-5 bg-light" style="display:none">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-0">
                        <div class="ratio ratio-16x9">
                            <iframe src="<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3242703.8773152186!2d33.804462981657124!3d-6.155320757824421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x184d90428b273499%3A0xe4c51cfee1e416bf!2sMkoa%20wa%20Dodoma!5e0!3m2!1ssw!2stz!4v1753949997270!5m2!1ssw!2stz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>" 
                                    style="border:0;" 
                                    allowfullscreen="" 
                                    loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection