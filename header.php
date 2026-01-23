<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    // Set up title structure based on language and page context
    // $site_name = 'MIEscape';
    // $lang = function_exists('pll_current_language') ? pll_current_language() : 'en';

    // // Set defaults
    // $title = $site_name;

    // Get page type
    if (is_front_page() || is_home()) {
        $title = 'Wellforce | Wellbeing for the Future';
    }
    // elseif (is_singular('plan')) {
    //     // Experience single
    //     if (have_posts()) : while (have_posts()) : the_post();
    //             $post_title = get_the_title();
    //         endwhile;
    //     endif;
    //     if ($lang === 'ja') {
    //         $title = $post_title . '｜体験プラン｜' . $site_name;
    //     } elseif ($lang === 'zh') {
    //         $title = $post_title . '｜體驗行程｜' . $site_name;
    //     } elseif ($lang === 'en') {
    //         $title = $post_title . ' | Experiences | ' . $site_name;
    //     }
    // } elseif (is_post_type_archive('plan')) {
    //     if ($lang === 'ja') {
    //         $title = '体験プラン一覧｜' . $site_name;
    //     } elseif ($lang === 'zh') {
    //         $title = '體驗行程一覽｜' . $site_name;
    //     } elseif ($lang === 'en') {
    //         $title = 'Experiences | ' . $site_name;
    //     }
    // } elseif (is_singular('tour')) {
    //     if (have_posts()) : while (have_posts()) : the_post();
    //             $post_title = get_the_title();
    //         endwhile;
    //     endif;
    //     if ($lang === 'ja') {
    //         $title = $post_title . '｜注目のツアー｜' . $site_name;
    //     } elseif ($lang === 'zh') {
    //         $title = $post_title . '｜人氣推薦行程｜' . $site_name;
    //     } elseif ($lang === 'en') {
    //         $title = $post_title . ' | Tour | ' . $site_name;
    //     }
    // } elseif (is_post_type_archive('tour')) {
    //     if ($lang === 'ja') {
    //         $title = '注目のツアー｜' . $site_name;
    //     } elseif ($lang === 'zh') {
    //         $title = '人氣推薦行程｜' . $site_name;
    //     } elseif ($lang === 'en') {
    //         $title = 'Tours | ' . $site_name;
    //     }
    // } elseif (is_page('about') || is_page('about-ja') || is_page('about-zh') || is_page('about-en')) {
    //     if ($lang === 'ja') {
    //         $title = 'ミエスケープについて｜' . $site_name;
    //     } elseif ($lang === 'zh') {
    //         $title = '關於 MIEscape｜' . $site_name;
    //     } elseif ($lang === 'en') {
    //         $title = 'About | ' . $site_name;
    //     }
    // } elseif (is_404()) {
    //     if ($lang === 'ja') {
    //         $title = 'ページが見つかりません｜' . $site_name;
    //     } elseif ($lang === 'zh') {
    //         $title = '找不到頁面｜' . $site_name;
    //     } elseif ($lang === 'en') {
    //         $title = 'Page Not Found | ' . $site_name;
    //     }
    // } else {
    //     // Otherwise default WP title
    //     $title = wp_get_document_title();
    // }
    ?>

    <title><?php echo esc_html($title); ?></title>
    <link
        href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@300;400;500;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <link href="<?php echo T_DIRE_URI; ?>/assets/css/swiper.css" rel="stylesheet" />
    <link href="<?php echo T_DIRE_URI; ?>/assets/css/font.css" rel="stylesheet" />
    <link href="<?php echo T_DIRE_URI; ?>/assets/css/main.css" rel="stylesheet" />
    <link href="<?php echo T_DIRE_URI; ?>/assets/css/aos.css" rel="stylesheet" />

    <script src="<?php echo T_DIRE_URI; ?>/assets/css/tailwind.css"></script>

    <script src="<?php echo T_DIRE_URI; ?>/assets/js/swiper-bundle.min.js"></script>
    <script src="<?php echo T_DIRE_URI; ?>/assets/js/simpleParallax.min.js"></script>
    <script src="<?php echo T_DIRE_URI; ?>/assets/js/main.js"></script>
    <script src="<?php echo T_DIRE_URI; ?>/assets/js/aos.js"></script>

    <?php wp_head(); ?>

    <style>
        *,
        body {
            font-family: "Zen Maru Gothic", sans-serif;
        }

        @media (min-width: 1536px) {
            .fv-left-725 {
                left: 725px !important;
            }
        }

        /* Brand Swiper - Smooth continuous scrolling */
        .swiper-brands .swiper-wrapper,
        .swiper-brands02 .swiper-wrapper,
        .swiper-company-brands01 .swiper-wrapper,
        .swiper-company-brands02 .swiper-wrapper {
            transition-timing-function: linear !important;
        }

        .swiper-brands .swiper-slide,
        .swiper-brands02 .swiper-slide,
        .swiper-company-brands01 .swiper-slide,
        .swiper-company-brands02 .swiper-slide {
            width: auto;
        }
    </style>
