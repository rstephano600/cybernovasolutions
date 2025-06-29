
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Footer Styles */
        .footer {
            background: #1a1a2e;
            color: white;
            padding: 4rem 2rem 2rem;
            font-size: 0.95rem;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
        }

        .footer-logo {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .footer-logo-icon {
            font-size: 1.8rem;
            color: #4361ee;
            margin-right: 0.8rem;
        }

        .footer-logo-text {
            font-size: 1.5rem;
            font-weight: 700;
        }

        .footer-about p {
            color: #a1a1aa;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .footer-social {
            display: flex;
            gap: 1rem;
        }

        .social-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255,255,255,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            background: #4361ee;
            transform: translateY(-3px);
        }

        .footer-heading {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 0.5rem;
        }

        .footer-heading::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 3px;
            background: #4361ee;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 0.8rem;
        }

        .footer-links a {
            color: #a1a1aa;
            text-decoration: none;
            transition: color 0.3s ease;
            display: flex;
            align-items: center;
        }

        .footer-links a:hover {
            color: #4361ee;
        }

        .footer-links i {
            margin-right: 0.5rem;
            width: 20px;
            text-align: center;
        }

        .footer-contact p {
            display: flex;
            align-items: flex-start;
            color: #a1a1aa;
            margin-bottom: 1rem;
            line-height: 1.6;
        }

        .footer-contact i {
            margin-right: 0.8rem;
            color: #4361ee;
            margin-top: 0.2rem;
        }

        .footer-newsletter p {
            color: #a1a1aa;
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        .newsletter-form {
            display: flex;
            margin-bottom: 1rem;
        }

        .newsletter-input {
            flex: 1;
            padding: 0.6rem 1rem;
            border: none;
            border-radius: 4px 0 0 4px;
            outline: none;
        }

        .newsletter-button {
            background: #4361ee;
            color: white;
            border: none;
            padding: 0 1.2rem;
            border-radius: 0 4px 4px 0;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .newsletter-button:hover {
            background: #3a0ca3;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 2rem;
            margin-top: 3rem;
            text-align: center;
            color: #a1a1aa;
        }

        .footer-bottom p {
            margin-bottom: 0.5rem;
        }

        .footer-legal {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1.5rem;
            margin-top: 1rem;
        }

        .footer-legal a {
            color: #a1a1aa;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-legal a:hover {
            color: #4361ee;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .footer-container {
                grid-template-columns: 1fr;
                gap: 3rem;
            }
            
            .footer-about {
                text-align: center;
            }
            
            .footer-social {
                justify-content: center;
            }
            
            .footer-heading {
                text-align: center;
            }
            
            .footer-heading::after {
                left: 50%;
                transform: translateX(-50%);
            }
            
            .footer-links {
                text-align: center;
            }
            
            .footer-links a {
                justify-content: center;
            }
            
            .footer-contact {
                text-align: center;
            }
            
            .footer-contact p {
                justify-content: center;
            }
            
            .newsletter-form {
                max-width: 400px;
                margin: 0 auto 1rem;
            }
        }
    </style>

<body>
    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <!-- About Column -->
            <div class="footer-about">
                <div class="footer-logo">
                    <i class="fas fa-code footer-logo-icon"></i>
                    <span class="footer-logo-text">MyPortfolio</span>
                </div>
                <p>Professional web development, design, and system solutions tailored to your business needs. Transforming ideas into digital reality since 2025.</p>
                <div class="footer-social">
                    <a href="#" class="social-icon"><i class="fab fa-whatsapp"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="fas fa-phone"></i></a>
                    <a href="#" class="social-icon"><i class="fas fa-envelope"></i></a>
                </div>
            </div>

            <!-- Quick Links Column -->
            <div class="footer-links-col">
                <h3 class="footer-heading">Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="{{ route('index') }}"><i class="fas fa-chevron-right"></i> Home</a></li>
                    <li><a href="{{ route('about') }}"><i class="fas fa-chevron-right"></i> About Me</a></li>
                    <li><a href="{{ route('services') }}"><i class="fas fa-chevron-right"></i> Services</a></li>
                    <li><a href="{{ route('portfolio') }}"><i class="fas fa-chevron-right"></i> Portfolio</a></li>
            
                    <li><a href="{{ route('contact') }}"><i class="fas fa-chevron-right"></i> Contact</a></li>
                </ul>
            </div>

            <!-- Services Column -->
            <div class="footer-links-col">
                <h3 class="footer-heading">Services</h3>
                <ul class="footer-links">
                    <li><a href="{{ route('services') }}#web-development"><i class="fas fa-chevron-right"></i> Web Development</a></li>
                    <li><a href="{{ route('services') }}#system-development"><i class="fas fa-chevron-right"></i> System Development</a></li>
                    <li><a href="{{ route('services') }}#graphic-design"><i class="fas fa-chevron-right"></i> Graphic Design</a></li>
                    <li><a href="{{ route('services') }}#stationery"><i class="fas fa-chevron-right"></i> Stationery Services</a></li>
                    <li><a href="{{ route('services') }}#ecommerce"><i class="fas fa-chevron-right"></i> E-Commerce Solutions</a></li>
                    <li><a href="{{ route('services') }}#consulting"><i class="fas fa-chevron-right"></i> IT Consulting</a></li>
                </ul>
            </div>

            <!-- Contact Column -->
            <div class="footer-contact-col">
                <h3 class="footer-heading">Contact Info</h3>
                <div class="footer-contact">
                    <p><i class="fas fa-map-marker-alt"></i> Dodoma region<br>Tanzania</p>
                    <p><i class="fas fa-phone-alt"></i> +255 657 856 790</p>
                    <p><i class="fas fa-envelope"></i> rstephano600@gmail.com</p>
                    <p><i class="fas fa-clock"></i> Mon-Fri: 9AM - 5PM</p>
                </div>
            </div>

            <!-- Newsletter Column -->
            <div class="footer-newsletter-col">
                <h3 class="footer-heading">Newsletter</h3>
                <p>Subscribe to get updates on my latest projects and articles.</p>
                <form class="newsletter-form">
                    <input type="email" placeholder="Your email address" class="newsletter-input" required>
                    <button type="submit" class="newsletter-button"><i class="fas fa-paper-plane"></i></button>
                </form>
                <p class="newsletter-note">No spam ever. Unsubscribe anytime.</p>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <p>&copy; 2025 CyberNovaSolutions. All rights reserved.</p>
            <div class="footer-legal">
                <a href="{{ route('privacy') }}">Privacy Policy</a>
                <a href="{{ route('terms') }}">Terms of Service</a>
                <a href="{{ route('cookies') }}">Cookie Policy</a>
                <a href="{{ route('sitemap') }}">Sitemap</a>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <a href="#" id="backToTop" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </a>

    <style>
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: #4361ee;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 999;
        }

        .back-to-top.active {
            opacity: 1;
            visibility: visible;
        }

        .back-to-top:hover {
            background: #3a0ca3;
            transform: translateY(-3px);
        }
    </style>

    <script>
        // Back to Top Button
        const backToTop = document.getElementById('backToTop');
        
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTop.classList.add('active');
            } else {
                backToTop.classList.remove('active');
            }
        });
        
        backToTop.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
</body>
</html>