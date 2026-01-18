<?php
get_header();
?>
<style>
    * {
        font-family: "Zen Old Mincho", serif;
    }
</style>

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
                    繁體字
                </button>
                <div
                    class="langMenuList flex flex-col w-[48px] lg:w-[52px] xl:w-[58px] absolute left-0 top-[28.21px] lg:top-[30.21px] xl:top-[34.21px] opacity-0 group-hover:opacity-100 group-hover:pointer-events-auto pointer-events-none transition-opacity duration-200 z-20">
                    <a href="<?php echo esc_url(pll_home_url('ja')); ?>"
                        class="font-mincho w-[48px] lg:w-[52px] xl:w-[58px] h-[28.21px] lg:h-[30.21px] xl:h-[34.21px] flex items-center justify-center bg-[#CDD3D6] text-[#0B1828] transition hover:bg-white hover:underline hover:underline-offset-[6px] hover:decoration-[#0B1828]">
                        日本語
                    </a>
                    <a href="<?php echo esc_url(pll_home_url('en')); ?>" class="font-garamond w-[48px] lg:w-[52px] xl:w-[58px] h-[28.21px] lg:h-[30.21px] xl:h-[34.21px] flex items-center justify-center bg-[#CDD3D6] text-[#0B1828] transition hover:bg-white hover:underline hover:underline-offset-[6px] hover:decoration-[#0B1828]">
                        English
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
                來自伊勢志摩的邀請，一場特別的體驗
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
        class="flex flex-col max-w-[400px] gap-[40px] lg:gap-[50px] xl:gap-[60px] md:mr-[100px] lg:mr-[200px] xl:mr-[300px]">
        <h1 class="text-white text-[28px] lg:text-[36px] xl:text-[40px]">
            <span class="text-[20px] lg:text-[24px] xl:text-[28px] block">走入日本秘境：</span>
            深度探索
            <span class="text-[20px] lg:text-[24px] xl:text-[28px] block">在地靈魂</span>
        </h1>
        <p class="text-white text-[12px] lg:text-[13px] xl:text-[17px] leading-[2] pb-8">
            探訪日本未為人知的故事之旅 試著遠離日常的紛擾，<br>
            踏上旅途, 尋找那片能觸動心靈的風景。<br>
            MIEscape 將帶您走進, 那些日本深藏已久的故事裡。
        </p>
    </div>
</section>
<section class="w-full max-h-[750px] group relative overflow-hidden parallax-section">
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
            這裡是眾神守護的神聖領域。<br class="md:block hidden">
            大自然與人們的歷史在此和諧共生。<br class="md:block hidden">
            請您親自來感受，<br class="md:block hidden">
            那在平凡旅行中無法遇見的，本色日本。
        </p>
    </div>
