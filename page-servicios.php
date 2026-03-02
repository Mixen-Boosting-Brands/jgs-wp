<?php
/*
Template Name: Servicios
*/
get_header(); ?>

<section
    id="jumbotron"
    style="
        background-image: url(&quot;<?php echo esc_url(
            get_template_directory_uri(),
        ); ?>/assets/images/bg-j-2.png&quot;);
    "
>
    <div class="container">
        <div class="row d-flex align-items-end">
            <div class="col-12">
                <h1
                    class="display-4"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"
                >
                    <span>Soluciones en acero</span><br />
                    estructural para proyectos existentes
                </h1>
                <p
                    class="lead"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                >
                    Ofrecemos servicios de
                    <strong>manufactura metalmecánica</strong>
                    orientados a la
                    <strong>industria de la construcción,</strong> con
                    un enfoque en
                    <strong
                        >calidad, cumplimiento normativo y eficiencia
                        operativa.</strong
                    >
                </p>
                <p
                    class="lead"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="400"
                >
                    Nuestros
                    <strong
                        >procesos certificados y capacidad
                        productiva</strong
                    >
                    nos permiten atender proyectos de
                    <strong
                        >distinta escala en México y Estados
                        Unidos.</strong
                    >
                </p>
            </div>
        </div>
    </div>
</section>

