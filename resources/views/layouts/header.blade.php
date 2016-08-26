<!-- Navbar -->
<nav class="navbar navbar-default nav-custom">
  <div class="container">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <div class="custom-logo">
              <a class="logo1" href="#">Your</a>
              <a class="logo2" href="#">LOGO</a>
          </div>

      </div>
      <div class="collapse navbar-collapse nav-custom-interno" id="myNavbar">
          <ul class="nav navbar-nav navbar-right menu-custom">
              <li><a href="#">HOME</a></li>
              <li><a href="#">PAGES</a></li>
              <li><a href="#">FEATURE</a></li>
              <li><a href="#">BLOG</a></li>
              <li class="last-li"><a href="{{ route('admin.index') }}">ADMIN</a></li>


          </ul>
      </div>
  </div>
</nav>
