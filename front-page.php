<?php

get_header();
?>
<section class="overflow-hidden relative w-full h-[100vh]">
    <div
        class="absolute top-[67px] md:top-[120px] lg:top-[180px] xl:top-[220px] left-0 xl:left-[500px] fv-left-725 right-0 bottom-0"
        data-aos="fade-in"
        data-aos-delay="200">
        <img
            src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/fv_top.webp' ); ?>"
            alt="FV"
            class="absolute top-0 left-0 right-0 bottom-0 w-full h-full object-cover" />
    </div>
    <div
        class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 z-20 flex items-center justify-center lg:justify-start w-[110%] md:w-[90%] lg:w-[95%] xl:w-full max-w-[1400px] md:mt-32">
        <div
            class="md:max-w-[440px] lg:max-w-[480px] xl:max-w-[580px] w-full min-w-[320px] aspect-[1] bg-white/60 md:bg-[#e2f5ffb3] md:hover:bg-[#e2f5ff] rounded-full flex flex-col items-center justify-between px-8 py-16 md:px-10 lg:px-12 xl:px-16 md:py-16 lg:py-28 xl:py-32 text-center pointer-events-auto duration-200">
            <div
                class="text-[12px] md:text-[14px] lg:text-[15px] xl:text-[16px] tracking-wide text-black font-medium">
                東大阪から、ウェルビーイングを届ける
            </div>
            <div
                class="text-[30px] md:text-[38px] lg:text-[44px] xl:text-[50px] font-gothic font-bold text-black whitespace-nowrap">
                人が暮らしやすい街
            </div>
            <div
                class="px-[58px] md:px-0 text-[14px] md:text-[16px] lg:text-[17px] xl:text-[18px] text-left text-black leading-[1.4] font-medium">
                株式会社ウエルフォースは、賃貸住宅経営<br class="hidden md:block" />
                を軸に、 生成AIコミュニティや猫と暮らす<br
                    class="hidden md:block" />
                未来型住宅など、 地域のウェルビーイング<br
                    class="hidden md:block" />
                向上に貢献する事業を展開しています。
            </div>
            <a
                href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"
                class="flex items-center justify-center rounded-[20px] bg-[#28A8E0] hover:bg-[#5ec6f8] px-8 md:px-10 lg:px-12 xl:px-14 py-2 md:py-3 lg:py-4 xl:py-5 text-white font-bold text-[12px] md:text-[16px] transition-colors duration-150">
                コンタクトを取る
                <svg
                    class="inline-block align-middle ml-2 w-[22px] md:w-[28px] aspect-1"
                    viewBox="0 0 24 24"
                    fill="none">
                    <g>
                        <rect width="16" height="16" fill="none"></rect>
                        <path
                            d="M4 12h14"
                            stroke="#fff"
                            stroke-width="1"
                            stroke-linecap="round"></path>
                        <path
                            d="M12 6l6 6-6 6"
                            stroke="#fff"
                            stroke-width="1"
                            stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </g>
                </svg>
            </a>
        </div>
    </div>
</section>

