<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('dashboard') ? 'active bg-primary' : '' }}" 
                   href="{{ route('dashboard') }}">
                    <i class="fas fa-tachometer-alt me-2"></i>
                    Dashboard
                </a>
            </li>
            
            @if(Auth::user()->isAdmin() || Auth::user()->isStaff())
                <!-- Admin/Staff Menu Items -->
                <li class="nav-item">
                    <a class="nav-link text-white {{ request()->routeIs('projects.*') ? 'active bg-primary' : '' }}" 
                       href="{{ route('projects.index') }}">
                        <i class="fas fa-project-diagram me-2"></i>
                        Projects
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link text-white {{ request()->routeIs('clients.*') ? 'active bg-primary' : '' }}" 
                       href="{{ route('clients.index') }}">
                        <i class="fas fa-users me-2"></i>
                        Clients
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link text-white {{ request()->routeIs('fyp-projects.*') ? 'active bg-primary' : '' }}" 
                       href="{{ route('fyp-projects.index') }}">
                        <i class="fas fa-graduation-cap me-2"></i>
                        FYP Projects
                    </a>
                </li>
                
                @if(Auth::user()->isAdmin())
                    <li class="nav-item">
                        <a class="nav-link text-white {{ request()->routeIs('users.*') ? 'active bg-primary' : '' }}" 
                           href="{{ route('users.index') }}">
                            <i class="fas fa-user-shield me-2"></i>
                            User Management
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link text-white {{ request()->routeIs('reports.*') ? 'active bg-primary' : '' }}" 
                           href="{{ route('reports.index') }}">
                            <i class="fas fa-chart-bar me-2"></i>
                            Reports
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white {{ request()->routeIs('contacts.*') ? 'active bg-primary' : '' }}" 
                           href="{{ route('contacts.index') }}">
                            <i class="fas fa-envelope me-2"></i>
                            Contacts
                        </a>
                    </li>
                @endif
            @else
                <!-- Client Menu Items -->
                <li class="nav-item">
                    <a class="nav-link text-white {{ request()->routeIs('client.projects.*') ? 'active bg-primary' : '' }}" 
                       href="{{ route('client.projects.index') }}">
                        <i class="fas fa-project-diagram me-2"></i>
                        My Projects
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link text-white {{ request()->routeIs('client.invoices.*') ? 'active bg-primary' : '' }}" 
                       href="{{ route('client.invoices.index') }}">
                        <i class="fas fa-file-invoice-dollar me-2"></i>
                        Invoices
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link text-white {{ request()->routeIs('client.fyp-projects.*') ? 'active bg-primary' : '' }}" 
                       href="{{ route('client.fyp-projects.index') }}">
                        <i class="fas fa-graduation-cap me-2"></i>
                        My FYP Project
                    </a>
                </li>

            @endif
            
            <!-- Common Menu Items -->
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('messages.*') ? 'active bg-primary' : '' }}" 
                   href="#">
                    <i class="fas fa-envelope me-2"></i>
                    Messages
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('profile.*') ? 'active bg-primary' : '' }}" 
                   href="{{ route('profile.edit') }}">
                    <i class="fas fa-user-cog me-2"></i>
                    Profile Settings
                </a>
            </li>
        </ul>
        
        <div class="position-absolute bottom-0 start-0 end-0 p-3 bg-dark">
            <div class="text-center text-white-50 small">
                <div>CyberNova Solutions v{{ config('app.version') }}</div>
                <div>&copy; {{ date('Y') }} All Rights Reserved</div>
            </div>
        </div>
    </div>
</nav>