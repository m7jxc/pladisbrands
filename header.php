<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width">
    <!-- favicons -->
    <link rel="shortcut icon" href="/wp-content/themes/isak/images/favicon.png">
    <link rel="apple-touch-icon" href="/wp-content/themes/isak/images/favicon.png">
    <meta name="google-site-verification" content="ds-Nv4g-IDmG_JNh6lU2lkiHnaHxQ0w7FEXMYD6qwx4" />
    <meta name="yandex-verification" content="e7c29e2edcf63f3f" />

    <!-- Google Tag Manager -->
    <!-- <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MGL46K8');
    </script> -->
    <!-- End Google Tag Manager -->

    <!-- Yandex.Metrika counter -->
    <!-- <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
        ym(62099062, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });
    </script> 
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/62099062" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>  -->
    <!-- /Yandex.Metrika counter -->


    <?php wp_head(); ?>

</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MGL46K8" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- page -->
    <div id="page">
        <!-- top -->
        <div id="top-w" class="top-w ani-1">
            <div id="top">
                <a href="<?=home_url(); ?>" class="logo"></a>
                <div class="menu-trigger"><span></span><span></span><span></span></div>
                <p class="pt-1"><span><?php the_field('zagolovok_nash_adres', 'option'); ?></span><br><?php the_field('adres', 'option'); ?></p>
                <p class="pt-2"><span><?php the_field('zagolovok', 'option'); ?></span><br><a href="tel:<?php the_field('telefon_1_ssylka', 'option'); ?>"><?php the_field('telefon_1_tekst', 'option'); ?></a><br><a href="tel:<?php the_field('telefon_2_ssylka', 'option'); ?>"><?php the_field('telefon_2_tekst', 'option'); ?></a> (Офис)</p>
                <a href="<?php the_field('ssylka_na_sertifikaty_i_rekomendaczii', 'option'); ?>" target="_blank" class="pt-3"><span><?php the_field('zagolovok_smotret_sertifikaty', 'option'); ?></span><br><?php the_field('podzagolovok_sertifikaty', 'option'); ?></a>
                <div class="clear"></div>
            </div>
        </div>
        <!-- menu -->
        <div id="menu-w" class="menu-w ani-menu d25s">
            <div id="menu">
                <?php if ($menu_items = wp_get_nav_menu_items('top')) { // "Меню для шапки" - это название моего меню. Вы можете также использовать ID или ярлык
                    $menu_list = '';
                    foreach ((array) $menu_items as $key => $menu_item) {
                        $title = $menu_item->title; // заголовок элемента меню (анкор ссылки)
                        $url = $menu_item->url; // URL ссылки
                        $menu_list .= '<a href="' . $url . '" class="menu">' . $title . '</a>';
                    }
                    echo $menu_list;
                } ?>
                <script type="text/javascript">
                    try {
                        var el = document.getElementById('menu').getElementsByTagName('a');
                        var url = document.location.href;
                        for (var i = 0; i < el.length; i++) {
                            if (url == el[i].href) {
                                el[i].className += ' active-menu';
                            };
                        };
                    } catch (e) {}
                </script>
                <div class="clear"></div>
                <p class="pm-1"><span><?php the_field('zagolovok_nash_adres', 'option'); ?></span><br><?php the_field('adres', 'option'); ?></p>
                <p class="pm-2"><span><?php the_field('zagolovok', 'option'); ?></span><br><a href="tel:<?php the_field('telefon_1_ssylka', 'option'); ?>"><?php the_field('telefon_1_tekst', 'option'); ?></a><br><a href="tel:<?php the_field('telefon_2_ssylka', 'option'); ?>"><?php the_field('telefon_2_tekst', 'option'); ?></a> (Офис)</p>
                <a href="<?php the_field('ssylka_na_sertifikaty_i_rekomendaczii', 'option'); ?>" target="_blank" class="pm-3"><span><?php the_field('zagolovok_smotret_sertifikaty', 'option'); ?></span><br><?php the_field('podzagolovok_sertifikaty', 'option'); ?></a>
                <div class="clear"></div>
            </div>
        </div>