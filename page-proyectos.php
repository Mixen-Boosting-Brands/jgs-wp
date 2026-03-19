<?php
/*
Template Name: Proyectos
*/
get_header(); ?>

<section
    id="jumbotron"
    style="
        background-image: url(&quot;<?php echo esc_url(
            get_template_directory_uri(),
        ); ?>/assets/images/bg-j-4.png&quot;);
    "
>
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-flex align-items-end">
            <div class="col-12">
                <h1
                    class="display-4"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"
                >
                    <span>Proyectos ejecutados</span><br />
                    precisión y cumplimiento
                </h1>
                <p
                    class="lead"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                >
                    Participamos en proyectos industriales, comerciales
                    y de infraestructura, aportando soluciones en acero
                    estructural con altos estándares técnicos y
                    cumplimiento de tiempos en México y Estados Unidos.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="pt-60 pb-30">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                <h6 data-aos="fade-up" data-aos-duration="1000">
                    <i class="fa-solid fa-square"></i> Proyectos
                </h6>
            </div>
        </div>

        <div class="row">

            <?php
            $args = [
                "post_type" => "proyecto",
                "posts_per_page" => -1,
                "post_status" => "publish",
            ];

            $proyectos = new WP_Query($args);

            if ($proyectos->have_posts()):
                $delay = 200;
                while ($proyectos->have_posts()):
                    $proyectos->the_post(); ?>

                <div class="col-6 col-lg-4 d-flex">
                    <div
                        class="card card-contenido w-100 mb-4"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="<?php echo esc_attr($delay); ?>"
                    >

                        <a class="img-link" href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail("custom", [
                                    "class" => "card-img-top",
                                    "alt" => get_the_title(),
                                ]); ?>
                            <?php endif; ?>
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </a>

                        <div class="card-body d-flex flex-column">
                            <a href="<?php the_permalink(); ?>">
                                <h5 class="card-title">
                                    <?php the_title(); ?>
                                </h5>
                            </a>

                            <p class="card-text">
                                <?php echo wp_trim_words(
                                    get_the_excerpt(),
                                    18,
                                ); ?>
                            </p>
                        </div>
                    </div>
                </div>

            <?php $delay += 200;
                endwhile;
                wp_reset_postdata();
            endif;
            ?>

        </div>

        <!-- Botón Ver más -->
        <!-- div class="row">
            <div class="col-12 text-center mt-3">
                <a href="<?php echo esc_url(
                    get_post_type_archive_link("proyecto"),
                ); ?>" class="btn btn-primary">
                    Ver más
                </a>
            </div>
        </div -->

    </div>
</section>

<section id="capacidad" class="py-30">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                <h6
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"
                >
                    <i class="fa-solid fa-square"></i> Capacidad
                    operativa y alcance
                </h6>
                <h1
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"
                >
                    <span>Nuestro trabajo</span> habla por nosotros
                </h1>
                <p
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                >
                    Infraestructura y capacidad para proyectos de alto
                    volumen.<br />
                    Nuestra infraestructura, procesos y equipo nos
                    permiten responder con eficiencia, flexibilidad y
                    confiabilidad a proyectos de gran escala.
                </p>
            </div>
        </div>
        <div
            class="row mb-lg-4 text-center"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="400"
        >
            <div class="col-md-4">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item my-auto">
                        <h1 class="mb-0">
                            <span class="counter" data-target="20"
                                >+20</span
                            >
                        </h1>
                    </li>
                    <li class="list-inline-item my-auto">
                        <p class="mb-0">años de experiencia</p>
                    </li>
                </ul>
                <p>en construcción y manufactura metalmecánica</p>
            </div>
            <div class="col-md-4">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item my-auto">
                        <h1 class="mb-0">
                            <span class="counter" data-target="600"
                                >600+</span
                            >
                        </h1>
                    </li>
                    <li class="list-inline-item my-auto">
                        <p class="mb-0">toneladas</p>
                    </li>
                </ul>
                <p>de capacidad de fabricación</p>
            </div>
            <div class="col-md-4">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item my-auto">
                        <h1 class="mb-0">
                            <span class="counter" data-target="25"
                                >+25</span
                            >
                        </h1>
                    </li>
                    <li class="list-inline-item my-auto">
                        <p class="mb-0">mil m2 planta propia</p>
                    </li>
                </ul>
                <p>totalmente equipada</p>
            </div>
        </div>
        <div
            class="row text-center"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="600"
        >
            <div class="col-md-4 offset-md-2">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item my-auto">
                        <h1 class="mb-0">
                            <span class="counter" data-target="2"
                                >2</span
                            >
                        </h1>
                    </li>
                    <li class="list-inline-item my-auto">
                        <p class="mb-0">países de operación</p>
                    </li>
                </ul>
                <p>México y Estados Unidos</p>
            </div>
            <div class="col-md-4">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item my-auto">
                        <h1 class="mb-0">
                            <span class="counter" data-target="100"
                                >100%</span
                            >
                        </h1>
                    </li>
                    <li class="list-inline-item my-auto">
                        <p class="mb-0">procesos certificados</p>
                    </li>
                </ul>
                <p>y personal especializado</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
