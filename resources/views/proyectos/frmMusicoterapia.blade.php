@extends('layouts.main_layout')

@section('content')
    <!-- Page Title -->
    <div class="page-title light-background py-5">
        <div class="container text-center">
            <h1 class="display-5 fw-bold">MUSICOTERAPIA PARA TOD@S</h1>
        </div>
    </div><!-- End Page Title -->

    <!-- About Section -->
    <section id="about-2" class="py-5">
        <div class="container">
            <div class="row align-items-center  rounded p-4 bg-white">
                <!-- Video -->
                <div class="col-md-5 col-lg-4 order-lg-2 mb-4 mb-lg-0" data-aos="fade-up">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/NjyDlf3HLxE" title="Nuestro Equipo"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <!-- Text -->
                <div class="col-md-7 col-lg-7" data-aos="fade-up">
                    <h3 class="fw-bold pb-3">¿Qué es la Musicoterapia?</h3>
                    <p>La Musicoterapia es el uso terapéutico de la música y sus elementos, basada en la evidencia
                        científica de sus efectos en el ser humano. Su objetivo es mejorar la calidad de vida mediante la
                        estimulación, mantenimiento y recuperación de funciones, y la prevención de deterioros en la salud.
                    </p>
                    <p>Como profesión socio-sanitaria reconocida, debe ser aplicada por profesionales con formación reglada.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class=" rounded p-4 bg-white" data-aos="fade-up">
                        <h3 class="fw-bold pb-3">¿Qué beneficios aporta la Musicoterapia?</h3>
                        <p>Se trabaja de forma holística en todos los ámbitos del desarrollo humano. Beneficios principales:
                        </p>
                        <ul class="list-unstyled ps-3">
                            <li><i class="bi bi-chevron-right me-2 text-secondary"></i><strong>Físico-motriz:</strong>
                                coordinación, orientación espacial, motricidad fina y gruesa.</li>
                            <li><i class="bi bi-chevron-right me-2 text-secondary"></i><strong>Fisiológico:</strong> mejora
                                respiratoria, frecuencia cardíaca, bienestar general.</li>
                            <li><i class="bi bi-chevron-right me-2 text-secondary"></i><strong>Cognitivo:</strong> memoria,
                                atención, lenguaje, creatividad.</li>
                            <li><i class="bi bi-chevron-right me-2 text-secondary"></i><strong>Emocional:</strong> gestión
                                emocional, autoestima, liberación.</li>
                            <li><i class="bi bi-chevron-right me-2 text-secondary"></i><strong>Social:</strong> empatía,
                                pertenencia grupal, cooperación.</li>
                        </ul>

                        <h3 class="fw-bold pb-3 mt-4">¿Qué Metodología Empleamos?</h3>
                        <p>Utilizamos un abordaje Plurimodal con técnicas de modelos reconocidos a nivel mundial. Fomentamos
                            la participación activa, individual o grupal, en un entorno vincular y significativo.</p>

                        <h3 class="fw-bold pb-3 mt-4">¿A quién va dirigida la Musicoterapia en Inclusivos y Diversos?</h3>
                        <ul class="list-unstyled ps-3">
                            <li><i class="bi bi-chevron-right me-2 text-secondary"></i> Atención Infantil Temprana (TEA,
                                TDAH, trastornos del lenguaje, etc.)</li>
                            <li><i class="bi bi-chevron-right me-2 text-secondary"></i> Centros Educativos y Hospitalarios
                            </li>
                            <li><i class="bi bi-chevron-right me-2 text-secondary"></i> Familias con niños/as con diversidad
                                funcional</li>
                            <li><i class="bi bi-chevron-right me-2 text-secondary"></i> Alumnado de Educación Especial</li>
                            <li><i class="bi bi-chevron-right me-2 text-secondary"></i> Adolescentes con problemas
                                conductuales</li>
                            <li><i class="bi bi-chevron-right me-2 text-secondary"></i> Adultos/as con diversidad funcional
                            </li>
                            <li><i class="bi bi-chevron-right me-2 text-secondary"></i> Mujeres con Fibromialgia</li>
                            <li><i class="bi bi-chevron-right me-2 text-secondary"></i> Personas mayores y tercera edad
                                (Alzheimer, Parkinson, envejecimiento activo)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /About Section -->
@endsection
