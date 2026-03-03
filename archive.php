<?php get_header(); ?>

<section class="pt-60 pb-30">
    <div class="container">

        <!-- Título del archive -->
        <div class="row mb-4">
            <div class="col-12">
                <h6 data-aos="fade-up" data-aos-duration="1000">
                    <i class="fa-solid fa-square"></i>
                    <?php post_type_archive_title(); ?>
                </h6>
            </div>
        </div>

        <div class="row">

            <?php if (have_posts()): ?>
                <?php $delay = 200; ?>

                <?php while (have_posts()):
                    the_post(); ?>

                    <div class="col-6 col-lg-4 d-flex">
                        <div
                            class="card card-contenido w-100 mb-4"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="<?php echo esc_attr($delay); ?>"
                        >

                            <a class="img-link" href="<?php the_permalink(); ?>">

                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail("medium", [
                                        "class" => "card-img-top",
                                        "alt" => get_the_title(),
                                    ]); ?>
                                <?php else: ?>
                                    <img
                                        src="<?php echo esc_url(
                                            get_template_directory_uri(),
                                        ); ?>/assets/images/placeholder.png"
                                        class="card-img-top"
                                        alt="<?php the_title(); ?>"
                                    />
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

                    <?php $delay += 200; ?>

                <?php
                endwhile; ?>

            <?php else: ?>

                <div class="col-12">
                    <p>No hay proyectos disponibles por el momento.</p>
                </div>

            <?php endif; ?>

        </div>

        <!-- Paginación -->
        <div class="row mt-4">
            <div class="col-12 text-center">
                <?php echo paginate_links([
                    "prev_text" => "«",
                    "next_text" => "»",
                ]); ?>
            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>
