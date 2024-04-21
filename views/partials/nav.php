<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <h5 class="navbar-brand">LOGO</h5>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?= urlIs('/') ? 'active' : ''; ?>" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= urlIs('/about') ? 'active' : ''; ?>" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= urlIs('/notes') ? 'active' : ''; ?>" href="/notes">Notes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= urlIs('/contact') ? 'active' : ''; ?>" href="/contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
