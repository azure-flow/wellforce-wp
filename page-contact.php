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
          Contact Us
        </div>
        <h2
          class="text-[30px] md:text-[36px] lg:text-[40px] xl:text-[50px] text-white font-medium mb-3"
        >
          お問い合わせ
        </h2>
        <div
          class="max-w-[280px] md:max-w-full text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px] text-white font-medium text-start md:text-center leading-6"
        >
          賃貸物件に関するお問い合わせ、事業に関するご質問など、<br
            class="hidden md:block"
          />
          お気軽にご連絡ください。
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
        / お問い合わせ
      </div>
    </section>

    <section
      class="w-full bg-[#fff] pt-14 pb-20 md:pt-20 md:pb-24 lg:py-28 xl:py-32"
    >
      <div
        class="lg:max-w-[860px] xl:max-w-[1320px] mx-auto flex flex-col lg:flex-row justify-between items-start gap-6 md:gap-10 xl:gap-24 px-8 md:px-20 lg:px-0"
      >
        <!-- Contact Info -->
        <div
          class="w-full md:w-full lg:w-[250px] xl:w-[310px] mb-8 md:mb-0 flex-shrink-0 lg:mt-4"
        >
          <div class="bg-white rounded-[10px] shadow-none">
            <div
              class="text-[15px] md:text-[16px] lg:text-[18px] xl:text-[20px] font-medium mb-4 text-black"
            >
              連絡先情報
            </div>
            <table
              class="w-full text-[12px] md:text-[14px] lg:text-[14px] xl:text-[16px] text-left text-black font-medium"
            >
              <tbody>
                <tr class="border-b border-black px-2">
                  <td class="py-5 pl-2 xl:pl-4 w-[100px] align-top">会社名</td>
                  <td class="py-5">株式会社ウエルフォース</td>
                </tr>
                <tr class="border-b border-black px-2">
                  <td class="py-5 pl-2 xl:pl-4 align-top">住所</td>
                  <td class="py-5">
                    〒577-0000<br
                      class="hidden lg:block"
                    />大阪府東大阪市中小阪2丁目
                  </td>
                </tr>
                <tr class="border-b border-black px-2">
                  <td class="py-5 pl-2 xl:pl-4 align-top">メール</td>
                  <td class="py-5 break-all">info@wellforce.jp</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- Contact Form -->
        <div
          class="w-full md:w-full lg:w-[540px] xl:w-[860px] bg-[#F5FCFF] rounded-[20px] py-8 md:py-8 lg:py-10 xl:py-12 px-6 md:px-12 lg:px-12 xl:px-20 shadow-none"
        >
          <form class="w-full flex flex-col gap-3" autocomplete="off">
            <div
              class="text-[15px] md:text-[16px] lg:text-[18px] xl:text-[20px] font-medium mb-4 text-black"
            >
              お問い合わせフォーム
            </div>
            <div class="flex flex-col md:flex-row gap-3 mb-2">
              <div class="w-full">
                <label
                  for="firstName"
                  class="block text-[12px] md:text-[14px] lg:text-[14px] xl:text-[16px] text-black my-2 xl:my-3"
                  >姓</label
                >
                <input
                  type="text"
                  id="firstName"
                  name="firstName"
                  class="w-full border border-gray-200 rounded-[10px] px-3 py-2 text-[13px] md:text-[15px] bg-white focus:ring-2 focus:ring-[#B7DFF5] outline-none"
                  placeholder="山田"
                  autocomplete="off"
                />
              </div>
              <div class="w-full">
                <label
                  for="lastName"
                  class="block text-[12px] md:text-[14px] lg:text-[14px] xl:text-[16px] text-black my-2 xl:my-3"
                  >名</label
                >
                <input
                  type="text"
                  id="lastName"
                  name="lastName"
                  class="w-full border border-gray-200 rounded-[10px] px-3 py-2 text-[13px] md:text-[15px] bg-white focus:ring-2 focus:ring-[#B7DFF5] outline-none"
                  placeholder="太郎"
                  autocomplete="off"
                />
              </div>
            </div>
            <div class="flex flex-col md:flex-row gap-3 mb-2">
              <div class="w-full">
                <label
                  for="email"
                  class="block text-[12px] md:text-[14px] lg:text-[14px] xl:text-[16px] text-black my-2 xl:my-3"
                  >メールアドレス *</label
                >
                <input
                  type="email"
                  id="email"
                  name="email"
                  class="w-full border border-gray-200 rounded-[10px] px-3 py-2 text-[13px] md:text-[15px] bg-white focus:ring-2 focus:ring-[#B7DFF5] outline-none"
                  placeholder="example@email.com"
                  autocomplete="off"
                />
              </div>
              <div class="w-full">
                <label
                  for="phone"
                  class="block text-[12px] md:text-[14px] lg:text-[14px] xl:text-[16px] text-black my-2 xl:my-3"
                  >電話番号</label
                >
                <input
                  type="tel"
                  id="phone"
                  name="phone"
                  class="w-full border border-gray-200 rounded-[10px] px-3 py-2 text-[13px] md:text-[15px] bg-white focus:ring-2 focus:ring-[#B7DFF5] outline-none"
                  placeholder="090-1234-5678"
                  autocomplete="off"
                />
              </div>
            </div>
            <div class="flex flex-col md:flex-row gap-3 mb-2">
              <div class="w-full">
                <label
                  for="message"
                  class="block text-[12px] md:text-[14px] lg:text-[14px] xl:text-[16px] text-black my-2 xl:my-3"
                  >メッセージ *</label
                >
                <textarea
                  id="message"
                  name="message"
                  class="w-full border border-gray-200 rounded-[10px] px-3 py-2 text-[13px] md:text-[15px] bg-white focus:ring-2 focus:ring-[#B7DFF5] outline-none resize-none"
                  rows="12"
                  resize="none"
                  placeholder="お問い合わせ内容をご記入ください"
                ></textarea>
              </div>
            </div>
            <div class="w-full flex justify-center">
              <button
                type="submit"
                class="flex flex-row items-center justify-center gap-2 bg-[#28A8E0] text-white px-6 lg:px-12 py-2 md:py-3 rounded-[20px] hover:bg-[#2dbeff] transition-colors duration-200"
              >
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/send.webp"
                  alt="送信"
                  class="w-[18px]"
                />
                <span
                  class="text-[13px] md:text-[15px] lg:text-[16px] xl:text-[18px] font-medium"
                  >送信する</span
                >
              </button>
            </div>
          </form>
        </div>
      </div>
    </section>

<?php
get_footer();
?>