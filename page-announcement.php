<?php

get_header();
?>

<section
    id="hero-section"
    class="w-full h-[400px] md:h-[360px] lg:h-[500px] xl:h-[530px] bg-gradient-to-b from-[#A4D3E8] to-[#28A8E0] flex items-center justify-center">
    <div
        class="mx-auto flex flex-col items-center justify-center w-full mt-14 md:mt-16 lg:mt-28 xl:mt-32">
        <div
            class="text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px] text-white font-medium mb-2">
            Blog
        </div>
        <h2
            class="text-[30px] md:text-[36px] lg:text-[40px] xl:text-[50px] text-white font-medium mb-3">
            お知らせ
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
        / お知らせ
    </div>
</section>

<section
    class="w-full flex justify-center items-center pt-14 pb-20 md:pt-20 md:pb-24 lg:py-28 xl:py-32 bg-[#fff] px-8">
    <div
        class="w-full max-w-[600px] md:max-w-[680px] lg:max-w-[800px] xl:max-w-[1000px] 2xl:max-w-[1400px] mx-auto flex flex-col justify-center items-center gap-8 md:gap-12 lg:gap-14 xl:gap-16">
        <div
            class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-6 lg:gap-2 xl:gap-10">
            <div class="swiper-slide flex justify-center">
                <a
                    href="<?php echo home_url('/announcement'); ?>"
                    class="group bg-[#F5FCFF] rounded-[20px] max-w-[295px] md:max-w-[430px] lg:max-w-[300px] xl:max-w-[430px] flex flex-col items-center p-6 md:p-8 lg:p-4 xl:p-6 2xl:p-10 gap-5 md:gap-5 lg:gap-4 xl:gap-6 hover:shadow-md duration-200">
                    <div class="w-fit overflow-hidden rounded-[20px]">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/blog01.webp"
                            alt="お知らせ1"
                            class="w-full aspect-[1] md:aspect-[7/6] object-cover rounded-[20px] group-hover:scale-105 duration-200" />
                    </div>
                    <div class="flex-1 w-full flex flex-col gap-4 xl:gap-5">
                        <div class="flex gap-3">
                            <span
                                class="bg-[#E0F6FF] text-black rounded-full px-3 py-[2px] text-[10px] md:text-[12px] lg:text-[11px] text-[12px] font-regular">
                                2025.1.10
                            </span>
                            <span
                                class="bg-[#E0F6FF] text-black rounded-full px-3 py-[2px] text-[10px] md:text-[12px] lg:text-[11px] text-[12px] font-regular">地域情報</span>
                        </div>
                        <p
                            class="text-[14px] md:text-[16px] lg:text-[14px] xl:text-[16px] leading-relaxed md:leading-[2] lg:leading-relaxed line-clamp-4">
                            東大阪市八戸ノ里駅周辺の生活環境や交通アクセスについてご紹介します。
                            東大阪市八戸ノ里駅周辺の生活環境や交通アクセスについてご紹介します。
                            東大阪市八戸ノ里駅周辺の生活環境や交通アクセスについてご紹介します。
                            東大阪市八戸ノ里駅周辺の生活環境や交通アクセスについてご紹介します。
                        </p>
                    </div>
                </a>
            </div>
            <div class="swiper-slide flex justify-center">
                <a
                    href="<?php echo home_url('/announcement'); ?>"
                    class="group bg-[#F5FCFF] rounded-[20px] max-w-[295px] md:max-w-[430px] lg:max-w-[300px] xl:max-w-[430px] flex flex-col items-center p-6 md:p-8 lg:p-4 xl:p-6 2xl:p-10 gap-5 md:gap-5 lg:gap-4 xl:gap-6 hover:shadow-md duration-200">
                    <div class="w-fit overflow-hidden rounded-[20px]">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/blog01.webp"
                            alt="お知らせ1"
                            class="w-full aspect-[1] md:aspect-[7/6] object-cover rounded-[20px] group-hover:scale-105 duration-200" />
                    </div>
                    <div class="flex-1 w-full flex flex-col gap-4 xl:gap-5">
                        <div class="flex gap-3">
                            <span
                                class="bg-[#E0F6FF] text-black rounded-full px-3 py-[2px] text-[10px] md:text-[12px] lg:text-[11px] text-[12px] font-regular">
                                2025.1.10
                            </span>
                            <span
                                class="bg-[#E0F6FF] text-black rounded-full px-3 py-[2px] text-[10px] md:text-[12px] lg:text-[11px] text-[12px] font-regular">地域情報</span>
                        </div>
                        <p
                            class="text-[14px] md:text-[16px] lg:text-[14px] xl:text-[16px] leading-relaxed md:leading-[2] lg:leading-relaxed line-clamp-4">
                            東大阪市八戸ノ里駅周辺の生活環境や交通アクセスについてご紹介します。
                            東大阪市八戸ノ里駅周辺の生活環境や交通アクセスについてご紹介します。
                            東大阪市八戸ノ里駅周辺の生活環境や交通アクセスについてご紹介します。
                            東大阪市八戸ノ里駅周辺の生活環境や交通アクセスについてご紹介します。
                        </p>
                    </div>
                </a>
            </div>
            <div class="swiper-slide flex justify-center">
                <a
                    href="<?php echo home_url('/announcement'); ?>"
                    class="group bg-[#F5FCFF] rounded-[20px] max-w-[295px] md:max-w-[430px] lg:max-w-[300px] xl:max-w-[430px] flex flex-col items-center p-6 md:p-8 lg:p-4 xl:p-6 2xl:p-10 gap-5 md:gap-5 lg:gap-4 xl:gap-6 hover:shadow-md duration-200">
                    <div class="w-fit overflow-hidden rounded-[20px]">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/blog01.webp"
                            alt="お知らせ1"
                            class="w-full aspect-[1] md:aspect-[7/6] object-cover rounded-[20px] group-hover:scale-105 duration-200" />
                    </div>
                    <div class="flex-1 w-full flex flex-col gap-4 xl:gap-5">
                        <div class="flex gap-3">
                            <span
                                class="bg-[#E0F6FF] text-black rounded-full px-3 py-[2px] text-[10px] md:text-[12px] lg:text-[11px] text-[12px] font-regular">
                                2025.1.10
                            </span>
                            <span
                                class="bg-[#E0F6FF] text-black rounded-full px-3 py-[2px] text-[10px] md:text-[12px] lg:text-[11px] text-[12px] font-regular">地域情報</span>
                        </div>
                        <p
                            class="text-[14px] md:text-[16px] lg:text-[14px] xl:text-[16px] leading-relaxed md:leading-[2] lg:leading-relaxed line-clamp-4">
                            東大阪市八戸ノ里駅周辺の生活環境や交通アクセスについてご紹介します。
                            東大阪市八戸ノ里駅周辺の生活環境や交通アクセスについてご紹介します。
                            東大阪市八戸ノ里駅周辺の生活環境や交通アクセスについてご紹介します。
                            東大阪市八戸ノ里駅周辺の生活環境や交通アクセスについてご紹介します。
                        </p>
                    </div>
                </a>
            </div>
            <div class="swiper-slide flex justify-center">
                <a
                    href="<?php echo home_url('/announcement'); ?>"
                    class="group bg-[#F5FCFF] rounded-[20px] max-w-[295px] md:max-w-[430px] lg:max-w-[300px] xl:max-w-[430px] flex flex-col items-center p-6 md:p-8 lg:p-4 xl:p-6 2xl:p-10 gap-5 md:gap-5 lg:gap-4 xl:gap-6 hover:shadow-md duration-200">
                    <div class="w-fit overflow-hidden rounded-[20px]">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/blog01.webp"
                            alt="お知らせ1"
                            class="w-full aspect-[1] md:aspect-[7/6] object-cover rounded-[20px] group-hover:scale-105 duration-200" />
                    </div>
                    <div class="flex-1 w-full flex flex-col gap-4 xl:gap-5">
                        <div class="flex gap-3">
                            <span
                                class="bg-[#E0F6FF] text-black rounded-full px-3 py-[2px] text-[10px] md:text-[12px] lg:text-[11px] text-[12px] font-regular">
                                2025.1.10
                            </span>
                            <span
                                class="bg-[#E0F6FF] text-black rounded-full px-3 py-[2px] text-[10px] md:text-[12px] lg:text-[11px] text-[12px] font-regular">地域情報</span>
                        </div>
                        <p
                            class="text-[14px] md:text-[16px] lg:text-[14px] xl:text-[16px] leading-relaxed md:leading-[2] lg:leading-relaxed line-clamp-4">
                            東大阪市八戸ノ里駅周辺の生活環境や交通アクセスについてご紹介します。
                            東大阪市八戸ノ里駅周辺の生活環境や交通アクセスについてご紹介します。
                            東大阪市八戸ノ里駅周辺の生活環境や交通アクセスについてご紹介します。
                            東大阪市八戸ノ里駅周辺の生活環境や交通アクセスについてご紹介します。
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>