<?php
get_header();
?>

<style>
    body,
    *,
    .font-garamond {
        font-family: 'EB Garamond', serif;
    }
</style>

<section
    class="relative bg-[url('<?php echo T_DIRE_URI; ?>/assets/images/fv_tour_sp.webp')] md:bg-[url('<?php echo T_DIRE_URI; ?>/assets/images/fv_tour.webp')] bg-cover bg-center h-[667px] md:h-[700px] lg:h-[800px] xl:h-[1080px]">
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
                    class="w-[48px] lg:w-[52px] xl:w-[58px] h-[28.21px] lg:h-[30.21px] xl:h-[34.21px] flex items-center justify-center bg-[#CDD3D6] text-[#0B1828] z-10 hover:bg-white hover:underline underline-offset-[5px] hover:underline underline-offset-[5px]-offset-[6px] hover:decoration-[#0B1828] focus:outline-none">
                    English
                </button>
                <div
                    class="langMenuList flex flex-col w-[48px] lg:w-[52px] xl:w-[58px] absolute left-0 top-[28.21px] lg:top-[30.21px] xl:top-[34.21px] opacity-0 group-hover:opacity-100 group-hover:pointer-events-auto pointer-events-none transition-opacity duration-200 z-20">
                    <a href="<?php echo get_permalink(pll_get_post(get_the_ID(), 'ja')); ?>"
                        class="font-mincho w-[48px] lg:w-[52px] xl:w-[58px] h-[28.21px] lg:h-[30.21px] xl:h-[34.21px] flex items-center justify-center bg-[#CDD3D6] text-[#0B1828] transition hover:bg-white hover:underline underline-offset-[5px] hover:underline underline-offset-[5px]-offset-[6px] hover:decoration-[#0B1828]">
                        日本語
                    </a>
                    <a href="<?php echo get_permalink(pll_get_post(get_the_ID(), 'zh')); ?>"
                        class="font-mincho w-[48px] lg:w-[52px] xl:w-[58px] h-[28.21px] lg:h-[30.21px] xl:h-[34.21px] flex items-center justify-center bg-[#CDD3D6] text-[#0B1828] transition hover:bg-white hover:underline underline-offset-[5px] hover:underline underline-offset-[5px]-offset-[6px] hover:decoration-[#0B1828]">
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
    <div class="flex justify-center w-full h-full  px-8">
        <div
            class="flex flex-col gap-2 lg:gap-4 xl:gap-5 w-[295px] md:w-[300px] lg:w-[450px] xl:w-[600px] max-w-[600px] mx-auto pt-[40%] md:pt-[15%] xl:pt-[10%] mb-4">
            <h2 class="font-garamond text-white text-[50px] md:text-[28px] lg:text-[52px] xl:text-[70px]">Tour</h2>
            <hr>
            <h3 class="font-garamond text-white text-[16px] md:text-[15px] xl:text-[23px] opacity-70 tracking-wider text-right">
                MIEscape original tours
            </h3>
        </div>
    </div>
</section>
<section class="max-h-[770px] group relative overflow-hidden">
    <img loading="lazy" src="<?php echo T_DIRE_URI; ?>/assets/images/bg_tour01.webp" alt="Tour background"
        class="hidden md:block inset-0 w-full h-full bg-cover bg-center z-0">
    </img>
    <img loading="lazy" src="<?php echo T_DIRE_URI; ?>/assets/images/bg_tour01_sp.webp" alt="Tour background"
        class="block md:hidden inset-0 w-full h-full bg-cover bg-center z-0">
    </img>

