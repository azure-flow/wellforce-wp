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
                        プライバシーポリシー（個人情報保護方針）
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
                        株式会社伊勢志摩ツーリズム（以下「当社」といいます）は、
                        当社が運営するウェブサイト（以下「本サイト」といいます）および当社が提供する旅行サービス（以下「本サービス」といいます）における、
                        お客様の個人情報の取扱いについて、以下のとおりプライバシーポリシー（以下「本ポリシー」といいます）を定めます。
                    </p>
                </section>
                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        第1条（個人情報）
                    </h2>
                    <p class="mb-2 text-justify text-[12px] md:text-[14px] lg:text-[18px]">
                        本ポリシーにおいて「個人情報」とは、個人情報の保護に関する法律（平成十五年法律第五十七号）にいう「個人情報」を指すものとし、
                        生存する個人に関する情報であって、当該情報に含まれる氏名、生年月日、住所、電話番号、
                        連絡先その他の記述等により特定の個人を識別できる情報（個人識別情報）を指します。
                    </p>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        第2条（個人情報の収集方法）
                    </h2>
                    <p class="mb-2 text-justify text-[12px] md:text-[14px] lg:text-[18px]">
                        当社は、お客様が本サイトのお問い合わせフォームや予約フォームを利用される際、または本サービスへのお申込みの際に、
                        氏名、国籍、Eメールアドレス、電話番号、その他旅行の手配に必要な情報（性別、年齢、特別な配慮が必要な方の健康状態に関する情報など）
                        をお尋ねすることがあります。
                        また、本サイトでは、サービスの機能向上および利用状況の分析のためにCookie（クッキー）を使用することがあります。
                    </p>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        第3条（個人情報を収集・利用する目的）
                    </h2>
                    <p class="mb-2 text-justify text-[12px] md:text-[14px] lg:text-[18px]">
                        当社が個人情報を収集・利用する目的は、以下のとおりです。
                    </p>
                    <div
                        class="text-[11px] md:text-[13px] lg:text-[17px] pl-[20px] md:pl-6 lg:pl-[28px] xl:pl-8 space-y-2 leading-[2]">
                        <ol start="1" class="list-decimal">
                            <li class="pl-2 lg:pl-4">
                                本サービスの予約受付、本人確認、およびお客様が当社の定める旅行日程に従って運送・宿泊機関等の提供する旅行サービス
                                （以下「旅行サービス」といいます）の提供を受けることができるように手配し、旅程を管理するため。
                            </li>
                            <li class="pl-2 lg:pl-4">お客様との連絡やお問い合わせに回答するため（本人確認を行うことを含む）。</li>
                            <li class="pl-2 lg:pl-4">本サービスの改善および新たなサービス開発に役立てるため。</li>
                            <li class="pl-2 lg:pl-4">当社サービスに関する情報をお客様にご提供するため。</li>
                            <li class="pl-2 lg:pl-4">上記の利用目的に付随する目的。</li>

                        </ol>
                    </div>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        第4条（個人情報の第三者提供）
                    </h2>
                    <p class="mb-2 text-justify text-[12px] md:text-[14px] lg:text-[18px]">
                        当社は、次に掲げる場合を除いて、あらかじめお客様の同意を得ることなく、第三者に個人情報を提供することはありません。
                        ただし、個人情報保護法その他の法令で認められる場合を除きます。
                    </p>
                    <div
                        class="text-[11px] md:text-[13px] lg:text-[17px] pl-[20px] md:pl-6 lg:pl-[28px] xl:pl-8 space-y-2 leading-[2]">
                        <ol start="1" class="list-decimal">
                            <li class="pl-2 lg:pl-4">法令に基づく場合。</li>
                            <li class="pl-2 lg:pl-4">人の生命、身体または財産の保護のために必要がある場合であって、本人の同意を得ることが困難であるとき。</li>
                            <li class="pl-2 lg:pl-4">公衆衛生の向上または児童の健全な育成の推進のために特に必要がある場合であって、本人の同意を得ることが困難であるとき。</li>
                            <li class="pl-2 lg:pl-4">
                                国の機関もしくは地方公共団体またはその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合であって、本人の同意を得ることにより当該事務の遂行に支障を及ぼすおそれがあるとき。
                            </li>
                            <li class="pl-2 lg:pl-4">
                                第3条に定める利用目的の達成に必要な範囲内において、運送・宿泊機関、手配代行者に対し、お客様の氏名、年齢、性別、電話番号、国籍、その他手配に必要な情報を、あらかじめ電子的方法等で送付することにより提供する場合。
                            </li>

                        </ol>
                    </div>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        第5条（個人情報の安全管理）
                    </h2>
                    <p class="mb-2 text-justify text-[12px] md:text-[14px] lg:text-[18px]">
                        当社は、お客様の個人情報を正確かつ最新の状態に保ち、個人情報への不正アクセス・紛失・破損・改ざん・漏洩などを防止するため、
                        セキュリティシステムの維持・管理体制の整備等の必要な措置を講じ、安全対策を実施し個人情報の厳重な管理を行います。
                    </p>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        第6条（個人情報の開示、訂正、削除）
                    </h2>
                    <p class="mb-2 text-justify text-[12px] md:text-[14px] lg:text-[18px]">
                        当社は、ご本人から個人情報の開示、訂正、追加、削除、利用停止の請求があった場合、ご本人であることを確認させていただいた上で、
                        法令に基づき速やかに対応いたします。
                    </p>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        第7条（Cookie（クッキー）の使用）
                    </h2>
                    <p class="mb-2 text-justify text-[12px] md:text-[14px] lg:text-[18px]">
                        本サイトは、サービスの機能向上および利用状況の分析のためにCookieを使用することがあります。
                        Cookieは、お客様のコンピュータに保存される小さなテキストファイルであり、個人を特定するものではありません。
                        お客様はブラウザの設定によりCookieの受け入れを拒否することができますが、その場合、本サイトの一部機能がご利用いただけないことがあります。
                    </p>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        第8条（プライバシーポリシーの変更）
                    </h2>
                    <p class="mb-2 text-justify text-[12px] md:text-[14px] lg:text-[18px]">
                        本ポリシーの内容は、法令その他本ポリシーに別段の定めのある事項を除いて、お客様に通知することなく、変更することができるものとします。
                        当社が別途定める場合を除いて、変更後のプライバシーポリシーは、本サイトに掲載したときから効力を生じるものとします。
                    </p>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        第9条（お問い合わせ窓口）
                    </h2>
                    <p class="mb-2 text-justify text-[12px] md:text-[14px] lg:text-[18px]">
                        本ポリシーに関するお問い合わせは、下記の窓口までお願いいたします。
                    </p>
                    <ol class="text-[11px] md:text-[13px] lg:text-[17px]">
                        <li class="pl-2 lg:pl-4">運営者： 株式会社伊勢志摩ツーリズム </li>
                        <li class="pl-2 lg:pl-4">住所： 〒517-0502 三重県志摩市阿児町神明752-21 </li>
                        <li class="pl-2 lg:pl-4">電話： 0599-52-0882 / FAX： 0599-52-0887</li>
                    </ol>
                </section>
            </div>
        </article>
    </div>
</section>

<?php get_footer(); ?>