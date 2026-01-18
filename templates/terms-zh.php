<?php
get_header();
?>


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
                    <h1 class="text-white text-[50px] md:text-[28px] lg:text-[52px] xl:text-[70px] leading-[1.2]">
                        網站使用條款
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
                        本使用條款（以下簡稱「本條款」）旨在規範由
                        株式会社伊勢志摩ツーリズム（以下簡稱「本公司」）所營運之網站（以下簡稱「本網站」）的使用條件。
                        使用本網站之顧客（以下簡稱「顧客」）請於同意本條款後，再使用本網站。
                    </p>
                </section>
                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        第1條（適用範圍）
                    </h2>
                    <p class="text-[12px] md:text-[14px] lg:text-[17px] text-justify leading-[2]">
                        本條款適用於顧客與本公司之間，有關使用本網站之一切關係。
                    </p>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        第2條（本網站之使用）
                    </h2>
                    <p class="text-[12px] md:text-[14px] lg:text-[17px] text-justify leading-[2]">
                        顧客應遵循本條款之規定，瀏覽本網站，並可透過本網站獲取本公司提供之旅遊服務（以下簡稱「本服務」）相關資訊。
                    </p>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        第3條（旅遊合約）
                    </h2>
                    <div
                        class="text-[11px] md:text-[13px] lg:text-[17px] pl-[20px] md:pl-6 lg:pl-[28px] xl:pl-8 space-y-2 leading-[2]">
                        <ol start="1" class="list-decimal">
                            <li class="pl-2 lg:pl-4">
                                顧客透過本網站申請本服務時，顧客與本公司之間所締結之旅遊合約，無論本條款是否有任何規定，均應適用本公司另行制定之「旅遊業條款（旅行業約款）」及「交易條件說明書面」。
                            </li>
                            <li class="pl-2 lg:pl-4">
                                旅遊合約於本公司承諾締結合約，並收到規定之申請費（或全額旅遊費用）時成立。詳細條件請參閱「旅遊業條款」及「交易條件說明書面」。
                            </li>
                        </ol>
                    </div>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        第4條（禁止事項）
                    </h2>
                    <p class="text-[12px] md:text-[14px] lg:text-[17px] text-justify leading-[2]">
                        顧客於使用本網站時，不得從事下列行為：
                    </p>
                    <div
                        class="text-[11px] md:text-[13px] lg:text-[17px] pl-[20px] md:pl-6 lg:pl-[28px] xl:pl-8 space-y-2 leading-[2]">
                        <ol start="1" class="list-decimal">
                            <li class="pl-2 lg:pl-4">
                                違反法令或公共秩序善良風俗之行為。
                            </li>
                            <li class="pl-2 lg:pl-4">
                                與犯罪行為相關之行為。
                            </li>
                            <li class="pl-2 lg:pl-4">
                                破壞或妨礙本公司伺服器或網路功能之行為。
                            </li>
                            <li class="pl-2 lg:pl-4">
                                可能妨礙本網站營運之行為。
                            </li>
                            <li class="pl-2 lg:pl-4">
                                收集或累積其他顧客相關個人資訊等之行為。
                            </li>
                            <li class="pl-2 lg:pl-4">
                                侵害本公司、其他顧客或第三者之智慧財產權、肖像權、隱私權、名譽、其他權利或利益之行為。
                            </li>
                            <li class="pl-2 lg:pl-4">
                                未經本公司事前許可，為商業目的複製、公開傳輸、改作或以其他方式利用本網站內容（包含照片、影片、文字等）之行為。
                            </li>
                            <li class="pl-2 lg:pl-4">
                                對本公司提出過度不當之要求（包含要求超出合理範圍之負擔）之行為。
                            </li>
                            <li class="pl-2 lg:pl-4">
                                其他本公司判斷為不適當之行為。
                            </li>
                        </ol>
                    </div>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        第5條（本網站提供之中止等）
                    </h2>
                    <div
                        class="text-[11px] md:text-[13px] lg:text-[17px] pl-[20px] md:pl-6 lg:pl-[28px] xl:pl-8 space-y-2 leading-[2]">
                        <ol start="1" class="list-decimal">
                            <li class="pl-2 lg:pl-4">
                                本公司若判斷有下列任一情事，得不經事前通知顧客，逕行中止或中斷本網站之全部或部分服務。<br><br>
                                (1) 對本網站之電腦系統進行維護檢查或更新時。<br>
                                (2) 因地震、雷擊、火災、停電或天災等不可抗力，致使本網站難以提供服務時。<br>
                                (3) 電腦或通訊線路等因事故停止時。<br>
                                (4) 其他本公司判斷難以提供本網站服務時。<br>
                            </li>
                            <li class="pl-2 lg:pl-4">
                                因本網站服務之中止或中斷，致使顧客或第三者蒙受任何不利益或損害，無論理由為何，本公司概不負擔任何責任。
                            </li>
                        </ol>
                    </div>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        第6條（免責聲明）
                    </h2>
                    <div
                        class="text-[11px] md:text-[13px] lg:text-[17px] pl-[20px] md:pl-6 lg:pl-[28px] xl:pl-8 space-y-2 leading-[2]">
                        <ol start="1" class="list-decimal">
                            <li class="pl-2 lg:pl-4">
                                本公司雖盡力確保本網站所刊載資訊之正確性，但並不保證其完整性、準確性、最新性或有用性。
                            </li>
                            <li class="pl-2 lg:pl-4">
                                除因本公司之故意或重大過失所致者外，本公司對於因使用本網站而對顧客造成之任何損害（包含電腦病毒感染等損害），概不負擔任何責任。
                            </li>
                            <li class="pl-2 lg:pl-4">
                                關於本服務（旅遊合約）之本公司責任及免責事項，應遵循另行制定之「旅遊業條款」及「交易條件說明書面」之規定。
                            </li>
                        </ol>
                    </div>
                </section>

                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        第7條（本條款之變更）
                    </h2>
                    <p class="mb-2 text-justify text-[12px] md:text-[14px] lg:text-[18px]">
                        本公司若判斷有必要時，得不經通知顧客，隨時變更本條款。變更後之本條款自其刊載於本網站時起生效。
                    </p>
                </section>
                <section>
                    <h2
                        class="text-[14px] md:text-[16px] lg:text-[20px] underline underline-offset-[5px] mb-2 md:mb-4 lg:mb-8 xl:mb-12">
                        第8條（準據法）
                    </h2>
                    <p class="mb-2 text-justify text-[12px] md:text-[14px] lg:text-[18px]">
                        本條款及本網站使用之相關解釋，均以日本法律為準據法。
                    </p>
                </section>
            </div>
        </article>
    </div>
</section>

<?php get_footer(); ?>