</section>
<section
    class="relative flex justify-center items-center w-full min-h-[600px] px-4 md:px-36 py-20 md:py-36 bg-cover bg-center"
    style="background-image: url('<?php echo T_DIRE_URI; ?>/assets/images/bg_tour02.webp');">
    <div
        class="grid grid-cols-1 md:grid-cols-8 gap-20 md:gap-8 md:items-center w-full max-w-[600px] px-4 md:px-6 mx-auto">
        <div
            class="col-span-1 md:col-span-6 flex flex-col justify-center items-start max-w-[600px] w-full gap-4 md:gap-4 lg:gap-6 xl:gap-8">
            <h1 class="text-white text-[22px] md:text-[24px] xl:text-[26px] mb-1">
                <span class="block text-[20px] md:text-[20px] lg:text-[24px] xl:text-[28px] font-normal mb-2">
                    A journey into the
                </span>
                <span
                    class="text-[28px] md:text-[28px] lg:text-[36px] xl:text-[40px] font-light leading-tight">
                    UNSEEN HEART
                </span>
                <span class="block text-[20px] md:text-[20px] lg:text-[24px] xl:text-[28px] font-normal mt-2">
                    of Japan
                </span>
            </h1>
            <p
                class="text-white text-[13px] md:text-[13px] lg:text-[17px] xl:text-[17px] leading-[2] mt-4 md:mt-6 xl:mt-8 opacity-90">
                Leave the everyday noise behind and venture into the landscape that will not <br>
                just please your eyes but speaks to your soul.<br>
                MIEscape is your invitation<br>
                to the spiritual heartland of Japan: Ise-Shima.
            </p>
        </div>
        <div
            class="col-span-1 md:col-span-2 flex flex-row md:flex-col gap-6 w-full md:w-[100px] lg:w-[130px] xl:w-[137px] md:max-w-[137px] justify-between items-end">
            <div class="w-full">
                <img loading="lazy" class="w-full" src="<?php echo T_DIRE_URI; ?>/assets/images/journey01.webp" alt="Journey 2">
            </div>
            <div class="w-[70%]">
                <img loading="lazy" class="w-full" src="<?php echo T_DIRE_URI; ?>/assets/images/journey02.webp" alt="Journey 1">
            </div>
            <div class="w-[55%]">
                <img loading="lazy" class="w-full" src="<?php echo T_DIRE_URI; ?>/assets/images/journey03.webp" alt="Journey 3">
            </div>
        </div>
    </div>
</section>
<section class="max-h-[770px] group relative overflow-hidden">
    <img loading="lazy" src="<?php echo T_DIRE_URI; ?>/assets/images/bg_tour03.webp" alt="Tour background"
        class="hidden md:block inset-0 w-full h-full bg-cover bg-center z-0">
    </img>
    <img loading="lazy" src="<?php echo T_DIRE_URI; ?>/assets/images/bg_tour03_sp.webp" alt="Tour background"
        class="block md:hidden inset-0 w-full h-full bg-cover bg-center z-0">
    </img>

