        <section class="cta-hablemos text-center py-60">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1
                            class="display-4"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="0"
                        >
                            Hablemos de tu proyecto
                        </h1>
                        <p
                            class="lead"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="200"
                        >
                            Nuestro equipo está listo para analizar tus
                            requerimientos y ofrecerte una solución en acero
                            estructural confiable, eficiente y alineada a tus
                            objetivos de construcción.
                        </p>
                        <a
                            class="btn btn-light"
                            href="#"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="400"
                            >Solicitar cotización</a
                        >
                    </div>
                </div>
            </div>
        </section>

        <footer class="py-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 text-center my-auto">
                        <a href="#">
                            <img
                                id="logo-footer"
                                class="logo img-fluid mb-4 mb-lg-0"
                                alt="Logo JGS"
                                src="<?php echo esc_url(
                                    get_template_directory_uri(),
                                ); ?>/assets/images/logo-light@2x.png"
                                data-theme-light="<?php echo esc_url(
                                    get_template_directory_uri(),
                                ); ?>/assets/images/logo-light@2x.png"
                                data-theme-dark="<?php echo esc_url(
                                    get_template_directory_uri(),
                                ); ?>/assets/images/logo-dark@2x.png"
                                data-aos="fade-up"
                                data-aos-duration="1000"
                                data-aos-delay="0"
                            />
                        </a>
                    </div>
                    <div class="col-md-8 col-lg-6 my-auto">
                        <div class="row">
                            <div
                                class="col-md-6 col-lg-6"
                                data-aos="fade-up"
                                data-aos-duration="1000"
                                data-aos-delay="200"
                            >
                                <p><strong>Contacto</strong></p>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="tel:+19152270023"
                                            >+1 (915) 227-0023</a
                                        >
                                    </li>
                                    <li>
                                        <a href="tel:+526142582020"
                                            >+52 (614) 258-2020</a
                                        >
                                    </li>
                                    <li>
                                        <a href="tel:+526142816225"
                                            >+52 (614) 281-6225</a
                                        >
                                    </li>
                                    <li>
                                        <a href="mailto:ventas@jgsolutions.mx"
                                            >ventas@jgsolutions.mx</a
                                        >
                                    </li>
                                    <li>
                                        <address>
                                            Sector 103 Parcela 254 Z-7 P 1/2
                                            6802<br />
                                            Ejido Rancho de Enmedio<br />
                                            Chihuahua, Chih. México<br />
                                            C.P. 31117
                                        </address>
                                    </li>
                                </ul>
                            </div>
                            <div
                                class="col-md-6 col-lg-4 offset-lg-1"
                                data-aos="fade-up"
                                data-aos-duration="1000"
                                data-aos-delay="400"
                            >
                                <p><strong>Menú</strong></p>
                                <nav>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="<?php echo esc_url(
                                                get_permalink(6),
                                            ); ?>">
                                                <?php echo esc_html(
                                                    get_the_title(6),
                                                ); ?>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo esc_url(
                                                get_permalink(8),
                                            ); ?>">
                                                <?php echo esc_html(
                                                    get_the_title(8),
                                                ); ?>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo esc_url(
                                                get_permalink(10),
                                            ); ?>">
                                                <?php echo esc_html(
                                                    get_the_title(10),
                                                ); ?>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo esc_url(
                                                get_permalink(12),
                                            ); ?>">
                                                <?php echo esc_html(
                                                    get_the_title(12),
                                                ); ?>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo esc_url(
                                                get_permalink(14),
                                            ); ?>">
                                                <?php echo esc_html(
                                                    get_the_title(14),
                                                ); ?>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo esc_url(
                                                get_permalink(16),
                                            ); ?>">
                                                <?php echo esc_html(
                                                    get_the_title(16),
                                                ); ?>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 my-auto text-center">
                        <img
                            id="logo-certificacion"
                            class="img-fluid"
                            alt="Steel Joist SJI Institute Member"
                            src="<?php echo esc_url(
                                get_template_directory_uri(),
                            ); ?>/assets/images/certificacion@2x.png"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="600"
                        />
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <hr />
                    </div>
                </div>
                <div class="row">
                    <div class="col text-end">
                        &copy; <?php echo date("Y"); ?> <?php bloginfo(
     "name",
 ); ?>. Todos los
                        derechos reservados. | Made by
                        <a href="https://mixen.mx/" target="_blank">Mixen</a>
                    </div>
                </div>
            </div>
        </footer>

        <?php wp_footer(); ?>

        <script src="<?php echo esc_url(
            get_template_directory_uri(),
        ); ?>/assets/js/app.bundle.js" defer></script>
    </body>
</html>
