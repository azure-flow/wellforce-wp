<?php

get_header();
?>

<?php
global $wellforce_errors, $wellforce_old;
$wellforce_errors = $wellforce_errors ?? [];
$wellforce_old = $wellforce_old ?? [];
?>


<section
  id="hero-section"
  class="w-full h-[400px] md:h-[360px] lg:h-[500px] xl:h-[530px] bg-gradient-to-b from-[#A4D3E8] to-[#28A8E0] flex items-center justify-center">
  <div
    class="mx-auto flex flex-col items-center justify-center w-full mt-14 md:mt-16 lg:mt-28 xl:mt-32">
    <div
      class="text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px] text-white font-medium mb-2">
      Contact Us
    </div>
    <h2
      class="text-[30px] md:text-[36px] lg:text-[40px] xl:text-[50px] text-white font-medium mb-3">
      お問い合わせ
    </h2>
    <div
      class="max-w-[280px] md:max-w-full text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px] text-white font-medium text-start md:text-center leading-6">
      賃貸物件に関するお問い合わせ、事業に関するご質問など、<br
        class="hidden md:block" />
      お気軽にご連絡ください。
    </div>
  </div>
</section>
<section
  class="w-full max-w-[1200px] mx-auto justify-center items-center px-4 md:px-8 lg:px-12 xl:px-16">
  <div
    class="text-[10px] md:text-[11px] lg:text-[13px] xl:text-[14px] text-black py-4 md:py-5 lg:py-7 xl:py-8">
    <a
      href="<?php echo home_url(); ?>"
      class="hover:text-[#28A8E0] hover:underline underline-offset-2 cursor-pointer select-none transition-colors duration-200">株式会社ウエルフォース</a>
    / お問い合わせ
  </div>
</section>