<section
    class="w-full h-full min-h-[370px] flex items-center justify-center">
    <div class="w-full items-center justify-center">
        <div class="w-full">
            <!-- Brand Swiper Slider -->
            <div class="swiper swiper-brands w-full">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div
                            class="w-[208px] md:w-full max-w-[300px] aspect-[2] bg-white rounded-[20px] rounded-[15px] border-[1px] border-gray-300 flex items-center justify-center overflow-hidden">
                            <img
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brand01.webp' ); ?>"
                                alt="marquee01"
                                class="w-full object-cover" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="w-[208px] md:w-full max-w-[300px] aspect-[2] bg-white rounded-[20px] rounded-[15px] border-[1px] border-gray-300 flex items-center justify-center overflow-hidden">
                            <img
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brand02.webp' ); ?>"
                                alt="marquee02"
                                class="w-full object-cover" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="w-[208px] md:w-full max-w-[300px] aspect-[2] bg-white rounded-[20px] rounded-[15px] border-[1px] border-gray-300 flex items-center justify-center overflow-hidden">
                            <img
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brand03.webp' ); ?>"
                                alt="marquee03"
                                class="w-full object-cover" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="w-[208px] md:w-full max-w-[300px] aspect-[2] bg-white rounded-[20px] rounded-[15px] border-[1px] border-gray-300 flex items-center justify-center overflow-hidden">
                            <img
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brand04.webp' ); ?>"
                                alt="marquee04"
                                class="w-full object-cover hidden md:block" />
                            <img
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brand01.webp' ); ?>"
                                alt="marquee04"
                                class="w-full object-cover block md:hidden" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="w-[208px] md:w-full max-w-[300px] aspect-[2] bg-white rounded-[20px] rounded-[15px] border-[1px] border-gray-300 flex items-center justify-center overflow-hidden">
                            <img
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brand05.webp' ); ?>"
                                alt="marquee05"
                                class="w-full object-cover hidden md:block" />
                            <img
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brand02.webp' ); ?>"
                                alt="marquee05"
                                class="w-full object-cover block md:hidden" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="w-[208px] md:w-full max-w-[300px] aspect-[2] bg-white rounded-[20px] rounded-[15px] border-[1px] border-gray-300 flex items-center justify-center overflow-hidden">
                            <img
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brand06.webp' ); ?>"
                                alt="marquee06"
                                class="w-full object-cover hidden md:block" />
                            <img
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brand03.webp' ); ?>"
                                alt="marquee06"
                                class="w-full object-cover block md:hidden" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="w-[208px] md:w-full max-w-[300px] aspect-[2] bg-white rounded-[20px] rounded-[15px] border-[1px] border-gray-300 flex items-center justify-center overflow-hidden">
                            <img
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brand01.webp' ); ?>"
                                alt="marquee01"
                                class="w-full object-cover" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="w-[208px] md:w-full max-w-[300px] aspect-[2] bg-white rounded-[20px] rounded-[15px] border-[1px] border-gray-300 flex items-center justify-center overflow-hidden">
                            <img
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brand02.webp' ); ?>"
                                alt="marquee02"
                                class="w-full object-cover" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="w-[208px] md:w-full max-w-[300px] aspect-[2] bg-white rounded-[20px] rounded-[15px] border-[1px] border-gray-300 flex items-center justify-center overflow-hidden">
                            <img
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brand03.webp' ); ?>"
                                alt="marquee03"
                                class="w-full object-cover" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="w-[208px] md:w-full max-w-[300px] aspect-[2] bg-white rounded-[20px] rounded-[15px] border-[1px] border-gray-300 flex items-center justify-center overflow-hidden">
                            <img
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brand04.webp' ); ?>"
                                alt="marquee04"
                                class="w-full object-cover hidden md:block" />
                            <img
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brand01.webp' ); ?>"
                                alt="marquee04"
                                class="w-full object-cover block md:hidden" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="w-[208px] md:w-full max-w-[300px] aspect-[2] bg-white rounded-[20px] rounded-[15px] border-[1px] border-gray-300 flex items-center justify-center overflow-hidden">
                            <img
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brand05.webp' ); ?>"
                                alt="marquee05"
                                class="w-full object-cover hidden md:block" />
                            <img
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brand02.webp' ); ?>"
                                alt="marquee05"
                                class="w-full object-cover block md:hidden" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="w-[208px] md:w-full max-w-[300px] aspect-[2] bg-white rounded-[20px] rounded-[15px] border-[1px] border-gray-300 flex items-center justify-center overflow-hidden">
                            <img
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brand06.webp' ); ?>"
                                alt="marquee06"
                                class="w-full object-cover hidden md:block" />
                            <img
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brand03.webp' ); ?>"
                                alt="marquee06"
                                class="w-full object-cover block md:hidden" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper swiper-brands02 w-full mt-[32px] block md:hidden">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div
                            class="w-[208px] md:w-full max-w-[300px] aspect-[2] bg-white rounded-[20px] rounded-[15px] border-[1px] border-gray-300 flex items-center justify-center overflow-hidden">
                            <img
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brand04.webp' ); ?>"
                                alt="marquee04"
                                class="w-full object-cover" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="w-[208px] md:w-full max-w-[300px] aspect-[2] bg-white rounded-[20px] rounded-[15px] border-[1px] border-gray-300 flex items-center justify-center overflow-hidden">
                            <img
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brand05.webp' ); ?>"
                                alt="marquee05"
                                class="w-full object-cover" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="w-[208px] md:w-full max-w-[300px] aspect-[2] bg-white rounded-[20px] rounded-[15px] border-[1px] border-gray-300 flex items-center justify-center overflow-hidden">
                            <img
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brand06.webp' ); ?>"
                                alt="marquee06"
                                class="w-full object-cover" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section
    class="w-full flex justify-center items-center pb-20 md:pb-24 lg:pb-28 lg:pb-32 bg-[#fff]">
    <div
        class="w-full max-w-[1400px] h-full flex flex-col gap-6 md:gap-8 lg:gap-12 xl:gap-16">
        <div
            class="flex flex-col items-center gap-8 md:gap-12 lg:gap-14 xl:gap-16 px-8">
            <div class="flex flex-col items-center gap-6">
                <h2
                    class="text-[20px] md:text-[27px] lg:text-[40px] font-bold text-center w-full leading-tight">
                    NEWS
                </h2>
                <p
                    class="text-[14px] md:text-[15px] lg:text-[16px] xl:text-[18px] text-black w-full text-start md:text-center md:mb-3">
                    ウェルフォース社からのお知らせを掲載しています。
                </p>
            </div>
            <div
                class="w-full flex flex-col items-center justify-center gap-3 md:gap-3 lg:gap-4 xl:gap-5">
                <a
                    href="<?php echo esc_url( home_url( '/news-sub/' ) ); ?>"
                    class="w-full max-w-[1000px] rounded-[20px] bg-[#EAF8FF] px-5 py-5 md:px-8 md:py-6 flex flex-col gap-1 md:gap-1 lg:gap-1 xl:gap-2 shadow-sm hover:bg-[#e0f6ff] hover:shadow-md duration-150 cursor-pointer"
                    data-aos="fade-in"
                    data-aos-delay="200">
                    <div class="w-full flex justify-start mb-1">
                        <span
                            class="text-black text-[8px] md:text-[9px] lg:text-[10px] xl:text-[12px] py-[3px] px-[9px] rounded-[10px] border border-[#9F9F9F]">2025.1.10</span>
                    </div>
                    <div
                        class="flex items-center gap-3 text-black text-[14px] md:text-[15px] lg:text-[16px] xl:text-[18px] font-medium pt-1 md:pt-2">
                        新機能を追加しました
                    </div>
                    <p
                        class="text-black text-[12px] md:text-[13px] lg:text-[14px] xl:text-[16px]">
                        本日、ウェブサイトに新機能を追加しました。より便利にご利用いただけるよう改善を行っております。ぜひご活用ください。
                    </p>
                </a>
                <a
                    href="<?php echo esc_url( home_url( '/news-sub/' ) ); ?>"
                    class="w-full max-w-[1000px] rounded-[20px] bg-[#EAF8FF] px-5 py-5 md:px-8 md:py-6 flex flex-col gap-1 md:gap-1 lg:gap-1 xl:gap-2 shadow-sm hover:bg-[#e0f6ff] hover:shadow-md duration-150 cursor-pointer"
                    data-aos="fade-in"
                    data-aos-delay="200">
                    <div class="w-full flex justify-start mb-1">
                        <span
                            class="text-black text-[8px] md:text-[9px] lg:text-[10px] xl:text-[12px] py-[3px] px-[9px] rounded-[10px] border border-[#9F9F9F]">2025.1.10</span>
                    </div>
                    <div
                        class="flex items-center gap-3 text-black text-[14px] md:text-[15px] lg:text-[16px] xl:text-[18px] font-medium pt-1 md:pt-2">
                        新機能を追加しました
                    </div>
                    <p
                        class="text-black text-[12px] md:text-[13px] lg:text-[14px] xl:text-[16px]">
                        本日、ウェブサイトに新機能を追加しました。より便利にご利用いただけるよう改善を行っております。ぜひご活用ください。
                    </p>
                </a>
                <a
                    href="<?php echo esc_url( home_url( '/news-sub/' ) ); ?>"
                    class="w-full max-w-[1000px] rounded-[20px] bg-[#EAF8FF] px-5 py-5 md:px-8 md:py-6 flex flex-col gap-1 md:gap-1 lg:gap-1 xl:gap-2 shadow-sm hover:bg-[#e0f6ff] hover:shadow-md duration-150 cursor-pointer"
                    data-aos="fade-in"
                    data-aos-delay="200">
                    <div class="w-full flex justify-start mb-1">
                        <span
                            class="text-black text-[8px] md:text-[9px] lg:text-[10px] xl:text-[12px] py-[3px] px-[9px] rounded-[10px] border border-[#9F9F9F]">2025.1.10</span>
                    </div>
                    <div
                        class="flex items-center gap-3 text-black text-[14px] md:text-[15px] lg:text-[16px] xl:text-[18px] font-medium pt-1 md:pt-2">
                        新機能を追加しました
                    </div>
                    <p
                        class="text-black text-[12px] md:text-[13px] lg:text-[14px] xl:text-[16px]">
                        本日、ウェブサイトに新機能を追加しました。より便利にご利用いただけるよう改善を行っております。ぜひご活用ください。
                    </p>
                </a>
                <a
                    href="<?php echo esc_url( home_url( '/news/' ) ); ?>"
                    class="w-full max-w-[1000px] flex items-center justify-center rounded-[20px] bg-[#28A8E0] hover:bg-[#5ec6f8] py-2 md:py-3 lg:py-4 mt-5 md:mt-6 lg:mt-10 text-white font-bold text-[14px] md:text-[16px] transition-colors duration-150 cursor-pointer"
                    data-aos="fade-in"
                    data-aos-delay="200">
                    全て見る
                    <svg
                        class="inline-block align-middle ml-2 w-5 md:w-6 xl:w-7 aspect-[1]"
                        viewBox="0 0 24 24"
                        fill="none">
                        <g>
                            <rect width="16" height="16" fill="none"></rect>
                            <path
                                d="M4 12h14"
                                stroke="#fff"
                                stroke-width="1"
                                stroke-linecap="round" />
                            <path
                                d="M12 6l6 6-6 6"
                                stroke="#fff"
                                stroke-width="1"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                        </g>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<section
    class="w-full flex justify-center items-center bg-[#f5fcff] py-16 md:py-20 lg:py-28 xl:py-36 max-h-[885px] overflow-x-hidden">
    <div
        class="w-full max-w-[1400px] h-full flex flex-col gap-6 md:gap-8 lg:gap-12 xl:gap-16">
        <div class="flex flex-col items-center gap-6 px-8">
            <h2
                class="text-[20px] md:text-[27px] lg:text-[40px] font-bold text-center w-full leading-tight">
                株式会社
                <span class="text-[#28A8E0]">ウエルフォース</span>
            </h2>
            <p
                class="text-[14px] md:text-[15px] lg:text-[18px] text-black w-full text-center">
                ウエルフォース社は、「東大阪地域のウェルビーイング向上」に貢献します。
            </p>
        </div>
        <hr
            class="block md:hidden mx-auto w-[90%] border-t-1 border-gray-600 mb-3" />
        <div
            class="flex flex-col lg:flex-row justify-center items-center gap-4 md:gap-0">
            <div
                class="flex flex-col flex-1 justify-center items-start px-8 md:pt-0 md:pr-8 max-w-[600px]">
                <h3
                    class="text-[16px] md:text-[22px] lg:text-[26px] xl:text-[30px] font-semibold text-black mb-3 lg:mb-6"
                    data-aos="fade-in"
                    data-aos-delay="200">
                    地域ウェルビーイングの<br />向上を目指して
                </h3>
                <p
                    class="text-[14px] md:text-[15px] lg:text-[16px] xl:text-[18px] text-black leading-[1.9] mb-7"
                    data-aos="fade-in"
                    data-aos-delay="200">
                    「ウェルビーイング（Well-being）」とは、身体的・精神的・社会的に
                    「単に病気ではないというだけでなく、すべてが満たされた良好な状態」を指す概念です。
                    地域のウェルビーイング向上には、人と人とのつながり（コミュニティ）の強化、
                    心身の健康を支える環境整備、そして「働きがい」や「生きがい」を感じられる仕組みづくりが不可欠です。
                </p>
                <a
                    href="<?php echo esc_url( home_url( '/concept/' ) ); ?>"
                    class="hidden lg:flex items-center justify-center rounded-[20px] bg-[#28A8E0] hover:bg-[#5ec6f8] px-8 md:px-10 lg:px-12 xl:px-14 py-2 md:py-3 lg:py-4 xl:py-5 text-white font-bold text-[12px] md:text-[14px] lg:text-[15px] xl:text-[16px] transition-colors duration-150"
                    data-aos="fade-in"
                    data-aos-delay="200">
                    コンセプトの詳細
                    <svg
                        class="inline-block align-middle ml-2"
                        width="28"
                        height="28"
                        viewBox="0 0 24 24"
                        fill="none">
                        <g>
                            <rect width="16" height="16" fill="none"></rect>
                            <path
                                d="M4 12h14"
                                stroke="#fff"
                                stroke-width="1"
                                stroke-linecap="round" />
                            <path
                                d="M12 6l6 6-6 6"
                                stroke="#fff"
                                stroke-width="1"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                        </g>
                    </svg>
                </a>
            </div>
            <div
                class="flex-1 flex justify-center max-w-[600px] lg:max-w-full items-center px-10 pb-7 md:mb-5 lg:pb-0 md:pr-12 md:pl-8"
                data-aos="fade-in"
                data-aos-delay="200">
                <img
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/video.webp' ); ?>"
                    alt="地域ウェルビーイング"
                    class="max-w-full max-h-[420px] rounded-[20px] bg-white object-contain" />
            </div>
            <a
                href="<?php echo esc_url( home_url( '/concept/' ) ); ?>"
                class="flex lg:hidden items-center justify-center rounded-[20px] bg-[#28A8E0] hover:bg-[#5ec6f8] px-6 py-2 md:py-3 text-white font-bold text-[12px] md:text-[14px] transition-colors duration-150">
                コンセプトの詳細
                <svg
                    class="inline-block align-middle ml-2"
                    width="20"
                    height="20"
                    viewBox="0 0 24 24"
                    fill="none">
                    <g>
                        <rect width="16" height="16" fill="none"></rect>
                        <path
                            d="M4 12h14"
                            stroke="#fff"
                            stroke-width="1"
                            stroke-linecap="round" />
                        <path
                            d="M12 6l6 6-6 6"
                            stroke="#fff"
                            stroke-width="1"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                    </g>
                </svg>
            </a>
        </div>
    </div>
