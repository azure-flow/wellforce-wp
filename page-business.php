<?php
get_header();
$main_query = new WP_Query(array(
    'post_type' => 'business',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC'
));
?>

<section
    id="hero-section"
    class="w-full h-[400px] md:h-[360px] lg:h-[500px] xl:h-[530px] bg-gradient-to-b from-[#A4D3E8] to-[#28A8E0] flex items-center justify-center">
    <div
        class="mx-auto flex flex-col items-center justify-center w-full mt-14 md:mt-16 lg:mt-28 xl:mt-32">
        <div
            class="text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px] text-white font-medium mb-2">
            Business
        </div>
        <h2
            class="text-[30px] md:text-[36px] lg:text-[40px] xl:text-[50px] text-white font-medium mb-3">
            ビジネス
        </h2>
        <div
            class="max-w-[280px] md:max-w-full text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px] text-white font-medium text-start md:text-center leading-6">
            「自分らしく、心身ともに健やかに、 社会とつながりながら心地よく生<br />きられている状態」
            それがウェルビーイングです。
        </div>
    </div>
</section>
<section
    class="w-full max-w-[1200px] mx-auto justify-center items-center px-4 md:px-8 lg:px-12 xl:px-16">
    <div
        class="text-[10px] md:text-[11px] lg:text-[13px] xl:text-[14px] text-black pt-4 md:pt-5 lg:pt-7 xl:pt-8">
        <a
            href="<?php echo home_url(); ?>"
            class="hover:text-[#28A8E0] hover:underline underline-offset-2 cursor-pointer select-none transition-colors duration-200">株式会社ウエルフォース</a>
        / ビジネス
    </div>
</section>

<section
    class="w-full flex justify-center items-center pt-14 pb-20 md:pt-20 md:pb-24 lg:py-28 xl:py-32 bg-[#fff] px-8">
    <div
        class="w-full max-w-[600px] md:max-w-[680px] lg:max-w-[800px] xl:max-w-[1000px] 2xl:max-w-[1400px] mx-auto flex flex-col justify-center items-center gap-8 md:gap-12 lg:gap-14 xl:gap-16">
        <div
            class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-6 lg:gap-2 xl:gap-10">
            <?php
            if ($main_query->have_posts()) :
                while ($main_query->have_posts()) : $main_query->the_post();
                    $post_title = get_the_title();
                    $post_image = get_field('image');
                    $post_content = get_field('content');
            ?>

                    <div class="swiper-slide flex justify-center">
                        <a
                            href="<?php echo get_the_permalink(); ?>"
                            class="group bg-[#F5FCFF] rounded-[20px] max-w-[295px] md:max-w-[430px] lg:max-w-[300px] xl:max-w-[430px] flex flex-col items-center p-6 md:p-8 lg:p-4 xl:p-6 2xl:p-10 gap-5 md:gap-5 lg:gap-4 xl:gap-6 hover:shadow-md duration-200">
                            <div class="w-fit overflow-hidden rounded-[20px]">
                                <img
                                    src="<?php echo $post_image; ?>"
                                    alt="<?php echo $post_title; ?>"
                                    class="w-full aspect-[1] md:aspect-[7/6] object-cover rounded-[20px] group-hover:scale-105 duration-200" />
                            </div>
                            <div class="flex-1 w-full flex flex-col gap-3 xl:gap-4">
                                <h3
                                    class="font-bold text-[16px] md:text-[18px] xl:text-[20px] text-black line-clamp-1">
                                    <?php echo $post_title; ?>
                                </h3>
                                <p
                                    class="text-[14px] md:text-[16px] lg:text-[14px] xl:text-[16px] leading-relaxed md:leading-[2] lg:leading-relaxed line-clamp-4">
                                    <?php echo $post_content; ?>
                                </p>
                            </div>
                        </a>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>
<?php
get_footer();
?>