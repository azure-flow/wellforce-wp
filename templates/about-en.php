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
    class="relative bg-[url('<?php echo T_DIRE_URI; ?>/assets/images/fv_about_sp.webp')] md:bg-[url('<?php echo T_DIRE_URI; ?>/assets/images/fv_about.webp')] bg-cover bg-center h-[667px] md:h-[700px] lg:h-[800px] xl:h-[1080px]">
    <div
        class="z-50 flex md:flex-col justify-between items-center md:items-start gap-6 fixed top-[30px] md:top-[80px] lg:top-[100px]
             xl:top-[115px] left-[40px] md:left-[60px] lg:left-[100px] xl:left-[140px] md:max-w-[116.67px] md:h-[280px] lg:h-[300px] xl:h-[420px] max-h-[420px]">
        <div id="hamburgerBtn" class="relative flex md:hidden flex-col text-white justify-between w-[30px] h-[20px]">
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
            <h2 class="font-garamond text-white text-[40px] md:text-[28px] lg:text-[52px] xl:text-[70px]">About MIEscape</h2>
            <hr>
            <h3 class="font-garamond text-white text-[16px] md:text-[15px] xl:text-[23px] opacity-70 tracking-wider text-right">
                MIEscape original tours
            </h3>
        </div>
    </div>
</section>
<section class="relative w-full max-h-[1400px] group relative overflow-hidden">
    <img loading="lazy" src="<?php echo T_DIRE_URI; ?>/assets/images/bg.webp" alt="Tour background"
        class="w-full h-[820px] md:h-full object-[35%] object-cover">
    <div
        class="flex flex-row justify-center items-center absolute top-[40%] left-0 w-full h-[60%] px-8 bg-[linear-gradient(135deg,rgba(157,225,230,0.5)_0%,rgba(31,128,155,0.7)_22%,#051C2A_81%,#0D130B_98%)]">
        <div
            class="flex flex-col max-w-[380px] gap-[40px] lg:gap-[50px] xl:gap-[60px] md:ml-[100px] lg:ml-[200px] xl:ml-[300px]">
            <h1 class="text-white text-right text-[28px] md:text-[22px] lg:text-[32px] xl:text-[40px]">
                <span class="text-[20px] md:text-[18px] lg:text-[22px] xl:text-[28px] block"> Our Philosophy:</span>
                Witnessing Culture, <br> Creating Connection
            </h1>
            <p class="text-white text-right text-[12px] md:text-[10px] lg:text-[13px] xl:text-[17px] leading-[2] pb-8">
                Our journeys transform sightseeing into a truly memorable encounter. MIEscape is operated by Ise-Shima
                Tourism, an organization born on this very soil. We are not simply guides, but we are members of the
                community, sharing our home with you. We create moments of genuine connection with our neighbors—the
                fishers, the artisans, and the legendary Ama divers. This is about building enduring relationships,
                rather than just a momentary experience.
            </p>
        </div>
    </div>
</section>
<section class="max-h-[750px] group relative overflow-hidden parallax-section">
    <div
        class="parallax-bg absolute top-0 left-0 w-full h-full bg-[url('<?php echo T_DIRE_URI; ?>/assets/images/sunset02.webp')] bg-[-95%] bg-cover bg-center parallax-img -z-10">
    </div>

    <div class="relative w-full h-[350px] md:h-[880px]"></div>
</section>
<section
    class="w-full h-[720px] md:h-full flex justify-center pt-20 md:py-40 bg-[url('<?php echo T_DIRE_URI; ?>/assets/images/bg_ama02_sp.webp')] md:bg-[url('<?php echo T_DIRE_URI; ?>/assets/images/bg_ama02.webp')] bg-cover bg-center">
    <div class="max-w-[1000px] flex flex-col md:flex-row gap-10 lg:gap-20 xl:gap-30">
        <div class="flex-1 flex flex-col gap-8 md:w-[200px] lg:w-[300px] xl:w-[360px] max-w-[360px] px-8 md:px-0">
            <h1 class="max-w-[360px] text-white text-[28px] md:text-[22px] lg:text-[32px] xl:text-[38px]">
                <span class="text-[20px] md:text-[18px] lg:text-[22px] xl:text-[26px] block">
                    Guardians of a Timeless Current:
                </span>
                The Ama Divers of <br>Ise-Shima
            </h1>
            <p class="max-w-[235px] text-white text-[12px] md:text-[10px] lg:text-[13px] xl:text-[17px] leading-[2]">
                In the waters of Ise-Shima, a living tradition has endured for 3,000 years.

                The Ama, female free divers who gather the ocean's bounty, are a national living treasure.
                Their sustainable fishing methods are guided by an ancient wisdom and a profound respect for the sea,
                ensuring its resources never deplete. MIEscape offers respectful opportunities to dive and converse with
                these remarkable women.

                Your journey becomes a vital link in preserving their incredible culture for future generations.
            </p>
        </div>
        <div class="flex-1 flex items-end">
            <div class="flex flex-row md:w-[250px] lg:w-[400px] xl:w-[500px] max-w-[500px]">
                <img loading="lazy" src="<?php echo T_DIRE_URI; ?>/assets/images/ama_item01.webp" alt="ama 1"
                    class="w-1/3 aspect-[0.7] object-cover">
                <img loading="lazy" src="<?php echo T_DIRE_URI; ?>/assets/images/ama_item02.webp" alt="ama 2"
                    class="w-1/3 aspect-[0.7] object-cover">
                <img loading="lazy" src="<?php echo T_DIRE_URI; ?>/assets/images/ama_item03.webp" alt="ama 3"
                    class="w-1/3 aspect-[0.7] object-cover">
            </div>

        </div>
    </div>