</section>

<section
    class="w-full flex justify-center items-center md:px-8 xl:px-0 py-16 md:py-20 lg:py-28 xl:py-36">
    <div
        class="w-full max-w-[1400px] mx-auto flex flex-col items-center h-full md:gap-8 lg:gap-12 xl:gap-16">
        <div class="flex flex-col items-center gap-6 px-10">
            <h2
                class="text-[20px] md:text-[27px] lg:text-[40px] font-bold text-center w-full leading-tight">
                私たちの取り組み
            </h2>
            <p
                class="text-[14px] md:text-[15px] lg:text-[18px] text-black w-full text-left">
                ウエルフォースは、既存の賃貸住宅事業をベースに、
                新しい形の地域コミュニティと住まいの価値を創造しています。
            </p>
        </div>
        <hr
            class="block md:hidden mx-auto w-[90%] border-t-1 border-gray-600 mt-6" />
        <div
            class="relative w-full md:w-[430px] lg:w-full max-w-[1400px] flex flex-col items-center gap-10">
            <button
                class="initiative-swiper-prev absolute z-10 top-1/2 left-10 md:left-0 -translate-x-1/2 -translate-y-1/2 md:w-[30px] lg:w-[25px] xl:w-[35px] w-[20px] md:w-[30px] aspect-[1] flex items-center justify-center bg-white rounded-full hover:bg-[#e5f7ff] border border-[#4BB7E2] transition duration-150 ml-0 lg:left-[316px] xl:left-[462px]">
                <svg
                    class="inline-block align-middle w-[15px] lg:w-[18px] xl:w-[24px] aspect-1"
                    viewBox="0 0 24 24"
                    fill="none">
                    <g>
                        <rect width="16" height="16" fill="none"></rect>
                        <path
                            d="M20 12H6"
                            stroke="#4BB7E2"
                            stroke-width="1"
                            stroke-linecap="round" />
                        <path
                            d="M12 18l-6-6 6-6"
                            stroke="#4BB7E2"
                            stroke-width="1"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                    </g>
                </svg>
            </button>
            <button
                class="initiative-swiper-next absolute z-10 top-1/2 right-10 md:right-0 translate-x-1/2 -translate-y-1/2 md:w-[30px] lg:w-[25px] xl:w-[35px] w-[20px] md:w-[30px] aspect-[1] flex items-center justify-center bg-white rounded-full hover:bg-[#e5f7ff] border border-[#4BB7E2] transition duration-150 mr-0 lg:right-[316px] xl:right-[462px]">
                <svg
                    class="inline-block align-middle w-[15px] lg:w-[18px] xl:w-[24px] aspect-1"
                    viewBox="0 0 24 24"
                    fill="none">
                    <g>
                        <rect width="16" height="16" fill="none"></rect>
                        <path
                            d="M4 12h14"
                            stroke="#4BB7E2"
                            stroke-width="1"
                            stroke-linecap="round" />
                        <path
                            d="M12 6l6 6-6 6"
                            stroke="#4BB7E2"
                            stroke-width="1"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                    </g>
                </svg>
            </button>
            <div class="swiper swiper-initiative w-full box-border">
                <div class="swiper-wrapper flex items-center">
                    <div
                        class="swiper-slide flex justify-center w-[430px] p-10 md:p-0">
                        <div
                            class="bg-[#E0F6FF] rounded-[20px] w-[430px] h-[410px] md:h-[560px] lg:h-[410px] xl:h-[550px] flex flex-col items-center duration-200 overflow-hidden">
                            <div
                                class="pt-5 px-7 md:p-6 xl:p-10 xl:pb-0 h-3/5 md:h-18/30">
                                <img
                                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/business01.webp' ); ?>"
                                    alt="デジタル寺子屋プロジェクト"
                                    class="w-full aspect-[1] md:aspect-[7/6] object-cover rounded-[20px] group-hover:scale-105 duration-200" />
                            </div>
                            <div
                                class="px-6 flex-1 w-full h-2/5 md:h-12/30 flex flex-col justify-start pt-8 md:pt-10 lg:pt-6 xl:pt-10">
                                <h3
                                    class="font-bold text-[16px] md:text-[18px] xl:text-[20px] text-black mb-3 md:mb-5 lg:mb-3 xl:mb-4 line-clamp-1">
                                    生成AIコミュニティ
                                </h3>
                                <p
                                    class="text-[14px] md:text-[16px] xl:text-[18px] text-black leading-relaxed line-clamp-3">
                                    2026年3月開始予定。
                                    生成AIを使って楽しみを見つける人とつながる場を提供します。
                                    2026年3月開始予定。
                                    生成AIを使って楽しみを見つける人とつながる場を提供します。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="swiper-slide flex justify-center w-[430px] p-10 md:p-0">
                        <div
                            class="bg-[#E0F6FF] rounded-[20px] w-[430px] h-[410px] md:h-[560px] lg:h-[410px] xl:h-[550px] flex flex-col items-center duration-200 overflow-hidden">
                            <div
                                class="pt-5 px-7 md:p-6 xl:p-10 xl:pb-0 h-3/5 md:h-18/30">
                                <img
                                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/business02.webp' ); ?>"
                                    alt="新たな住まい支援"
                                    class="w-full aspect-[1] md:aspect-[7/6] object-cover rounded-[20px] group-hover:scale-105 duration-200" />
                            </div>
                            <div
                                class="px-6 flex-1 w-full h-2/5 md:h-12/30 flex flex-col justify-start pt-8 md:pt-10 lg:pt-6 xl:pt-10">
                                <h3
                                    class="font-bold text-[16px] md:text-[18px] xl:text-[20px] text-black mb-3 md:mb-5 lg:mb-3 xl:mb-4 line-clamp-1">
                                    猫と暮らす住宅
                                </h3>
                                <p
                                    class="text-[14px] md:text-[16px] xl:text-[18px] text-black leading-relaxed line-clamp-3">
                                    2027年春目標。人と猫が共生することで、地域のウェルビーイングを向上させます。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="swiper-slide flex justify-center w-[430px] p-10 md:p-0">
                        <div
                            class="bg-[#E0F6FF] rounded-[20px] w-[430px] h-[410px] md:h-[560px] lg:h-[410px] xl:h-[550px] flex flex-col items-center duration-200 overflow-hidden">
                            <div
                                class="pt-5 px-7 md:p-6 xl:p-10 xl:pb-0 h-3/5 md:h-18/30">
                                <img
                                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/business03.webp' ); ?>"
                                    alt="地域ネットワーク"
                                    class="w-full aspect-[1] md:aspect-[7/6] object-cover rounded-[20px] group-hover:scale-105 duration-200" />
                            </div>
                            <div
                                class="px-6 flex-1 w-full h-2/5 md:h-12/30 flex flex-col justify-start pt-8 md:pt-10 lg:pt-6 xl:pt-10">
                                <h3
                                    class="font-bold text-[16px] md:text-[18px] xl:text-[20px] text-black mb-3 md:mb-5 lg:mb-3 xl:mb-4 line-clamp-1">
                                    地域コミュニティ
                                </h3>
                                <p
                                    class="text-[14px] md:text-[16px] xl:text-[18px] text-black leading-relaxed line-clamp-3">
                                    東大阪・八戸ノ里エリアを中心に、住みやすい街づくりに貢献しています。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="swiper-slide flex justify-center w-[430px] p-10 md:p-0">
                        <div
                            class="bg-[#E0F6FF] rounded-[20px] w-[430px] h-[410px] md:h-[560px] lg:h-[410px] xl:h-[550px] flex flex-col items-center duration-200 overflow-hidden">
                            <div
                                class="pt-5 px-7 md:p-6 xl:p-10 xl:pb-0 h-3/5 md:h-18/30">
                                <img
                                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/business04.webp' ); ?>"
                                    alt="地域の医療・福祉サポート"
                                    class="w-full aspect-[1] md:aspect-[7/6] object-cover rounded-[20px] group-hover:scale-105 duration-200" />
                            </div>
                            <div
                                class="px-6 flex-1 w-full h-2/5 md:h-12/30 flex flex-col justify-start pt-8 md:pt-10 lg:pt-6 xl:pt-10">
                                <h3
                                    class="font-bold text-[16px] md:text-[18px] xl:text-[20px] text-black mb-3 md:mb-5 lg:mb-3 xl:mb-4 line-clamp-1">
                                    地域コミュニティ
                                </h3>
                                <p
                                    class="text-[14px] md:text-[16px] xl:text-[18px] text-black leading-relaxed line-clamp-3">
                                    東大阪・八戸ノ里エリアを中心に、住みやすい街づくりに貢献しています。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center">
            <a
                href="<?php echo esc_url( home_url( '/company/' ) ); ?>"
                class="flex items-center justify-center rounded-[20px] bg-[#28A8E0] hover:bg-[#5ec6f8] px-8 md:px-10 lg:px-[30px] xl:px-[93px] py-2 md:py-3 lg:py-4 xl:py-5 text-white font-bold text-[12px] md:text-[16px] transition-colors duration-150"
                data-aos="fade-in"
                data-aos-delay="200">
                事業内容をもっと詳しく見る
                <svg
                    class="inline-block align-middle ml-2 w-[24px] md:w-[28px] aspect-1"
                    viewBox="0 0 24 24"
                    fill="none">
                    <g>
                        <rect width="16" height="16" fill="none"></rect>
                        <path
                            d="M4 12h14"
                            stroke="#fff"
                            stroke-width="1"
                            stroke-linecap="round" />
                        <path
                            d="M12 6l6 6-6 6"
                            stroke="#fff"
                            stroke-width="1"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                    </g>
                </svg>
            </a>
        </div>
    </div>
    <script></script>
