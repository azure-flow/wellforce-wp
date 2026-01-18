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
            class="bg-[#eaf8ff] md:bg-transparent w-full lg:w-24 xl:w-36 border-b md:border-b-0 py-4 md:border-r border-black bg-[]y flex items-center justify-center font-medium text-[24px] md:text-[30px] lg:text-[36px] xl:text-[48px] text-black">
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
                  class="bg-[#8AC3F2] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#FEAC94] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#72DFD6] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#F090BF] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#6BDBA7] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
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
                  class="bg-[#8AC3F2] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#FEAC94] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#72DFD6] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#F090BF] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#6BDBA7] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
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
                  class="bg-[#8AC3F2] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#FEAC94] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#72DFD6] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#F090BF] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#6BDBA7] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
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
            class="bg-[#eaf8ff] md:bg-transparent w-full lg:w-24 xl:w-36 border-b md:border-b-0 py-4 md:border-r border-black bg-[]y flex items-center justify-center font-medium text-[24px] md:text-[30px] lg:text-[36px] xl:text-[48px] text-black">
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
                  class="bg-[#8AC3F2] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#FEAC94] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#72DFD6] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#F090BF] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#6BDBA7] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
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
                  class="bg-[#8AC3F2] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#FEAC94] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#72DFD6] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#F090BF] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#6BDBA7] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
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
                  class="bg-[#8AC3F2] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#FEAC94] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#72DFD6] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#F090BF] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#6BDBA7] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
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
            class="bg-[#eaf8ff] md:bg-transparent w-full lg:w-24 xl:w-36 border-b md:border-b-0 py-4 md:border-r border-black bg-[]y flex items-center justify-center font-medium text-[24px] md:text-[30px] lg:text-[36px] xl:text-[48px] text-black">
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
                  class="bg-[#8AC3F2] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#FEAC94] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#72DFD6] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#F090BF] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#6BDBA7] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
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
                  class="bg-[#8AC3F2] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#FEAC94] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#72DFD6] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#F090BF] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#6BDBA7] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
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
                  class="bg-[#8AC3F2] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#FEAC94] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#72DFD6] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#F090BF] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#6BDBA7] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
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
            class="bg-[#eaf8ff] md:bg-transparent w-full lg:w-24 xl:w-36 border-b md:border-b-0 py-4 md:border-r border-black bg-[]y flex items-center justify-center font-medium text-[24px] md:text-[30px] lg:text-[36px] xl:text-[48px] text-black">
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
                  class="bg-[#8AC3F2] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#FEAC94] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#72DFD6] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#F090BF] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#6BDBA7] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
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
                  class="bg-[#8AC3F2] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#FEAC94] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#72DFD6] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#F090BF] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#6BDBA7] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
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
                  class="bg-[#8AC3F2] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#FEAC94] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#72DFD6] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#F090BF] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
                  テキストテキスト
                </div>
                <div
                  class="bg-[#6BDBA7] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none">
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

<?php
get_footer();
?>