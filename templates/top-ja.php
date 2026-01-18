<?php
get_header();
?>

<style>
    * {
        font-family: "Zen Old Mincho", serif;
    }
</style>

<div class="font-mincho">
    <section class="relative h-[667px] md:h-[700px] lg:h-[800px] xl:h-[1080px] overflow-hidden">
        <!-- Video Background -->
        <video
            class="absolute inset-0 w-full h-full object-cover"
            src="<?php echo T_DIRE_URI; ?>/assets/videos/mv.mp4"
            autoplay
            muted
            loop
            playsinline
            webkit-playsinline
            preload="auto">
        </video>
        <!-- Overlaying Content -->
        <div
            class="z-50 flex md:flex-col justify-between items-center md:items-start gap-6 fixed top-[30px] md:top-[80px] lg:top-[100px]
             xl:top-[115px] left-[40px] md:left-[60px] lg:left-[100px] xl:left-[140px] md:max-w-[116.67px] md:h-[280px] lg:h-[300px] xl:h-[420px] max-h-[420px]">
            <div id="hamburgerBtn"
                class="relative flex md:hidden flex-col text-white justify-between w-[30px] h-[20px]">
                <div class="h-[1px] w-full bg-white"></div>
                <div class="h-[1px] w-full bg-white"></div>
                <div class="h-[1px] w-full bg-white"></div>
            </div>
            <div class="relative md:mb-4 z-10 select-none">
                <div
                    class="relative group w-[48px] lg:w-[52px] xl:w-[58px] text-[11.87px] lg:text-[12.87px] xl:text-[14.87px]">
                    <button
                        class="w-[48px] lg:w-[52px] xl:w-[58px] h-[28.21px] lg:h-[30.21px] xl:h-[34.21px] flex items-center justify-center bg-[#CDD3D6] text-[#0B1828] z-10 hover:bg-white hover:underline hover:underline-offset-[6px] hover:decoration-[#0B1828] focus:outline-none">
                        日本語
                    </button>
                    <div
                        class="langMenuList font-garamond flex flex-col w-[48px] lg:w-[52px] xl:w-[58px] absolute left-0 top-[28.21px] lg:top-[30.21px] xl:top-[34.21px] opacity-0 group-hover:opacity-100 group-hover:pointer-events-auto pointer-events-none transition-opacity duration-200 z-20">
                        <a href="<?php echo esc_url(home_url('/en/')); ?>"
                            class="w-[48px] lg:w-[52px] xl:w-[58px] h-[28.21px] lg:h-[30.21px] xl:h-[34.21px] flex items-center justify-center bg-[#CDD3D6] text-[#0B1828] transition hover:bg-white hover:underline hover:underline-offset-[6px] hover:decoration-[#0B1828]">
                            English
                        </a>
                        <a href="<?php echo esc_url(home_url('/zh/')); ?>"
                            class="w-[48px] lg:w-[52px] xl:w-[58px] h-[28.21px] lg:h-[30.21px] xl:h-[34.21px] flex items-center justify-center bg-[#CDD3D6] text-[#0B1828] transition hover:bg-white hover:underline hover:underline-offset-[6px] hover:decoration-[#0B1828]">
                            繁體字
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="hidden md:flex flex-col hidden justify-between h-[180px] lg:h-[200px] xl:h-[250px] text-white text-[9px] sm:text-[12px] md:text-[16px] lg:text-[18px] xl:text-[20px] text-left leading-[1.8]  ">
                <?php
                $lang = pll_current_language();

                if ($lang === 'ja') {
                    $base = '/';
                } elseif ($lang === 'en') {
                    $base = '/en/';
                } elseif ($lang === 'zh') {
                    $base = '/zh/';
                } else {
                    $base = '/';
                }
                ?>
                <a href="<?php echo esc_url(home_url($base)); ?>" class="font-garamond hover:opacity-60 transition-opacity duration-200">Top</a>
                <a href="<?php echo esc_url(home_url($base . 'plan')); ?>"><span class="font-garamond hover:opacity-60 transition-opacity duration-200">Experiences</span></a>
                <a href="<?php echo esc_url(home_url($base . 'tour')); ?>"><span class="font-garamond hover:opacity-60 transition-opacity duration-200">Tour</span></a>
                <a href="<?php echo esc_url(home_url($base . 'about')); ?>"><span class="font-garamond hover:opacity-60 transition-opacity duration-200">About</span></a>
            </div>

        </div>
        <div class="relative flex justify-center w-full h-full px-8 z-[1]">
            <div
                class="flex flex-col gap-4 xl:gap-6 w-[295px] md:w-[300px] lg:w-[450px] xl:w-[600px] max-w-[600px] mx-auto pt-[65vh] z-10">
                <h2 class="font-garamond text-white text-[50px] md:text-[28px] lg:text-[52px] xl:text-[70px]">MIEscape</h2>
                <hr>
                <h3 class="text-white text-[16px] md:text-[15px] xl:text-[23px] opacity-70 tracking-wider text-right">
                    伊勢志摩での特別な体験へ、ご招待
                </h3>
            </div>
        </div>
        <div
            class="absolute inset-0 bg-[url('<?php echo T_DIRE_URI; ?>/assets/images/window_sp.webp')] md:bg-[url('<?php echo T_DIRE_URI; ?>/assets/images/window.webp')] bg-cover bg-center pointer-events-none">
        </div>
    </section>
    <section
        class="flex justify-center px-[20px] p-[80px] lg:p-[140px] bg-[url('<?php echo T_DIRE_URI; ?>/assets/images/bg01_sp.webp')] md:bg-[url('<?php echo T_DIRE_URI; ?>/assets/images/bg01.webp')] bg-cover bg-center">
        <div
            class="flex flex-col max-w-[380px] gap-[40px] lg:gap-[50px] xl:gap-[60px] md:mr-[100px] lg:mr-[200px] xl:mr-[300px]">
            <h1 class="text-white text-[28px] lg:text-[36px] xl:text-[40px]">
                <span class="text-[20px] lg:text-[24px] xl:text-[28px] block">日本の</span>
                知られざる物語
                <span class="text-[20px] lg:text-[24px] xl:text-[28px] block">への旅</span>
            </h1>
            <p class="text-white text-[12px] lg:text-[13px] xl:text-[17px] leading-[2] pb-8">
                日常の喧騒から離れ、<br>
                あなたの心に語りかけるような風景を求めて旅に出ませんか。<br>
                MIEscapeは、まだ知られていない日本の物語にあなたを招待します。
            </p>
        </div>
    </section>
    <section class="max-h-[750px] group relative overflow-hidden parallax-section">
        <div
            class="parallax-bg hidden md:block absolute top-0 left-0 w-full h-full bg-[url('<?php echo T_DIRE_URI; ?>/assets/images/bg02.webp')] bg-cover bg-center parallax-img -z-10">
        </div>
        <div
            class="parallax-bg md:hidden block absolute top-0 left-0 w-full h-full bg-[url('<?php echo T_DIRE_URI; ?>/assets/images/bg02_sp.webp')] bg-cover bg-center parallax-img -z-10">
        </div>
        <div class="relative w-full h-[300px] md:h-[750px]"></div>
    </section>
    <section
        class="relative md:h-[550px] h-[670px] lg:h-[717px] xl:h-[1100px] 2xl:h-[1340px] flex justify-center pt-[70px] px-[48px] md:p-[80px] lg:p-[100px] xl:p-[140px] bg-[url('<?php echo T_DIRE_URI; ?>/assets/images/bg03_sp.webp')] md:bg-[url('<?php echo T_DIRE_URI; ?>/assets/images/bg03.webp')] bg-cover bg-center bg-no-repeat">
        <div class="flex flex-col max-w-[380px] gap-[60px] md:ml-[300px]">
            <p class="text-white text-[12px] lg:text-[14px] xl:text-[17px] leading-[2] text-right">
                ここは神々が宿る神聖な領域。<br class="md:block hidden">
                自然と人々の歴史が美しく共存する地。<br class="md:block hidden">
                日常の旅では気づかない、<br class="md:block hidden">
                本物の日本を探してみてください。<br class="md:block hidden">
            </p>
        </div>
    </section>
    <section
        class="w-full flex justify-center px-[30px] py-[40px] md:p-[40px] lg:p-[120px] xl:p-[140px] bg-[url('<?php echo T_DIRE_URI; ?>/assets/images/bg_experience.webp')] md:bg-[url('<?php echo T_DIRE_URI; ?>/assets/images/bg_experience.webp')] bg-cover bg-center">
        <div class="flex flex-col max-w-[1000px] gap-[60px] mx-auto w-full">
            <div class="flex flex-col gap-4 xl:gap-6 w-full mb-4">
                <h2 class="text-white text-[30px] md:text-[28px] lg:text-[32px] xl:text-[34px]">体験</h2>
                <hr>
                <h3 class="font-garamond text-white text-[13px] md:text-[15px] xl:text-[23px] opacity-70 tracking-wider text-right">
                    MIEscape original tours
                </h3>
            </div>
            <div class="exp_swiper swiper-container justify-between w-full mx-auto overflow-hidden">
                <div class="swiper-wrapper">

                    <?php
                    $experiences = new WP_Query(array(
                        'post_type' => 'plan',
                        'posts_per_page' => -1,
                        'orderby' => 'menu_order',
                        'order' => 'ASC'
                    ));
                    ?>

                    <?php while ($experiences->have_posts()) : $experiences->the_post(); ?>
                        <div
                            class="swiper-slide relative bg-white/10 overflow-hidden flex flex-col group shadow-lg max-w-[319px] w-[258px] md:w-full mx-auto ">
                            <?php
                            $image = get_field('image');
                            if ($image): ?>
                                <img loading="lazy" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
                                    class="w-full h-full max-w-[319px] object-cover">
                            <?php endif; ?>

                            <div
                                class="absolute top-0 left-0 w-full h-full bg-black opacity-10 group-hover:opacity-0 transition-opacity duration-300 z-10">
                            </div>
                            <div
                                class="flex flex-col gap-3 md:gap-1 lg:gap-3 xl:gap-4 absolute bottom-0 left-0 w-full xl:p-6 p-6 md:p-4 lg:p-5 z-20 flex flex-col">
                                <h3
                                    class="text-white text-[22px] md:text-[20px] xl:text-[24px] mb-1 md:leading-[1] lg:leading-[1.2] xl:leading-[1.4] line-clamp-2">
                                    <?php the_field('title'); ?>
                                </h3>
                                <p
                                    class="text-white text-[15px] md:text-[12px] xl:text-[15px] mb-4 opacity-90 drop-shadow line-clamp-4">
                                    <?php the_field('description'); ?>
                                </p>
                                <a href="<?php the_permalink(); ?>"
                                    class="flex items-center font-bold tracking-[1.5px]  inline-flex items-center gap-3 px-2 md:px-2 lg:px-3 xl:px-4 py-[2px] md:py-[2px] lg:py-[3px] xl:pt-1 xl:pb-[5px] text-[#464646] text-[13px] md:text-[12px] lg:text-[13px] xl:text-[14px] bg-white hover:bg-[#9C834E] hover:text-white duration-200 self-start">
                                    <p>もっと見る</p>
                                    <i
                                        class="fa-solid fa-play text-[9px] md:text-[8px] lg:text-[9px] lg:text-[10px] pt-[1.5px] lg:pt-[2px] xl:pt-[2.3px]">
                                    </i>
                                </a>
                            </div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata(); ?>


                </div>
            </div>
            <div class="w-full flex flex-col items-end max-w-[1000px] gap-[60px]">
                <div class="exp_swiper_btn w-[160px] h-[30px] flex justify-start items-center group cursor-pointer">
                    <span class="relative block w-[150px] h-[1px] md:h-[2px] bg-white md:mt-1 transition-all duration-300 group-hover:w-[160px] group-hover:bg-[#9C834E]">
                        <span class="absolute w-[25%] right-[-12%] rotate-[0.9rad]">
                            <span class="block w-[50%] h-[1px] md:h-[2px] bg-white transition-all duration-300 group-hover:bg-[#9C834E]"></span>
                        </span>
                    </span>
                </div>
            </div>
    </section>
    <section class="bg-[#08111b] py-20 flex justify-center items-center px-6">
        <div class="max-w-[600px] w-full mx-auto flex flex-col items-center justify-center text-center gap-8">
            <div class="w-full flex flex-col items-center">
                <h2
                    class="text-[28px] md:text-[32px] lg:text-[40px] xl:text-[54px] text-[#C4B28C] tracking-wide mb-1">
                    注目のツアー
                </h2>
                <hr class="w-[70%] border-[#C4B28C]">
            </div>
            <p class="text-[#d9d9d9] text-[16px] md:text-[18px] leading-relaxed mb-8">
                創業120年の松井真珠店が所有する、非公開のプライベートバーで特別な体験に浸ってください。
            </p>
            <div class="flex flex-row gap-1 w-full justify-center items-start mb-8">
                <div class="flex flex-col md:flex-row gap-4 xl:gap-8 w-full overflow-hidden">
                    <div class="relative w-full max-w-[455px] swiper-container featured-swiper overflow-hidden">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img loading="lazy" src="<?php echo T_DIRE_URI; ?>/assets/images/feature01.webp" alt="Feature 1" class="w-full">
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="<?php echo T_DIRE_URI; ?>/assets/images/feature02.webp" alt="Feature 2" class="w-full">
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="<?php echo T_DIRE_URI; ?>/assets/images/feature03.webp" alt="Feature 3" class="w-full">
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="<?php echo T_DIRE_URI; ?>/assets/images/feature04.webp" alt="Feature 4" class="w-full">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div thumbsSlider="" class="flex-1 w-full max-h-[385px] swiper-container featured-thumbs-swiper"
                        id="featuredThumbsContainer">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" data-index="0" tabindex="0">
                                <img loading="lazy" src="<?php echo T_DIRE_URI; ?>/assets/images/feature01.webp" alt="Feature 1"
                                    class="w-full cursor-pointer featured-thumb-img">
                            </div>
                            <div class="swiper-slide" data-index="1" tabindex="1">
                                <img loading="lazy" src="<?php echo T_DIRE_URI; ?>/assets/images/feature02.webp" alt="Feature 2"
                                    class="w-full cursor-pointer featured-thumb-img">
                            </div>
                            <div class="swiper-slide" data-index="2" tabindex="2">
                                <img loading="lazy" src="<?php echo T_DIRE_URI; ?>/assets/images/feature03.webp" alt="Feature 3"
                                    class="w-full cursor-pointer featured-thumb-img">
                            </div>
                            <div class="swiper-slide" data-index="3" tabindex="3">
                                <img loading="lazy" src="<?php echo T_DIRE_URI; ?>/assets/images/feature04.webp" alt="Feature 4"
                                    class="w-full cursor-pointer featured-thumb-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p id="feature-desc"
                class="text-[#eeeeee] text-[13px] md:text-[15px] leading-normal mb-7 max-w-[600px] mx-auto opacity-80">
                プライベートな空間から、真珠を育む英虞湾の息をのむような景色をご堪能ください。
                同時に、地域のエキスパートの案内のもと、平安時代にまで遡る真珠と海女の深遠な歴史を深く掘り下げます。
                さらに、海女の持続可能な漁の哲学、そして真の「パールダイバー」としての彼女たちの遺産について、対話を通じてより深い理解を得ていただきます。
                <br> <br>
                海を知り尽くした海女と潜水し、アコヤ真珠を育む母貝の採取を体験します。
                <br> <br>
                採取したアコヤ貝から、ご自身の真珠を直接取り出す体験に参加します。
            </p>
            <div class="w-full flex justify-center">
                <a href="<?php echo esc_url(home_url("tour")); ?>"
                    class="flex items-center font-bold tracking-[1.5px]  inline-flex items-center gap-3 px-2 md:px-2 lg:px-3 xl:px-4 py-[2px] md:py-[2px] lg:py-[3px] xl:pt-1 xl:pb-[5px] text-[#464646] text-[13px] md:text-[12px] lg:text-[13px] xl:text-[14px] bg-white hover:bg-[#9C834E] hover:text-white duration-200 self-start">
                    <p>もっと見る</p>
                    <i
                        class="fa-solid fa-play text-[9px] md:text-[8px] lg:text-[9px] lg:text-[10px] pt-[1.5px] lg:pt-[2px] xl:pt-[2.3px]">
                    </i>
                </a>
            </div>
        </div>
    </section>
    <section class="max-h-[750px] group relative overflow-hidden parallax-section">
        <div
            class="parallax-bg hidden md:block absolute top-0 left-0 w-full h-full bg-[url('<?php echo T_DIRE_URI; ?>/assets/images/bg04.webp')] bg-cover bg-center parallax-img -z-10">
        </div>
        <div
            class="parallax-bg md:hidden block absolute top-0 left-0 w-full h-full bg-[url('<?php echo T_DIRE_URI; ?>/assets/images/bg04_sp.webp')] bg-cover bg-center parallax-img -z-10">
        </div>
        <div class="relative w-full h-[300px] md:h-[750px]"></div>
    </section>
    <section
        class="w-full relative md:flex items-center justify-center py-24 pl-10 md:p-36 overflow-hidden bg-[url('<?php echo T_DIRE_URI; ?>/assets/images/bg_ama_sp.webp')] md:bg-[url('<?php echo T_DIRE_URI; ?>/assets/images/bg_ama.webp')] bg-cover bg-center">
        <h1 class="md:hidden block text-white text-left text-[22px] mb-8">
            <span class="text-[50px]">海女</span>について

        </h1>
        <div class="relative z-10 w-full max-w-[1000px] h-full flex flex-row items-center justify-center mx-auto">
            <div class="flex-1">
                <div class="flex flex-col items-center md:items-start gap-8 lg:gap-12 xl:gap-16 lg:w-2/3">
                    <h1
                        class="md:block hidden text-white text-left text-[24px] md:text-[26px] xl:text-[30px]">
                        <span class="text-[30px] md:text-[40px] lg:text-[40px] xl:text-[70px]">海女</span>について

                    </h1>
                    <div
                        class="text-[#f8f8f8] text-[12px] md:text-[15px] xl:text-[17px] leading-[2] md:leading-[1.8] lg:leading-relaxed xl:leading-[2.4] w-full pr-6 md:pr-0">
                        伊勢志摩の海には、3,000年にわたり受け継がれてきた生きた伝統があります。海の恵みを採る素潜りの女性たち、海女は「日本文化の宝」です。
                        彼女たちの持続可能な漁法は、古代の知恵と海への深い敬意に導かれており、その資源が決して枯渇することのないようにしています。
                        MIEscapeは、この類まれな女性たちと潜り、対話するための、敬意に満ちた機会を提供します。
                        あなたの旅は、彼女たちの素晴らしい文化を未来の世代に保全するための、重要な繋がりとなるでしょう。
                    </div>
                </div>
            </div>
            <div class="flex-1 flex justify-end md:justify-center items-center">
                <div
                    class="flex flex-col justify-center items-center w-[145px] md:w-[150px] lg:w-[140px] xl:w-[200px] md:m-0 lg:mr-16 xl:mr-24">
                    <div class="w-full ">
                        <img loading="lazy" src="<?php echo T_DIRE_URI; ?>/assets/images/ama_item01.webp" alt="Ama diver 1" class="object-cover w-full h-full">
                    </div>
                    <div class="w-full ">
                        <img loading="lazy" src="<?php echo T_DIRE_URI; ?>/assets/images/ama_item02.webp" alt="Ama diver 2" class="object-cover w-full h-full">
                    </div>
                    <div class="w-full ">
                        <img loading="lazy" src="<?php echo T_DIRE_URI; ?>/assets/images/ama_item03.webp" alt="Ama diver 3" class="object-cover w-full h-full">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="max-h-[750px] group relative overflow-hidden parallax-section">
        <div
            class="parallax-bg hidden md:block absolute top-0 left-0 w-full h-full bg-[url('<?php echo T_DIRE_URI; ?>/assets/images/bg05.webp')] bg-cover bg-center parallax-img -z-10">
        </div>
        <div
            class="parallax-bg md:hidden block absolute top-0 left-0 w-full h-full bg-[url('<?php echo T_DIRE_URI; ?>/assets/images/bg05.webp')] bg-cover bg-center parallax-img -z-10">
        </div>
        <div class="relative w-full h-[471px] md:h-[880px]"></div>
    </section>
    <section
        class="w-full min-h-screen bg-[url('<?php echo T_DIRE_URI; ?>/assets/images/bg_discover.webp')] bg-cover bg-center px-8 md:px-16 lg:px-32 xl:py-40 lg:py-32 py-20 flex justify-center items-start">
        <div class="w-full max-w-[1000px] mx-auto flex flex-col gap-14 items-center mb-12">
            <div class="flex flex-col gap-4 xl:gap-6 w-full mb-4">
                <h1 class="text-white text-[30px] md:text-[30px] lg:text-[35px] xl:text-[45px]">伊勢志摩について</h1>
                <hr>
                <h1 class="font-garamond text-white text-[13px] md:text-[15px] xl:text-[23px] tracking-wider text-right">
                    MIEscape original tours
                </h1>
            </div>
            <div class="w-full flex flex-col xl:gap-40 lg:gap-32 gap-24">
                <div class="flex md:flex-row flex-col items-center w-full gap-7 md:gap-10 lg:gap-20">
                    <div class="w-full md:w-3/4">
                        <div class="h-full">
                            <img loading="lazy" src="<?php echo T_DIRE_URI; ?>/assets/images/map_pc01.webp" alt="Japan map with Mie highlight" class="hidden md:block w-full h-auto">
                            <img loading="lazy" src="<?php echo T_DIRE_URI; ?>/assets/images/map_sp01.webp" alt="Japan map with Mie highlight" class="block md:hidden w-full h-auto">
                        </div>
                    </div>
                    <div class="flex-1 flex flex-col gap-10">
                        <p
                            class="text-white/90 text-[12px] lg:text-[14px] xl:text-[17px] leading-[2] md:leading-relaxed">
                            三重県は、日本のほぼ中央に位置し、
                            名古屋、大阪、京都といった主要都市圏へのアクセスが非常に便利です。
                        </p>
                        <div class="w-full flex flex-row justify-end md:justify-start">
                            <a href="<?php echo esc_url(home_url('/about?access')); ?>" class="flex items-center font-bold tracking-[1.5px]  inline-flex items-center gap-3 px-2 md:px-2 lg:px-3 xl:px-4 py-[2px] md:py-[2px] lg:py-[3px] xl:pt-1 xl:pb-[1px] xl:pb-[5px] text-[#464646] md:text-[12px] lg:text-[13px] xl:text-[14px] bg-white hover:bg-[#9C834E] hover:text-white duration-200 self-start">
                                <p>アクセス</p>
                                <i
                                    class="fa-solid fa-play text-[10px] md:text-[8px] lg:text-[9px] lg:text-[10px] pt-[2px] lg:pt-[2px] xl:pt-[3px]">
                                </i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col xl:gap-20 lg:gap-16 md:gap-12 gap-8">
                    <div class="flex-1 grid grid-cols-9 gap-0 items-center">
                        <div class="md:col-span-5 col-span-9">
                            <img loading="lazy" src="<?php echo T_DIRE_URI; ?>/assets/images/discover.webp" alt="Ise Shrine Torii Gate"
                                class="w-full h-auto object-cover">
                        </div>
                        <div
                            class="hidden md:flex col-span-4 flex-col xl:gap-10 lg:gap-6 gap-4 xl:pl-20 lg:pl-16 pl-8">
                            <h1 class="text-white text-[26px] md:text-[18px] lg:text-[24px] xl:text-[32px]">
                                三重と伊勢志摩の魅力
                            </h1>
                            <p
                                class="text-white/90 text-[12px] lg:text-[14px] xl:text-[17px] leading-relaxed mb-2 pr-2">
                                伊勢神宮は、単なる歴史的建造物ではなく、日本の魂が宿る場所です。
                                2000年の歴史のある伊勢神宮への参拝は、日本の信仰の「源流」と出会い、
                                心の奥底にある美意識を呼び覚ます、静かで豊かな経験になります。
                                また、三重県は日本有数の食の宝庫です。
                                地元で獲れる伊勢エビや海女が採取するアワビに加え、
                                地元で育てられた松阪牛（和牛）など、一部の珍味を挙げただけでも、
                                食の豊かさがわかります。
                            </p>
                        </div>
                    </div>
                    <div class="w-full flex flex-col xl:gap-32 lg:gap-24 gap-8 justify-center items-center">
                        <div class="flex flex-row md:gap-8 gap-2 w-full">
                            <div class="w-full">
                                <img loading="lazy" src="<?php echo T_DIRE_URI; ?>/assets/images/discover01.webp" alt="Ise Shrine entrance"
                                    class="w-full h-full object-cover">
                            </div>
                            <div class="w-full">
                                <img loading="lazy" src="<?php echo T_DIRE_URI; ?>/assets/images/discover02.webp" alt="Meoto Iwa rocks"
                                    class="w-full h-full object-cover">
                            </div>
                            <div class="w-full">
                                <img loading="lazy" src="<?php echo T_DIRE_URI; ?>/assets/images/discover03.webp" alt="Seafood and hot spring"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>
                        <div class="block md:hidden col-span-4 flex flex-col xl:gap-10 lg:gap-6 gap-4 mb-12">
                            <h1 class="text-white text-[26px] md:text-[18px] lg:text-[24px] xl:text-[32px]">
                                三重と伊勢志摩の魅力
                            </h1>
                            <p class="text-white/90 text-[12px] leading-[2.4]">
                                伊勢神宮は、単なる歴史的建造物ではなく、日本の魂が宿る場所です。
                                2000年の歴史のある伊勢神宮への参拝は、日本の信仰の「源流」と出会い、
                                心の奥底にある美意識を呼び覚ます、静かで豊かな経験になります。
                                また、三重県は日本有数の食の宝庫です。
                                地元で獲れる伊勢エビや海女が採取するアワビに加え、
                                地元で育てられた松阪牛（和牛）など、一部の珍味を挙げただけでも、
                                食の豊かさがわかります。
                            </p>
                        </div>
                        <a href="<?php echo esc_url(home_url('/about')); ?>"
                            class="flex items-center md:w-[40%] w-[90%] inline-block px-6 py-2 border border-white text-white text-[14.5px] md:text-[17px] lg:text-[20px] xl:text-[24px] tracking-wider gap-1 md:gap-2
                                hover:bg-[#ffffffcc] hover:text-[#092F27] hover:border-[#ffffffcc] transition duration-200 text-center max-w-[420px]">
                            view more about MIEscape
                            <i
                                class="fa-solid fa-play text-[10px] md:text-[8px] lg:text-[9px] lg:text-[10px] pt-[2px] lg:pt-[3px] xl:pt-[4px] ml-2"></i>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="max-h-[750px] group relative overflow-hidden parallax-section">
        <div
            class="parallax-bg hidden md:block absolute top-0 left-0 w-full h-full bg-[url('<?php echo T_DIRE_URI; ?>/assets/images/bg06.webp')] bg-cover bg-center parallax-img -z-10">
        </div>
        <div
            class="parallax-bg md:hidden block absolute top-0 left-0 w-full h-full bg-[url('<?php echo T_DIRE_URI; ?>/assets/images/bg06.webp')] bg-cover bg-center parallax-img -z-10">
        </div>
        <div class="relative w-full h-[470px] md:h-[880px]"></div>
    </section>
    <section class="w-full flex flex-col items-center justify-center px-6 py-20 md:p-32 bg-[#060603]">
        <div class="w-full max-w-[600px] flex flex-col items-center gap-20">
            <h2 class="font-garamond text-[#C4B28C] text-2xl md:text-3xl xl:text-[42px] text-center">
                Testimonials
            </h2>

            <?php
            $testimonials = new WP_Query(array(
                'post_type' => 'testimonials',
                'posts_per_page' => -1,
                'orderby' => 'menu_order',
                'order' => 'ASC'
            ));

            ?>
            <?php while ($testimonials->have_posts()) : $testimonials->the_post(); ?>
                <div class="w-full flex flex-row xl:gap-12 lg:gap-6 md:gap-10 gap-8 md:items-center">
                    <div class="md:w-1/3 w-full">
                        <img loading="lazy" src="<?php the_field('image'); ?>"
                            class="w-full max-w-[182px] max-h-[196px] object-cover rounded-sm flex-shrink-0">
                    </div>
                    <div class="md:w-2/3 w-full flex flex-col justify-center md:gap-3 gap-1">
                        <div>
                            <p
                                class="text-white text-[14.5px] md:text-[16px] lg:text-[18px] xl:text-[20px] mb-1">
                                <?php the_field('title'); ?>
                            </p>
                            <hr class="border-[#C4B28C] md:my-[8px] my-[4px]">
                            <p
                                class="text-right text-white text-[12.5px] md:text-[13px] lg:text-[15px] xl:text-[17px] md:mb-2 mb-1">
                                <?php the_field('name') ?> &nbsp; / &nbsp; <?php the_field('country'); ?>
                            </p>
                        </div>
                        <p class="text-white xl:text-[15px] md:text-[13px] text-[11px] leading-[1.9]">
                            <?php the_field('description'); ?>
                        </p>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
            ?>
            <a href="<?php echo esc_url(home_url('/contact')); ?>"
                class="font-garamond w-[45%] py-1 mb-32 bg-[#9E895B] text-white text-center text-[15px] md:text-[18px] xl:text-[24px] tracking-widest hover:bg-[#9f895bcc] transition">
                Contact
            </a>
        </div>
    </section>
</div>

<script>
    // Ensure muted + autoplay at runtime
    const v = document.querySelector("video");
    v.muted = true;
    v.play().catch(() => {});
</script>

<?php get_footer(); ?>