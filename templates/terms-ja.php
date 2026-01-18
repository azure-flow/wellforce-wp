<?php
get_header();
?>
<style>
    * {
        font-family: "Zen Old Mincho", serif;
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
                    日本語
                </button>
                <div
                    class="langMenuList flex flex-col w-[48px] lg:w-[52px] xl:w-[58px] absolute left-0 top-[28.21px] lg:top-[30.21px] xl:top-[34.21px] opacity-0 group-hover:opacity-100 group-hover:pointer-events-auto pointer-events-none transition-opacity duration-200 z-20">
                    <a href="<?php echo get_permalink(pll_get_post(get_the_ID(), 'en')); ?>"
                        class="w-[48px] lg:w-[52px] xl:w-[58px] h-[28.21px] lg:h-[30.21px] xl:h-[34.21px] flex items-center justify-center bg-[#CDD3D6] text-[#0B1828] transition hover:bg-white hover:underline underline-offset-[5px] hover:underline underline-offset-[5px]-offset-[6px] hover:decoration-[#0B1828]">
                        English
                    </a>
                    <a href="<?php echo get_permalink(pll_get_post(get_the_ID(), 'zh')); ?>"
                        class="w-[48px] lg:w-[52px] xl:w-[58px] h-[28.21px] lg:h-[30.21px] xl:h-[34.21px] flex items-center justify-center bg-[#CDD3D6] text-[#0B1828] transition hover:bg-white hover:underline underline-offset-[5px] hover:underline underline-offset-[5px]-offset-[6px] hover:decoration-[#0B1828]">
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
                    <h1 class="text-white text-[40px] md:text-[22px] lg:text-[48px] xl:text-[60px] leading-[1.2]">
                        WEBサイト利用規約
                    </h1>
                    <hr class="w-full border-white">
                    <h3
                        class="text-white text-[16px] md:text-[15px] xl:text-[17px] opacity-70 tracking-wider text-right">
                        発効日：2025年9月30日
                    </h3>
                </div>
            </header>
            <div class="space-y-12 lg:space-y-16 xl:space-y-24">
                <section>
                    <p class="text-[12px] md:text-[14px] lg:text-[17px] text-justify leading-[2]">
                        この利用規約（以下「本規約」といいます）は、株式会社伊勢志摩ツーリズム（以下「当社」といいます）が運営するウェブサイト
                        （以下「本サイト」といいます）の利用条件を定めるものです。本サイトを利用されるお客様（以下「お客様」といいます）は、
                        本規約に同意の上、本サイトをご利用ください。
                    </p>
                </section>
                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        第1条（適用）
                    </h2>
                    <p class="text-[12px] md:text-[14px] lg:text-[17px] text-justify leading-[2]">
                        本規約は、お客様と当社との間の本サイトの利用に関わる一切の関係に適用されるものとします。
                    </p>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        第2条（本サイトの利用）
                    </h2>
                    <p class="text-[12px] md:text-[14px] lg:text-[17px] text-justify leading-[2]">
                        お客様は、本規約の定めに従い、本サイトを閲覧し、本サイトを通じて当社が提供する旅行サービス（以下「本サービス」といいます）
                        に関する情報を取得することができます。
                    </p>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        第3条（旅行契約）
                    </h2>
                    <div
                        class="text-[11px] md:text-[13px] lg:text-[17px] pl-[20px] md:pl-6 lg:pl-[28px] xl:pl-8 space-y-2 leading-[2]">
                        <ol start="1" class="list-decimal">
                            <li class="pl-2 lg:pl-4">
                                本サイトを通じてお客様が本サービスのお申込みを行う場合、お客様と当社との間で締結される旅行契約については、
                                本規約の定めにかかわらず、当社が別途定める「旅行業約款」および「取引条件説明書面」の定めが適用されます。
                            </li>
                            <li class="pl-2 lg:pl-4">
                                旅行契約は、当社が契約の締結を承諾し、所定の申込金（または旅行代金全額）を受領した時に成立するものとします。
                                詳細な条件は、「旅行業約款」および「取引条件説明書面」をご確認ください。
                            </li>
                        </ol>
                    </div>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        第4条（禁止事項）
                    </h2>
                    <p class="text-[12px] md:text-[14px] lg:text-[17px] text-justify leading-[2]">
                        お客様は、本サイトの利用にあたり、以下の行為をしてはなりません。
                    </p>
                    <div
                        class="text-[11px] md:text-[13px] lg:text-[17px] pl-[20px] md:pl-6 lg:pl-[28px] xl:pl-8 space-y-2 leading-[2]">
                        <ol start="1" class="list-decimal">
                            <li class="pl-2 lg:pl-4">
                                法令または公序良俗に違反する行為
                            </li>
                            <li class="pl-2 lg:pl-4">
                                犯罪行為に関連する行為
                            </li>
                            <li class="pl-2 lg:pl-4">
                                当社のサーバーまたはネットワークの機能を破壊したり、妨害したりする行為
                            </li>
                            <li class="pl-2 lg:pl-4">
                                本サイトの運営を妨害するおそれのある行為
                            </li>
                            <li class="pl-2 lg:pl-4">
                                他のお客様に関する個人情報等を収集または蓄積する行為
                            </li>
                            <li class="pl-2 lg:pl-4">
                                当社、他のお客様、またはその他の第三者の知的財産権、肖像権、プライバシー、名誉、その他の権利または利益を侵害する行為
                            </li>
                            <li class="pl-2 lg:pl-4">
                                本サイトのコンテンツ（写真、動画、テキスト等）を当社の事前の許可なく商業目的で複製、公衆送信、翻案、その他の態様で利用する行為
                            </li>
                            <li class="pl-2 lg:pl-4">
                                当社に対し、過度に不当な要求（合理的範囲を超える負担を求める行為を含む）を行う行為
                            </li>
                            <li class="pl-2 lg:pl-4">
                                その他、当社が不適切と判断する行為
                            </li>
                        </ol>
                    </div>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        第5条（本サイトの提供の停止等）
                    </h2>
                    <div
                        class="text-[11px] md:text-[13px] lg:text-[17px] pl-[20px] md:pl-6 lg:pl-[28px] xl:pl-8 space-y-2 leading-[2]">
                        <ol start="1" class="list-decimal">
                            <li class="pl-2 lg:pl-4">
                                当社は、以下のいずれかの事由があると判断した場合、
                                お客様に事前に通知することなく本サイトの全部または一部の提供を停止または中断することができるものとします。<br><br>
                                (1) 本サイトにかかるコンピュータシステムの保守点検または更新を行う場合<br>
                                (2) 地震、落雷、火災、停電または天災などの不可抗力により、本サイトの提供が困難となった場合<br>
                                (3) コンピュータまたは通信回線等が事故により停止した場合<br>
                                (4) その他、当社が本サイトの提供が困難と判断した場合<br>
                            </li>
                            <li class="pl-2 lg:pl-4">
                                当社は、本サイトの提供の停止または中断により、お客様または第三者が被ったいかなる不利益または損害についても、
                                理由を問わず一切の責任を負わないものとします。
                            </li>
                        </ol>
                    </div>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        第6条（免責事項）
                    </h2>
                    <div
                        class="text-[11px] md:text-[13px] lg:text-[17px] pl-[20px] md:pl-6 lg:pl-[28px] xl:pl-8 space-y-2 leading-[2]">
                        <ol start="1" class="list-decimal">
                            <li class="pl-2 lg:pl-4">
                                当社は、本サイトに掲載する情報について万全を期しておりますが、その完全性、正確性、最新性、有用性を保証するものではありません。
                            </li>
                            <li class="pl-2 lg:pl-4">
                                当社は、当社の故意または重過失による場合を除き、本サイトの利用に起因してお客様に生じたいかなる損害
                                （コンピュータウイルスの感染被害等を含む）についても、一切の責任を負わないものとします。
                            </li>
                            <li class="pl-2 lg:pl-4">
                                本サービス（旅行契約）に関する当社の責任および免責事項については、別途定める「旅行業約款」および「取引条件説明書面」の定めに従うものとします。
                            </li>
                        </ol>
                    </div>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        第7条（本規約の変更）
                    </h2>
                    <p class="mb-2 text-justify text-[12px] md:text-[14px] lg:text-[18px]">
                        当社は、必要と判断した場合には、お客様に通知することなくいつでも本規約を変更することができるものとします。
                        変更後の本規約は、本サイトに掲載したときから効力を生じるものとします。
                    </p>
                </section>
                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        第8条（準拠法）
                    </h2>
                    <p class="mb-2 text-justify text-[12px] md:text-[14px] lg:text-[18px]">
                        本規約および本サイトの利用に関する解釈にあたっては、日本法を準拠法とします。
                    </p>
                </section>
            </div>
        </article>
    </div>
</section>

<?php get_footer(); ?>