</section>
<section
    class="w-full px-8 md:px-32 lg:px-40 py-14 md:py-24 lg:py-32 bg-[linear-gradient(to_top,#013538_0%,#096586_28%,#2A88A9_71%,#197C95_79%,#087080_100%)] ">
    <div class="flex justify-center pb-12 lg:pb-6 xl:pb-8">
        <div class="max-w-[1000px] flex flex-col gap-4 xl:gap-6 w-full mb-4">
            <h2 class="font-garamond text-white text-[30px] md:text-[28px] lg:text-[32px] xl:text-[34px]">Sample Itinerary</h2>
            <hr>
            <h3 class="font-garamond text-white text-[13px] md:text-[15px] xl:text-[23px] opacity-70 tracking-wider text-right">
                MIEscape original tours
            </h3>
        </div>
    </div>
    <div class="w-full max-w-[870px] flex flex-col items-center mx-auto gap-10 lg:gap-16 xl:gap-28">
        <div class="w-full flex justify-center md:justify-start">
            <button
                class="bg-white text-[#1E7F9B] px-12 py-1 text-[15px] lg:text-[17px] xl:text-[20px] shadow border border-[#d8f1fd] hover:bg-[#d8f1fd] transition-all duration-200 tracking-widest font-bold ">
                DAY 1
            </button>
        </div>
        <div class="w-full flex flex-col gap-16 lg:gap-16 xl:gap-28">
            <?php
            $post_tours = new WP_Query(array(
                'post_type' => 'post_tour',
                'posts_per_page' => -1,
                'orderby' => 'menu_order',
                'order' => 'ASC'
            ));
            ?>
            <?php
            static $i = 0;
            while ($post_tours->have_posts()) : $post_tours->the_post();
                $day = get_field('day');
                if ($day === '1日目') :
            ?>
                    <div class="w-full flex flex-col <?php echo ($i % 2 === 1) ? 'md:flex-row-reverse' : 'md:flex-row'; ?> justify-between md:items-center gap-8 xl:gap-16">
                        <?php $i++; ?>
                        <div class="w-full md:w-2/3">
                            <img loading="lazy" src="<?php the_field('image'); ?>" alt="Itinerary 1" class="w-full object-cover" />
                        </div>
                        <div class="w-full md:w-1/3 flex items-center">
                            <div class="flex flex-col md:gap-2 lg:gap-4 xl:gap-6">
                                <h3
                                    class="text-white text-[17px] md:text-[17px] lg:text-[20px] xl:text-[30px] font-normal">
                                    <?php the_field('title'); ?>
                                </h3>
                                <p class="text-white/90 text-[13px] md:text-[12px] lg:text-[17px] lg:leading-[1.75]">
                                    <?php the_field('description'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
            <?php
                endif;
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
<section class="max-h-[770px] group relative overflow-hidden">
    <img loading="lazy" src="<?php echo T_DIRE_URI; ?>/assets/images/bg04.webp" alt="Tour background"
        class="hidden md:block inset-0 w-full h-full bg-cover bg-center z-0">
    </img>
    <img loading="lazy" src="<?php echo T_DIRE_URI; ?>/assets/images/bg04_sp.webp" alt="Tour background"
        class="block md:hidden inset-0 w-full h-full bg-cover bg-center z-0">
    </img>

</section>
<section
    class="relative w-full px-8 md:px-32 lg:px-40 py-14 md:py-24 lg:py-32 bg-[url('<?php echo T_DIRE_URI; ?>/assets/images/bg_green.webp')] bg-cover bg-center">
    <div
        class="absolute inset-0 bg-[linear-gradient(to_top,#013538_0%,#096586_28%,#2A88A9_71%,#197C95_79%,#087080_100%)] md:opacity-70 -z-1">
    </div>
    <div class="relative z-10 w-full max-w-[870px] flex flex-col items-center mx-auto gap-10 lg:gap-16 xl:gap-28">
        <div class="w-full flex justify-center md:justify-start">
            <button
                class="bg-white text-[#1E7F9B] px-12 py-1 text-[15px] lg:text-[17px] xl:text-[20px] shadow border border-[#d8f1fd] hover:bg-[#d8f1fd] transition-all duration-200 tracking-widest font-bold ">
                DAY 2
            </button>
        </div>
        <div class="w-full flex flex-col gap-16 lg:gap-16 xl:gap-28">
            <?php
            $post_tours = new WP_Query(array(
                'post_type' => 'post_tour',
                'posts_per_page' => -1,
                'orderby' => 'menu_order',
                'order' => 'ASC'
            ));
            ?>
            <?php
            static $j = 0;
            while ($post_tours->have_posts()) : $post_tours->the_post();
                $day = get_field('day');
                if ($day === '2日目') :
            ?>
                    <div class="w-full flex flex-col <?php echo ($j % 2 === 1) ? 'md:flex-row-reverse' : 'md:flex-row'; ?> justify-between md:items-center gap-8 xl:gap-16">
                        <?php $j++; ?>
                        <div class="w-full md:w-2/3">
                            <img loading="lazy" src="<?php the_field('image'); ?>" alt="Itinerary 1" class="w-full object-cover" />
                        </div>
                        <div class="w-full md:w-1/3 flex items-center">
                            <div class="flex flex-col md:gap-2 lg:gap-4 xl:gap-6">
                                <h3
                                    class="text-white text-[17px] md:text-[17px] lg:text-[20px] xl:text-[30px] font-normal">
                                    <?php the_field('title'); ?>
                                </h3>
                                <p class="text-white/90 text-[13px] md:text-[12px] lg:text-[17px] lg:leading-[1.75]">
                                    <?php the_field('description'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
            <?php
                endif;
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
<section class="max-h-[770px] group relative overflow-hidden">
    <img loading="lazy" src="<?php echo T_DIRE_URI; ?>/assets/images/bg_tour04.webp" alt="Tour background"
        class="hidden md:block inset-0 w-full h-full bg-cover bg-center z-0">
    </img>
    <img loading="lazy" src="<?php echo T_DIRE_URI; ?>/assets/images/bg_tour04_sp.webp" alt="Tour background"
        class="block md:hidden inset-0 w-full h-full bg-cover bg-center z-0">
    </img>

</section>
<section class="w-full bg-black px-8">
    <div class="py-24 lg:py-32 xl:py-48 w-full flex justify-center">
        <div class="w-full max-w-[360px] flex flex-col items-center gap-6 md:gap-10 lg:gap-14 xl:gap-20">
            <div
                class="w-full flex flex-col items-center text-[#C4B28C] gap-4 md:gap-6 lg:gap-8 xl:gap-10">
                <h2
                    class="text-[30px] md:text-[24px] lg:text-[28px] xl:text-[32px] font-light mb-6 mt-2 tracking-wide text-center">
                    Details
                </h2>
                <div class="w-full flex flex-col justify-between items-center">
                    <span
                        class="mt-2 mb-[2px] text-[15px] md:text-[15px] lg:text-[17px] xl:text-[18px]">Price</span>
                    <div class="w-full border-t border-[#C4B28C] my-1"></div>
                    <div class="w-full text-center">
                        <span
                            class="w-full text-white text-[16px] text-center md:text-[16px] lg:text-[18px] xl:text-[19px]">
                            <?php
                            $price = get_field('price');
                            echo !empty($price) ? nl2br(esc_html($price)) : '<span class="text-[#888]">Not set</span>';
                            ?>
                        </span>
                    </div>
                </div>
                <div class="w-full flex flex-col justify-between items-center">
                    <span
                        class="mt-2 mb-[2px] text-[15px] md:text-[15px] lg:text-[17px] xl:text-[18px]">Includes</span>
                    <div class="w-full border-t border-[#C4B28C] my-1"></div>
                    <div class="w-full text-center">
                        <span
                            class="w-full text-white text-[16px] text-center md:text-[16px] lg:text-[18px] xl:text-[19px]">
                            <?php
                            $includes = get_field('includes');
                            echo !empty($includes) ? nl2br(esc_html($includes)) : '<span class="text-[#888]">Not set</span>';
                            ?>
                        </span>
                    </div>
                </div>
                <div class="w-full flex flex-col justify-between items-center">
                    <span
                        class="mt-2 mb-[2px] text-[15px] md:text-[15px] lg:text-[17px] xl:text-[18px]">Languages</span>
                    <div class="w-full border-t border-[#C4B28C] my-1"></div>
                    <div class="w-full text-center">
                        <span
                            class="w-full text-white text-[16px] text-center md:text-[16px] lg:text-[18px] xl:text-[19px]">
                            <?php
                            $langs = get_field('langs');
                            echo !empty($langs) ? nl2br(esc_html($langs)) : '<span class="text-[#888]">Not set</span>';
                            ?>
                        </span>
                    </div>
                </div>
                <div class="w-full flex flex-col justify-between items-center">
                    <span class="mt-2 mb-[2px] text-[15px] md:text-[15px] lg:text-[17px] xl:text-[18px]">
                        Group size
                    </span>
                    <div class="w-full border-t border-[#C4B28C] my-1"></div>
                    <div class="w-full text-center">
                        <span
                            class="w-full text-white text-[16px] text-center md:text-[16px] lg:text-[18px] xl:text-[19px]">
                            <?php
                            $min_max = get_field('min_max');
                            echo !empty($min_max) ? nl2br(esc_html($min_max)) : '<span class="text-[#888]">Not set</span>';
                            ?>
                        </span>
                    </div>
                </div>
                <div class="w-full flex flex-col justify-between items-center">
                    <span class="mt-2 mb-[2px] text-[15px] md:text-[15px] lg:text-[17px] xl:text-[18px]">
                        Cancellation Policy
                    </span>
                    <div class="w-full border-t border-[#C4B28C] my-1"></div>
                    <div class="w-full text-center">
                        <span
                            class="w-full text-white text-[16px] text-center md:text-[16px] lg:text-[18px] xl:text-[19px]">
                            <?php
                            $cancel_policy = get_field('cancel_policy');
                            echo !empty($cancel_policy) ? nl2br(esc_html($cancel_policy)) : '<span class="text-[#888]">Not set</span>';
                            ?>
                        </span>
                    </div>
                </div>
                <div class="w-full flex flex-col justify-between items-center">
                    <span class="mt-2 mb-[2px] text-[15px] md:text-[15px] lg:text-[17px] xl:text-[18px]">
                        Meeting place
                    </span>
                    <div class="w-full border-t border-[#C4B28C] my-1"></div>
                    <div class="w-full text-center">
                        <span
                            class="w-full text-white text-[16px] text-center md:text-[16px] lg:text-[18px] xl:text-[19px]">
                            <?php
                            $meeting_place = get_field('meeting_place');
                            echo !empty($meeting_place) ? nl2br(esc_html($meeting_place)) : '<span class="text-[#888]">Not set</span>';
                            ?>
                        </span>
                    </div>
                </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3295.6946394343545!2d136.81625807632452!3d34.307325004217326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6005abc3e76f707f%3A0x87eee77a3321cc44!2sEntrada%20Kashikojima%20-%20Ago%20bay%20cruise%2C%20sea%20taxi%20%26%20other%20cruise%20experience!5e0!3m2!1sen!2sus!4v1765018344801!5m2!1sen!2sus"
                class="w-full aspect-square object-cover border-none" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="flex flex-col gap-8 lg:gap-10 xl:gap-16">
                <h1
                    class="text-[#C4B28C] text-[32px] md:text-[36px] lg:text-[40px] xl:text-[42px] pt-16 md:pt-0 font-light tracking-wide text-center">
                    FAQ
                </h1>
                <section class="accordion flex flex-col gap-6 md:gap-8 lg:gap-10 xl:gap-10">
                    <div class="tab">
                        <input class="absolute opacity-0 -z-10" type="radio" name="accordion-2" id="rd1" checked>
                        <label for="rd1" class="tab__label">
                            Q. Is it possible to book the Ama diving experience as a standalone activity?
                            <i class="fa-solid fa-caret-down w-4 h-4 shrink-0 transition-transform"></i>
                        </label>
                        <div class="tab__content">
                            <p>
                                A. Yes, a standalone Ama diving experience is available.
                                Please refer to our "Experiences" page for details.
                                If you would like to book this specific experience, kindly request it via our contact form.
                            </p>
                        </div>
                    </div>
                    <div class="tab">
                        <input type="radio" name="accordion-2" id="rd2">
                        <label for="rd2" class="tab__label">
                            Q. Where is the private bar located?
                            <i class="fa-solid fa-caret-down w-4 h-4 shrink-0 transition-transform"></i>
                        </label>
                        <div class="tab__content">
                            <p>
                                A. To ensure exclusivity, the exact location is kept undisclosed.
                                We will provide private boat transfer to whisk you away to this hidden venue.
                            </p>
                        </div>
                    </div>
                    <div class="tab">
                        <input type="radio" name="accordion-2" id="rd3">
                        <label for="rd3" class="tab__label">
                            Q. Who is this experience recommended for?
                            <i class="fa-solid fa-caret-down w-4 h-4 shrink-0 transition-transform"></i>
                        </label>
                        <div class="tab__content">
                            <p>
                                A. We highly recommend this for guests who wish to hear the history of Shima and the stories of
                                the Ama and pearls firsthand from local storytellers. It is ideal for travelers seeking a deep,
                                authentic, and unique immersion unlike any other.
                            </p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
<section class="w-full flex justify-center items-center bg-[#e5e5e5] pt-8 pb-16 md:py-24 px-2">
    <div
        class="w-full max-w-[520px] bg-[#e5e5e5]   py-14 px-6 md:px-12 flex flex-col items-center shadow-none m-auto">
        <h2 class=" text-[#181818] text-[1.6rem] md:text-[2rem] mb-8 font-normal text-center">
            Request/Contact Form
        </h2>
        <form class="w-full flex flex-col gap-4 max-w-[560px] items-center">
            <div class="w-full flex flex-col gap-1">
                <label for="name"
                    class="text-[#181818] text-sm font-normal md:text-[16px] lg:text-[18px] xl:text-[20px]">
                    Full Name<span class="text-[#c71515]">*</span>
                </label>
                <input type="text" id="name" name="name" required
                    class="my-1 lg:my-2 bg-white h-[44px] md:h-[54px] lg:h-[64px] xl:h-[73px] text-[20px] p-4 focus:outline-none focus:border-[#8a8749]">
            </div>
            <div class="w-full flex flex-col gap-1">
                <label for="nationality"
                    class="text-[#181818] text-sm font-normal md:text-[16px] lg:text-[18px] xl:text-[20px]">Nationality<span
                        class="text-[#c71515]">*</span></label>
                <input type="text" id="nationality" name="nationality" required
                    class="my-1 lg:my-2 bg-white h-[44px] md:h-[54px] lg:h-[64px] xl:h-[73px] text-[20px] p-4 focus:outline-none focus:border-[#8a8749]">
            </div>
            <div class="w-full flex flex-col gap-1">
                <label for="email"
                    class="text-[#181818] text-sm font-normal md:text-[16px] lg:text-[18px] xl:text-[20px]">E-Mail<span
                        class="text-[#c71515]">*</span></label>
                <input type="email" id="email" name="email" required
                    class="my-1 lg:my-2 bg-white h-[44px] md:h-[54px] lg:h-[64px] xl:h-[73px] text-[20px] p-4 focus:outline-none focus:border-[#8a8749]">
            </div>
            <div class="w-full flex flex-col gap-1">
                <label for="participants"
                    class="text-[#181818] text-sm font-normal md:text-[16px] lg:text-[18px] xl:text-[20px]">Number of participants</label>
                <select id="participants" name="participants"
                    class="text-[20px] my-1 lg:my-2 px-4 py-2 bg-white focus:outline-none focus:border-[#8a8749] h-[44px] md:h-[54px] lg:h-[64px] xl:h-[73px]">
                    <option value="" disabled selected>Select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5+">5+</option>
                </select>
            </div>
            <div class="w-full flex flex-col gap-1">
                <label for="date"
                    class="text-[#181818] text-sm font-normal md:text-[16px] lg:text-[18px] xl:text-[20px]">Preferred
                    Date 1
                </label>
                <input type="date" id="date" name="date"
                    class="my-1 lg:my-2 bg-white h-[44px] md:h-[54px] lg:h-[64px] xl:h-[73px] text-[20px] p-4 focus:outline-none focus:border-[#8a8749]">
            </div>
            <div class="w-full flex flex-col gap-1">
                <label for="date"
                    class="text-[#181818] text-sm font-normal md:text-[16px] lg:text-[18px] xl:text-[20px]">Preferred
                    Date 2
                </label>
                <input type="date" id="date" name="date"
                    class="my-1 lg:my-2 bg-white h-[44px] md:h-[54px] lg:h-[64px] xl:h-[73px] text-[20px] p-4 focus:outline-none focus:border-[#8a8749]">
            </div>
            <div class="w-full flex flex-col gap-1">
                <label for="date"
                    class="text-[#181818] text-sm font-normal md:text-[16px] lg:text-[18px] xl:text-[20px]">Preferred
                    Date 3
                </label>
                <input type="date" id="date" name="date"
                    class="my-1 lg:my-2 bg-white h-[44px] md:h-[54px] lg:h-[64px] xl:h-[73px] text-[20px] p-4 focus:outline-none focus:border-[#8a8749]">
            </div>
            <div class="w-full flex flex-col gap-1">
                <label for="comments"
                    class="text-[#181818]  font-normal text-sm md:text-[16px] lg:text-[18px] xl:text-[20px]">Comments</label>
                <textarea id="comments" name="comments" rows="7"
                    class="my-1 lg:my-2 px-4 py-2 lg:py-4 bg-white resize-none focus:outline-none focus:border-[#8a8749] text-sm md:text-[16px] lg:text-[18px] xl:text-[20px] leading-[1.6]"></textarea>
            </div>
            <div class="flex items-center mt-2">
                <input type="checkbox" id="agreement" required class="mr-2">
                <label
                    for="my-1 lg:my-2 16 h-[7h-[44px] md:3px] 54xt-[ lg:3px] t64t-[ xl:3px] text-[20px] p-4px] lg:text-[18px] xl:text-[20px]">
                    I have read and agree to the <a href="<?php echo esc_url(home_url('/en/privacy')); ?>" class="underline"> Privacy Policy </a>.
                </label>
            </div>
            <button type="submit"
                class="mt-6 w-[80%] bg-[#9E895B] text-white text-[28px] md:text-[36px] tracking-widest -sm hover:bg-[#9b9960] transition">
                SEND
            </button>
        </form>
    </div>
</section>


<?php get_footer(); ?>