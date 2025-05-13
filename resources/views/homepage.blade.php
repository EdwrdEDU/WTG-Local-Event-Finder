<!-- homepage.blade.php -->
<x-layout>
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
</x-layouts>