@extends('layouts.main_layout')

    @section('content')

        <!-- Page Title -->
        <div class="page-title light-background">
            <div class="container">
            <h1>Sobre Nosotros</h1>
            <nav class="breadcrumbs">
                <ol>
                <li><a href="{{ route ('main.index') }}">Inicio</a></li>
                <li class="current">Sobre Nosotros</li>
                </ol>
            </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- About 2 Section -->
        <section id="about-2" class="about-2 section">

            <div class="container">
                <div class="content">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-sm-12 col-md-5 col-lg-4 col-xl-4 order-lg-2 offset-xl-1 mb-4 m-1">
                            <div class="justify-content-center" data-aos="fade-up" data-aos-delay="100">
                                <div class="images-overlap">
                                    <iframe src="https://www.youtube.com/embed/dfmItZX5ilc"
                                            title="Nuestro Equipo"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen>
                                    </iframe>
                                </div>
                            </div>
                        </div>

                        <div class="offset-md-0 offset-lg-1 col-sm-12 col-md-6 col-lg-7 col-xl-6" data-aos="fade-up">
                            <div class="px-3">
                                <span class="content-subtitle">Nuestro Equipo</span>
                                <h2 class="content-title text-start">
                                    Sabemos que esperabas encontrar un <i>sobre nosotros</i> en este espacio. Pero en Inclusivos y Diversos pensamos que nos conocerás mejor si te contamos primero qué no somos.
                                </h2>
                                <ul>
                                    <li>NO SOMOS ayuda, somos aprendizaje.</li>
                                    <li>NO SOMOS iguales, somos maravillosamente auténticos.</li>
                                    <li>NO SOMOS indolentes, somos lo que creemos.</li>
                                    <li>NO SOMOS el lugar, somos los millones de caminos que acompañan hasta llegar.</li>
                                    <li>NO SOMOS palabras, somos acción y presente.</li>
                                    <li>NO SOMOS un lugar, somos un espacio.</li>
                                </ul>
                                <p class="lead">
                                    Ah, y NO SOMOS tampoco perfectas, sólo somos un equipo de profesionales con una fuerte vocación y un gran amor y respeto hacia las personas y sus diversidades.
                                </p>
                                <p class="mb-5">
                                    Queremos mejorar la sociedad, la vida y porque no, el mundo.
                                </p>
                                <p>
                                    <a href="#" class="btn-get-started">Conócenos</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /About 2 Section -->

        <!-- Services Section -->
        <section id="services" class="services section light-background">

            <div class="container">
                <div class="row gy-4 justify-content-center">

                    <div class="col-lg-11">
                        <span class="content-title p-2">Historia</span>
                        <h2 class="content-title p-2">Las buenas historias son las que empiezan con experiencias individuales, llegándose a unir en el momento perfecto para crear un sueño en común.</h2>
                        <div class="services-item p-3" data-aos="fade-up">
                            <div>
                            <p>
                                Nuestras vidas, por circunstancias personales o vocacionales, nos hacen sentir el fuerte impulso de conocer vías y caminos para que, personas con distintas necesidades puedan disfrutar de una vida digna y en igualdad, enriqueciéndonos mutuamente de las características que nos diferencian.
                                Cada miembro del equipo comienza su formación y su trayectoria profesional por separado. Tras muchos años de experiencia, la docencia, la música, el teatro, la Accesibilidad o la inclusión hacen que las ilusiones de todos nosotros se entrelacen creando un proyecto en común.
                                Inclusivos y Diversos nace desde la pasión y convicción de que juntos, podemos crear un lugar más amable en el que todos y todas podamos vivir, aprender, crecer y disfrutar.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Services Section -->

        <!-- Stats Section -->
        <section id="services" class="services section ">

            <div class="container">

                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-5">
                        <div class="images-overlap">
                            <iframe src="https://www.youtube.com/embed/XkIOlH2bKa8"
                                    title="Misión, Ética y Valores"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                    <div class="col-lg-5 ps-lg-5">
                        <span class="content-subtitle">Misión, Ética y Valores</span>
                        <h2 class="content-title">Misión</h2>
                        <p class="lead">
                            Logramos accesibilidad con inclusión y respeto, valorando las diversas capacidades personales que nos hacen únicos.Promovemos el derecho a una sociedad inclusiva, el disfrute de una vida digna y en igualdad de oportunidades, partiendo del desarrollo integral de las capacidades individuales y colectivas como medio transformador de la sociedad.
                        </p>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row gy-10 justify-content-center mt-5">
                    <div class="col-lg-10 ps-lg-5">
                        <span class="content-subtitle">Misión, Ética y Valores</span>
                        <h2 class="content-title">Ética y Valores</h2>
                        <p class="lead"></p>
                    </div>
                    <div class="col-lg-12 justify-content-center">
                        <div class="row gy-4 justify-content-center">
                            <!-- Personas -->
                            <div class="col-lg-3">
                                <div class="services-item text-center" data-aos="fade-up">
                                    <div class="services-icon mb-3">
                                        <i class="bi bi-person"></i> <!-- Cambiado a 'person' para representar a personas -->
                                    </div>
                                    <div>
                                        <h5>PERSONAS</h5>
                                        <p>Tenemos la certeza de que las personas son el mayor valor de la sociedad y todas nuestras acciones van dirigidas a mejorar su calidad de vida.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Carácter no lucrativo y gestión ética -->
                            <div class="col-lg-3">
                                <div class="services-item text-center" data-aos="fade-up" data-aos-delay="100">
                                    <div class="services-icon mb-3">
                                        <i class="bi bi-bank"></i> <!-- Cambiado a 'bank' para reflejar gestión económica/ética -->
                                    </div>
                                    <div>
                                        <h5>CARÁCTER NO LUCRATIVO y GESTIÓN ÉTICA</h5>
                                        <p>Todos los recursos económicos, materiales y humanos de Inclusivos y Diversos están destinados al cumplimiento de sus fines sociales.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Innovación y Creatividad -->
                            <div class="col-lg-3">
                                <div class="services-item text-center" data-aos="fade-up" data-aos-delay="200">
                                    <div class="services-icon mb-3">
                                        <i class="bi bi-lightbulb"></i> <!-- Cambiado a 'lightbulb' para representar innovación/creatividad -->
                                    </div>
                                    <div>
                                        <h5>INNOVACIÓN y CREATIVIDAD</h5>
                                        <p>Apostamos por recursos, metodologías, terapias y profesionales innovadoras y creativas. Aunamos los últimos conocimientos en las distintas materias y la sabiduría de una larga experiencia.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row gy-4 justify-content-center">
                        <!-- Transparencia -->
                        <div class="col-lg-3">
                            <div class="services-item text-center" data-aos="fade-up">
                                <div class="services-icon mb-3">
                                    <i class="bi bi-eye"></i> <!-- Cambiado a 'eye' para representar transparencia -->
                                </div>
                                <div>
                                    <h5>TRANSPARENCIA</h5>
                                    <p>La información de todas las acciones ejecutadas desde nuestra entidad, así como de los recursos de los que disponemos, están a disposición de todas las personas interesadas.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Justicia Social -->
                        <div class="col-lg-3">
                            <div class="services-item text-center" data-aos="fade-up" data-aos-delay="100">
                                <div class="services-icon mb-3">
                                    <i class="bi bi-briefcase"></i> <!-- Cambiado a 'briefcase' para representar justicia social -->
                                </div>
                                <div>
                                    <h5>JUSTICIA SOCIAL</h5>
                                    <p>Nos construimos desde la equidad y el ejercicio pleno y universal de los derechos humanos, el respeto a las diferencias y sus distintas capacidades.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Respeto -->
                        <div class="col-lg-3">
                            <div class="services-item text-center" data-aos="fade-up" data-aos-delay="200">
                                <div class="services-icon mb-3">
                                    <i class="bi bi-heart"></i> <!-- Cambiado a 'heart' para representar respeto -->
                                </div>
                                <div>
                                    <h5>RESPETO</h5>
                                    <p>Consideramos el respeto como un valor imprescindible para la cohesión social. Reconocemos y defendemos la diversidad humana.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Sostenibilidad Social y Ambiental -->
                        <div class="col-lg-3">
                            <div class="services-item text-center" data-aos="fade-up" data-aos-delay="200">
                                <div class="services-icon mb-3">
                                    <i class="bi bi-globe"></i> <!-- Cambiado a 'globe' para representar sostenibilidad social y ambiental -->
                                </div>
                                <div>
                                    <h5>SOSTENIBILIDAD SOCIAL Y AMBIENTAL</h5>
                                    <p>Estamos convencidas de que es esencial que el desarrollo y bienestar de las personas se produzca en equilibrio cultural, social y natural, usando de manera óptima y sostenible los recursos para el desarrollo de nuestras actividades y el logro de nuestros objetivos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Stats Section -->

        <!-- Team Section -->
        <section id="team" class="team section  light-background">

            <div class="site-section slider-team-wrap">
                <div class="container">

                    <div class="slider-nav d-flex justify-content-end mb-3">
                        <a href="#" class="js-prev js-custom-prev"><i class="bi bi-arrow-left-short"></i></a>
                        <a href="#" class="js-next js-custom-next"><i class="bi bi-arrow-right-short"></i></a>
                    </div>

                <div class="swiper init-swiper" data-aos="fade-up" data-aos-delay="100">
                <script type="application/json" class="swiper-config">
                    {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                        "delay": 5000
                    },
                    "slidesPerView": "1",
                    "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                    },
                    "navigation": {
                        "nextEl": ".js-custom-next",
                        "prevEl": ".js-custom-prev"
                    },
                    "breakpoints": {
                        "640": {
                        "slidesPerView": 2,
                        "spaceBetween": 30
                        },
                        "768": {
                        "slidesPerView": 3,
                        "spaceBetween": 30
                        },
                        "1200": {
                        "slidesPerView": 3,
                        "spaceBetween": 30
                        }
                    }
                    }
                </script>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="team">
                            <div class="pic">
                                <img src="{{ asset('assets/img/inclusiviapp/equipo/sergio.png') }}" alt="Image" class="img-fluid">
                            </div>
                            <h3 clas="">
                                <a href="#"><span class="">SERGIO</span> MARTÍN PAVÓN</a>
                            </h3>
                            <span class="d-block position">VICEPRESIDENTE Y OCIO INCLUSIVO</span>
                            <p>
                                Graduado en Historia. Activista y participante de la comunidad Sordociega
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team">
                            <div class="pic">
                                <img src="{{ asset('assets/img/inclusiviapp/equipo/josemaria.png') }}" alt="Image" class="img-fluid">
                            </div>
                            <h3 clas="">
                            <a href="#"><span class="">JOSÉ MARÍA </span> DOBADO LUNA</a>
                            </h3>
                            <span class="d-block position">PRESIDENTE</span>
                            <p>
                                Licenciado en Filología Hispánica. Profesor de Lengua Española y Literatura. Conocedor de la Comunidad Sorda y su lengua gracias a su experiencia docente dentro de la misma.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                    <div class="team">
                        <div class="pic">
                            <img src="{{ asset('assets/img/inclusiviapp/equipo/maria.png') }}" alt="Image" class="img-fluid">
                        </div>
                        <h3 clas="">
                        <a href="#"><span class="">MARÍA DEL CARMEN</span> ANTÚNEZ MIRANDA</a>
                        </h3>
                        <span class="d-block position">SECRETARIA</span>
                        <p>
                            Diplomada Universitaria de Enfermería. Defensora y participante de los derechos de las personas con enfermedades raras. Su hija Alba con síndrome de Angelman, su mayor razón.
                        </p>

                    </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team">
                            <div class="pic">
                                <img src="{{ asset('assets/img/inclusiviapp/equipo/lucia.png') }}" alt="Image" class="img-fluid">
                            </div>
                            <h3 clas="">
                            <a href="#"><span class="">LUCIA</span> SERRANO RAYA</a>
                            </h3>
                            <span class="d-block position">ACCESIBILIDAD Y ESCUELA DE LENGUA DE SIGNOS ESPAÑOLA</span>
                            <p>
                                Máster en Educación Secundaria, Especialización En Orientación Educativa. Maestra de Educación Infantil. Intérprete y Especialista Lengua de Signos Española.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team">
                            <div class="pic">
                                <img src="{{ asset('assets/img/inclusiviapp/equipo/cheli.png') }}" alt="Image" class="img-fluid">
                            </div>
                            <h3 clas="">
                            <a href="#"><span class="">CHELI </span> GUIJARRO JIMÉNEZ</a>
                            </h3>
                            <span class="d-block position">ESCUELA DE TEATRO INCLUSIVO Y ACCESIBLE GLORIA RAMOS Y ESCUELA DE LENGUA DE SIGNOS ESPAÑOLA</span>
                            <p>
                                Intérprete de Lengua de Signos Española, Guía Intérprete de Personas Sordo Ciegas, Mediadora Comunicativa y Especialista en Lengua de Signos. Formación y Experiencia en Accesibilidad e Inclusión.                                    </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team">
                            <div class="pic">
                                <img src="{{ asset('assets/img/inclusiviapp/equipo/raqui.png') }}" alt="Image" class="img-fluid">
                            </div>
                            <h3 clas="">
                            <a href="#"><span class="">RAQUEL</span> ALIAGA GARCIA</a>
                            </h3>
                            <span class="d-block position">MUSICOTERAPIA Y ESCUELA DE PADRES</span>
                            <p>
                                Máster en Musicoterapia y Maestra en Educación Musical.                                    </p>
                        </div>
                    </div>
                    <!-- <div class="swiper-slide"></div> -->
                    </div>
                </div>
            <!-- /.container -->
            </div>
        </section><!-- /Team Section -->

        <!-- Stats Section -->
        <section id="services" class="services section">
            <div class="container">
                <div class="row gy-4 justify-content-center align-items-center">
                    <div class="col-lg-5">
                        <div class="images-overlap">
                            <iframe src="https://www.youtube.com/embed/-MfE60zTHY4"
                                    title="Nuestra imagen, nuestra identidad"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                    <div class="col-lg-5 ps-lg-5">
                        <span class="content-subtitle">Nuestra imagen, nuestra identidad</span>
                        <h2 class="content-title">Nuestra imagen, nuestra identidad</h2>
                        <p class="lead">
                            Las líneas no siempre son rectas, al igual que las personas no siempre son normativamente lo que la sociedad espera, pero al final del camino, con trabajo, dedicación y mucha consciencia, todos y todas nos UNIREMOS con el objetivo de crear una sociedad más rica y diversa. Los dibujos inspirados en el Mihrab de la Mezquita de Córdoba y los múltiples colores de las figuras humanas representadas en torno al signo de la suma (&), muestran la unión necesaria de las diferencias, englobando la filosofía que nos mueve.
                        </p>
                        <div class="pic">
                            <img src="{{ asset('assets/img/inclusiviapp/logo_transparente.png') }}"
                                 alt="Logo"
                                 class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>


    @endsection
