document.addEventListener('DOMContentLoaded', function () {
    const mobileToggle = document.getElementById('mobileMenuToggle');
    const mobileNav = document.getElementById('mobileNavigation');

    mobileToggle.addEventListener('click', () => {
        mobileNav.classList.toggle('show');
    });
});
// Animate services on scroll
document.addEventListener('DOMContentLoaded', function() {
    const services = document.querySelectorAll('.service-item');
    
    services.forEach((service, index) => {
        // Add slight delay to each service animation
        service.style.transitionDelay = `${index * 0.1}s`;
    });
    
    // Simple animation when services come into view
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, { threshold: 0.1 });

    services.forEach(service => {
        service.style.opacity = '0';
        service.style.transform = 'translateY(20px)';
        service.style.transition = 'all 0.5s ease-out';
        observer.observe(service);
    });
});