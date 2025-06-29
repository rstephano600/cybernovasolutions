<header>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    .offcanvas {
        width: 300px; 
    }
</style>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-light text-body fixed-top" style="width:100%; height:60px; display: flex; justify-content: space-between;">

    <div class="container-fluid">
        <a class="navbar-brand" href="#" style="display: flex; justify-content:center;align-items:center; gap:.5rem;">
            <img src="{{ asset('assets/images/1745931296420.jpg') }}" alt="Avatar Logo" style="width:40px;" class="rounded-pill"> CyberNova Solutions
        </a>

        <!-- Toggle Button for Side Menu -->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sideMenu" aria-controls="sideMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact Us</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Our Services</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('website') }}">Web Development</a></li>
                        <li><a class="dropdown-item" href="{{ route('system') }}">System Development</a></li>
                        <li><a class="dropdown-item" href="{{ route('graphics') }}">Graphic Design</a></li>
                        <li><a class="dropdown-item" href="{{ route('stationary') }}">Stationery Services</a></li>
                        <li><a class="dropdown-item" href="{{ route('services') }}">General Services</a></li>
                    </ul>
                </li>

                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login / Register</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Include Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<div class="fixeddivspace bg-light" style="width:100%; height:60px;"></div>

<!-- Side Menu (Offcanvas) -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="sideMenu" aria-labelledby="sideMenuLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="sideMenuLabel">CyberNova Solutions</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <style>
  .icon-home { color: #007bff; } /* Bootstrap blue */
  .icon-web { color: #6c757d; } /* Grayish */
  .icon-dev { color: #28a745; } /* Green */
  .icon-graphic { color: #dc3545; } /* Red */
  .icon-stationery { color: #ffc107; } /* Yellow */
  .icon-analysis { color: #17a2b8; } /* Cyanish */
  .icon-security { color: #343a40; } /* Dark Gray */
  .icon-seo { color: #007bff; }
  .icon-uiux { color: #6f42c1; } /* Purple */
  .icon-consulting { color: #28a745; }
  .icon-about { color: #17a2b8; }
  .icon-portfolio { color: #ffc107; }
  .icon-news { color: #dc3545; }
  .icon-contact { color: #343a40; }

  .offcanvas-body .navbar-nav a i{
    margin:.5rem;
  }

  .navbar-nav .nav-item{
    margin:.1rem 0 .1rem 1rem;
    /* border-bottom:.1px solid black; */
  }

  .navbar-nav .dropdown-menu .dropdown-item{
    margin:1rem;
    /* border-bottom:1px solid black; */
  }
</style>

<div class="offcanvas-body">
<ul class="navbar-nav">

<li class="nav-item"><a class="nav-link active" href="{{ route('index') }}"><i class="fas fa-home text-primary"></i> Home</a></li>
<h3>our services</h3>

    <li class="nav-item"><a class="nav-link" href="{{ route('website') }}"><i class="fas fa-globe text-primary"></i> Web Designs</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ route('system') }}"><i class="fas fa-globe text-primary"></i> System Development</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ route('graphics') }}"><i class="fas fa-globe text-primary"></i> Graphic Design</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ route('stationary') }}"><i class="fas fa-globe text-primary"></i> Stationery Services</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}"><i class="fas fa-globe text-danger"></i> About Us</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}"><i class="fas fa-envelope text-warning"></i> Contact Us</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ route('timetable') }}"><i class="fas fa-clock text-secondary"></i> Our Daily TimeTable</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ route('updates') }}"><i class="fas fa-calendar-alt text-primary"></i> Year updates</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ route('mission') }}"><i class="fas fa-hands-helping text-success"></i> Our Missions & Visions</a></li>

    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><i class="fas fa-globe text-primary"></i>Other provided servics</a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="{{ route('website') }}">Web Development</a></li>
                        <li><a class="dropdown-item" href="{{ route('system') }}">System Development</a></li>
                        <li><a class="dropdown-item" href="{{ route('graphics') }}">Graphic Design</a></li>
                        <li><a class="dropdown-item" href="{{ route('stationary') }}">Stationery Services</a></li>
                        <li><a class="dropdown-item" href="{{ route('services') }}">General Services</a></li>
          </ul>
        </li>
    

        </li>
        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt text-danger"></i> Login / Register</a></li>
  </ul>
</div>
</div>


<style>
    body{
        width: 100%;
        /* margin-top:80px */
    }
    .head{
      width: 100%;
      padding: 1rem;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
    }
    .me-auto-none{
    display: none;
}
    @media (max-width:600px){
        .nav-600px{
display: none;
}
.me-auto-none{
    display: flex;
}
        }
        @media (max-width: 500px) {
  .dropdown-menu {
    font-size: 14px;
    word-wrap: break-word; /* Prevent long file paths from breaking layout */
    max-width: auto; /* Restrict width */
  }
}


table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
       table, th, td {
            border: 1px solid #dee2e6;
        }
       table th, td {
            padding: 12px;
            text-align: left;
        }
       table thead {
            background-color: #c0d3e5;
            color: #fff;
            text-transform: capitalize;
        }
       table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
       table tbody tr:hover {
            background-color: #e9ecef;
        } 

        .head .head{
            width: 100%;
            justify-content: center;
            align-items: center;
            display: flex;
        }




        .linking{
          width: 300px;
          margin:1rem;
        }
        .choir-actions {
    margin-bottom: 20px;
}

.choir-actions a {
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    padding: 15px;
    border-radius: 5px;
    /* background-color: #17a2b8;  */
    background-color: #007bff; 
    color: white;
    font-size: 16px;
    font-weight: bold;
    transition: background-color 0.3s ease, transform 0.3s ease;
    /* width: 80%; */
}

.choir-actions a:hover {
    background-color: #138496;
    transform: scale(1.02);
}

.choir-actions .button h6 {
    margin: 0;
    text-transform: capitalize;
}

.choir-actions .button p {
    margin: 0;
    font-size: 14px;
    color: #f8d7da; /* Light red for error text */
}

@media (max-width: 768px) {
    .choir-actions a {
        font-size: 14px;
        padding: 10px;
    }
}
</style> 



</header>