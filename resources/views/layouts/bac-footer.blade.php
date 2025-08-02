<footer class="footer mt-auto py-3 bg-light border-top">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <span class="text-muted">
                    &copy; {{ date('Y') }} CyberNova Solutions. All rights reserved.
                </span>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <span class="text-muted me-3">
                    {{ Auth::user()->name }}
                </span>
                <a href="#" class="text-muted me-2"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-muted me-2"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-muted me-2"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="text-muted"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</footer>