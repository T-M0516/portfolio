<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Webデザイナー高根澤桃花のポートフォリオサイト" />
    <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('./images/favicon01.ico')); ?>">

    <?php wp_head(); ?>

    <script>
        (function(d) {
            var config = {
                    kitId: 'hwl8xjd',
                    scriptTimeout: 3000,
                    async: true
                },
                h = d.documentElement,
                t = setTimeout(function() {
                    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                }, config.scriptTimeout),
                tk = d.createElement("script"),
                f = false,
                s = d.getElementsByTagName("script")[0],
                a;
            h.className += " wf-loading";
            tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
            tk.async = true;
            tk.onload = tk.onreadystatechange = function() {
                a = this.readyState;
                if (f || a && a != "complete" && a != "loaded") return;
                f = true;
                clearTimeout(t);
                try {
                    Typekit.load(config)
                } catch (e) {}
            };
            s.parentNode.insertBefore(tk, s)
        })(document);
    </script>
</head>

<body id="top" <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="loading">
        <div id="loading-circle">
            <img src="<?php echo esc_url(get_theme_file_uri('./images/logo01.svg')); ?>" alt="<?php bloginfo('name'); ?>">
        </div>
    </div>

    <header class="header-container">
        <a class="header-logo" href="<?php echo esc_url(home_url()); ?>">
            <img src="<?php echo esc_url(get_theme_file_uri('./images/logo01.svg')); ?>" alt="<?php bloginfo('name'); ?>">
        </a>
        <div class="nav-btn">
            <span></span><span></span>
        </div>
    </header>


    <div class="g-nav-bgc">
    </div>

    <nav id="g-nav">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'main-menu',
                'container' => '',
                'menu_class' => 'g-nav-list'
            )
        );
        ?>
    </nav>