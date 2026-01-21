<footer class="bg-[#42a7e8] text-white">
      <div
        class="mx-auto px-16 md:px-0 md:max-w-[700px] lg:max-w-[1000px] xl:max-w-[1100px]"
      >
        <div class="flex flex-wrap md:flex-nowrap gap-x-12 pt-16 pb-12">
          <div
            class="w-full md:w-1/6 flex flex-col items-center md:items-start mb-8 md:mb-0"
          >
            <a href="<?php echo home_url(); ?>">
              <img
                src="<?php echo T_DIRE_URI; ?>/assets/images/logo.png"
                alt="Wellforce logo"
                class="mb-3 w-[100px]"
                style="filter: brightness(0) invert(1)"
              />
            </a>
            <span class="text-white font-medium text-[30px] mb-5"
              >Wellforce</span
            >
          </div>
          <div class="w-full md:w-1/4 flex flex-col items-start mb-8 md:mb-0">
            <span class="font-bold mb-8 text-[16px] md:text-[18px]"
              >メニュー</span
            >
            <div class="grid grid-cols-2 gap-20 md:gap-6 lg:gap-8">
              <ul class="text-sm leading-8">
                <li>
                  <a
                    href="<?php echo home_url('/company'); ?>"
                    class="hover:underline text-[12px] md:text-[14px] lg:text-[16px] font-300"
                    >会社概要</a
                  >
                </li>
                <li>
                  <a
                    href="<?php echo home_url('/concept'); ?>"
                    class="hover:underline text-[12px] md:text-[14px] lg:text-[16px] font-300"
                    >コンセプト</a
                  >
                </li>
                <li>
                  <a
                    href="<?php echo home_url('/contact'); ?>"
                    class="hover:underline text-[12px] md:text-[14px] lg:text-[16px] font-300"
                    >お問い合わせ</a
                  >
                </li>
              </ul>
              <ul class="text-sm leading-8">
                <li>
                  <a
                    href="<?php echo home_url('/service'); ?>"
                    class="hover:underline text-[12px] md:text-[14px] lg:text-[16px] font-300"
                    >サービス</a
                  >
                </li>
                <li>
                  <a
                    href="<?php echo home_url('/news'); ?>"
                    class="hover:underline text-[12px] md:text-[14px] lg:text-[16px] font-300"
                    >ニュース</a
                  >
                </li>
                <li>
                  <a
                    href="<?php echo home_url('/calendar'); ?>"
                    class="hover:underline text-[12px] md:text-[14px] lg:text-[16px] font-300"
                    >カレンダ</a
                  >
                </li>
                <li>
                  <a
                    href="<?php echo home_url('/announcement'); ?>"
                    class="hover:underline text-[12px] md:text-[14px] lg:text-[16px] font-300"
                    >お知らせ</a
                  >
                </li>
              </ul>
            </div>
          </div>
          <div class="w-full md:w-1/4 mb-12 md:mb-0">
            <span class="font-bold mb-8 text-[16px] md:text-[18px] block"
              >会社情報</span
            >
            <ul class="text-sm leading-8">
              <li>
                <span class="text-[12px] md:text-[14px] lg:text-[16px] font-300"
                  >名称 ：株式会社ウエルフォース</span
                >
              </li>
              <li>
                <span class="text-[12px] md:text-[14px] lg:text-[16px] font-300"
                  >住所 ：東大阪市中小阪2丁目</span
                >
              </li>
            </ul>
          </div>
          <div class="w-full md:w-1/4 md:mb-0">
            <span class="font-bold mb-8 text-[16px] md:text-[18px] block"
              >取引会社</span
            >
            <ul class="text-sm leading-8">
              <li>
                <a
                  href="https://www.sekisuihouse.co.jp/"
                  class="text-[12px] md:text-[14px] lg:text-[16px] font-300 hover:underline"
                  >積水ハウス</a
                >
              </li>
              <li>
                <a
                  href="https://www.sekisuihouse-f-kansai.co.jp/"
                  class="text-[12px] md:text-[14px] lg:text-[16px] font-300 hover:underline"
                  >積水ハウスシャーメゾン関西</a
                >
              </li>
              <li>
                <a
                  href="https://www.sekisuihouse-k.jp"
                  class="text-[12px] md:text-[14px] lg:text-[16px] font-300 hover:underline"
                  >積水ハウス建設グループ</a
                >
              </li>
              <li>
                <a
                  href="https://homes.panasonic.com/"
                  class="text-[12px] md:text-[14px] lg:text-[16px] font-300 hover:underline"
                  >パナソニックホームズ</a
                >
              </li>
              <li>
                <a
                  href="https://homes.panasonic.com/phre/"
                  class="text-[12px] md:text-[14px] lg:text-[16px] font-300 hover:underline"
                  >パナソニックホームズ不動産</a
                >
              </li>
              <li>
                <a
                  href="https://homes.panasonic.com/phr/"
                  class="text-[12px] md:text-[14px] lg:text-[16px] font-300 hover:underline"
                  >パナソニックリフォーム</a
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="border-t-[0.5px] border-white/[0.4]">
        <div
          class="mx-auto text-center py-5 md:py-6 lg:py-7 xl:py-8 text-[12px] md:text-[14px] xl:text-[16px] max-w-[1100px]"
        >
          © <span id="copyright-year"></span> 株式会社ウエルフォース All Rights
          Reserved.
          <script>
            document.getElementById("copyright-year").textContent =
              new Date().getFullYear();
          </script>
        </div>
      </div>
    </footer>

    <div
      id="menu_modal"
      class="w-full fixed inset-0 z-40 flex bg-[#28A8E0] transition-all duration-700 ease-in-out pointer-events-none opacity-0 pt-[77px]"
    >
      <div
        class="relative w-full h-full flex flex-col px-16 py-16 bg-[#28A8E0] overflow-auto"
      >
        <div
          class="w-full md:w-1/6 flex flex-col items-center md:items-start mb-12 md:mb-0"
        >
          <img
            src="<?php echo T_DIRE_URI; ?>/assets/images/logo.png"
            alt="Wellforce logo"
            class="mb-3 w-[90px]"
            style="filter: brightness(0) invert(1)"
          />
          <span class="text-white font-medium text-[24px] mb-5">Wellforce</span>
        </div>
        <nav class="flex flex-col gap-[2px]">
          <div class="grid grid-cols-2 gap-y-10 gap-x-20 justify-start">
            <a
              href="<?php echo home_url('/company'); ?>"
              class="text-white text-[13px] text-start font-medium"
            >
              会社概要
            </a>
            <a
              href="<?php echo home_url('/concept'); ?>"
              class="text-white text-[13px] text-start font-medium"
            >
              コンセプト
            </a>
            <a
              href="<?php echo home_url('/contact'); ?>"
              class="text-white text-[13px] text-start font-medium"
            >
              お問い合わせ
            </a>
            <a
              href="<?php echo home_url('/service'); ?>"
              class="text-white text-[13px] text-start font-medium"
            >
              サービス
            </a>
            <a
              href="<?php echo home_url('/news'); ?>"
              class="text-white text-[13px] text-start font-medium"
            >
              ニュース
            </a>
            <a
              href="<?php echo home_url('/calendar'); ?>"
              class="text-white text-[13px] text-start font-medium"
            >
              カレンダー
            </a>
            <a
              href="<?php echo home_url('/announcement'); ?>"
              class="text-white text-[13px] text-start font-medium"
            >
              お知らせ
            </a>
          </div>
        </nav>
      </div>
    </div>

    <!-- Scroll to Top Button -->
    <button
      id="scrollToTopBtn"
      class="fixed bottom-8 right-8 z-50 w-12 h-12 md:w-14 md:h-14 bg-[#28A8E0] hover:bg-[#0e90c9] rounded-full flex items-center justify-center shadow-lg transition-all duration-300 opacity-0 pointer-events-none"
      aria-label="Scroll to top"
    >
      <svg
        class="w-6 h-6 md:w-7 md:h-7 text-white"
        fill="none"
        stroke="currentColor"
        viewBox="0 0 24 24"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M5 15l7-7 7 7"
        />
      </svg>
    </button>
  </body>
</html>