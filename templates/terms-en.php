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

<section class="relative bg-[linear-gradient(180deg,#051C2A_29%,#013538_63%,#025140_100%)] px-8 py-40 lg:py-32 xl:py-52">
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
            <a href="<?php echo esc_url(home_url($base)); ?>"
                class="font-garamond hover:opacity-60 transition-opacity duration-200">Top</a>
            <a href="<?php echo esc_url(home_url($base . 'plan' . ($lang === 'ja' ? '' : '-' . $lang))); ?>"><span
                    class="font-garamond hover:opacity-60 transition-opacity duration-200">Experiences</span></a>
            <a href="<?php echo esc_url(home_url($base . 'tour' . ($lang === 'ja' ? '' : '-' . $lang))); ?>"><span
                    class="font-garamond hover:opacity-60 transition-opacity duration-200">Tour</span></a>
            <a href="<?php echo esc_url(home_url($base . 'about' . ($lang === 'ja' ? '' : '-' . $lang))); ?>"><span
                    class="font-garamond hover:opacity-60 transition-opacity duration-200">About</span></a>

        </div>

    </div>
    <div class="flex flex-col items-center justify-center justify-center w-full h-full">
        <article
            class="w-full md:w-[400px] lg:w-[500px] xl:w-full max-w-[600px] leading-relaxed text-white text-[13px] md:text-[14px]">
            <header class="mb-[40px] md:mb-[60px] lg:mb-[90px] xl:mb-[120px]">
                <div class="flex flex-col gap-3 md:gap-3 lg:gap-4 xl:gap-5 pb-10 xl:pb-8 md:pb-12 lg:pb-16 xl:pb-24">
                    <h1 class="text-white text-[50px] md:text-[28px] lg:text-[52px] xl:text-[70px] leading-[1.2]">
                        Terms of Use
                    </h1>
                    <hr class="w-full border-white">
                    <h3
                        class="text-white text-[16px] md:text-[15px] xl:text-[17px] opacity-70 tracking-wider text-right">
                        Effective Date: September 30, 2025
                    </h3>
                </div>
            </header>
            <div class="space-y-12 lg:space-y-16 xl:space-y-24">
                <section>
                    <p class="text-[12px] md:text-[14px] lg:text-[17px] text-justify leading-[2]">
                        These Terms of Use (hereinafter "these Terms") govern the conditions of use for the website
                        (hereinafter "the Site") operated by IST Co.,Ltd (hereinafter "IST," "we," "us," or "our").
                        Customers (hereinafter "you") who use the Site agree to these Terms before using the Site.
                    </p>
                </section>
                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        Article 1 (Application)
                    </h2>
                    <p class="text-[12px] md:text-[14px] lg:text-[17px] text-justify leading-[2]">
                        These Terms shall apply to all relationships between you and IST concerning the use of the Site.
                    </p>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        Article 2 (Use of the Site)
                    </h2>
                    <p class="text-[12px] md:text-[14px] lg:text-[17px] text-justify leading-[2]">
                        You may browse the Site and obtain information regarding the travel services provided by IST
                        (hereinafter "the Services") through the Site, in accordance with the provisions of these Terms.
                    </p>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        Article 3 (Travel Contract)
                    </h2>
                    <div
                        class="text-[11px] md:text-[13px] lg:text-[17px] pl-[20px] md:pl-6 lg:pl-[28px] xl:pl-8 space-y-2 leading-[2]">
                        <ol start="1" class="list-decimal">
                            <li class="pl-2 lg:pl-4">When you apply for the Services through the Site, the travel
                                contract concluded between you and IST shall be governed by the "Travel Agency Agreement
                                (Ryokou-gyo Yakkan)" and the "Travel Conditions Document (Torihiki Jouken Setsumei
                                Shomen)" separately stipulated by us, notwithstanding the provisions of these Terms.
                            </li>
                            <li class="pl-2 lg:pl-4">The travel contract is formed when we accept the conclusion of the
                                contract and receive the prescribed application fee (or the full travel fare). Please
                                check the "Travel Agency Agreement" and "Travel Conditions Document" for detailed
                                conditions.
                            </li>
                        </ol>
                    </div>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        Article 4 (Prohibited Conduct)
                    </h2>
                    <p class="text-[12px] md:text-[14px] lg:text-[17px] text-justify leading-[2]">
                        In using the Site, you shall not engage in the following acts:
                    </p>
                    <div
                        class="text-[11px] md:text-[13px] lg:text-[17px] pl-[20px] md:pl-6 lg:pl-[28px] xl:pl-8 space-y-2 leading-[2]">
                        <ol start="1" class="list-decimal">
                            <li class="pl-2 lg:pl-4">
                                Acts that violate laws or public order and morals.
                            </li>
                            <li class="pl-2 lg:pl-4">
                                Acts related to criminal activity.
                            </li>
                            <li class="pl-2 lg:pl-4">
                                Acts that destroy or interfere with the functions of our servers or network.
                            </li>
                            <li class="pl-2 lg:pl-4">
                                Acts that may interfere with the operation of the Site.
                            </li>
                            <li class="pl-2 lg:pl-4">
                                Acts of collecting or accumulating personal information about other users.
                            </li>
                            <li class="pl-2 lg:pl-4">
                                Acts that infringe upon the intellectual property rights, likeness rights, privacy,
                                honor, or other rights or interests of IST, other users, or third parties.
                            </li>
                            <li class="pl-2 lg:pl-4">
                                Acts of reproducing, publicly transmitting, adapting, or otherwise using the contents of
                                the Site (photos, videos, text, etc.) for commercial purposes without our prior
                                permission.
                            </li>
                            <li class="pl-2 lg:pl-4">
                                Making excessive or unreasonable demands (including demands that impose an unreasonable
                                burden) on us.
                            </li>
                            <li class="pl-2 lg:pl-4">
                                Any other acts that IST deems inappropriate.
                            </li>
                        </ol>
                    </div>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        Article 5 (Suspension of the Site)
                    </h2>
                    <div
                        class="text-[11px] md:text-[13px] lg:text-[17px] pl-[20px] md:pl-6 lg:pl-[28px] xl:pl-8 space-y-2 leading-[2]">
                        <ol start="1" class="list-decimal">
                            <li class="pl-2 lg:pl-4">
                                IST reserves the right to suspend or interrupt the provision of all or part of the
                                Site<br><br>
                                without prior notice to you if we determine that any of the following reasons exist:<br>
                                (1) Performing maintenance, inspection, or updates of the computer system for the
                                Site.<br>
                                (2) Difficulty in providing the Site due to force majeure such as earthquakes,
                                lightning,
                                fires, power outages, or natural disasters.<br>
                                (3) Stoppage of computers or communication lines due to accidents.<br>
                                (4) Other cases where IST determines that providing the Site is difficult.<br>
                            </li>
                            <li class="pl-2 lg:pl-4">
                                IST shall not be liable for any disadvantage or damage incurred by you or any third
                                party
                                due to the suspension or interruption of the provision of the Site, regardless of the
                                reason.
                            </li>
                        </ol>
                    </div>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        Article 6 (Disclaimer)
                    </h2>
                    <div
                        class="text-[11px] md:text-[13px] lg:text-[17px] pl-[20px] md:pl-6 lg:pl-[28px] xl:pl-8 space-y-2 leading-[2]">
                        <ol start="1" class="list-decimal">
                            <li class="pl-2 lg:pl-4">
                                While IST takes all reasonable care regarding the information posted on the Site, we do
                                not guarantee its completeness, accuracy, timeliness, or usefulness.
                            </li>
                            <li class="pl-2 lg:pl-4">
                                IST shall not be liable for any damages incurred by you arising from the use of the Site
                                (including damage from computer virus infection), except in cases of willful misconduct
                                or gross negligence by IST.
                            </li>
                            <li class="pl-2 lg:pl-4">
                                Our liability and disclaimers concerning the Services (the travel contract) shall be
                                governed by the provisions of the separately stipulated "Travel Agency Agreement" and
                                "Travel Conditions Document."
                            </li>
                        </ol>
                    </div>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        Article 7 (Changes to These Terms)
                    </h2>
                    <p class="mb-2 text-justify text-[12px] md:text-[14px] lg:text-[18px]">
                        IST reserves the right to change these Terms at any time without notifying you if deemed
                        necessary. The revised Terms shall become effective from the time they are posted on the Site.
                    </p>
                </section>
                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        Article 8 (Governing Law)
                    </h2>
                    <p class="mb-2 text-justify text-[12px] md:text-[14px] lg:text-[18px]">
                        The interpretation of these Terms and the use of the Site shall be governed by the laws of
                        Japan.
                    </p>
                </section>
            </div>
        </article>
    </div>
</section>

<?php get_footer(); ?>