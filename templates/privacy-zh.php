<?php
get_header();
?>


<section
    class="relative bg-[linear-gradient(180deg,#051C2A_29%,#013538_63%,#025140_100%)] px-8 py-40 lg:py-32 xl:py-52">
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
                    繁體字
                </button>
                <div
                    class="langMenuList flex flex-col w-[48px] lg:w-[52px] xl:w-[58px] absolute left-0 top-[28.21px] lg:top-[30.21px] xl:top-[34.21px] opacity-0 group-hover:opacity-100 group-hover:pointer-events-auto pointer-events-none transition-opacity duration-200 z-20">
                    <a href="<?php echo get_permalink(pll_get_post(get_the_ID(), 'en')); ?>"
                        class="w-[48px] lg:w-[52px] xl:w-[58px] h-[28.21px] lg:h-[30.21px] xl:h-[34.21px] flex items-center justify-center bg-[#CDD3D6] text-[#0B1828] transition hover:bg-white hover:underline underline-offset-[5px] hover:underline underline-offset-[5px]-offset-[6px] hover:decoration-[#0B1828]">
                        English
                    </a>
                    <a href="<?php echo get_permalink(pll_get_post(get_the_ID(), 'ja')); ?>"
                        class="w-[48px] lg:w-[52px] xl:w-[58px] h-[28.21px] lg:h-[30.21px] xl:h-[34.21px] flex items-center justify-center bg-[#CDD3D6] text-[#0B1828] transition hover:bg-white hover:underline underline-offset-[5px] hover:underline underline-offset-[5px]-offset-[6px] hover:decoration-[#0B1828]">
                        日本語
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
                    <h1 class="text-white  text-[38px] md:text-[22px] lg:text-[48px] xl:text-[60px] leading-[1.2]">
                        隱私權政策（個人資訊保護方針）
                    </h1>
                    <hr class="w-full border-white">
                    <h3
                        class="text-white text-[16px] md:text-[15px] xl:text-[17px] opacity-70 tracking-wider text-right">
                        生效日期：2025年9月30日
                    </h3>
                </div>
            </header>
            <div class="space-y-12 lg:space-y-16 xl:space-y-24">
                <section>
                    <p class="text-[12px] md:text-[14px] lg:text-[17px] text-justify leading-[2]">
                        株式会社伊勢志摩ツーリズム（以下簡稱「本公司」）針對本公司營運之網站（以下簡稱「本網站」）及本公司提供之旅遊服務
                        （以下簡稱「本服務」）中，關於顧客個人資訊的處理，制定隱私權政策（以下簡稱「本政策」）如下。
                    </p>
                </section>
                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        第1條（個人資訊）
                    </h2>
                    <p class="mb-2 text-justify text-[12px] md:text-[14px] lg:text-[18px]">
                        本政策所稱之「個人資訊」，係指日本「個人資訊保護法」（平成十五年法律第五十七號）中所定義之「個人資訊」，
                        即關於尚生存個人的資訊，且該資訊中所包含之姓名、出生年月日、地址、電話號碼、聯絡方式及其他記述等，可藉以識別特定個人之資訊（個人識別資訊）。
                    </p>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        第2條（個人資訊的收集方法）
                    </h2>
                    <p class="mb-2 text-justify text-[12px] md:text-[14px] lg:text-[18px]">
                        當顧客使用本網站之洽詢表單、預約表單，或申請本服務時，本公司可能會要求顧客提供姓名、國籍、
                        電子郵件地址、電話號碼，以及其他安排旅遊所需之資訊（例如性別、年齡，或需要特別協助者之健康狀況等資訊）。
                        此外，本網站為提升服務功能及分析使用狀況，可能會使用 Cookie。
                    </p>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        第3條（收集・使用個人資訊之目的）
                    </h2>
                    <p class="mb-2 text-justify text-[12px] md:text-[14px] lg:text-[18px]">
                        本公司收集・使用個人資訊之目的如下：
                    </p>
                    <div
                        class="text-[11px] md:text-[13px] lg:text-[17px] pl-[20px] md:pl-6 lg:pl-[28px] xl:pl-8 space-y-2 leading-[2]">
                        <ol start="1" class="list-decimal">
                            <li class="pl-2 lg:pl-4">
                                為受理本服務之預約、進行身分確認，以及為確保顧客能依循本公司制定之旅遊日程，接受交通・住宿機構等所提供之旅遊服務（以下簡稱「旅遊服務」）而進行安排與旅程管理。</li>
                            <li class="pl-2 lg:pl-4">為與顧客聯繫及回覆洽詢（包含進行身分確認）。</li>
                            <li class="pl-2 lg:pl-4">為改善本服務及開發新服務。</li>
                            <li class="pl-2 lg:pl-4">為向顧客提供本公司之服務相關資訊。</li>
                            <li class="pl-2 lg:pl-4">附隨於上述使用目的之其他目的。</li>

                        </ol>
                    </div>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        第4條（向第三者提供個人資訊）
                    </h2>
                    <p class="mb-2 text-justify text-[12px] md:text-[14px] lg:text-[18px]">
                        除下列情況外，本公司不會在未經顧客事前同意下，向第三者提供個人資訊。但日本個人資訊保護法及其他法令允許之情況除外。
                    </p>
                    <div
                        class="text-[11px] md:text-[13px] lg:text-[17px] pl-[20px] md:pl-6 lg:pl-[28px] xl:pl-8 space-y-2 leading-[2]">
                        <ol start="1" class="list-decimal">
                            <li class="pl-2 lg:pl-4">依法令規定時。</li>
                            <li class="pl-2 lg:pl-4">為保護個人生命、身體或財產而有必要，且難以取得本人同意時。</li>
                            <li class="pl-2 lg:pl-4">為提升公共衛生或促進兒童健全發展有特別必要，且難以取得本人同意時。</li>
                            <li class="pl-2 lg:pl-4">國家機關、地方公共團體或受其委託者執行法令規定之事務時，有必要予以協助，且若取得本人同意恐將妨礙該事務之執行時。</li>
                            <li class="pl-2 lg:pl-4">
                                於達成第3條所定使用目的之必要範圍內，事先以電子方式等途徑，將顧客之姓名、年齡、性別、電話號號碼、國籍及其他安排所需資訊，提供予交通・住宿機構、旅遊代辦業者時。</li>
                        </ol>
                    </div>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        第5條（個人資訊的安全管理）
                    </h2>
                    <p class="mb-2 text-justify text-[12px] md:text-[14px] lg:text-[18px]">
                        本公司為保持顧客個人資訊之正確與最新狀態，並防止個人資訊遭非法存取、遺失、毀損、竄改、洩漏等，將採取維持安全系統、
                        整備管理體制等必要措施，並實施安全對策，對個人資訊進行嚴格管理。
                    </p>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        第6條（個人資訊的揭露、更正、刪除）
                    </h2>
                    <p class="mb-2 text-justify text-[12px] md:text-[14px] lg:text-[18px]">
                        本公司於接獲顧客本人提出關於個人資訊之揭露、更正、追加、刪除、停止使用等請求時，將於確認為本人後，依法令規定迅速處理。
                    </p>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        第7条（Cookie之使用）
                    </h2>
                    <p class="mb-2 text-justify text-[12px] md:text-[14px] lg:text-[18px]">
                        本網站為提升服務功能及分析使用狀況，可能會使用 Cookie。Cookie 是儲存於您電腦中的小型文字檔案，並非用於識別個人身分。顧客可透過瀏覽器設定拒絕接受
                        Cookie，但此舉可能導致本網站部分功能無法使用。
                    </p>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        第8條（隱私權政策的變更）
                    </h2>
                    <p class="mb-2 text-justify text-[12px] md:text-[14px] lg:text-[18px]">
                        除法令及本政策另有規定外，本政策內容得不經通知顧客逕行變更。除本公司另有規定外，變更後之隱私權政策自公布於本網站起生效。
                    </p>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        第9條（洽詢窗口）
                    </h2>
                    <p class="mb-2 text-justify text-[12px] md:text-[14px] lg:text-[18px]">
                        關於本政策之相關洽詢，請聯絡以下窗口。
                    </p>
                    <ol class="text-[11px] md:text-[13px] lg:text-[17px]">
                        <li class="pl-2 lg:pl-4">營運者： 株式会社 伊勢志摩ツーリズム (IST Co.,Ltd)</li>
                        <li class="pl-2 lg:pl-4">地址： 〒517-0502 日本三重県志摩市阿児町神明752-21</li>
                        <li class="pl-2 lg:pl-4">電話： +81-599-52-0882 / 傳真： +81-599-52-0887</li>
                    </ol>
                </section>
            </div>
        </article>
    </div>
</section>

<?php get_footer(); ?>