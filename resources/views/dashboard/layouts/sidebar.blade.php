<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3 sidebar-sticky">
    <h6 class="sidebar-heading d-flex justofy-content-between allign-items-center px-3 mt-2 mb-1 text-muted">
      <span>Administrator</span>
    </h6>
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
          <span data-feather="home" class="align-text-bottom"></span>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
          <span data-feather="file-text" class="align-text-bottom"></span>
          Berita Jemaat
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/jemaat*') ? 'active' : '' }}" href="/dashboard/jemaat">
          <span data-feather="users" class="align-text-bottom"></span>
          Data Jemaat
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/galleries*') ? 'active' : '' }}" href="/dashboard/galleries">
          <span data-feather="archive" class="align-text-bottom"></span>
          Galeri Gereja
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/renungan*') ? 'active' : '' }}" href="/dashboard/renungan">
          <span data-feather="book-open" class="align-text-bottom"></span>
          Renungan
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
          <span data-feather="users" class="align-text-bottom"></span>
          Kategori Berita
        </a>
      </li>
    </ul>
    <hr class="sidebar-dashboard">
    <ul class="nav flex-column">
      <li class="nav-item">
        <form action="/logout" method="post">
          @csrf
          <button type="submit" class="nav-link px-3 border-0 bg-light"><span data-feather="log-out" class="align-text-bottom"></span> Logout</button>
        </form>
      </li>
    </ul>
  </div>
</nav>