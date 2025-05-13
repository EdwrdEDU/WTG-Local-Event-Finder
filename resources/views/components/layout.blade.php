<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
</head>
<body>
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

  {{$slot}}
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js"></script>
</body>
</html>