</head>

<body class="relative">
    <header
        data-is-front-page="<?php echo (is_front_page() || is_home()) ? 'true' : 'false'; ?>"
        data-is-single-news="<?php echo (is_singular('news')) ? 'true' : 'false'; ?>"
        class="fixed max-w-[1400px] md:left-1/2 md:-translate-x-1/2 top-0 md:top-4 lg:top-6 xl:top-8 w-full md:w-[90%] lg:w-[95%] xl:w-full top-0 z-50 bg-white hover:bg-[#e2f5ffb3] transition-colors duration-200 rounded-none md:rounded-[20px]">
        <div
            class="max-w-[1440px] w-full flex flex-row justify-between items-center px-5 md:px-12 lg:px-20 xl:px-32 py-3 md:py-5 lg:py-7 xl:py-9">
            <a
                href="<?php echo home_url(); ?>"
                class="flex items-center gap-3 cursor-pointer select-none">
                <div
                    class="relative flex md:flex-col gap-2 md:gap-1 lg:gap-2 xl:gap-3 items-center justify-center">
                    <img
                        src="<?php echo T_DIRE_URI; ?>/assets/images/logo_h.png"
                        alt="Wellforse Logo"
                        class="hidden md:block w-[70px] md:w-[60px] lg:w-[90px] xl:w-[100px] object-contain" />
                    <img
                        src="<?php echo T_DIRE_URI; ?>/assets/images/logo_sp.png"
                        alt="Wellforse Logo"
                        class="block md:hidden w-[150px] object-contain" />
                </div>
            </a>
            <nav
                class="hidden md:flex flex-col gap-[2px] md:gap-1 lg:gap-2 xl:gap-3">
                <div class="grid grid-cols-4 gap-6 lg:gap-8 xl:gap-10 justify-end">
                    <a
                        href="<?php echo home_url('/'); ?>"
                        class="text-black text-[13px] lg:text-[14px] xl:text-[16px] text-right font-medium hover:text-[#28A8E0] transition-colors duration-200">
                        トップページ
                    </a>
                    <a
                        href="<?php echo home_url('/company'); ?>"
                        class="text-black text-[13px] lg:text-[14px] xl:text-[16px] text-right font-medium hover:text-[#28A8E0] transition-colors duration-200">
                        会社概要
                    </a>
                    <a
                        href="<?php echo home_url('/concept'); ?>"
                        class="text-black text-[13px] lg:text-[14px] xl:text-[16px] text-right font-medium hover:text-[#28A8E0] transition-colors duration-200">
                        コンセプト
                    </a>
                    <a
                        href="<?php echo home_url('/contact'); ?>"
                        class="text-black text-[13px] lg:text-[14px] xl:text-[16px] text-right font-medium hover:text-[#28A8E0] transition-colors duration-200">
                        お問い合わせ
                    </a>
                </div>
                <div class="grid grid-cols-4 gap-6 lg:gap-8 xl:gap-10 justify-end">
                    <a
                        href="<?php echo home_url('/service'); ?>"
                        class="text-black text-[13px] lg:text-[14px] xl:text-[16px] text-right font-medium hover:text-[#28A8E0] transition-colors duration-200">
                        サービス
                    </a>
                    <a
                        href="<?php echo home_url('/news'); ?>"
                        class="text-black text-[13px] lg:text-[14px] xl:text-[16px] text-right font-medium hover:text-[#28A8E0] transition-colors duration-200">
                        ニュース
                    </a>
                    <a
                        href="<?php echo home_url('/calendar'); ?>"
                        class="text-black text-[13px] lg:text-[14px] xl:text-[16px] text-right font-medium hover:text-[#28A8E0] transition-colors duration-200">
                        カレンダー
                    </a>
                    <a
                        href="<?php echo home_url('/announcement'); ?>"
                        class="text-black text-[13px] lg:text-[14px] xl:text-[16px] text-right font-medium hover:text-[#28A8E0] transition-colors duration-200">
                        お知らせ
                    </a>
                </div>
            </nav>
            <div class="flex items-center md:hidden">
                <div
                    id="hamburgerBtn"
                    class="relative flex justify-center flex-col text-white w-[37px] h-[20px] cursor-pointer">
                    <div
                        class="flex flex-col items-center justify-between w-full h-full">
                        <div class="h-[1px] w-full bg-black"></div>
                        <div class="h-[1px] w-full bg-black"></div>
                        <div class="h-[1px] w-full bg-black"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>