</section>
<section
    class="flex flex-col-reverse md:flex-col w-full justify-center bg-[url('<?php echo T_DIRE_URI; ?>/assets/images/bg_experience.webp')] bg-cover bg-center">
    <div
        class="flex flex-col-reverse md:flex-col w-full pb-16 md:pb-0 justify-center bg-[linear-gradient(#00243000_0%,#00374A40_24%,#004A6366_34%,#011015CC_78%)] md:bg-transparent">
        <div class="grid grid-cols-1 md:grid-cols-2 px-12 md:px-0 gap-6 md:gap-0">
            <div class="flex flex-row pr-8 md:pr-0 gap-2 md:gap-0">
                <img loading="lazy" src="<?php echo T_DIRE_URI; ?>/assets/images/his01.webp" alt="history 1"
                    class="w-1/2 h-full object-cover">
                <img loading="lazy" src="<?php echo T_DIRE_URI; ?>/assets/images/his02.webp" alt="history 2"
                    class="w-1/2 h-full object-cover">
            </div>
            <div class="flex flex-row pl-8 md:pl-0 gap-2 md:gap-0">
                <img loading="lazy" src="<?php echo T_DIRE_URI; ?>/assets/images/his03.webp" alt="history 3"
                    class="w-1/2 h-full object-cover">
                <img loading="lazy" src="<?php echo T_DIRE_URI; ?>/assets/images/his04.webp" alt="history 4"
                    class="w-1/2 h-full object-cover">
            </div>
        </div>
        <div
            class="flex flex-col w-full justify-center items-center md:bg-[linear-gradient(#00243000_0%,#00374A40_24%,#004A6366_34%,#011015CC_78%)] bg-cover bg-center py-20 md:py-30 lg:py-35 xl:py-40">
            <div
                class="flex-1 flex flex-col gap-8 md:w-[200px] lg:w-[300px] xl:w-[360px] max-w-[365px] px-8 md:px-0 md:ml-36 lg:ml-48 xl:ml-64">
                <h1 class="text-white text-right text-[28px] md:text-[22px] lg:text-[32px] xl:text-[38px]">
                    <span class="text-[20px] md:text-[18px] lg:text-[22px] xl:text-[26px] block">
                        The Soul of Our Land:
                    </span>
                    The Enduring Spirit of <br> "Tokowaka"
                </h1>
                <p class="text-white text-right text-[12px] md:text-[10px] lg:text-[13px] xl:text-[17px] leading-[2]">
                    For over 1,300 years, the Ise Grand Shrine has embodied the philosophy of ""Tokowaka""—the belief
                    that eternity is achieved not through static preservation, but through cyclical renewal.

                    This unique Japanese vision of sustainability guides us.

                    To pass on culture, to nurture nature, and to revitalize our community. All our actions are designed
                    to resonate with the soul of this land, becoming part of a regenerative cycle for the future.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="max-h-[750px] group relative overflow-hidden parallax-section">
    <div
        class="parallax-bg absolute top-0 left-0 w-full h-full bg-[url('<?php echo T_DIRE_URI; ?>/assets/images/bg_toko.webp')] bg-[-95%] bg-cover bg-center parallax-img -z-10">
    </div>

    <div class="relative w-full h-[350px] md:h-[880px]"></div>
