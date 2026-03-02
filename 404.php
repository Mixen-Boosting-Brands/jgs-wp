<?php get_header(); ?>

<?php $fallback = get_template_directory_uri() . "/assets/images/bg-j-3.png"; ?>

<section
    id="jumbotron"
    style="background-image: url('<?php echo esc_url($fallback); ?>');"
>
    <div class="container">
        <div class="row d-flex align-items-end">
            <div class="col-12">
                <h1
                    class="display-4"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                >
                    404
                </h1>

                <p
                    class="mt-3"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                >
                    La página que buscas no existe o fue movida.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="pt-60 pb-60 text-center">
    <div class="container">
        <div
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="300"
        >
            <a href="<?php echo esc_url(
                home_url(),
            ); ?>" class="btn btn-primary">
                Volver al inicio
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
