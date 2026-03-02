<!doctype html>
<html <?php language_attributes(); ?> data-bs-theme="light">
	<head>
        <meta charset="<?php bloginfo("charset"); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="<?php bloginfo("description"); ?>">
        <title><?php
        wp_title("");
        if (wp_title("", false)) {
            echo " - ";
        }
        bloginfo("name");
        ?></title>

        <link
            rel="icon"
            type="image/png"
            href="<?php echo esc_url(
                get_template_directory_uri(),
            ); ?>/favicon-96x96.png"
            sizes="96x96"
        />
        <link rel="icon" type="image/svg+xml" href="<?php echo esc_url(
            get_template_directory_uri(),
        ); ?>/favicon.svg" />
        <link rel="shortcut icon" href="<?php echo esc_url(
            get_template_directory_uri(),
        ); ?>/favicon.ico" />
        <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="<?php echo esc_url(
                get_template_directory_uri(),
            ); ?>/apple-touch-icon.png"
        />
        <meta name="apple-mobile-web-app-title" content="JGS" />
        <link rel="manifest" href="<?php echo esc_url(
            get_template_directory_uri(),
        ); ?>/site.webmanifest" />

        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo(
            "name",
        ); ?>" href="<?php bloginfo("rss2_url"); ?>" />

        <link rel="stylesheet" href="<?php echo esc_url(
            get_template_directory_uri(),
        ); ?>/assets/css/styles.css" />

        <?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
 <div id="backdrop"></div>
        <div class="menu">
            <a id="cerrar-menu" href="javascript:void(0)">
                <i class="fas fa-times"></i>
            </a>
            <div class="menu-contenido">
                <a class="anchor" id="btn-logo" href="<?php echo esc_url(
                    home_url(),
                ); ?>">
                    <img
                        class="logo img-fluid"
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
                    />
                </a>
                <nav>
                    <ul id="navmenu" class="list-unstyled mb-0">
                        <li>
                            <a href="<?php echo esc_url(get_permalink(6)); ?>">
                                <?php echo esc_html(get_the_title(6)); ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(get_permalink(8)); ?>">
                                <?php echo esc_html(get_the_title(8)); ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(get_permalink(10)); ?>">
                                <?php echo esc_html(get_the_title(10)); ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(get_permalink(12)); ?>">
                                <?php echo esc_html(get_the_title(12)); ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(get_permalink(14)); ?>">
                                <?php echo esc_html(get_the_title(14)); ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(get_permalink(16)); ?>">
                                <?php echo esc_html(get_the_title(16)); ?>
                            </a>
                        </li>
                    </ul>
                </nav>
                <a href="<?php echo esc_url(get_permalink(18)); ?>"
                   class="anchor btn btn-primary"
                   id="btn-contacto">
                    <?php echo esc_html(get_the_title(18)); ?>
                </a>
            </div>
        </div>

        <header id="navbar">
            <div class="container">
                <div class="row">
                    <div class="col-4 col-md-3 my-auto">
                        <a href="<?php echo esc_url(home_url()); ?>">
                            <img
                                id="logo-navbar"
                                class="logo img-fluid"
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
                            />
                        </a>
                    </div>
                    <div class="col-8 col-md-9 my-auto text-end">
                        <nav class="d-none d-lg-block">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a <?php if (
                                        is_page(6)
                                    ): ?>class="active"<?php endif; ?> href="<?php echo esc_url(
     get_permalink(6),
 ); ?>">
                                        <?php echo esc_html(
                                            get_the_title(6),
                                        ); ?>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a <?php if (
                                        is_page(8)
                                    ): ?>class="active"<?php endif; ?> href="<?php echo esc_url(
     get_permalink(8),
 ); ?>">
                                        <?php echo esc_html(
                                            get_the_title(8),
                                        ); ?>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a <?php if (
                                        is_page(10)
                                    ): ?>class="active"<?php endif; ?> href="<?php echo esc_url(
     get_permalink(10),
 ); ?>">
                                        <?php echo esc_html(
                                            get_the_title(10),
                                        ); ?>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a <?php if (
                                        is_page(12)
                                    ): ?>class="active"<?php endif; ?> href="<?php echo esc_url(
     get_permalink(12),
 ); ?>">
                                        <?php echo esc_html(
                                            get_the_title(12),
                                        ); ?>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a <?php if (
                                        is_page(14)
                                    ): ?>class="active"<?php endif; ?> href="<?php echo esc_url(
     get_permalink(14),
 ); ?>">
                                        <?php echo esc_html(
                                            get_the_title(14),
                                        ); ?>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a <?php if (
                                        is_page(16)
                                    ): ?>class="active"<?php endif; ?> href="<?php echo esc_url(
     get_permalink(16),
 ); ?>">
                                        <?php echo esc_html(
                                            get_the_title(16),
                                        ); ?>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn btn-primary" href="<?php echo esc_url(
                                        get_permalink(18),
                                    ); ?>">
                                        <?php echo esc_html(
                                            get_the_title(18),
                                        ); ?>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <a
                            id="mburger"
                            class="d-lg-none"
                            href="javascript:void(0)"
                        >
                            <i class="fas fa-bars"></i>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <hr class="mb-0" />
                    </div>
                </div>
            </div>
        </header>
