<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WTG? - Where To Go? Find Events Near You</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary-color: #f05537;
      --secondary-color: #1e0a3c;
      --text-light: #ffffff;
      --text-dark: #39364f;
      --accent-color: #3659e3;
    }
    
    body {
      font-family: 'Helvetica Neue', Arial, sans-serif;
      color: var(--text-dark);
    }
    
    .navbar {
      background-color: var(--primary-color);
      padding: 1rem;
    }
    
    .navbar-brand {
      font-family: 'Anton', sans-serif;
      color: var(--text-light);
      font-size: 1.8rem;
      margin-right: 2rem;
    }
    
    .nav-link {
      color: var(--text-light);
      font-weight: 500;
    }
    
    .form-control {
      border-radius: 20px;
      width: 300px;
    }
    
    .hero-section {
      background-size: cover;
      background-position: center;
      color: white;
      padding: 100px 0;
      position: relative;
      border-radius: 8px;
      overflow: hidden;
      margin: 20px 0;
    }
    
    .hero-section::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(to right, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.3) 100%);
    }
    
    .hero-content {
      position: relative;
      z-index: 2;
    }
    
    .hero-title {
      font-size: 4rem;
      font-weight: 700;
      margin-bottom: 1rem;
    }
    
    .hero-subtitle {
      font-size: 1.5rem;
      max-width: 600px;
      margin-bottom: 2rem;
    }
    
    .location-btn {
      background-color: var(--accent-color);
      color: white;
      border: none;
      padding: 12px 24px;
      border-radius: 25px;
      font-weight: 600;
      display: inline-flex;
      align-items: center;
      gap: 8px;
    }
    
    .section-title {
      font-size: 1.8rem;
      font-weight: 700;
      margin-bottom: 1.5rem;
      color: var(--text-dark);
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    
    .explore-link {
      font-size: 0.9rem;
      color: var(--accent-color);
      text-decoration: none;
      display: flex;
      align-items: center;
      gap: 4px;
    }
    
    .event-card {
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
      margin-bottom: 20px;
      height: 100%;
    }
    
    .event-card:hover {
      transform: translateY(-5px);
    }
    
    .event-img {
      height: 180px;
      object-fit: cover;
      width: 100%;
    }
    
    .event-date {
      font-size: 0.9rem;
      color: #6f7287;
      margin-bottom: 8px;
    }
    
    .event-title {
      font-size: 1.2rem;
      font-weight: 600;
      margin-bottom: 8px;
      line-height: 1.4;
    }
    
    .event-location {
      font-size: 0.9rem;
      color: #6f7287;
      display: flex;
      align-items: center;
      gap: 4px;
    }
    
    .category-card {
      background-color: #f8f7fa;
      padding: 20px;
      border-radius: 8px;
      text-align: center;
      transition: background-color 0.3s ease;
      height: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }
    
    .category-card:hover {
      background-color: #eeedf2;
    }
    
    .category-icon {
      font-size: 2rem;
      margin-bottom: 10px;
      color: var(--primary-color);
    }
    
    .category-title {
      font-weight: 600;
      margin-bottom: 0;
    }
    
    .featured-badge {
      background-color: var(--primary-color);
      color: white;
      font-size: 0.8rem;
      padding: 4px 10px;
      border-radius: 4px;
      position: absolute;
      top: 10px;
      right: 10px;
    }
  </style>
</head>
<body>
  <!-- Navbar - Using your existing code -->
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
            <a class="nav-link" aria-current="page" href="/contacts">Contacts</a>
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
  <div class="container">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mt-3">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Popular Events</li>
      </ol>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section" style="background-image: url('{{ asset('images/fred-again-london-slack-vndedikiow.jpg') }}')">
      <div class="container">
        <div class="hero-content">
          <h1 class="hero-title">Find amazing events near you</h1>
          <p class="hero-subtitle">Whether you're a local, a tourist or just cruising through, we've got loads of great tips and events. You can explore by location, what's popular, or our top picks.</p>
          <button class="location-btn">
            <i class="bi bi-geo-alt"></i>
            Find events nearby
          </button>
        </div>
      </div>
    </div>

    <!-- Featured Events Section -->
    <div class="mt-5">
      <div class="section-title">
        Featured Events
        <a href="#" class="explore-link">
          Explore more events
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="event-card">
            <div class="position-relative">
            <img src="{{ asset('images/glastonbury.jpg') }}" class="event-img" alt="Event image">

              <span class="featured-badge">Featured</span>
            </div>
            <div class="p-3">
              <div class="event-date">Sat, May 17 • 7:00 PM</div>
              <h3 class="event-title">Summer Music Festival 2025</h3>
              <div class="event-location">
                <i class="bi bi-geo-alt"></i>
                Central Park, New York
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="event-card">
          <img src="{{ asset('images/TheKoolPals-Bar.jpg') }}" class="event-img" alt="Event image">

            <div class="p-3">
              <div class="event-date">Sun, May 18 • 10:00 AM</div>
              <h3 class="event-title">Food & Wine Exhibition</h3>
              <div class="event-location">
                <i class="bi bi-geo-alt"></i>
                Convention Center, Chicago
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="event-card">
            <img src="{{ asset('/images/2022-WDW-EPCOT-international-food-and-wine-festival-atmosphere-entrance-decorations-stock-9.jpg') }}" class="event-img" alt="Event image">
            <div class="p-3">
              <div class="event-date">Fri, May 23 • 8:30 PM</div>
              <h3 class="event-title">Comedy Night: Stand-up Special</h3>
              <div class="event-location">
                <i class="bi bi-geo-alt"></i>
                Laugh Factory, Los Angeles
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Popular Categories -->
    <div class="mt-5 mb-5">
      <div class="section-title">
        Browse by Category
      </div>
      <div class="row">
        <div class="col-md-3 col-6 mb-4">
          <div class="category-card">
            <i class="bi bi-music-note-beamed category-icon"></i>
            <h4 class="category-title">Music</h4>
          </div>
        </div>
        <div class="col-md-3 col-6 mb-4">
          <div class="category-card">
            <i class="bi bi-cup-hot category-icon"></i>
            <h4 class="category-title">Food & Drink</h4>
          </div>
        </div>
        <div class="col-md-3 col-6 mb-4">
          <div class="category-card">
            <i class="bi bi-palette category-icon"></i>
            <h4 class="category-title">Arts</h4>
          </div>
        </div>
        <div class="col-md-3 col-6 mb-4">
          <div class="category-card">
            <i class="bi bi-bicycle category-icon"></i>
            <h4 class="category-title">Sports</h4>
          </div>
        </div>
      </div>
    </div>

    <!-- Events Near You -->
    <div class="mt-5 mb-5">
      <div class="section-title">
        Events near you
        <a href="#" class="explore-link">
          Explore more events
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="event-card">
            <img src="/api/placeholder/400/250" class="event-img" alt="Event image">
            <div class="p-3">
              <div class="event-date">Tue, May 13 • 6:30 PM</div>
              <h3 class="event-title">Leadership Workshop: Coaching Your Team</h3>
              <div class="event-location">
                <i class="bi bi-geo-alt"></i>
                Downtown Business Center
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="event-card">
            <img src="/api/placeholder/400/250" class="event-img" alt="Event image">
            <div class="p-3">
              <div class="event-date">Wed, May 14 • 9:00 AM</div>
              <h3 class="event-title">Tech Conference 2025</h3>
              <div class="event-location">
                <i class="bi bi-geo-alt"></i>
                Innovation Center
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="event-card">
            <img src="/api/placeholder/400/250" class="event-img" alt="Event image">
            <div class="p-3">
              <div class="event-date">Thu, May 15 • 5:00 PM</div>
              <h3 class="event-title">Practical Tools for Time Management</h3>
              <div class="event-location">
                <i class="bi bi-geo-alt"></i>
                Community Learning Center
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Call to Action -->
    <div class="mt-5 mb-5 text-center p-5" style="background-color: #f8f7fa; border-radius: 8px;">
      <h2>Ready to host your own event?</h2>
      <p class="mb-4">It's easy to get started and reach thousands of potential attendees!</p>
      <a href="/create-events" class="btn btn-lg" style="background-color: var(--primary-color); color: white;">Create Event</a>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-dark text-white py-5 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h5>WTG?</h5>
          <p>Where To Go? Find the best events near you.</p>
        </div>
        <div class="col-md-3">
          <h5>Find Events</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white-50">Browse by location</a></li>
            <li><a href="#" class="text-white-50">Browse by category</a></li>
            <li><a href="#" class="text-white-50">Featured events</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>Organize</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white-50">Create an event</a></li>
            <li><a href="#" class="text-white-50">Pricing</a></li>
            <li><a href="#" class="text-white-50">Resources</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>Help</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white-50">Help Center</a></li>
            <li><a href="#" class="text-white-50">Contact Us</a></li>
            <li><a href="#" class="text-white-50">Privacy Policy</a></li>
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

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js"></script>
</body>
</html>