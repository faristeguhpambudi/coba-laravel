<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/">Faris Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/posts">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/categories">Categories</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome Back, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-grid-1x2-fill mr-2"></i> My Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
          <form action="/logout" method="post">
          @csrf
          <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-left mr-2"></i> Logout</button>
          </form>
            </li>
          </ul>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link active" href="/login"><i class="bi bi-box-arrow-in-left mr-2"></i>Login</a>
        </li>
      </ul>
      @endauth
    </div>
  </div>
</nav>