</section>
<section
    class="w-full h-[800px] md:h-full max-h-[1225px] flex justify-center pt-20 md:py-28 lg:py-40 bg-[url('<?php echo T_DIRE_URI; ?>/assets/images/bg_part.webp')] bg-[length:1200px_800px] md:bg-cover bg-[75%] md:bg-center px-8">
    <div class="max-w-[400px] flex flex-col gap-20 lg:gap-30 xl:gap-40 md:mr-64">
        <div class="flex-1 flex flex-col gap-8 md:w-[200px] lg:w-[300px] xl:w-[385px] max-w-[385px] ">
            <h1 class="text-white text-[28px] md:text-[22px] lg:text-[32px] xl:text-[37px]">
                <span class="text-[20px] md:text-[18px] lg:text-[22px] xl:text-[26px] block">
                    A Partnership with Place:
                </span>
                Our Commitment <br> to a Regenerative Future
            </h1>
            <p class="text-white text-[12px] md:text-[10px] lg:text-[13px] xl:text-[17px] leading-[2.4] md:leading-[2]">
                A journey with MIEscape is built on a deep and abiding promise to our home. We are active partners in
                shaping a sustainable future for Ise-Shima. When you choose MIEscape, you become more than a visitor.
                You become a partner in protecting and nurturing the natural and cultural heritage of this extraordinary
                place.
            </p>
        </div>
        <div class="flex-1 flex flex-col gap-4 lg:gap-8 md:w-[200px] lg:w-[300px] xl:w-[400px] max-w-[400px] ">
            <h1 class="text-white text-[13px] md:text-[13px] lg:text-[15px] xl:text-[18px] block">
                Corporate Information
            </h1>
            <p class="text-white text-[11px] md:text-[10px] lg:text-[13px] xl:text-[15px] leading-[2.4] md:leading-[2]">
                Company Name: IST<br>
                Travel Agency License Number:<br>
                Class3-363 approved by the Govonor of Mie Prefectural Goverment<br>
                Address: 752-21 Shinmei, Ago-cho, Shima-shi, Mie 517-0502<br>
                Established: November 2016<br>
                President: Koji Nishida<br>
                Certified Travel Services Manager: Kazuhiko Yasu<br>
            </p>
        </div>
    </div>
