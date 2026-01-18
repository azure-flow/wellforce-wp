<?php
get_header();
$lang = pll_current_language();
?>

<section class="relative bg-[linear-gradient(180deg,#051C2A_29%,#013538_63%,#025140_100%)]">
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
                    <?php echo $lang === 'ja' ? '日本語' : ($lang === 'zh' ? '繁體字' : 'English'); ?>
                </button>
                <div
                    class="langMenuList flex flex-col w-[48px] lg:w-[52px] xl:w-[58px] absolute left-0 top-[28.21px] lg:top-[30.21px] xl:top-[34.21px] opacity-0 group-hover:opacity-100 group-hover:pointer-events-auto pointer-events-none transition-opacity duration-200 z-20">
                    <a href="<?php echo get_permalink(pll_get_post(get_the_ID(), $lang == 'ja' ? 'en' : ($lang == 'zh' ? 'ja' : 'ja'))); ?>"
                        class=" w-[48px] lg:w-[52px] xl:w-[58px] h-[28.21px] lg:h-[30.21px] xl:h-[34.21px] flex items-center justify-center bg-[#CDD3D6] text-[#0B1828] transition hover:bg-white hover:underline hover:underline-offset-[6px] hover:decoration-[#0B1828]">
                        <?php echo $lang === 'ja' ? 'English' : ($lang === 'zh' ? '日本語' : '日本語'); ?>
                    </a>
                    <a href="<?php echo get_permalink(pll_get_post(get_the_ID(), $lang == 'ja' ? 'zh' : ($lang == 'zh' ? 'en' : 'zh'))); ?>"
                        class=" w-[48px] lg:w-[52px] xl:w-[58px] h-[28.21px] lg:h-[30.21px] xl:h-[34.21px] flex items-center justify-center bg-[#CDD3D6] text-[#0B1828] transition hover:bg-white hover:underline hover:underline-offset-[6px] hover:decoration-[#0B1828]">
                        <?php echo $lang === 'ja' ? '繁體字' : ($lang === 'zh' ? 'English' : '繁體字'); ?>
                    </a>
                </div>
            </div>
        </div>
        <div
            class="hidden md:flex flex-col hidden justify-between h-[180px] lg:h-[200px] xl:h-[250px] text-white text-[9px] sm:text-[12px] md:text-[16px] lg:text-[18px] xl:text-[20px] text-left leading-[1.8]  ">
            <?php
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
            <a href="<?php echo esc_url(home_url($base . 'plan' . ($lang === 'ja' ? '' : '-' . $lang))); ?>"><span class="font-garamond hover:opacity-60 transition-opacity duration-200">Experiences</span></a>
            <a href="<?php echo esc_url(home_url($base . 'tour' . ($lang === 'ja' ? '' : '-' . $lang))); ?>"><span class="font-garamond hover:opacity-60 transition-opacity duration-200">Tour</span></a>
            <a href="<?php echo esc_url(home_url($base . 'about' . ($lang === 'ja' ? '' : '-' . $lang))); ?>"><span class="font-garamond hover:opacity-60 transition-opacity duration-200">About</span></a>
        </div>

    </div>
    <div class="flex flex-col items-center justify-center justify-center w-full h-full px-8 gap">
        <div
            class="flex flex-col gap-12 md:gap-6 lg:gap-8 xl:gap-12 w-full md:w-[350px] lg:w-[450px] xl:w-[600px] max-w-[600px] mx-auto py-28 md:pt-32 md:pb-12 lg:pt-40 xl:py-40">
            <div
                class="text-white/70 opacity-80 text-[10px] md:text-[12px] lg:text-[15px] xl:text-[17px] leading-[2]">
                <a class="hover:text-white transition-colors duration-200" href="<?php echo esc_url(home_url('/' . $lang === 'ja' ? '' : $lang)); ?>">TOP </a> &nbsp; > &nbsp;
                <?php
                if ($lang === 'ja') {
                    $plan_url = home_url('/plan');
                    $plan_label = 'Experiences';
                } elseif ($lang === 'en') {
                    $plan_url = home_url('/en/plan-en');
                    $plan_label = 'Experiences';
                } elseif ($lang === 'zh') {
                    $plan_url = home_url('/zh/plan-zh');
                    $plan_label = 'Experiences';
                } else {
                    $plan_url = home_url('/plan');
                    $plan_label = 'Experiences';
                }
                ?>
                <a class="hover:text-white transition-colors duration-200" href="<?php echo esc_url($plan_url); ?>"><?php echo $plan_label; ?></a>
                &nbsp; > &nbsp;
                <?php if (get_field('title')): ?>
                    <a class="hover:text-white transition-colors duration-200">
                        <?php echo nl2br(esc_html(get_field('title'))); ?>
                    </a>
                <?php endif; ?>
            </div>
            <div class="flex flex-col gap-3 md:gap-3 lg:gap-4 xl:gap-5 pb-8 md:pb-12 lg:pb-16 xl:pb-24">
                <?php if (get_field('title')): ?>
                    <h1 class="text-white text-[32px] md:text-[28px] lg:text-[32px] xl:text-[48px] leading-[1.2]">
                        <?php echo nl2br(esc_html(get_field('title'))); ?>
                    </h1>
                <?php endif; ?>
                <hr class="w-full border-white">
                <h3
                    class="text-white text-[16px] md:text-[15px] xl:text-[17px] opacity-70 tracking-wider text-right">
                    2025.11.01
                </h3>
            </div>
            <div
                <?php
                $content = get_field('gallery');

                // Extract all image URLs from WYSIWYG content
                $image_urls = [];

                if ($content) {
                    $dom = new DOMDocument();
                    libxml_use_internal_errors(true); // Prevent HTML warnings
                    $dom->loadHTML(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'));
                    libxml_clear_errors();

                    $imgs = $dom->getElementsByTagName('img');

                    foreach ($imgs as $img) {
                        $image_urls[] = $img->getAttribute('src');
                    }
                }
                ?>
                class="w-full flex flex-col gap-5 overflow-hidden pb-4 md:pb-6 lg:pb-8 xl:pb-12 experiences-swiper-container">
                <div class="relative swiper-container experiences-swiper">
                    <?php if (!empty($image_urls)): ?>
                        <div class="swiper-wrapper aspect-[1.5] object-cover">
                            <?php foreach ($image_urls as $url): ?>
                                <div class="swiper-slide">
                                    <img loading="lazy" src="<?php echo esc_url($url); ?>" alt="" class="w-full h-full">
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="relative w-full flex h-10"
                    style="--swiper-navigation-color: #C4B28C; --swiper-pagination-color: #C4B28C">
                    <div class="swiper-pagination"></div>
                </div>
                <div thumbsSlider="" class="w-full max-h-[385px] swiper-container experiences-thumbs-swiper">
                    <?php if (!empty($image_urls)): ?>
                        <div class="swiper-wrapper">
                            <?php foreach ($image_urls as $url): ?>
                                <div class="swiper-slide aspect-[1.5] object-cover">
                                    <img loading="lazy" src="<?php echo esc_url($url); ?>" alt="" class="w-full h-full">
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="flex flex-col w-full text-white add gap-3 md:gap-6 lg:gap-8 xl:gap-10">
                <?php if (get_field('description')): ?>
                    <p class="text-[12px] md:text-[13px] lg:text-[15px] xl:text-[17px] leading-[2]">
                        <?php echo nl2br(esc_html(get_field('description'))); ?>
                    </p>
                <?php endif; ?>
            </div>
        </div>
        <div
            class="w-full md:w-[450px] lg:w-[600px] xl:w-[870px] max-w-[870px] flex flex-col items-center gap-12 md:gap-10 lg:gap-14 xl:gap-20 py-20 md:py-40 lg:py-52 xl:py-64">
            <div
                class="grid grid-cols-2 lg:grid-cols-3 gap-x-4 gap-y-12 lg:gap-x-8 lg:gap-y-12 xl:gap-x-10 xl:gap-y-16 md:gap-y-8">
                <?php
                $args = array(
                    'post_type' => 'announcement',
                    'posts_per_page' => -1, // all
                    'orderby' => 'date',
                    // 'post__not_in'   => array(get_the_ID()), // except for current
                    'order' => 'DESC',
                );

                $announcements = new WP_Query($args);

                if ($announcements->have_posts()) :
                    while ($announcements->have_posts()) : $announcements->the_post();
                        // Fetch gallery images array (returns array of images, get only the first)
                        $gallery_img_url = '';
                        $gallery_content = get_field('gallery');
                        $gallery_img_url = get_first_image_from_content($gallery_content);
                ?>
                        <a href="<?php the_permalink(); ?>">
                            <div class="flex flex-col gap-2 lg:gap-4 xl:gap-6 col-span-1 relative group cursor-pointer">
                                <div class="w-full relative">
                                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition duration-300"></div>
                                    <img loading="lazy" src="<?php echo esc_url($gallery_img_url); ?>" alt="<?php the_title_attribute(); ?>" class="w-full aspect-[8/5] object-cover">
                                </div>
                                <div class="bg-transparent">
                                    <p class="text-[12px] md:text-[15px] lg:text-[17px] xl:text-[20px] text-white leading-[2]">
                                        <?php the_title(); ?>
                                    </p>
                                </div>
                            </div>
                        </a>
                <?php
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>