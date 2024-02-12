<nav class="navbar">
  <div class="nav-toggle">
    <input type="checkbox">
    <span></span>
    <span></span>
    <span></span>
  </div>
  <div class="nav-brand">
    <h2>GKE Imanuel Putussibau</h2>
  </div>
  <ul class="nav-link">
      <li><a href="/home" class="{{ ($active === 'home') ? 'active' : '' }}">Home</a></li>
      <li><a href="/posts" class="{{ ($active === 'posts') ? 'active' : '' }}">News</a></li>
      <li><a href="/renungans" class="{{ ($active === 'renungan') ? 'active' : '' }}">Meditations</a></li>
      <li><a href="/galleries" class="{{ ($active === 'galleries') ? 'active' : '' }}">Galleries</a></li>
      <li><a href="/categories" class="{{ ($active === 'categories') ? 'active' : '' }}">Categories</a></li>
      <li><a href="/jemaat" class="{{ ($active === 'jemaat') ? 'active' : '' }}">Members</a></li>
      <li><a href="/form" class="{{ ($active === 'form') ? 'active' : '' }}">Formulir</a></li>
      <tr style="padding: 1px; width: 80%; margin: 10px auto"></tr>
      <div class="nav-auth">
        @auth     
          <button class="dropdown-btn">{{ auth()->user()->name }}</button>
          <div class="dropdown-content text-light">
            <a href="/dashboard">Dashboard</a>
            <hr class="hr-drop">
            <form action="/logout" method="post">
              @csrf
                <button type="submit" class="nav-btn-out">Logout</button>
            </form>
          </div>
        @else
          <a href="/login" class="nav-link {{ ($active === 'login') ? 'active' : '' }}">Login</a>
        @endauth
      </div>
  </ul>
</nav>
<script>

  const navToggle = document.querySelector('.nav-toggle');
  const nav = document.querySelector('.nav-link');

  navToggle.addEventListener('click', function() {
    nav.classList.toggle('slide');
  });
  
  // // Ambil elemen navbar
  // const navbar = document.querySelector('.navbar');
  // // Event listener untuk mengubah tampilan navbar saat scroll
  // window.addEventListener('scroll', () => {
  //     if (window.scrollY > 100) {
  //         navbar.classList.add('scrolled');
  //     } else {
  //         navbar.classList.remove('scrolled');
  //     }
  // });

</script>