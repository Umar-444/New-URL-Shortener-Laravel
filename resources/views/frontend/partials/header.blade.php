<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm" style="min-height: 80px; backdrop-filter: blur(10px); border-bottom: 1px solid rgba(8,198,171,0.1);">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand d-flex align-items-center justify-content-start" href="/" style="font-weight: 700; font-size: 1.09rem; padding-right:0;">
      <span class="bg-white rounded-circle p-1 me-2 shadow-sm" style="border: 1.3px solid #08c6ab;">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" style="display:block;">
          <circle cx="12" cy="12" r="10" stroke="#08c6ab" stroke-width="1.5" fill="#e6f7f6"/>
          <path d="M8 12l4 4 8-8" stroke="#08c6ab" stroke-width="1.8" stroke-linecap="round"/>
        </svg>
      </span>
      <span style="background: linear-gradient(90deg, #08c6ab, #1BFFFF); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
        URL <span class="text-muted">·</span> Shortener
      </span>
    </a>

    <!-- Mobile Toggle -->
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navigation -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center px-3 py-2 mx-2 rounded-pill" href="/" style="font-weight: 600; transition: all 0.3s ease;">
            <svg class="me-2" width="18" height="18" viewBox="0 0 24 24" fill="none">
              <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" stroke="currentColor" stroke-width="2"/>
              <polyline points="9,22 9,12 15,12 15,22" stroke="currentColor" stroke-width="2"/>
            </svg>
            Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center px-3 py-2 mx-2 rounded-pill" href="/faq" style="font-weight: 600; transition: all 0.3s ease;">
            <svg class="me-2" width="18" height="18" viewBox="0 0 24 24" fill="none">
              <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
              <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" stroke="currentColor" stroke-width="2"/>
              <line x1="12" y1="17" x2="12.01" y2="17" stroke="currentColor" stroke-width="2"/>
            </svg>
            FAQ
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<style>
  /* Custom styles */
  .navbar-nav .nav-link:hover {
    background: linear-gradient(135deg, #08c6ab, #1BFFFF);
    color: white !important;
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(8,198,171,0.3);
  }

  .navbar-brand:hover {
    transform: scale(1.02);
    transition: transform 0.3s ease;
  }

  body { padding-top: 80px; }

  @media (max-width: 768px) {
    .navbar-brand { font-size: 1.2rem; }
    body { padding-top: 70px; }
  }
</style>