<?php get_header(); ?>

<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>

<?php
$fallback = get_template_directory_uri() . "/assets/images/bg-j-3.png";

$bg_image = has_post_thumbnail()
    ? get_the_post_thumbnail_url(get_the_ID(), "full")
    : $fallback;
?>

<section
    id="jumbotron"
    style="background-image: url('<?php echo esc_url($bg_image); ?>');"
>
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-flex align-items-end">
            <div class="col-12">
                <h1
                    class="display-4"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                >
                    <?php the_title(); ?>
                </h1>
            </div>
        </div>
    </div>
</section>

<section class="pt-60 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="300"
                >
                    <?php the_content(); ?>
                </div>

                <div class="mt-5">
                    <?php the_tags(
                        "<p><strong>Tags:</strong> ",
                        ", ",
                        "</p>",
                    ); ?>
                </div>

            </div>
        </div>
    </div>
</section>

<?php
    endwhile;
endif; ?>

<?php get_footer(); ?>
