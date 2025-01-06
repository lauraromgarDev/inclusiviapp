<header id="header" class="header d-flex align-items-center sticky-top w-100">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{ route ('main.index') }}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">InclusiviApp</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route ('main.index') }}" class="active">Inicio</a></li>
          <li><a href="{{ route ('sobreNosotros.index')}}">Sobre Nosotros</a></li>
          <li class="dropdown"><a href="#"><span>Proyectos</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href="contact.html">Mi Espacio</a></li>

        @guest
            <li><a href="contact.html">Hazte socio</a></li>
            <li><a href="{{ route ('login.index')}}">Acceder</a></li>
        @endguest

          <li><a href="contact.html">Contacto</a></li>

          @auth
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              {{ Auth::user()->login }} <span class="caret"></span>
            </a>
            <ul class="dropdown">
              <li><a href="{{ route('logout') }}">Cerrar sesión</a></li>
            </ul>
          </li>
        @endauth

        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>