<section
  class="w-full bg-[#fff] pt-14 pb-20 md:pt-20 md:pb-24 lg:py-28 xl:py-32">
  <div
    class="lg:max-w-[860px] xl:max-w-[1320px] mx-auto flex flex-col lg:flex-row justify-center items-start gap-6 md:gap-10 xl:gap-24 px-8 md:px-20 lg:px-0">
    <!-- Contact Form -->
    <div
      class="w-full md:w-full lg:w-[800px] xl:w-[860px] bg-[#F5FCFF] rounded-[20px] py-8 md:py-8 lg:py-10 xl:py-12 px-6 md:px-12 lg:px-12 xl:px-20 shadow-none">
      <?php if (isset($_GET['sent'])): ?>
        <div class="mb-4 p-3 text-green-700 bg-green-100 rounded">
          お問い合わせを送信しました。ありがとうございます。
        </div>
      <?php endif; ?>

      <form method="post" action="" class="w-full flex flex-col gap-3" autocomplete="off">
        <input type="hidden" name="contact_form" value="1">
        <input type="hidden" name="_wpnonce" value="<?php echo wp_create_nonce('wellforce_contact'); ?>">
        <div
          class="text-[15px] md:text-[16px] lg:text-[18px] xl:text-[20px] font-medium mb-4 text-black">
          お問い合わせフォーム
        </div>
        <div class="flex flex-col md:flex-row gap-3 mb-2">
          <div class="w-full">
            <label
              for="firstName"
              class="block text-[12px] md:text-[14px] lg:text-[14px] xl:text-[16px] text-black my-2 xl:my-3">姓<span class="pl-1 text-red-500">*</span></label>
            <input
              type="text"
              id="firstName"
              name="firstName"
              class="w-full border border-gray-200 rounded-[10px] px-3 py-2 text-[13px] md:text-[15px] bg-white focus:ring-2 focus:ring-[#B7DFF5] outline-none"
              placeholder="山田"
              value="<?php echo esc_attr($wellforce_old['first'] ?? ''); ?>"
              autocomplete="off" />
            <?php if (!empty($wellforce_errors['firstName'])): ?>
              <span class="pl-1 text-[#ff3d00] text-[12px] lg:text-[14px]">
                <?php echo esc_html($wellforce_errors['firstName']); ?>
              </span>
            <?php endif; ?>

          </div>
          <div class="w-full">
            <label
              for="lastName"
              class="block text-[12px] md:text-[14px] lg:text-[14px] xl:text-[16px] text-black my-2 xl:my-3">名<span class="pl-1 text-red-500">*</span></label>
            <input
              type="text"
              id="lastName"
              name="lastName"
              class="w-full border border-gray-200 rounded-[10px] px-3 py-2 text-[13px] md:text-[15px] bg-white focus:ring-2 focus:ring-[#B7DFF5] outline-none"
              placeholder="太郎"
              value="<?php echo esc_attr($wellforce_old['last'] ?? ''); ?>"
              autocomplete="off" />
            <?php if (!empty($wellforce_errors['lastName'])): ?>
              <span class="pl-1 text-[#ff3d00] text-[12px] lg:text-[14px]">
                <?php echo esc_html($wellforce_errors['lastName']); ?>
              </span>
            <?php endif; ?>

          </div>
        </div>
        <div class="flex flex-col md:flex-row gap-3 mb-2">
          <div class="w-full">
            <label
              for="email"
              class="block text-[12px] md:text-[14px] lg:text-[14px] xl:text-[16px] text-black my-2 xl:my-3">メールアドレス<span class="pl-1 text-red-500"> *</label>
            <input
              type="email"
              id="email"
              name="email"
              class="w-full border border-gray-200 rounded-[10px] px-3 py-2 text-[13px] md:text-[15px] bg-white focus:ring-2 focus:ring-[#B7DFF5] outline-none"
              placeholder="example@email.com"
              value="<?php echo esc_attr($wellforce_old['email'] ?? ''); ?>"
              autocomplete="off" />
            <?php if (!empty($wellforce_errors['email'])): ?>
              <span class="pl-1 text-[#ff3d00] text-[12px] lg:text-[14px]">
                <?php echo esc_html($wellforce_errors['email']); ?>
              </span>
            <?php endif; ?>

          </div>
          <div class="w-full">
            <label
              for="phone"
              class="block text-[12px] md:text-[14px] lg:text-[14px] xl:text-[16px] text-black my-2 xl:my-3">電話番号</label>
            <input
              type="tel"
              id="phone"
              name="phone"
              class="w-full border border-gray-200 rounded-[10px] px-3 py-2 text-[13px] md:text-[15px] bg-white focus:ring-2 focus:ring-[#B7DFF5] outline-none"
              placeholder="090-1234-5678"
              value="<?php echo esc_attr($wellforce_old['phone'] ?? ''); ?>"
              autocomplete="off" />
            <?php if (!empty($wellforce_errors['phone'])): ?>
              <span class="pl-1 text-[#ff3d00] text-[12px] lg:text-[14px]">
                <?php echo esc_html($wellforce_errors['phone']); ?>
              </span>
            <?php endif; ?>

          </div>
        </div>
        <div class="flex flex-col md:flex-row gap-3 mb-2">
          <div class="w-full">
            <label
              for="message"
              class="block text-[12px] md:text-[14px] lg:text-[14px] xl:text-[16px] text-black my-2 xl:my-3">メッセージ<span class="pl-1 text-red-500"> *</label>
            <textarea
              id="message"
              name="message"
              class="w-full border border-gray-200 rounded-[10px] px-3 py-2 text-[13px] md:text-[15px] bg-white focus:ring-2 focus:ring-[#B7DFF5] outline-none resize-none"
              rows="12"
              resize="none"
              placeholder="お問い合わせ内容をご記入ください">
              <?php echo esc_textarea($wellforce_old['msg'] ?? ''); ?>
            </textarea>
            <?php if (!empty($wellforce_errors['message'])): ?>
              <span class="pl-1 text-[#ff3d00] text-[12px] lg:text-[14px]">
                <?php echo esc_html($wellforce_errors['message']); ?>
              </span>
            <?php endif; ?>
          </div>
        </div>
        <div class="w-full flex justify-center">
          <button
            type="submit"
            class="flex flex-row items-center justify-center gap-2 bg-[#28A8E0] text-white px-6 lg:px-12 py-2 md:py-3 rounded-[20px] hover:bg-[#2dbeff] transition-colors duration-200">
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/send.webp"
              alt="送信"
              class="w-[18px]" />
            <span
              class="text-[13px] md:text-[15px] lg:text-[16px] xl:text-[18px] font-medium">送信する</span>
          </button>
        </div>
      </form>
    </div>
  </div>
</section>

<?php
get_footer();
?>