</section>
<section
    class="flex justify-center px-[30px] py-[40px] md:p-[40px] lg:p-[120px] xl:p-[140px] bg-[url('<?php echo T_DIRE_URI; ?>/assets/images/bg_experience.webp')] md:bg-[url('<?php echo T_DIRE_URI; ?>/assets/images/bg_experience.webp')] bg-cover bg-center">
    <div class="flex flex-col max-w-[1000px] gap-[60px] mx-auto w-full">
        <div class="flex flex-col gap-4 xl:gap-6 w-full mb-4">
            <h2 class="text-white text-[30px] md:text-[28px] lg:text-[32px] xl:text-[34px]">深度文化體驗</h2>
            <hr>
            <h3 class="font-garamond text-white text-[13px] md:text-[15px] xl:text-[23px] opacity-70 tracking-wider text-right">
                MIEscape original tours
            </h3>
        </div>
        <?php
        $terms = get_the_terms(get_the_ID(), 'experience_category');
        if ($terms && ! is_wp_error($terms)) :
        ?>
            <ul class="experience-tags">
                <?php foreach ($terms as $term): ?>
                    <li><?php echo esc_html($term->name); ?>f</li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
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
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
                                class="w-full h-full max-w-[319px] object-cover" loading="lazy">
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
                                <p class="font-mincho">查看更多</p>
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
                人氣推薦行程
            </h2>
            <hr class="w-[70%] border-[#C4B28C]">
        </div>
        <p class="text-[#d9d9d9] text-[16px] md:text-[18px] leading-relaxed mb-8">
            誠邀您沉浸於極致非凡的體驗：在創業120年的「松井真珠店」所擁有的 不對外公開（非公開）私人酒吧，享受專屬尊榮時刻。
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
                        <div class="swiper-slide" data-index="1" tabindex="0">
                            <img loading="lazy" src="<?php echo T_DIRE_URI; ?>/assets/images/feature02.webp" alt="Feature 2"
                                class="w-full cursor-pointer featured-thumb-img">
                        </div>
                        <div class="swiper-slide" data-index="2" tabindex="0">
                            <img loading="lazy" src="<?php echo T_DIRE_URI; ?>/assets/images/feature03.webp" alt="Feature 3"
                                class="w-full cursor-pointer featured-thumb-img">
                        </div>
                        <div class="swiper-slide" data-index="3" tabindex="0">
                            <img loading="lazy" src="<?php echo T_DIRE_URI; ?>/assets/images/feature04.webp" alt="Feature 4"
                                class="w-full cursor-pointer featured-thumb-img">
                        </div>
                        <div class="swiper-slide" data-index="4" tabindex="0">
                            <img loading="lazy" src="<?php echo T_DIRE_URI; ?>/assets/images/feature.webp" alt="Feature 4"
                                class="w-full cursor-pointer featured-thumb-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p id="feature-desc"
            class="text-[#eeeeee] text-[13px] md:text-[15px] leading-normal mb-7 max-w-[600px] mx-auto opacity-80">
            您可以從這個專屬的私人空間中，盡情飽覽孕育珍珠的英虞灣那令人屏息的景色。
            同時，在地方專家的引導下，我們將深入探討可追溯至平安時代，關於珍珠與海女的深遠歷史。
            此外，您將透過對話，對海女永續的捕撈哲學，以及她們作為真正的「珍珠採集人」所傳承的寶貴遺產，獲得更深層次的理解。
            <br> <br>
            您將與精通海洋的道地海女一同潛水，親身體驗採集孕育「阿古屋珍珠」的母貝。
            <br> <br>
            隨後，您將參與一場別開生面的體驗：親手從您採集到的阿古屋貝中，直接取出屬於您自己的珍珠！
        </p>
        <div class="w-full flex justify-center">
            <a href="<?php echo esc_url(home_url("zh/tour")); ?>"
                class="flex items-center font-bold tracking-[1.5px]  inline-flex items-center gap-3 px-2 md:px-2 lg:px-3 xl:px-4 py-[2px] md:py-[2px] lg:py-[3px] xl:pt-1 xl:pb-[5px] text-[#464646] text-[13px] md:text-[12px] lg:text-[13px] xl:text-[14px] bg-white hover:bg-[#9C834E] hover:text-white duration-200 self-start">
                <p class="font-mincho">查看更多</p>
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
        深度了解<span class="text-[50px]">海女</span>文化
    </h1>
    <div class="relative z-10 w-full max-w-[1000px] h-full flex flex-row items-center justify-center mx-auto">
        <div class="flex-1">
            <div class="flex flex-col items-center md:items-start gap-8 lg:gap-12 xl:gap-16 lg:w-2/3">
                <h1
                    class="md:block hidden text-white text-left text-[24px] md:text-[26px] xl:text-[30px]">
                    深度了解<br>
                    <span class="text-[30px] md:text-[40px] lg:text-[40px] xl:text-[70px]">海女文化</span>
                </h1>
                <div
                    class="text-[#f8f8f8] text-[12px] md:text-[15px] xl:text-[17px] leading-[2] md:leading-[1.8] lg:leading-relaxed xl:leading-[2.4] w-full pr-6 md:pr-0">
                    在伊勢志摩的海域中，存在著傳承長達三千年的活歷史與傳統。這些潛水採集海洋恩惠的女性——海女，正是**「日本文化的瑰寶」。
                    她們的永續捕魚方式源於古代的智慧，並遵循對海洋的深切敬意，確保海洋資源能夠永不枯竭。
                    MIEscape 將為您提供一個充滿敬意且難得的機會，讓您能與這些獨特的女性一同潛水、進行對話。
                    您的這趟旅程，將成為保護她們珍貴文化、使其傳承至未來世代的重要連結。
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
            <h1 class="text-white text-[30px] md:text-[30px] lg:text-[35px] xl:text-[45px]">認識伊勢志摩</h1>
            <hr>
            <h1 class="font-garamond text-white text-[13px] md:text-[15px] xl:text-[23px] tracking-wider text-right">
                MIEscape original tours
            </h1>
        </div>
        <div class="w-full flex flex-col xl:gap-40 lg:gap-32 gap-24">
            <div class="flex md:flex-row flex-col items-center w-full gap-7 md:gap-10">
                <div class="flex-1">
                    <div class="px-2 lg:px-8 xl:px-12 h-full">
                        <img loading="lazy" src="<?php echo T_DIRE_URI; ?>/assets/images/map.webp" alt="Japan map with Mie highlight" class="w-full h-auto">
                    </div>
                </div>
                <div class="flex-1 flex flex-col gap-10">
                    <p
                        class="text-white/90 text-[12px] lg:text-[14px] xl:text-[17px] leading-[2] md:leading-relaxed">
                        三重縣位於日本的幾何中心地帶，
                        前往名古屋、大阪、京都等主要都會區的交通都極為便利。
                    </p>
                    <div class="w-full flex flex-row justify-end md:justify-start">
                        <a href="<?php echo esc_url(home_url('zh/about?access')); ?>" class="flex items-center font-bold tracking-[1.5px]  inline-flex items-center gap-3 px-2 md:px-2 lg:px-3 xl:px-4 pb-[3px] pt-[3px] md:py-[2px] xl:pt-[6px] xl:pb-[5px] text-[#464646] md:text-[12px] lg:text-[14px] xl:text-[15px] bg-white hover:bg-[#9C834E] hover:text-white duration-200 self-start">
                            <p>存取</p>
                            <i
                                class="fa-solid fa-play text-[10px] md:text-[8px] lg:text-[9px] lg:text-[10px]">
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
                            三重・伊勢志摩的獨特魅力
                        </h1>
                        <p
                            class="text-white/90 text-[12px] lg:text-[14px] xl:text-[17px] leading-relaxed mb-2 pr-2">
                            伊勢神宮不僅是座歷史性建築，它更是日本靈魂所棲息的場所。
                            前往這座擁有兩千年歷史的神宮參拜，是一場與日本信仰**「源流」相會、能喚醒您內心深處美感的寧靜而豐富的體驗**。
                            此外，三重縣是日本數一數二的美食寶庫。僅列舉當地特產的伊勢龍蝦、海女採集的鮑魚，
                            以及在地培育的**松阪牛（日本和牛）**等珍饈，便能證明這裡無與倫比的飲食豐饒。
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
                            About Mie/Ise-Shima here</h1>
                        <p class="text-white/90 text-[12px] leading-[2.4]">
                            Ise Jingu is not just a historic structure, it is the repository of Japan's soul and memory.
                            The 2,000-year-old Ise Jingu is a profound and serene experience—an encounter
                            with the very wellspring of Japanese spirituality that awakens an innate sense of beauty.
                            Furthermore, Mie Prefecture is a famous foodie destination. From local delicacies
                            like Ise Lobster and abalone harvested by the traditional Ama divers,
                            to world-class Matsusaka Wagyu raised right here.
                        </p>
                    </div>
                    <a href="<?php echo esc_url(home_url('/zh/about')); ?>"
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
        <a href="<?php echo esc_url(home_url('/zh/contact')); ?>"
            class="w-[45%] py-1 mb-32 bg-[#9E895B] text-white text-center text-[15px] md:text-[18px] xl:text-[24px] tracking-widest hover:bg-[#9f895bcc] transition">
            聯絡
        </a>
    </div>
</section>

<script>
    // Ensure muted + autoplay at runtime
    const v = document.querySelector("video");
    v.muted = true;
    v.play().catch(() => {});
</script>

<?php get_footer(); ?>