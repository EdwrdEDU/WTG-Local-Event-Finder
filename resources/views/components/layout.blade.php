<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WTG? - Where To Go? Find Events Near You</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
  <link href="{{ asset('css/homepage.css') }}" rel="stylesheet">
  <link href="{{ asset('css/login.css') }}" rel="stylesheet">
  <link href="{{ asset('css/signup.css') }}" rel="stylesheet">
  <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
  <link href="{{ asset('css/contacts.css') }}" rel="stylesheet">
  <link href="{{ asset('css/create-event.css') }}" rel="stylesheet">
  <link href="{{ asset('css/contacts.css') }}" rel="stylesheet">
  <link href="{{ asset('css/help-center.css') }}" rel="stylesheet">
  
  
 
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="/home">WTG?</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <form class="d-flex" role="search">
        <input class="form-control" type="search" placeholder="Search Events" aria-label="Search"/>
        <div class="vr mx-3" style="background-color: white;"></div>
        <div class="d-flex align-items-center">
          <span class="me-2">
            <i class="bi bi-geo-alt text-white"></i>
          </span>
          <input class="form-control" type="search" placeholder="Location" aria-label="Search"/>
        </div>
        <button type="submit" class="btn">
          <i class="bi bi-search text-white"></i>
        </button>
      </form>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="gap: 15px; display: flex;">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/contacts">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/create-events">Create Events</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Help Center
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/help-center">Help Center</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/login">Log In</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/create-account">Sign Up</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="main-content">
    {{ $slot }}
  </div>

  <!-- Footer -->
  <footer class="bg-dark text-white py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h5>WTG?</h5>
          <p>Where To Go? Find the best events near you.</p>
        </div>
        <div class="col-md-3">
          <h5>Find Events</h5>
          <ul class="list-unstyled">
            <li><a href="/events/location" class="text-white-50">Browse by location</a></li>
            <li><a href="/events/category" class="text-white-50">Browse by category</a></li>
            <li><a href="/events/featured" class="text-white-50">Featured events</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>Organize</h5>
          <ul class="list-unstyled">
            <li><a href="/create-events" class="text-white-50">Create an event</a></li>
            <li><a href="/pricing" class="text-white-50">Pricing</a></li>
            <li><a href="/resources" class="text-white-50">Resources</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>Help</h5>
          <ul class="list-unstyled">
            <li><a href="/help-center" class="text-white-50">Help Center</a></li>
            <li><a href="/contact-us" class="text-white-50">Contact Us</a></li>
            <li><a href="/privacy-policy" class="text-white-50">Privacy Policy</a></li>
          </ul>
        </div>
      </div>
      <hr class="my-4">
      <div class="d-flex justify-content-between align-items-center">
        <span>© 2025 WTG? All rights reserved.</span>
        <div>
          <a href="#" class="text-white me-3"><i class="bi bi-facebook"></i></a>
          <a href="#" class="text-white me-3"><i class="bi bi-twitter"></i></a>
          <a href="#" class="text-white me-3"><i class="bi bi-instagram"></i></a>
          <a href="#" class="text-white"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js"></script>
  <script src="{{ asset('js/help-center.js') }}"></script>



</body>
</html>