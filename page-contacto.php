<?php
/*
Template Name: Contacto
*/
get_header(); ?>

<section id="jumbotron-sin-fondo" class="pb-30">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1
                    class="mb-4"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"
                >
                    <span>Contáctanos</span>
                </h1>
            </div>
            <div class="col-md-6">
                <h6
                    class="mb-4"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"
                >
                    <i class="fa-solid fa-square"></i> Estamos listos
                    para apoyar tu proyecto
                </h6>
                <ul
                    class="list-unstyled"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                >
                    <li class="mb-4">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="tel:+19152270023"
                                    >+1 (915) 227-0023</a
                                >
                            </li>
                            <li class="list-inline-item">
                                <a href="tel:+526142582020"
                                    >+52 (614) 258-2020</a
                                >
                            </li>
                            <li class="list-inline-item">
                                <a href="tel:+526142816225"
                                    >+52 (614) 281-6225</a
                                >
                            </li>
                        </ul>
                    </li>
                    <li class="mb-4">
                        <a href="mailto:ventas@jgsolutions.mx"
                            >ventas@jgsolutions.mx</a
                        >
                    </li>
                    <li class="mb-4">
                        <address>
                            Sector 103 Parcela 254 Z-7 P 1/2 6802<br />
                            Ejido Rancho de Enmedio<br />
                            Chihuahua, Chih. México<br />
                            C.P. 31117
                        </address>
                    </li>
                </ul>
                <img
                    class="img-fluid"
                    src="<?php echo esc_url(
                        get_template_directory_uri(),
                    ); ?>/assets/images/logo-jumbotron.png"
                    alt=""
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="400"
                />
            </div>
        </div>
    </div>
</section>

