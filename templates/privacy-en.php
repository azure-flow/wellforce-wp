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
                    class="langMenuList font-mincho flex flex-col w-[48px] lg:w-[52px] xl:w-[58px] absolute left-0 top-[28.21px] lg:top-[30.21px] xl:top-[34.21px] opacity-0 group-hover:opacity-100 group-hover:pointer-events-auto pointer-events-none transition-opacity duration-200 z-20">
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
            <a href="<?php echo esc_url(home_url($base . 'plan')); ?>"><span
                    class="font-garamond hover:opacity-60 transition-opacity duration-200">Experiences</span></a>
            <a href="<?php echo esc_url(home_url($base . 'tour')); ?>"><span
                    class="font-garamond hover:opacity-60 transition-opacity duration-200">Tour</span></a>
            <a href="<?php echo esc_url(home_url($base . 'about')); ?>"><span
                    class="font-garamond hover:opacity-60 transition-opacity duration-200">About</span></a>

        </div>

    </div>
    <div class="flex flex-col items-center justify-center justify-center w-full h-full">
        <article
            class="w-full md:w-[400px] lg:w-[500px] xl:w-full max-w-[600px] leading-relaxed text-white text-[13px] md:text-[14px]">
            <header class="mb-[40px] md:mb-[60px] lg:mb-[90px] xl:mb-[120px]">
                <div class="flex flex-col gap-3 md:gap-3 lg:gap-4 xl:gap-5 pb-10 xl:pb-8 md:pb-12 lg:pb-16 xl:pb-24">
                    <h1 class="text-white text-[50px] md:text-[28px] lg:text-[52px] xl:text-[70px] leading-[1.2]">
                        Privacy Policy
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
                        IST Co.,Ltd (hereinafter "IST," "we," "us," or "our") is committed to protecting your privacy.
                        This Privacy Policy (hereinafter "this Policy") outlines how we collect, use, and protect your
                        personal information in connection with our website (the "Site") and the travel services we
                        provide (the "Services").
                    </p>
                </section>
                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        Article 1 (Personal Information)
                    </h2>
                    <p class="mb-2 text-justify text-[12px] md:text-[14px] lg:text-[18px]">
                        "Personal Information" in this Policy refers to "personal information" as defined in the Act on
                        the Protection of Personal Information (Act No. 57 of 2003) of Japan. It means information about
                        a living individual which can identify the specific individual by name, date of birth, address,
                        telephone number, contact information, or other descriptions contained in such information
                        (Personal Identification Information).

                    </p>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        Article 2 (Collection of Personal Information)
                    </h2>
                    <p class="mb-2 text-justify text-[12px] md:text-[14px] lg:text-[18px]">
                        We may ask for Personal Information such as name, nationality, e-mail address, telephone number,
                        and other information necessary for travel arrangements (such as gender, age, and health
                        information for those requiring special consideration) when you use the inquiry or booking forms
                        on the Site, or when you apply for our Services. The Site may also use cookies to improve
                        website functionality and analyze site usage.
                    </p>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        Article 3 (Purpose of Collecting and Using Personal Information)
                    </h2>
                    <p class="mb-2 text-justify text-[12px] md:text-[14px] lg:text-[18px]">
                        The purposes for which we collect and use Personal Information are as follows:
                    </p>
                    <div
                        class="text-[11px] md:text-[13px] lg:text-[17px] pl-[20px] md:pl-6 lg:pl-[28px] xl:pl-8 space-y-2 leading-[2]">
                        <ol start="1" class="list-decimal">
                            <li class="pl-2 lg:pl-4">To process your reservation, verify your identity, and to
                                arrange and manage the itinerary
                                so that you can receive the travel services (hereinafter "Travel Services") provided by
                                transportation and accommodation facilities, in accordance with the travel itinerary set
                                by
                                us.</li>
                            <li class="pl-2 lg:pl-4">To contact you and respond to your inquiries (including identity
                                verification).</li>
                            <li class="pl-2 lg:pl-4">To improve our Services and develop new ones.</li>
                            <li class="pl-2 lg:pl-4">To provide you with information about our Services.</li>
                            <li class="pl-2 lg:pl-4">For purposes ancillary to the above.</li>

                        </ol>
                    </div>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        Article 4 (Provision of Personal Information to Third Parties)
                    </h2>
                    <p class="mb-2 text-justify text-[12px] md:text-[14px] lg:text-[18px]">
                        We will not provide your Personal Information to third parties without your prior consent,
                        except in the following cases. This excludes cases permitted under the Act on the Protection of
                        Personal Information and other laws.
                    </p>
                    <div
                        class="text-[11px] md:text-[13px] lg:text-[17px] pl-[20px] md:pl-6 lg:pl-[28px] xl:pl-8 space-y-2 leading-[2]">
                        <ol start="1" class="list-decimal">
                            <li class="pl-2 lg:pl-4"> When required by law.</li>
                            <li class="pl-2 lg:pl-4">
                                When it is necessary to protect human life, body, or property, and
                                it is difficult to obtain your consent.
                            </li>
                            <li class="pl-2 lg:pl-4">
                                When it is particularly necessary for improving public health or
                                promoting the sound upbringing of children, and it is difficult to obtain your consent.
                            </li>
                            <li class="pl-2 lg:pl-4">
                                When it is necessary to cooperate with national or local government
                                authorities in performing their legal duties, and obtaining your consent may impede such
                                performance.
                            </li>
                            <li class="pl-2 lg:pl-4">
                                When, within the scope necessary to achieve the purposes of use set
                                forth in Article 3, we provide your name, age, gender, telephone number, nationality,
                                and other necessary information to transportation/accommodation facilities and travel
                                arrangement agents, by sending it via electronic methods in advance.
                            </li>
                        </ol>
                    </div>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        Article 5 (Data Security)
                    </h2>
                    <p class="mb-2 text-justify text-[12px] md:text-[14px] lg:text-[18px]">
                        We implement appropriate technical and organizational security measures to maintain your
                        Personal Information accurately and up-to-date, and to protect it against unauthorized access,
                        loss, destruction, alteration, or disclosure.
                    </p>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        Article 6 (Disclosure, Correction, and Deletion of Personal Information)
                    </h2>
                    <p class="mb-2 text-justify text-[12px] md:text-[14px] lg:text-[18px]">
                        If we receive a request from you (the individual) for the disclosure, correction, addition,
                        deletion, or suspension of use of your Personal Information, we will promptly respond in
                        accordance with the law after verifying your identity.
                    </p>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        Article 7 (Use of Cookies)
                    </h2>
                    <p class="mb-2 text-justify text-[12px] md:text-[14px] lg:text-[18px]">
                        Our Site may use cookies to improve website functionality and analyze site usage. A cookie is a
                        small text file stored on your computer; it does not identify you personally. You can set your
                        browser to refuse cookies, but please note that this may limit your ability to use some features
                        of our Site.
                    </p>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        Article 8 (Changes to This Privacy Policy)
                    </h2>
                    <p class="mb-2 text-justify text-[12px] md:text-[14px] lg:text-[18px]">
                        The contents of this Policy may be amended without notice to you, except as otherwise provided
                        by law or in this Policy. Unless otherwise specified by us, the revised Privacy Policy shall
                        become effective from the time it is posted on this Site.
                    </p>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        Article 9 (Contact Us)
                    </h2>
                    <p class="mb-2 text-justify text-[12px] md:text-[14px] lg:text-[18px]">
                        If you have any questions about this Privacy Policy, please contact us at:
                    </p>
                    <ol class="text-[11px] md:text-[13px] lg:text-[17px]">
                        <li class="pl-2 lg:pl-4">Operator: IST Co.,Ltd </li>
                        <li class="pl-2 lg:pl-4">Address: 752-21 Agocho Shinmei, Shima City, Mie 517-0502, Japan </li>
                        <li class="pl-2 lg:pl-4">Phone: +81-599-52-0882 / FAX: +81-599-52-0887</li>
                    </ol>
                </section>
            </div>
        </article>
    </div>
</section>

<?php get_footer(); ?>