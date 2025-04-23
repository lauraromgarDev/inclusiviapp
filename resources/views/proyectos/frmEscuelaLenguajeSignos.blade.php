@extends('layouts.main_layout')

@section('content')
    <!-- Page Title -->
    <div class="page-title light-background py-5">
        <div class="container text-center">
            <h1 class="display-5 fw-bold">ESCUELA DE LENGUA DE SIGNOS ESPAÑOLA
            </h1>
        </div>
    </div><!-- End Page Title -->

    <!-- About Section -->
    <section id="about-2" class="py-5">
        <div class="container">
            <div class="row align-items-center bg-white rounded-4 p-5 " data-aos="fade-up">
                <!-- Vídeo -->
                <div class="col-md-5 col-lg-4 order-lg-2 mb-4 mb-lg-0">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/VKwWJ4M4ftc"
                            title="Escuela de Lengua de Signos Española" allowfullscreen></iframe>
                    </div>
                </div>

                <!-- Texto -->
                <div class="col-md-7 col-lg-8">
                    <div class="ps-md-4">
                        <h3 class="fw-bold mb-4">¿Qué es la Escuela de Lengua de Signos Española (LSE)?</h3>
                        <p class="mb-4">
                            La Escuela de Lengua de Signos Española de Inclusivos y Diversos es un espacio de uso, fomento y
                            conocimiento de este maravilloso idioma. Deseamos ser una herramienta de divulgación y
                            sensibilización para dar a conocer la utilidad social del aprendizaje de esta lengua, su puesta en
                            valor y el cuidado de la misma.
                        </p>
                        <p>
                            Profesionales Sordos y Oyentes especialistas en la materia nos unimos para compartir con la sociedad
                            el importante legado lingüístico de la Comunidad Sorda.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="cursos-y-talleres" class="services section light-background py-5">
        <div class="container">

            <div class="row justify-content-center light-background">
                <div class="col-lg-12">
                    <h3 class="fw-bold pb-3">Cursos y talleres</h3>
                    <p>Si te apetece adentrarte en el aprendizaje de la Lengua de Signos Española (LSE) creemos que te será
                        muy útil conocer algunas de sus características previamente, con la finalidad de que puedas
                        enamorarte de ella mucho antes de comenzar a mover las manos.</p>
                </div>


                <!-- Fila principal: vídeo + contenido -->
                <div class="row align-items-center light-background mb-5">
                    <!-- Vídeo a la izquierda -->
                    <div class="col-md-5 col-lg-4 mb-4 mb-md-0" data-aos="fade-up">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/JSN1-IDxijk"
                                title="Cursos y Talleres" allowfullscreen></iframe>
                        </div>
                    </div>
                    <!-- Texto a la derecha -->
                    <div class="col-md-7 col-lg-8" data-aos="fade-up">
                        <div class="rounded p-4">


                            <h3 class="fw-bold pb-3 mt-4">¿Qué es la Lengua de Signos?</h3>
                            <p>La lengua de signos es la lengua natural de las Personas Sordas. Su carácter visual, gestual
                                y espacial la hace única y fascinante. Posee una gramática propia, lo que la dota de todas
                                las características para igualarla a cualquier otra Lengua de carácter oral.</p>

                            <h3 class="fw-bold pb-3 mt-4">¿Qué es la Comunidad Sorda?</h3>
                            <p>La comunidad Sorda es el colectivo que participa de unos valores culturales y lingüísticos en
                                torno a la lengua de signos y a su percepción visual del mundo. La comunidad Sorda la
                                constituyen personas Sordas y oyentes que comparten el mismo legado lingüístico y cultural.
                            </p>

                            <p>En España hay un total de 1.064.000 personas Sordas y con algún tipo de discapacidad
                                auditiva, según los datos recogidos por el INE en su estudio “EDAD 2008”.</p>
                        </div>
                    </div>
                </div>

                <!-- Segunda fila: razones para aprender LSE -->
                <div class="row justify-content-center light-background">
                    <div class="col-lg-12">
                        <h3 class="fw-bold pb-3">¿Por qué aprender Lengua de Signos?</h3>
                        <p>Aprender Lengua de Signos ofrece multitud de ventajas, pero no sólo para las personas Sordas,
                            sino también para personas oyentes de todas las edades.</p>

                        <ul class="list-unstyled ps-3">
                            <li><i class="bi bi-chevron-right me-2 text-secondary"></i>Ayuda a eliminar barreras
                                comunicativas entre personas Sordas y oyentes.</li>
                            <li><i class="bi bi-chevron-right me-2 text-secondary"></i>Dota de recursos y herramientas para
                                favorecer el desarrollo cognitivo, emocional, lingüístico y relacional de los niños y niñas
                                Sordos.</li>
                            <li><i class="bi bi-chevron-right me-2 text-secondary"></i>Mejora la percepción y el campo
                                visual.</li>
                            <li><i class="bi bi-chevron-right me-2 text-secondary"></i>Desarrolla capacidades artísticas ya
                                que permite desarrollar y mejorar la expresividad.</li>
                            <li><i class="bi bi-chevron-right me-2 text-secondary"></i>Favorece algunas funciones cerebrales
                                como la agilidad, la memoria y la resolución de problemas.</li>
                            <li><i class="bi bi-chevron-right me-2 text-secondary"></i>Potencia la comunicación
                                interpersonal favoreciendo la mejora de nuestras habilidades comunicativas.</li>
                            <li><i class="bi bi-chevron-right me-2 text-secondary"></i>Manejo positivo del lenguaje no
                                verbal.</li>
                            <li><i class="bi bi-chevron-right me-2 text-secondary"></i>Lengua de Signos en bebés oyentes
                                <ul class="list-unstyled ps-4 mt-2">
                                    <li><i class="bi bi-dot me-2 text-secondary"></i>Según Científicos del Instituto
                                        Nacional de Medicina de la Salud de Estados Unidos, enseñar a los niños Lengua de
                                        Signos a una edad temprana como los seis meses de vida puede ayudar a prevenir
                                        problemas de desarrollo del lenguaje y sensorial.</li>
                                    <li><i class="bi bi-dot me-2 text-secondary"></i>Su conocimiento facilita el aprendizaje
                                        y la expresión mediante la lengua oral.</li>
                                    <li><i class="bi bi-dot me-2 text-secondary"></i>Fomenta el establecimiento de vínculos
                                        afectivos entre el niño y sus progenitores.</li>
                                    <li><i class="bi bi-dot me-2 text-secondary"></i>Aporta habilidades comunicativas
                                        propias de edades en las que se empieza a desarrollar el habla.</li>
                                </ul>
                            </li>
                        </ul>
                        <p>Si eres madre o padre de un niño o niña Sorda y necesitas asesoramiento, eres estudiante,
                            perteneces al ámbito educativo, formas parte de una entidad pública o privada o tu empresa
                            quiere formar a sus trabajadores en esta materia, o simplemente te interesa aprender este
                            idioma, ponte en contacto con nuestra entidad. ¡Estaremos encantadas de poder ayudarte!Si eres
                            madre o padre de un niño o niña Sorda y necesitas asesoramiento, eres estudiante, perteneces al
                            ámbito educativo, formas parte de una entidad pública o privada o tu empresa quiere formar a sus
                            trabajadores en esta materia, o simplemente te interesa aprender este idioma, ponte en contacto
                            con nuestra entidad. ¡Estaremos encantadas de poder ayudarte!</p>
                    </div>
                </div>
            </div>
    </section>

    <section id="about-2" class="py-5">
        <div class="container"  id="presenciales">
            <div class="row align-items-center bg-white rounded-4 p-5 shadow-sm" data-aos="fade-up">
                <!-- Vídeo -->
                <div class="col-md-5 col-lg-4 order-lg-2 mb-4 mb-lg-0">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/zRxmCrD4J5Q"
                            title="Presenciales" allowfullscreen></iframe>
                    </div>
                </div>

                <!-- Texto -->
                <div class="col-md-7 col-lg-8">
                    <div class="ps-md-4">
                        <h3 class="fw-bold mb-4">Presenciales</h3>
                        <p class="mb-4">
                            Aquí podrás encontrar nuestras propuestas formativas de talleres y cursos de Lengua de Signos Española, Braille y/o Sordoceguera, presenciales, gratuitos o de pago y la forma en puedes apuntarte.
                        </p>

                    </div>
                </div>
            </div>
        </div>
        <div class="container"  id="online">
            <div class="row align-items-center bg-white rounded-4 p-5 shadow-sm" data-aos="fade-up">
                <!-- Vídeo a la izquierda -->
                <div class="col-md-5 col-lg-4 mb-4 mb-lg-0">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/GjCwSEioh74"
                            title="online" allowfullscreen></iframe>
                    </div>
                </div>

                <!-- Texto a la derecha -->
                <div class="col-md-7 col-lg-8">
                    <div class="ps-md-4">
                        <h3 class="fw-bold mb-4">Online</h3>
                        <p class="mb-4">
                            Aquí podrás encontrar nuestras propuestas formativas de talleres y cursos de Lengua de Signos Española, Braille y Sordoceguera, online, gratuitos o de pago y la forma en puedes apuntarte.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
