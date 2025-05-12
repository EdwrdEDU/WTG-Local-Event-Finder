<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/home">WTG?</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Help Center</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/home">Action</a></li>
              <li><a class="dropdown-item" href="/">Another action</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control " type="search" placeholder="Search Events" aria-label="Search"/>
            <div class="input-group">
                <span class="input-group-text border-0">
                <i class="bi bi-geo-alt"></i>
                </span>
              <input class="form-control" type="search" placeholder="Location" aria-label="Search"/>
            </div>
          <button type="submit" class="btn">
            <i class="bi bi-search text-black"></i>
          </button>
        </form>
      </div>
    </div>
  </nav>
</body>
</html>