<section class="py-30">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-6 my-auto">
                <img
                    class="img-fluid mb-4 mb-md-0"
                    src="<?php echo esc_url(
                        get_template_directory_uri(),
                    ); ?>/assets/images/thumb-contacto.png"
                    alt=""
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"
                />
            </div>
            <div class="col-md-6 my-auto">
                <h6
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"
                >
                    <i class="fa-solid fa-square"></i> Estamos listos
                    para apoyar tu proyecto
                </h6>
                <p
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                >
                    Compártenos la información de tu proyecto y nuestro
                    equipo técnico te contactará para brindarte una
                    propuesta clara, competitiva y alineada a tus
                    necesidades.
                </p>

                <form
                    action="<?php echo esc_url(
                        get_template_directory_uri(),
                    ); ?>/mailer.php"
                    method="POST"
                    class="row needs-validation contact-form mt-4"
                    id="ajax-contact"
                    novalidate
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="400"
                >
                    <div class="col-md-12 form-floating mb-4">
                        <input
                            type="text"
                            class="form-control shadow-none"
                            id="nombre"
                            name="nombre"
                            placeholder="Nombre completo*"
                            pattern=".{5,50}"
                            required
                        />
                        <label for="nombre" class="form-label"
                            >Nombre completo*</label
                        >
                        <div class="valid-feedback">
                            ¡Se ve bien!
                        </div>
                        <div class="invalid-feedback">
                            Por favor introduce tu nombre completo.
                        </div>
                    </div>
                    <div class="col-md-6 form-floating mb-4">
                        <input
                            type="text"
                            class="form-control shadow-none"
                            id="empresa"
                            name="empresa"
                            placeholder="Empresa"
                        />
                        <label for="empresa" class="form-label"
                            >Empresa</label
                        >
                        <div class="valid-feedback">
                            ¡Se ve bien!
                        </div>
                        <div class="invalid-feedback">
                            Por favor introduce tu empresa.
                        </div>
                    </div>
                    <div class="col-md-6 form-floating mb-4">
                        <input
                            type="text"
                            class="form-control shadow-none"
                            id="cargo"
                            name="cargo"
                            placeholder="Cargo"
                        />
                        <label for="cargo" class="form-label"
                            >Cargo</label
                        >
                        <div class="valid-feedback">
                            ¡Se ve bien!
                        </div>
                        <div class="invalid-feedback">
                            Por favor introduce tu cargo.
                        </div>
                    </div>
                    <div class="col-md-12 form-floating mb-4">
                        <input
                            type="email"
                            class="form-control shadow-none"
                            id="correo"
                            name="correo"
                            placeholder="Correo electrónico*"
                            required
                        />
                        <label for="correo" class="form-label"
                            >Correo electrónico*</label
                        >
                        <div class="valid-feedback">
                            ¡Se ve bien!
                        </div>
                        <div class="invalid-feedback">
                            Por favor introduce una dirección de
                            correo válida.
                        </div>
                    </div>
                    <div class="col-md-6 form-floating mb-4">
                        <input
                            type="tel"
                            class="form-control shadow-none"
                            id="telefono"
                            name="telefono"
                            placeholder="Teléfono*"
                            required
                        />
                        <label for="telefono" class="form-label"
                            >Teléfono*</label
                        >
                        <div class="valid-feedback">
                            ¡Se ve bien!
                        </div>
                        <div class="invalid-feedback">
                            Por favor introduce un número de
                            teléfono válido.
                        </div>
                    </div>
                    <div class="col-md-6 form-floating mb-4">
                        <select
                            class="form-select form-control shadow-none"
                            id="pais"
                            name="pais"
                            aria-label="Selecciona tu país"
                            required
                        >
                            <option value="" selected disabled>
                                Selecciona tu país
                            </option>
                            <option value="Afganistán">
                                Afganistán
                            </option>
                            <option value="Albania">Albania</option>
                            <option value="Alemania">
                                Alemania
                            </option>
                            <option value="Argentina">
                                Argentina
                            </option>
                            <option value="Australia">
                                Australia
                            </option>
                            <option value="Austria">Austria</option>
                            <option value="Bélgica">Bélgica</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Brasil">Brasil</option>
                            <option value="Canadá">Canadá</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Colombia">
                                Colombia
                            </option>
                            <option value="Corea del Sur">
                                Corea del Sur
                            </option>
                            <option value="Costa Rica">
                                Costa Rica
                            </option>
                            <option value="Cuba">Cuba</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="El Salvador">
                                El Salvador
                            </option>
                            <option value="España">España</option>
                            <option value="Estados Unidos">
                                Estados Unidos
                            </option>
                            <option value="Francia">Francia</option>
                            <option value="Guatemala">
                                Guatemala
                            </option>
                            <option value="Honduras">
                                Honduras
                            </option>
                            <option value="India">India</option>
                            <option value="Italia">Italia</option>
                            <option value="Japón">Japón</option>
                            <option value="México">México</option>
                            <option value="Nicaragua">
                                Nicaragua
                            </option>
                            <option value="Panamá">Panamá</option>
                            <option value="Paraguay">
                                Paraguay
                            </option>
                            <option value="Perú">Perú</option>
                            <option value="Portugal">
                                Portugal
                            </option>
                            <option value="República Dominicana">
                                República Dominicana
                            </option>
                            <option value="Reino Unido">
                                Reino Unido
                            </option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Venezuela">
                                Venezuela
                            </option>
                        </select>
                        <label for="pais">País</label>
                        <div class="valid-feedback">
                            ¡Se ve bien!
                        </div>
                        <div class="invalid-feedback">
                            Por favor selecciona tu país.
                        </div>
                    </div>
                    <div class="col-md-12 form-floating mb-4">
                        <textarea
                            class="form-control shadow-none"
                            id="mensaje"
                            name="mensaje"
                            placeholder="Información del proyecto*"
                            style="height: 100px"
                            required
                        ></textarea>
                        <label for="mensaje"
                            >Información del proyecto*</label
                        >
                        <div class="valid-feedback">
                            ¡Se ve bien!
                        </div>
                        <div class="invalid-feedback">
                            Por favor introduce la información
                            relevante del proyecto.
                        </div>
                    </div>
                    <div class="col-md-6 my-auto">
                        <div id="hold-on-a-sec">
                            <i
                                id="contact-spinner"
                                class="fas fa-spinner fa-spin"
                            ></i>
                            Por favor espera..
                        </div>
                    </div>
                    <div class="col-12 text-end">
                        <button
                            type="submit"
                            class="btn btn-primary btn-lg btn-block"
                        >
                            Solicitar cotización
                        </button>
                    </div>
                    <div class="col-12">
                        <div id="form-messages" class="mt-4"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