</section>

<section
    class="w-full flex justify-center bg-[#97e1fe1a] py-16 md:py-20 lg:py-28 xl:py-36">
    <div
        class="w-full max-w-[1400px] flex flex-col items-center gap-10 md:gap-8 lg:gap-12 xl:gap-16 overflow-hidden">
        <div class="flex flex-col items-center gap-6 px-10 md:px-0">
            <h2
                class="text-[24px] md:text-[27px] lg:text-[40px] font-bold text-center w-full leading-tight">
                お知らせ
            </h2>
            <p
                class="text-[14px] md:text-[15px] lg:text-[18px] text-black w-full text-start">
                地域の暮らしや住まいに関する情報をお届けします
            </p>
        </div>
        <hr
            class="block md:hidden mx-auto w-[90%] border-t-1 border-gray-600 -mt-4" />
        <div class="w-full flex flex-col items-center gap-10">
            <div
                class="relative w-full md:w-[430px] lg:w-full lg:max-w-[960px] xl:max-w-[1400px]">
                <div class="w-full">
                    <div
                        class="grid grid-cols-1 lg:grid-cols-3 gap-5 md:gap-8 lg:gap-5">
                        <div class="swiper-slide flex justify-center">
                            <a
                                href="<?php echo esc_url( home_url( '/news-sub/' ) ); ?>"
                                class="bg-white rounded-[20px] max-w-[295px] md:max-w-[430px] lg:max-w-[300px] xl:max-w-[430px] h-[460px] md:h-[560px] lg:h-[425px] xl:h-[550px] flex flex-col items-center p-6 xl:p-10 gap-5 md:gap-4 lg:gap-2 group hover:shadow-md duration-200">
                                <div
                                    class="h-3/5 md:h-2/3 lg:h-3/5 xl:h-2/3 overflow-hidden rounded-[20px]">
                                    <img
                                        src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/blog01.webp' ); ?>"
                                        alt="お知らせ1"
                                        class="w-full aspect-[1] md:aspect-[7/6] object-cover rounded-[20px] group-hover:scale-105 duration-200" />
                                </div>
                                <div
                                    class="h-1/3 flex-1 w-full flex flex-col gap-5 lg:gap-3 xl:gap-4">
                                    <div class="flex gap-3 mb-2">
                                        <span
                                            class="bg-[#E0F6FF] text-black rounded-full px-3 py-[2px] text-[10px] md:text-[12px] lg:text-[11px] text-[12px] font-regular">
                                            2025.1.10
                                        </span>
                                        <span
                                            class="bg-[#E0F6FF] text-black rounded-full px-3 py-[2px] text-[10px] md:text-[12px] lg:text-[11px] text-[12px] font-regular">地域情報</span>
                                    </div>
                                    <p
                                        class="text-[14px] md:text-[16px] lg:text-[16px] leading-relaxed md:leading-[2] lg:leading-relaxed line-clamp-4">
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
                                href="<?php echo esc_url( home_url( '/news-sub/' ) ); ?>"
                                class="bg-white rounded-[20px] max-w-[295px] md:max-w-[430px] lg:max-w-[300px] xl:max-w-[430px] h-[460px] md:h-[560px] lg:h-[425px] xl:h-[550px] flex flex-col items-center p-6 xl:p-10 gap-5 md:gap-4 lg:gap-2 group hover:shadow-md duration-200">
                                <div
                                    class="h-3/5 md:h-2/3 lg:h-3/5 xl:h-2/3 overflow-hidden rounded-[20px]">
                                    <img
                                        src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/blog02.webp' ); ?>"
                                        alt="お知らせ2"
                                        class="w-full aspect-[1] md:aspect-[7/6] object-cover rounded-[20px] group-hover:scale-105 duration-200" />
                                </div>
                                <div
                                    class="h-1/3 flex-1 w-full flex flex-col gap-5 lg:gap-3 xl:gap-4">
                                    <div class="flex gap-3 mb-2">
                                        <span
                                            class="bg-[#E0F6FF] text-black rounded-full px-3 py-[2px] text-[10px] md:text-[12px] lg:text-[11px] text-[12px] font-regular">
                                            2025.1.10
                                        </span>
                                        <span
                                            class="bg-[#E0F6FF] text-black rounded-full px-3 py-[2px] text-[10px] md:text-[12px] lg:text-[11px] text-[12px] font-regular">
                                            地域情報
                                        </span>
                                    </div>
                                    <p
                                        class="text-[14px] md:text-[16px] lg:text-[16px] leading-relaxed md:leading-[2] lg:leading-relaxed line-clamp-4">
                                        東大阪市八戸ノ里駅周辺の生活環境や交通アクセスについてご紹介します。
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide flex justify-center">
                            <a
                                href="<?php echo esc_url( home_url( '/news-sub/' ) ); ?>"
                                class="bg-white rounded-[20px] max-w-[295px] md:max-w-[430px] lg:max-w-[300px] xl:max-w-[430px] h-[460px] md:h-[560px] lg:h-[425px] xl:h-[550px] flex flex-col items-center p-6 xl:p-10 gap-5 md:gap-4 lg:gap-2 group hover:shadow-md duration-200">
                                <div
                                    class="h-3/5 md:h-2/3 lg:h-3/5 xl:h-2/3 overflow-hidden rounded-[20px]">
                                    <img
                                        src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/map.webp' ); ?>"
                                        alt="お知らせ3"
                                        class="w-full aspect-[1] md:aspect-[7/6] object-cover rounded-[20px] group-hover:scale-105 duration-200" />
                                </div>
                                <div
                                    class="h-1/3 flex-1 w-full flex flex-col gap-5 lg:gap-3 xl:gap-4">
                                    <div class="flex gap-3 mb-2">
                                        <span
                                            class="bg-[#E0F6FF] text-black rounded-full px-3 py-[2px] text-[10px] md:text-[12px] lg:text-[11px] text-[12px] font-regular">2025.1.10</span>
                                        <span
                                            class="bg-[#E0F6FF] text-black rounded-full px-3 py-[2px] text-[10px] md:text-[12px] lg:text-[11px] text-[12px] font-regular">地域情報</span>
                                    </div>
                                    <p
                                        class="text-[14px] md:text-[16px] lg:text-[16px] leading-relaxed md:leading-[2] lg:leading-relaxed line-clamp-4">
                                        東大阪市八戸ノ里駅周辺の生活環境や交通アクセスについてご紹介します。
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <a
                    href="<?php echo esc_url( home_url( '/announcement/' ) ); ?>"
                    class="flex items-center justify-center lg:w-[300px] xl:w-[430px] rounded-[20px] bg-[#28A8E0] hover:bg-[#5ec6f8] px-8 md:px-10 lg:px-12 xl:px-14 py-2 md:py-3 lg:py-4 xl:py-5 text-white font-bold text-[12px] md:text-[14px] lg:text-[15px] xl:text-[16px] transition-colors duration-150"
                    data-aos="fade-in"
                    data-aos-delay="200">
                    お知らせ一覧を見る
                    <svg
                        class="inline-block align-middle ml-2 w-[24px] md:w-[28px] aspect-1"
                        viewBox="0 0 24 24"
                        fill="none">
                        <g>
                            <rect width="16" height="16" fill="none"></rect>
                            <path
                                d="M4 12h14"
                                stroke="#fff"
                                stroke-width="1"
                                stroke-linecap="round"></path>
                            <path
                                d="M12 6l6 6-6 6"
                                stroke="#fff"
                                stroke-width="1"
                                stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </g>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>