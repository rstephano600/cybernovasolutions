<header class="navbar navbar-dark sticky-top bg-primary flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="{{ route('dashboard') }}">
        <img src="{{ asset('assets/images/1745931296420.jpg') }}" alt="CyberNova" height="30" class="me-2">
        CyberNova Solutions
    </a>
    
    <button class="navbar-toggler position-absolute d-md-none collapsed" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#sidebarMenu">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="navbar-nav ms-auto">
        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" 
               role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user-circle me-1"></i>
                {{ Auth::user()->name }}
                @if(Auth::user()->isAdmin())
                    <span class="badge bg-danger ms-1">Admin</span>
                @elseif(Auth::user()->isStaff())
                    <span class="badge bg-warning text-dark ms-1">Staff</span>
                @else
                    <span class="badge bg-light text-dark ms-1">Client</span>
                @endif
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="{{ route('profile.edit') }}">
                    <i class="fas fa-user-cog me-2"></i> Profile
                </a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item">
                            <i class="fas fa-sign-out-alt me-2"></i> Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</header>