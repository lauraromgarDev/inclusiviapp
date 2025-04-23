<header id="header" class="header d-flex align-items-center sticky-top w-100">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="{{ route('main.index') }}" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">InclusiviApp</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('main.index') }}" class="active">INICIO</a></li>
                <li><a href="{{ route('sobreNosotros.index') }}">SOBRE NOSOTROS</a></li>
                <li class="dropdown"><a href="#"><span>PROYECTOS</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ route('ver', ['proyecto' => 'musicoterapia']) }}">MUSICOTERAPIA PARA TOD@S</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ route('ver', ['proyecto' => 'escuelalenguajedesignos']) }}">
                                <span>ESCUELA DE LENGUA DE SIGNOS ESPAÑOLA</span>
                                <i class="bi bi-chevron-down toggle-dropdown"></i>
                            </a>
                            <ul>
                                <li class="dropdown">
                                    <a href="#cursos-y-talleres">
                                        CURSOS Y TALLERES
                                        <i class="bi bi-chevron-right toggle-dropdown"></i>
                                    </a>
                                    <ul class="submenu-right">
                                        <li><a href="#presenciales">CURSOS PRESENCIALES</a></li>
                                        <li><a href="#online">CURSOS ONLINE</a></li>
                                    </ul>
                                </li>
                            </ul>

                        </li>


                        <li><a href="{{ route('ver', ['proyecto' => 'musicoterapia']) }}">ESCUELA DE TEATRO INCLUSIVO Y
                                ACCESIBLE GLORIA RAMOS</a></li>
                        <li><a href="#">Dropdown 3</a></li>
                        <li><a href="#">Dropdown 4</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">MI ESPACIO</a></li>

                @guest
                    <li><a href="contact.html">HAZTE SOCIO</a></li>
                    <li><a href="{{ route('login.index') }}">ACCEDER</a></li>
                @endguest

                <li><a href="contact.html">CONTACTO</a></li>

                @auth
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false">
                            {{ Auth::user()->login }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown">
                            <li><a href="{{ route('logout') }}">CERRAR SESIÓN</a></li>
                        </ul>
                    </li>
                @endauth

            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>



    </div>
</header>
