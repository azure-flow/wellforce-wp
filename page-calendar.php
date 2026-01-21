<?php

get_header();
?>

<section
  id="hero-section"
  class="w-full h-[400px] md:h-[360px] lg:h-[500px] xl:h-[530px] bg-gradient-to-b from-[#A4D3E8] to-[#28A8E0] flex items-center justify-center">
  <div
    class="mx-auto flex flex-col items-center justify-center w-full mt-14 md:mt-16 lg:mt-28 xl:mt-32">
    <div
      class="text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px] text-white font-medium mb-2">
      Calendar
    </div>
    <h2
      class="text-[30px] md:text-[36px] lg:text-[40px] xl:text-[50px] text-white font-medium mb-3">
      カレンダ
    </h2>
    <div
      class="max-w-[280px] md:max-w-full text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px] text-white font-medium text-start md:text-center leading-6">
      「自分らしく、心身ともに健やかに、 社会とつながりながら心地よく生<br />きられている状態」
      それがウェルビーイングです。
    </div>
  </div>
</section>
<section
  class="w-full max-w-[1200px] mx-auto justify-center items-center px-4 md:px-8 lg:px-12 xl:px-16">
  <div
    class="text-[10px] md:text-[11px] lg:text-[13px] xl:text-[14px] text-black pt-4 md:pt-5 lg:pt-7 xl:pt-8">
    <a
      href="<?php echo home_url(); ?>"
      class="hover:text-[#28A8E0] hover:underline underline-offset-2 cursor-pointer select-none transition-colors duration-200">株式会社ウエルフォース</a>
    / ニュース
  </div>
</section>

