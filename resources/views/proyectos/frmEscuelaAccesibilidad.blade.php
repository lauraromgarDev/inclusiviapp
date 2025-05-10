@extends('layouts.main_layout')

@section('content')
    <!-- Page Title -->
    <div class="page-title light-background py-5">
        <div class="container text-center">
            <h1 class="display-5 fw-bold">ACCESIBILIDAD</h1>
        </div>
    </div><!-- End Page Title -->

    <!-- About Section -->
    <section id="about-2" class="py-5">
        <div class="container">
            <div class="row align-items-center  rounded p-4 bg-white">
                <!-- Video -->
                <div class="col-md-5 col-lg-4 order-lg-2 mb-4 mb-lg-0" data-aos="fade-up">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/5Nt4zKmAth0" title=">ccesibilidad"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <!-- Text -->
                <div class="col-md-7 col-lg-7" data-aos="fade-up">
                    <h3 class="fw-bold pb-3"></h3>
                    <p>La accesibilidad universal según la <a href="https://www.boe.es/buscar/act.php?id=BOE-A-2013-12632">
                            Ley General de los derechos de las personas con discapacidad y de su inclusión social (LGD)
                        </a>
                        , es la condición que deben cumplir los entornos, procesos, bienes,
                        productos y servicios para que todas las personas puedan participar de manera autónoma y con las
                        mismas oportunidades. Da respuesta a las necesidades de las personas con discapacidad, pero no solo
                        a ellas, ya que hace que el uso y disfrute sea más cómodo y fácil para cualquier persona.
                    </p>
                    <p>En Inclusivos y Diversos perseguimos, como objetivo principal, avanzar en la igualdad de
                        oportunidades, incorporando una mirada inclusiva que acabe con cualquier barrera que dificulte la
                        participación de algunas personas en los diferentes ámbitos de nuestras sociedad como pueden ser la
                        comunicación, las relaciones humanas, la educación, el ocio o la cultura.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class=" rounded p-4 bg-white" data-aos="fade-up">
                        <h3 class="fw-bold pb-3">¿Quién puede ser beneficiario de nuestros servicios de Accesibilidad?</h3>
                        <p>Personas con cualquier tipo de diversidad funcional, entidades públicas o privadas que deseen que en sus actividades, encuentros, charlas o jornadas participen personas con distintas capacidades. Inclusivos y Diversos garantiza los recursos necesarios para hacerlo posible.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services section light-background py-5 ">
        <div class="container">
            <div class="row justify-content-center light-background">

                <!-- Fila principal: vídeo + contenido -->
                <div class="row align-items-center light-background mb-5">
                    <!-- Vídeo a la izquierda -->
                    <div class="col-md-5 col-lg-4 mb-4 mb-md-0" data-aos="fade-up">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/nTP3xv2jAhA" title="Servicio ILSE y GILSE"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <!-- Texto a la derecha -->
                    <div class="col-md-7 col-lg-8" data-aos="fade-up">
                        <div class="rounded servicioILSE">
                            <h3 class="fw-bold pb-3 mt-4">Servicio ILSE y GILSE Ayuntamiento de Córdoba</h3>
                            <p>La sociedad en la que vivimos es mayoritariamente oyente, de manera que gran parte de los contactos
                                comunicativos y los canales de transmisión de información son orales-auditivos, por lo que la
                                información que perciben las personas SORDAS en sus relaciones comunicativas es mínima, influyendo
                                en su aislamiento social y en su desarrollo personal e intelectual. Contribuir a paliar esta
                                problemática lo entendemos de vital necesidad.</p>

                                <p>En Inclusivos y Diversos, deseamos concienciar y promover la responsabilidad social en la inclusión
                                de las personas Sordas en la sociedad, tal y como refleja la ley 27/2007 del 23 de octubre por la
                                que se reconoce las Lenguas de Signos Española y se regulan los medios de apoyo a la Comunicación de
                                las Personas con Discapacidad Auditiva y Sordociegas, apostando así por una inclusión real.</p>

                                <p>Contribuimos de esta forma al desarrollo del objetivo 11 de la O.D.S. ciudades y comunidades
                                sostenibles, abogando por unas ciudades más inclusivas, seguras, resilientes y sostenibles.</p>

                                <p>Inclusivos y Diversos es la entidad adjudicataria del servicio de Intérpretes de Lengua De Signos
                                Española y Guía Intérpretes de Personas Sordo Ciegas del Ayuntamiento de Córdoba.</p>
                        </div>
                    </div>
                </div>

                <div>
                    <h4 class="fw-bold mb-3">¿Necesitas un servicio de interpretación?</h4>
                    <p>
                      Si necesitas solicitar un servicio de <strong>Intérprete de Lengua de Signos Española</strong> o
                      <strong>Guía Intérprete de Personas Sordociegas</strong>:
                    </p>

                    <p>
                      <strong>Rellena el siguiente formulario</strong><br>
                      El departamento de intérpretes se pondrá en contacto contigo para confirmar el servicio.
                    </p>

                    <p>
                      <strong>RECUERDA:</strong> El servicio <u>no se llevará a cabo</u> hasta que recibas la confirmación por parte del departamento de ILSES.
                    </p>

                    <p>
                      <strong>IMPORTANTE:</strong> No olvides incluir tu <u>número de teléfono móvil</u> para comunicación por WhatsApp.
                    </p>

                    <p class="mt-3 mb-0">
                      <strong>Email:</strong> <a href="mailto:inclusivosydiversosilse@gmail.com">inclusivosydiversosilse@gmail.com</a>
                    </p>

                    <div class="text-center mt-4">
                        <button class="btn btn-primary">
                          Formulario servicio ILSE / GILSE
                        </button>
                      </div>
                </div>
            </div>
    </section>
@endsection