</section>
<section id="access" class="flex justify-center bg-black py-20 md:py-32 lg:py-40 xl:py-48 px-6 md:px-16 lg:px-36">
    <div class="flex flex-col items-center justify-center w-full max-w-[900px] gap-20 md:gap-28 lg:gap-36 xl:gap-48">
        <div class="w-full flex flex-col gap-20">
            <h2 class="text-[#C4B28C] text-2xl md:text-3xl xl:text-[42px] text-center">
                Access
            </h2>
            <div class="flex md:flex-row flex-col items-center w-full max-w-[800px] gap-7 md:gap-10 xl:gap-20">
                <div class="w-2/3 md:p-4">
                    <img loading="lazy" src="<?php echo T_DIRE_URI; ?>/assets/images/map.webp" alt="Japan map with Mie highlight"
                        class="w-full h-auto">
                </div>
                <div class="w-full md:w-1/3 flex">
                    <p class="text-white/90 text-[12px] lg:text-[14px] xl:text-[17px] leading-[2.6]">
                        Mie Prefecture is located near the geographical center of Japan, boasting exceptional access to
                        the major metropolitan areas of the Tokai region (Nagoya) and the Kansai region (Osaka and
                        Kyoto).
                    </p>
                </div>
            </div>
        </div>
        <div class="w-full flex flex-col items-center p-4 gap-2 md:gap-10 lg:gap-16">
            <h2 class="text-[#C4B28C] text-2xl md:text-3xl xl:text-[36px] text-center ">
                By train
            </h2>
            <div class="w-full h-full flex flex-col md:flex-row items-center gap-24 md:gap-16">
                <div class="relative w-full flex flex-col items-center gap-5">
                    <div class="absolute top-0 left-[15%] w-[1px] h-full bg-white z-10"></div>
                    <div
                        class="border border-white w-full max-w-[415px] px-4 py-2 flex justify-center items-center z-20 bg-black">
                        <span class="text-white text-lg md:text-xl md:text-[22px] xl:text-[24px] text-center ">JR Tokyo St.</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <span class="text-white text-xs md:text-sm py-4">Shinkansen/1h40min</span>
                    </div>
                    <div
                        class="border border-white w-full max-w-[415px] px-4 py-2 flex justify-center items-center z-20 bg-black">
                        <span class="text-white text-lg md:text-xl md:text-[22px] xl:text-[24px] text-center ">JR Nagoya St.</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <span class="text-white text-xs md:text-sm">Walk/10min</span>
                    </div>
                    <div
                        class="border border-white w-full max-w-[415px] px-4 py-2 flex justify-center items-center z-20 bg-black">
                        <span class="text-white text-lg md:text-xl md:text-[22px] xl:text-[24px] text-center ">
                            Kintetsu Nagoya St.
                        </span>
                    </div>
                    <div class="flex flex-col items-center">
                        <span class="text-white text-xs md:text-sm py-4">Kintetsu Limited Express/1h40min</span>
                    </div>
                    <div class="w-full max-w-[415px] px-4 py-2 flex justify-center items-center z-20 bg-white">
                        <span class="text-[#9E895B] text-lg md:text-xl md:text-[22px] xl:text-[24px] text-center ">Kashikojima</span>
                    </div>
                </div>
                <div class="relative w-full h-full flex flex-col items-center gap-5 justify-between">
                    <div class="absolute top-0 left-[15%] w-[1px] h-full bg-white z-10"></div>
                    <div
                        class="border border-white w-full max-w-[415px] px-4 py-2 flex justify-center items-center z-20 bg-black">
                        <span class="text-white text-lg md:text-xl md:text-[22px] xl:text-[24px] text-center ">Osaka Namba St.</span>
                    </div>
                    <div class="flex flex-col items-center py-24 md:py-28">
                        <span class="text-white text-xs md:text-sm"> Kintetsu Limited Express/2h30min</span>
                    </div>
                    <div class="w-full max-w-[415px] px-4 py-2 flex justify-center items-center z-20 bg-white">
                        <span class="text-[#9E895B] text-lg md:text-xl md:text-[22px] xl:text-[24px] text-center ">Kashikojima</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full flex flex-col items-center p-4 gap-2 md:gap-10 lg:gap-16">
            <h2 class="text-[#C4B28C] text-2xl md:text-3xl xl:text-[36px] text-center ">
                From airport
            </h2>
            <div class="w-full h-full flex flex-col md:flex-row items-center gap-24 md:gap-16">
                <div
                    class="relative w-full h-full flex flex-col items-center justify-between gap-10 md:gap-4 lg:gap-6 xl:gap-10">
                    <div class="absolute top-0 left-[15%] w-[1px] h-full bg-white z-10"></div>
                    <div
                        class="border border-white w-full max-w-[415px] px-4 py-2 flex justify-center items-center z-20 bg-black">
                        <span class="text-white text-lg md:text-xl md:text-[22px] xl:text-[24px] text-center ">Chubu Centrair International
                            Airport</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <span class="text-white text-xs md:text-sm">Tsu Airport Line/45min</span>
                    </div>
                    <div
                        class="border border-white w-full max-w-[415px] px-4 py-2 flex justify-center items-center z-20 bg-black">
                        <span class="text-white text-lg md:text-xl md:text-[22px] xl:text-[24px] text-center ">
                            Kintetsu Tsu St.
                        </span>
                    </div>
                    <div class="flex flex-col items-center">
                        <span class="text-white text-xs md:text-sm">
                            Kintetsu Limited Express/80min
                        </span>
                    </div>
                    <div class="w-full max-w-[415px] px-4 py-2 flex justify-center items-center z-20 bg-white">
                        <span class="text-[#9E895B] text-lg md:text-xl md:text-[22px] xl:text-[24px] text-center ">Kashikojima</span>
                    </div>
                </div>
                <div class="relative w-full flex flex-col items-center gap-8">
                    <div class="absolute top-0 left-[15%] w-[1px] h-full bg-white z-10"></div>
                    <div
                        class="border border-white w-full max-w-[415px] px-4 py-2 flex justify-center items-center z-20 bg-black">
                        <span class="text-white text-lg md:text-xl md:text-[22px] xl:text-[24px] text-center ">Chubu Centrair International
                            Airport</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <span class="text-white text-xs md:text-sm">Meitetsu Airport Line/28min</span>
                    </div>
                    <div
                        class="border border-white w-full max-w-[415px] px-4 py-2 flex justify-center items-center z-20 bg-black">
                        <span class="text-white text-lg md:text-xl md:text-[22px] xl:text-[24px] text-center ">
                            Kintetsu Nagoya St.
                        </span>
                    </div>
                    <div class="flex flex-col items-center">
                        <span class="text-white text-xs md:text-sm py-6">
                            Kintetsu Limited Express/2h10min
                        </span>
                    </div>
                    <div class="w-full max-w-[415px] px-4 py-2 flex justify-center items-center z-20 bg-white">
                        <span class="text-[#9E895B] text-lg md:text-xl md:text-[22px] xl:text-[24px] text-center ">Kashikojima</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full flex justify-center">
            <a href="<?php echo esc_url(home_url('/en/contact')); ?>"
                class="w-[60%] md:w-[40%] py-1 bg-[#9E895B] text-white text-center text-[24px] lg:text-[24px] xl:text-[32px] tracking-widest hover:bg-[#9f895bcc] transition">
                Contact
            </a>
        </div>
    </div>
</section>
<script>
    const params = new URLSearchParams(window.location.search);
    if (params.has("access")) {
        const target = document.getElementById("access");
        if (target) {
            target.scrollIntoView({
                block: "start"
            });
        }
    }
</script>
<?php get_footer(); ?>