<section
  class="w-full flex justify-center items-center pt-14 pb-20 md:pt-20 md:pb-24 lg:py-28 xl:py-32 bg-[#fff] px-2 md:px-8">
  <div
    class="w-full max-w-[1400px] mx-auto flex flex-col justify-center items-center gap-8 md:gap-12 lg:gap-14 xl:gap-16 px-7">
    <!-- Calendar Table -->
    <div
      class="w-full border border-black rounded-xl overflow-hidden bg-[#F5FCFF]">
      <div class="w-full flex flex-col justify-center items-center">
        <!-- Header Row for months -->

        <!-- 春 Spring -->
        <div
          class="w-full flex flex-col md:flex-row items-stretch border-b border-black bg-[#fbfdff]">
          <div
            class="bg-[#eaf8ff] md:bg-transparent w-full md:w-16 lg:w-24 xl:w-36 border-b md:border-b-0 py-4 md:border-r border-black bg-[]y flex items-center justify-center font-medium text-[24px] md:text-[30px] lg:text-[36px] xl:text-[48px] text-black">
            春
          </div>
          <div class="w-full flex-1 grid grid-cols-1 md:grid-cols-3">
            <!-- 3月 -->
            <div
              class="w-full min-h-[110px] flex flex-col items-center justify-center md:border-r border-black">
              <div
                class="w-full flex items-center justify-center border-b border-black py-1 md:py-0 text-[24px] md:text-[30px] lg:text-[36px] xl:text-[48px] font-medium text-black">
                3
              </div>
              <div
                class="w-full flex flex-col gap-1 xl:gap-4 p-2 lg:px-4 xl:px-16 xl:py-8">
                <div
                  class="calendar-item bg-[#8AC3F2] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#FEAC94] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#72DFD6] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#F090BF] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#6BDBA7] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
              </div>
            </div>
            <!-- 4月 -->
            <div
              class="w-full min-h-[110px] flex flex-col items-center justify-center border-t md:border-r md:border-t-0 border-black">
              <div
                class="w-full flex items-center justify-center border-b border-black py-1 md:py-0 text-[24px] md:text-[30px] lg:text-[36px] xl:text-[48px] font-medium text-black">
                4
              </div>
              <div
                class="w-full flex flex-col gap-1 xl:gap-4 p-2 lg:px-4 xl:px-16 xl:py-8">
                <div
                  class="calendar-item bg-[#8AC3F2] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#FEAC94] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#72DFD6] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#F090BF] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#6BDBA7] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
              </div>
            </div>
            <!-- 5月 -->
            <div
              class="w-full min-h-[110px] flex flex-col items-center justify-center border-t md:border-t-0 border-black">
              <div
                class="w-full flex items-center justify-center border-b border-black py-1 md:py-0 text-[24px] md:text-[30px] lg:text-[36px] xl:text-[48px] font-medium text-black">
                5
              </div>
              <div
                class="w-full flex flex-col gap-1 xl:gap-4 p-2 lg:px-4 xl:px-16 xl:py-8">
                <div
                  class="calendar-item bg-[#8AC3F2] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#FEAC94] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#72DFD6] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#F090BF] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#6BDBA7] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- 夏 Summer -->
        <div
          class="w-full flex flex-col md:flex-row items-stretch border-b border-black bg-[#fbfdff]">
          <div
            class="bg-[#eaf8ff] md:bg-transparent w-full md:w-16 lg:w-24 xl:w-36 border-b md:border-b-0 py-4 md:border-r border-black bg-[]y flex items-center justify-center font-medium text-[24px] md:text-[30px] lg:text-[36px] xl:text-[48px] text-black">
            夏
          </div>
          <div class="w-full flex-1 grid grid-cols-1 md:grid-cols-3">
            <!-- 6月 -->
            <div
              class="w-full min-h-[110px] flex flex-col items-center justify-center md:border-r border-black">
              <div
                class="w-full flex items-center justify-center border-b border-black py-1 md:py-0 text-[24px] md:text-[30px] lg:text-[36px] xl:text-[48px] font-medium text-black">
                6
              </div>
              <div
                class="w-full flex flex-col gap-1 xl:gap-4 p-2 lg:px-4 xl:px-16 xl:py-8">
                <div
                  class="calendar-item bg-[#8AC3F2] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#FEAC94] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#72DFD6] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#F090BF] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#6BDBA7] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
              </div>
            </div>
            <!-- 7月 -->
            <div
              class="w-full min-h-[110px] flex flex-col items-center justify-center border-t md:border-r md:border-t-0 border-black">
              <div
                class="w-full flex items-center justify-center border-b border-black py-1 md:py-0 text-[24px] md:text-[30px] lg:text-[36px] xl:text-[48px] font-medium text-black">
                7
              </div>
              <div
                class="w-full flex flex-col gap-1 xl:gap-4 p-2 lg:px-4 xl:px-16 xl:py-8">
                <div
                  class="calendar-item bg-[#8AC3F2] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#FEAC94] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#72DFD6] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#F090BF] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#6BDBA7] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
              </div>
            </div>
            <!-- 8月 -->
            <div
              class="w-full min-h-[110px] flex flex-col items-center justify-center border-t md:border-t-0 border-black">
              <div
                class="w-full flex items-center justify-center border-b border-black py-1 md:py-0 text-[24px] md:text-[30px] lg:text-[36px] xl:text-[48px] font-medium text-black">
                8
              </div>
              <div
                class="w-full flex flex-col gap-1 xl:gap-4 p-2 lg:px-4 xl:px-16 xl:py-8">
                <div
                  class="calendar-item bg-[#8AC3F2] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#FEAC94] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#72DFD6] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#F090BF] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#6BDBA7] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- 秋 Autumn -->
        <div
          class="w-full flex flex-col md:flex-row items-stretch border-b border-black bg-[#fbfdff]">
          <div
            class="bg-[#eaf8ff] md:bg-transparent w-full md:w-16 lg:w-24 xl:w-36 border-b md:border-b-0 py-4 md:border-r border-black bg-[]y flex items-center justify-center font-medium text-[24px] md:text-[30px] lg:text-[36px] xl:text-[48px] text-black">
            秋
          </div>
          <div class="w-full flex-1 grid grid-cols-1 md:grid-cols-3">
            <!-- 9月 -->
            <div
              class="w-full min-h-[110px] flex flex-col items-center justify-center md:border-r border-black">
              <div
                class="w-full flex items-center justify-center border-b border-black py-1 md:py-0 text-[24px] md:text-[30px] lg:text-[36px] xl:text-[48px] font-medium text-black">
                9
              </div>
              <div
                class="w-full flex flex-col gap-1 xl:gap-4 p-2 lg:px-4 xl:px-16 xl:py-8">
                <div
                  class="calendar-item bg-[#8AC3F2] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#FEAC94] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#72DFD6] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#F090BF] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#6BDBA7] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
              </div>
            </div>
            <!-- 10月 -->
            <div
              class="w-full min-h-[110px] flex flex-col items-center justify-center border-t md:border-r md:border-t-0 border-black">
              <div
                class="w-full flex items-center justify-center border-b border-black py-1 md:py-0 text-[24px] md:text-[30px] lg:text-[36px] xl:text-[48px] font-medium text-black">
                10
              </div>
              <div
                class="w-full flex flex-col gap-1 xl:gap-4 p-2 lg:px-4 xl:px-16 xl:py-8">
                <div
                  class="calendar-item bg-[#8AC3F2] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#FEAC94] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#72DFD6] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#F090BF] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#6BDBA7] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
              </div>
            </div>
            <!-- 11月 -->
            <div
              class="w-full min-h-[110px] flex flex-col items-center justify-center border-t md:border-t-0 border-black">
              <div
                class="w-full flex items-center justify-center border-b border-black py-1 md:py-0 text-[24px] md:text-[30px] lg:text-[36px] xl:text-[48px] font-medium text-black">
                11
              </div>
              <div
                class="w-full flex flex-col gap-1 xl:gap-4 p-2 lg:px-4 xl:px-16 xl:py-8">
                <div
                  class="calendar-item bg-[#8AC3F2] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#FEAC94] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#72DFD6] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#F090BF] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#6BDBA7] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- 冬 Winter -->
        <div
          class="w-full flex flex-col md:flex-row items-stretch bg-[#fbfdff]">
          <div
            class="bg-[#eaf8ff] md:bg-transparent w-full md:w-16 lg:w-24 xl:w-36 border-b md:border-b-0 py-4 md:border-r border-black bg-[]y flex items-center justify-center font-medium text-[24px] md:text-[30px] lg:text-[36px] xl:text-[48px] text-black">
            冬
          </div>
          <div class="w-full flex-1 grid grid-cols-1 md:grid-cols-3">
            <!-- 12月 -->
            <div
              class="w-full min-h-[110px] flex flex-col items-center justify-center md:border-r border-black">
              <div
                class="w-full flex items-center justify-center border-b border-black py-1 md:py-0 text-[24px] md:text-[30px] lg:text-[36px] xl:text-[48px] font-medium text-black">
                12
              </div>
              <div
                class="w-full flex flex-col gap-1 xl:gap-4 p-2 lg:px-4 xl:px-16 xl:py-8">
                <div
                  class="calendar-item bg-[#8AC3F2] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#FEAC94] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#72DFD6] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#F090BF] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#6BDBA7] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
              </div>
            </div>
            <!-- 1月 -->
            <div
              class="w-full min-h-[110px] flex flex-col items-center justify-center border-t md:border-r md:border-t-0 border-black">
              <div
                class="w-full flex items-center justify-center border-b border-black py-1 md:py-0 text-[24px] md:text-[30px] lg:text-[36px] xl:text-[48px] font-medium text-black">
                1
              </div>
              <div
                class="w-full flex flex-col gap-1 xl:gap-4 p-2 lg:px-4 xl:px-16 xl:py-8">
                <div
                  class="calendar-item bg-[#8AC3F2] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#FEAC94] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#72DFD6] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#F090BF] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#6BDBA7] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
              </div>
            </div>
            <!-- 2月 -->
            <div
              class="w-full min-h-[110px] flex flex-col items-center justify-center border-t md:border-t-0 border-black">
              <div
                class="w-full flex items-center justify-center border-b border-black py-1 md:py-0 text-[24px] md:text-[30px] lg:text-[36px] xl:text-[48px] font-medium text-black">
                2
              </div>
              <div
                class="w-full flex flex-col gap-1 xl:gap-4 p-2 lg:px-4 xl:px-16 xl:py-8">
                <div
                  class="calendar-item bg-[#8AC3F2] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#FEAC94] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#72DFD6] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#F090BF] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="calendar-item bg-[#6BDBA7] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <!-- Information Modal -->
  <div id="calendarInfoModal"
    class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 opacity-0 pointer-events-none transition-opacity duration-300 px-4 py-8">
    <div
      class="relative bg-[#f0faff] w-full xl:w-[1350px] 2xl:w-[1600px] h-auto flex flex-col overflow-y-auto md:overflow-hidden shadow-2xl pt-4 transform scale-95 transition-transform duration-300">
      <button id="closeCalendarModalBtn"
        class="absolute top-2 right-2 w-6 md:w-10 lg:w-12 aspect-[1] flex items-center justify-center bg-white hover:bg-[#28A8E0] group transition-colors duration-200 rounded"
        aria-label="Close modal">
        <svg class="lg:w-8 xl:w-10 aspect-[1] stroke-[#28A8E0] group-hover:stroke-white transition-colors duration-200"
          fill="none" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
      <!-- Content -->
      <div class="w-full h-full flex flex-col gap-1 lg:gap-2 xl:gap-3">
        <div class="w-full grid grid-cols-1 lg:grid-cols-2 gap-0 lg:gap-4 xl:gap-12 2xl:gap-16 px-2 lg:px-12 xl:px-16 2xl:px-20">
          <div>
            <table class="w-full text-[13px] text-[#222] bg-[#f0faff]">
              <tbody>
                <tr class="border-b border-[#b9c6cc] hover:bg-[#c0eaff] select-none transition">
                  <td class="px-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">略称:</td>
                  <td class="pr-4 text-[#222] text-[12px] lg:text-[14px]">テキスト</td>
                  <td class="pr-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">名称:</td>
                  <td class="pr-4 text-[#222] text-[12px] lg:text-[14px]">テキストテキストテキストテキスト</td>
                  <td class="pr-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">期間</td>
                  <td class="text-[12px] lg:text-[14px] select-none">2026.1～2026.3</td>
                </tr>
                <tr class="border-b border-[#b9c6cc] hover:bg-[#c0eaff] select-none transition">
                  <td class="px-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">略称:</td>
                  <td class="pr-4 text-[#222] text-[12px] lg:text-[14px]">テキスト</td>
                  <td class="pr-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">名称:</td>
                  <td class="pr-4 text-[#222] text-[12px] lg:text-[14px]">テキストテキストテキストテキスト</td>
                  <td class="pr-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">期間</td>
                  <td class="text-[12px] lg:text-[14px] select-none">2026.1～2026.3</td>
                </tr>
                <tr class="border-b border-[#b9c6cc] hover:bg-[#c0eaff] select-none transition">
                  <td class="px-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">略称:</td>
                  <td class="pr-4 text-[#222] text-[12px] lg:text-[14px]">テキスト</td>
                  <td class="pr-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">名称:</td>
                  <td class="pr-4 text-[#222] text-[12px] lg:text-[14px]">テキストテキストテキストテキスト</td>
                  <td class="pr-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">期間</td>
                  <td class="text-[12px] lg:text-[14px] select-none">2026.1～2026.3</td>
                </tr>
                <tr class="border-b border-[#b9c6cc] hover:bg-[#c0eaff] select-none transition">
                  <td class="px-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">略称:</td>
                  <td class="pr-4 text-[#222] text-[12px] lg:text-[14px]">テキスト</td>
                  <td class="pr-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">名称:</td>
                  <td class="pr-4 text-[#222] text-[12px] lg:text-[14px]">テキストテキストテキストテキスト</td>
                  <td class="pr-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">期間</td>
                  <td class="text-[12px] lg:text-[14px] select-none">2026.1～2026.3</td>
                </tr>
                <tr class="border-b border-[#b9c6cc] hover:bg-[#c0eaff] select-none transition">
                  <td class="px-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">略称:</td>
                  <td class="pr-4 text-[#222] text-[12px] lg:text-[14px]">テキスト</td>
                  <td class="pr-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">名称:</td>
                  <td class="pr-4 text-[#222] text-[12px] lg:text-[14px]">テキストテキストテキストテキスト</td>
                  <td class="pr-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">期間</td>
                  <td class="text-[12px] lg:text-[14px] select-none">2026.1～2026.3</td>
                </tr>
                <tr class="border-b border-[#b9c6cc] hover:bg-[#c0eaff] select-none transition">
                  <td class="px-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">略称:</td>
                  <td class="pr-4 text-[#222] text-[12px] lg:text-[14px]">テキスト</td>
                  <td class="pr-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">名称:</td>
                  <td class="pr-4 text-[#222] text-[12px] lg:text-[14px]">テキストテキストテキストテキスト</td>
                  <td class="pr-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">期間</td>
                  <td class="text-[12px] lg:text-[14px] select-none">2026.1～2026.3</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div>
            <table class="w-full text-[13px] text-[#222] bg-[#f0faff]">
              <tbody>
                <tr class="border-b border-[#b9c6cc] hover:bg-[#c0eaff] select-none transition">
                  <td class="px-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">略称:</td>
                  <td class="pr-4 text-[#222] text-[12px] lg:text-[14px]">テキスト</td>
                  <td class="pr-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">名称:</td>
                  <td class="pr-4 text-[#222] text-[12px] lg:text-[14px]">テキストテキストテキストテキスト</td>
                  <td class="pr-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">期間</td>
                  <td class="text-[12px] lg:text-[14px] select-none">2026.1～2026.3</td>
                </tr>
                <tr class="border-b border-[#b9c6cc] hover:bg-[#c0eaff] select-none transition">
                  <td class="px-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">略称:</td>
                  <td class="pr-4 text-[#222] text-[12px] lg:text-[14px]">テキスト</td>
                  <td class="pr-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">名称:</td>
                  <td class="pr-4 text-[#222] text-[12px] lg:text-[14px]">テキストテキストテキストテキスト</td>
                  <td class="pr-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">期間</td>
                  <td class="text-[12px] lg:text-[14px] select-none">2026.1～2026.3</td>
                </tr>
                <tr class="border-b border-[#b9c6cc] hover:bg-[#c0eaff] select-none transition">
                  <td class="px-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">略称:</td>
                  <td class="pr-4 text-[#222] text-[12px] lg:text-[14px]">テキスト</td>
                  <td class="pr-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">名称:</td>
                  <td class="pr-4 text-[#222] text-[12px] lg:text-[14px]">テキストテキストテキストテキスト</td>
                  <td class="pr-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">期間</td>
                  <td class="text-[12px] lg:text-[14px] select-none">2026.1～2026.3</td>
                </tr>
                <tr class="border-b border-[#b9c6cc] hover:bg-[#c0eaff] select-none transition">
                  <td class="px-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">略称:</td>
                  <td class="pr-4 text-[#222] text-[12px] lg:text-[14px]">テキスト</td>
                  <td class="pr-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">名称:</td>
                  <td class="pr-4 text-[#222] text-[12px] lg:text-[14px]">テキストテキストテキストテキスト</td>
                  <td class="pr-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">期間</td>
                  <td class="text-[12px] lg:text-[14px] select-none">2026.1～2026.3</td>
                </tr>
                <tr class="border-b border-[#b9c6cc] hover:bg-[#c0eaff] select-none transition">
                  <td class="px-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">略称:</td>
                  <td class="pr-4 text-[#222] text-[12px] lg:text-[14px]">テキスト</td>
                  <td class="pr-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">名称:</td>
                  <td class="pr-4 text-[#222] text-[12px] lg:text-[14px]">テキストテキストテキストテキスト</td>
                  <td class="pr-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">期間</td>
                  <td class="text-[12px] lg:text-[14px] select-none">2026.1～2026.3</td>
                </tr>
                <tr class="border-b border-[#b9c6cc] hover:bg-[#c0eaff] select-none transition">
                  <td class="px-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">略称:</td>
                  <td class="pr-4 text-[#222] text-[12px] lg:text-[14px]">テキスト</td>
                  <td class="pr-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">名称:</td>
                  <td class="pr-4 text-[#222] text-[12px] lg:text-[14px]">テキストテキストテキストテキスト</td>
                  <td class="pr-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">期間</td>
                  <td class="text-[12px] lg:text-[14px] select-none">2026.1～2026.3</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="w-full grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-0 bg-white">
          <div class="col-span-1">
            <div class="bg-white w-full h-full flex flex-col items-center">
              <div class="w-full bg-[#28A8E0] px-4 lg:px-20 xl:px-24 py-2 lg:py-4 xl:py-6 mb-8">
                <span class="text-white text-[20px] font-medium">情報ウィンド</span>
              </div>
              <div
                class="w-full flex flex-col gap-6 items-center px-4 lg:px-6 xl:px-24 lg:overflow-y-auto xl:h-[460px] 2xl:h-[570px]">
                <div class="flex justify-between items-end w-full px-2">
                  <span class="text-[20px] font-bold text-black">イベント名</span>
                  <span class="text-[13px] text-black pb-1">2026.3~2026.4</span>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bis01.webp" alt="賃貸住宅の外観"
                  class="w-full aspect-[3/2] rounded-[15px] object-cover mb-2">
                <p class="text-[13px] text-black leading-[2] px-2 text-left">
                  株式会社ウェルフォースは、東大阪市・八戸ノ里地域において、積水ハウス様・パナソニックホームズ様が手がける高性能賃貸住宅の経営・運営を行っています。
                  株式会社ウェルフォースは、東大阪市・八戸ノ里地域において、積水ハウス様・パナソニックホームズ様が手がける高性能賃貸住宅の経営・運営を行っています。
                  株式会社ウェルフォースは、東大阪市・八戸ノ里地域において、積水ハウス様・パナソニックホームズ様が手がける高性能賃貸住宅の経営・運営を行っています。
                  株式会社ウェルフォースは、東大阪市・八戸ノ里地域において、積水ハウス様・パナソニックホームズ様が手がける高性能賃貸住宅の経営・運営を行っています。
                </p>
              </div>
            </div>
          </div>
          <div class="md:col-span-2 w-full overflow-x-auto">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/map.webp" alt="Event Image" class="w-[800px]  md:w-full h-auto max-w-[2000px]">
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
get_footer();
?>