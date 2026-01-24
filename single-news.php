    <?php
    get_header();
    $post_title = get_the_title();
    $post_description = get_the_excerpt();
    $post_date = get_the_date('Y.m.d');
    $post_content = get_field('description');
    ?>

    <!-- temp header -->
    <section
        class="w-full h-[67px] md:h-[102px] lg:h-[143px] xl:h-[177px]"></section>
    <!-- temp header -->
    <section
        class="w-full max-w-[1200px] mx-auto justify-center items-center px-4 md:px-8 lg:px-12 xl:px-16">
        <div
            class="text-[10px] md:text-[11px] lg:text-[13px] xl:text-[14px] text-black pt-4 md:pt-5 lg:pt-7 xl:pt-8">
            <a
                href="<?php echo home_url(); ?>"
                class="hover:text-[#28A8E0] hover:underline underline-offset-2 cursor-pointer select-none transition-colors duration-200">株式会社ウエルフォース</a>
            / <a href="<?php echo home_url('/news'); ?>" class="hover:text-[#28A8E0] hover:underline underline-offset-2 cursor-pointer select-none transition-colors duration-200">ニュース</a> / <?php echo $post_title; ?>
        </div>
    </section>

    <section
        class="w-full flex justify-center items-center pt-14 pb-20 md:pt-20 md:pb-24 lg:py-28 xl:py-32 bg-[#fff]">
        <div
            class="w-full max-w-[600px] md:max-w-[680px] lg:max-w-[900px] xl:max-w-[1200px] 2xl:max-w-[1400px] mx-auto flex flex-col justify-center items-center gap-8 md:gap-12 lg:gap-14 xl:gap-16 px-8">
            <div class="w-full relative flex-col items-center gap-6">
                <span
                    class="md:absolute bottom-0 md:left-[10%] xl:left-[15%] text-black text-[8px] md:text-[9px] lg:text-[10px] xl:text-[12px] py-[3px] px-[9px] rounded-[10px] border border-[#9F9F9F] mb-6 md:mb-0"><?php echo $post_date; ?></span>
                <h2
                    class="text-[20px] md:text-[27px] lg:text-[40px] font-bold text-center w-full leading-tight">
                    <?php echo $post_title; ?>
                </h2>
            </div>
            <div class="w-full flex flex-col flex-1 justify-center items-start">
                <div class="w-full h-full ove">
                    <p
                        class="text-black text-[12px] md:text-[13px] lg:text-[14px] xl:text-[16px] leading-[2.4]">
                        <?php echo linkify_text(nl2br(esc_html($post_content))); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>