<?php

get_header();
?>

<section
      id="hero-section"
      class="w-full h-[400px] md:h-[360px] lg:h-[500px] xl:h-[530px] bg-gradient-to-b from-[#A4D3E8] to-[#28A8E0] flex items-center justify-center"
    >
      <div
        class="mx-auto flex flex-col items-center justify-center w-full mt-14 md:mt-16 lg:mt-28 xl:mt-32"
      >
        <div
          class="text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px] text-white font-medium mb-2"
        >
          Service
        </div>
        <h2
          class="text-[30px] md:text-[36px] lg:text-[40px] xl:text-[50px] text-white font-medium mb-3"
        >
          サービス
        </h2>
        <div
          class="max-w-[280px] md:max-w-full text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px] text-white font-medium text-start md:text-center leading-6"
        >
          八戸ノ里エリアの暮らしをサポートする地域マップとイベントカレンダー
        </div>
      </div>
    </section>
    <section
      class="w-full max-w-[1200px] mx-auto justify-center items-center px-4 md:px-8 lg:px-12 xl:px-16"
    >
      <div
        class="text-[10px] md:text-[11px] lg:text-[13px] xl:text-[14px] text-black py-4 md:py-5 lg:py-7 xl:py-8"
      >
        <a
          href="<?php echo home_url(); ?>"
          class="hover:text-[#28A8E0] hover:underline underline-offset-2 cursor-pointer select-none transition-colors duration-200"
          >株式会社ウエルフォース</a
        >
        / サービス
      </div>
    </section>

    <section
      class="w-full flex justify-center items-center pt-14 pb-20 md:pt-20 md:pb-24 lg:py-28 xl:py-32 bg-[#fff]"
    >
      <div
        class="w-full max-w-[600px] md:max-w-[680px] lg:max-w-[800px] xl:max-w-[1000px] 2xl:max-w-[1400px] mx-auto flex flex-col justify-center items-center gap-8 md:gap-12 lg:gap-14 xl:gap-16"
      >
        <div class="flex flex-col items-center gap-6">
          <h2
            class="text-[20px] md:text-[27px] lg:text-[40px] font-bold text-center w-full leading-tight"
          >
            八戸ノ里 地域マップ
          </h2>
          <p
            class="text-[14px] md:text-[15px] lg:text-[16px] xl:text-[18px] text-black w-full text-start md:text-center mb-3"
          >
            近鉄八戸ノ里駅を中心とした暮らしの地域マップです。<br />施設をクリックすると詳細情報が表示されます。
          </p>
        </div>
        <div
          class="w-full flex flex-col flex-1 justify-center items-start overflow-auto"
        >
          <div class="w-[600px] md:w-full h-full ove">
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/map.webp"
              alt="map"
              class="w-full h-full object-cover"
            />
          </div>
        </div>
        <a
          href="<?php echo home_url('/calendar'); ?>"
          class="flex items-center justify-center rounded-[20px] bg-[#28A8E0] hover:bg-[#5ec6f8] px-8 md:px-10 lg:px-12 xl:px-14 py-2 md:py-3 lg:py-4 xl:py-5 text-white font-bold text-[12px] md:text-[16px] transition-colors duration-150"
        >
          事業内容をもっと詳しく見る
          <svg
            class="inline-block align-middle ml-2 w-[24px] md:w-[28px] aspect-1"
            viewBox="0 0 24 24"
            fill="none"
          >
            <g>
              <rect width="16" height="16" fill="none"></rect>
              <path
                d="M4 12h14"
                stroke="#fff"
                stroke-width="1"
                stroke-linecap="round"
              />
              <path
                d="M12 6l6 6-6 6"
                stroke="#fff"
                stroke-width="1"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </g>
          </svg>
        </a>
      </div>
    </section>

<?php
get_footer();
?>