<section class="pt-60 pb-30">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                <h6
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"
                >
                    <i class="fa-solid fa-square"></i>
                    Nuestros Servicios Principales
                </h6>

                <h1
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"
                >
                    <span>Soluciones clave</span> de manufactura
                    metalmecánica
                </h1>

                <p
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                >
                    Ofrecemos servicios estratégicos enfocados en
                    eficiencia, calidad y cumplimiento para proyectos
                    comerciales, industriales y de gran escala.
                </p>
            </div>
        </div>

        <div class="row">
            <!-- JOIST -->
            <div class="col-md-4 d-flex">
                <div
                    class="card card-contenido w-100 mb-4 js-service-card"
                    data-service="joist"
                    role="button"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                >
                    <a class="img-link" href="#">
                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri(),
                            ); ?>/assets/images/servicios/1.png"
                            class="card-img-top"
                            alt="Fabricación de Joist"
                        />
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </a>

                    <div class="card-body d-flex flex-column">
                        <a href="#">
                            <h5 class="card-title">
                                Fabricación de Joist
                            </h5>
                        </a>

                        <p class="card-text">
                            Fabricación de joist estructural conforme a
                            los estándares del Steel Joist Institute
                            (SJI), asegurando precisión, resistencia y
                            desempeño estructural.
                        </p>

                        <p class="card-text">
                            <strong>Ideal para:</strong><br />
                            Proyectos industriales, comerciales e
                            institucionales.
                        </p>
                    </div>
                </div>
            </div>

            <!-- JOIST GIRDER -->
            <div class="col-md-4 d-flex">
                <div
                    class="card card-contenido w-100 mb-4 js-service-card"
                    data-service="joist-girder"
                    role="button"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="400"
                >
                    <a class="img-link" href="#">
                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri(),
                            ); ?>/assets/images/servicios/2.png"
                            class="card-img-top"
                            alt="Fabricación de Joist Girder"
                        />
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </a>

                    <div class="card-body d-flex flex-column">
                        <a href="#">
                            <h5 class="card-title">
                                Fabricación de Joist Girder
                            </h5>
                        </a>

                        <p class="card-text">
                            Manufactura especializada de joist girder
                            para estructuras de gran claro y alta
                            exigencia de carga, alineada a normas
                            internacionales.
                        </p>

                        <p class="card-text">
                            <strong>Ideal para:</strong><br />
                            Proyectos de gran escala y estructuras
                            complejas.
                        </p>
                    </div>
                </div>
            </div>

            <!-- LÁMINA DECK -->
            <div class="col-md-4 d-flex">
                <div
                    class="card card-contenido w-100 mb-4 js-service-card"
                    data-service="lamina-deck"
                    role="button"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="600"
                >
                    <a class="img-link" href="#">
                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri(),
                            ); ?>/assets/images/servicios/3.png"
                            class="card-img-top"
                            alt="Suministro de Lámina Deck"
                        />
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </a>

                    <div class="card-body d-flex flex-column">
                        <a href="#">
                            <h5 class="card-title">
                                Suministro de Lámina Deck
                            </h5>
                        </a>

                        <p class="card-text">
                            Comercialización de lámina deck certificada
                            para sistemas de entrepiso y cubiertas
                            metálicas, con entrega confiable y
                            especificaciones técnicas claras.
                        </p>

                        <p class="card-text">
                            <strong>Ideal para:</strong><br />
                            Sistemas de construcción metálica y
                            entrepisos.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-30">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                <h1
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"
                >
                    <span>Servicios</span> complementarios
                </h1>
                <p
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                >
                    Estos servicios se desarrollan bajo los mismos
                    estándares de calidad, seguridad y control
                    operativo.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <ul class="list-inline">
                    <li
                        class="list-inline-item mb-4 mb-lg-0"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="400"
                    >
                        <span class="btn-servicio rounded-pill"
                            >Fabricación de estructura metálica
                            general</span
                        >
                    </li>
                    <li
                        class="list-inline-item mb-4 mb-lg-0"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="600"
                    >
                        <span class="btn-servicio rounded-pill"
                            >Cimbras metálicas</span
                        >
                    </li>
                    <li
                        class="list-inline-item mb-4 mb-lg-0"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="800"
                    >
                        <span class="btn-servicio rounded-pill"
                            >Bases para equipos</span
                        >
                    </li>
                    <li
                        class="list-inline-item mb-4 mb-lg-0"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="1000"
                    >
                        <span class="btn-servicio rounded-pill"
                            >Misceláneos industriales (herrería en
                            general)</span
                        >
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="py-30">
    <div class="overlay"></div>
    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                <h6
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"
                >
                    <i class="fa-solid fa-square"></i> Cómo trabajamos
                </h6>
                <h1
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"
                >
                    <span>Nuestro enfoque</span> de trabajo
                </h1>
                <p
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                >
                    Nos distinguimos por una atención cercana,
                    profesional y orientada a soluciones, acompañando a
                    nuestros clientes en cada etapa del proyecto.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-md-3 d-flex">
                <div
                    class="card text-bg-dark card-step w-100 mb-4"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="400"
                >
                    <div class="card-body">
                        <p class="card-title">
                            <strong>1.</strong>
                        </p>
                        <p class="card-title">
                            <strong
                                >Análisis y entendimiento del
                                proyecto.</strong
                            >
                        </p>
                        <p class="card-text">
                            Escuchamos, entendemos y evaluamos los
                            requerimientos técnicos, alcances y tiempos
                            desde el inicio.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 d-flex">
                <div
                    class="card text-bg-dark card-step w-100 mb-4"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="600"
                >
                    <div class="card-body">
                        <p class="card-title">
                            <strong>2.</strong>
                        </p>
                        <p class="card-title">
                            <strong
                                >Propuesta técnica y económica</strong
                            >
                        </p>
                        <p class="card-text">
                            Desarrollamos soluciones claras, viables y
                            competitivas, alineadas a estándares de
                            calidad y necesidades de obra.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 d-flex">
                <div
                    class="card text-bg-dark card-step mb-4"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="800"
                >
                    <div class="card-body">
                        <p class="card-title">
                            <strong>3.</strong>
                        </p>
                        <p class="card-title">
                            <strong
                                >Manufactura y control de
                                calidad</strong
                            >
                        </p>
                        <p class="card-text">
                            Ejecutamos bajo procesos certificados, con
                            supervisión constante y cumplimiento
                            normativo.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 d-flex">
                <div
                    class="card text-bg-dark card-step w-100 mb-4"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="1000"
                >
                    <div class="card-body">
                        <p class="card-title">
                            <strong>4.</strong>
                        </p>
                        <p class="card-title">
                            <strong>Entrega y acompañamiento</strong>
                        </p>
                        <p class="card-text">
                            Cumplimos tiempos, facilitamos el montaje y
                            damos seguimiento para asegurar resultados
                            óptimos en obra.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-30">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="1200"
                >
                    Todos nuestros servicios se desarrollan bajo
                    <span>procesos certificados,</span> con
                    <span
                        >control de calidad, capacidad operativa y
                        acompañamiento técnico</span
                    >
                    que garantizan
                    <span
                        >cumplimiento en tiempo, costo y
                        especificación.</span
                    >
                </h1>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
