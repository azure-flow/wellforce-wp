<?php

get_header();

$args = array(
  'post_type'      => 'homepage-cms',
  'posts_per_page' => 1,
  'orderby'        => 'date',
  'order'          => 'ASC'
);

$query = new WP_Query($args);

$company_name      = '';
$company_address   = '';
$business_purpose  = '';
$company_capital   = '';
$company_social    = '';
$company_birth     = '';
$homepage_url      = '';
$homepage_history  = '';

// New: For extra values (from reference image)
$image_1   = '';
$title_1   = '';
$content_1 = '';
$image_2   = '';
$title_2   = '';
$content_2 = '';
$image_3   = '';
$title_3   = '';
$content_3 = '';

if ($query->have_posts()) {
  $query->the_post();
  $company_name      = get_field('company_name');
  $company_address   = get_field('company_address');
  $business_purpose  = get_field('business_purpose');
  $company_capital   = get_field('company_capital');
  $company_social    = get_field('company_social');
  $company_birth     = get_field('company_birth');
  $homepage_url      = get_field('homepage_url');
  $homepage_history  = get_field('homepage_history');

  // Get extra values as well
  $image_1   = get_field('image_1');
  $title_1   = get_field('title_1');
  $content_1 = get_field('content_1');
  $image_2   = get_field('image_2');
  $title_2   = get_field('title_2');
  $content_2 = get_field('content_2');
  $image_3   = get_field('image_3');
  $title_3   = get_field('title_3');
  $content_3 = get_field('content_3');
}
wp_reset_postdata();
?>

<section
  id="hero-section"
  class="w-full h-[400px] md:h-[360px] lg:h-[500px] xl:h-[530px] bg-gradient-to-b from-[#A4D3E8] to-[#28A8E0] flex items-center justify-center">
  <div
    class="mx-auto flex flex-col items-center justify-center w-full mt-14 md:mt-16 lg:mt-28 xl:mt-32">
    <div
      class="text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px] text-white font-medium mb-2">
      Company
    </div>
    <h2
      class="text-[30px] md:text-[36px] lg:text-[40px] xl:text-[50px] text-white font-medium mb-3">
      会社概要
    </h2>
    <div
      class="text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px] text-white font-medium text-center">
      株式会社ウエルフォースの会社情報をご案内します。
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
    / 会社概要
  </div>
</section>
<section
  class="w-full flex justify-center items-center mt-10 md:mt-10 lg:mt-12 xl:mt-[70px] mb-[70px] md:mb-[100px] lg:mb-[120px] xl:mb-[150px]">
  <div
    class="w-full max-w-[750px] bg-white shadow-none px-[38px] md:px-[48px] lg:px-[60px] xl:px-0"
    data-aos="fade-in"
    data-aos-delay="200">
    <div class="text-black">
      <div
        class="flex flex-col md:flex-row gap-1 md:gap-0 border-b border-y-[.5px] py-3 md:py-5 lg:py-6 xl:py-8 px-[27px] md:pl-[44px] lg:pl-[56px] xl:pl-[72px] border-black text-[14px] md:text-[15px] lg:text-[16px] xl:text-[18px]">
        <div class="md:w-[126px] lg:w-[148px] xl:w-[170px]">社名</div>
        <div class=""><?php echo $company_name; ?></div>
      </div>
      <div
        class="flex flex-col md:flex-row gap-1 md:gap-0 border-b border-b-[.5px] py-3 md:py-5 lg:py-6 xl:py-8 px-[27px] md:pl-[44px] lg:pl-[56px] xl:pl-[72px] border-black text-[14px] md:text-[15px] lg:text-[16px] xl:text-[18px]">
        <div class="md:w-[126px] lg:w-[148px] xl:w-[170px]">住所</div>
        <div class=""><?php echo $company_address; ?></div>
      </div>
      <div
        class="flex flex-col md:flex-row gap-1 md:gap-0 border-b border-b-[.5px] py-3 md:py-5 lg:py-6 xl:py-8 px-[27px] md:pl-[44px] lg:pl-[56px] xl:pl-[72px] border-black text-[14px] md:text-[15px] lg:text-[16px] xl:text-[18px]">
        <div class="md:w-[126px] lg:w-[148px] xl:w-[170px]">事業目的</div>
        <div class=""><?php echo $business_purpose; ?></div>
      </div>
      <div
        class="flex flex-col md:flex-row gap-1 md:gap-0 border-b border-b-[.5px] py-3 md:py-5 lg:py-6 xl:py-8 px-[27px] md:pl-[44px] lg:pl-[56px] xl:pl-[72px] border-black text-[14px] md:text-[15px] lg:text-[16px] xl:text-[18px]">
        <div class="md:w-[126px] lg:w-[148px] xl:w-[170px]">資本金</div>
        <div class=""><?php echo $company_capital; ?></div>
      </div>
      <div
        class="flex flex-col md:flex-row gap-1 md:gap-0 border-b border-b-[.5px] py-3 md:py-5 lg:py-6 xl:py-8 px-[27px] md:pl-[44px] lg:pl-[56px] xl:pl-[72px] border-black text-[14px] md:text-[15px] lg:text-[16px] xl:text-[18px]">
        <div class="md:w-[126px] lg:w-[148px] xl:w-[170px]">設立日</div>
        <div class=""><?php echo $company_birth; ?></div>
      </div>
      <div
        class="flex flex-col md:flex-row gap-1 md:gap-0 border-b border-b-[.5px] py-3 md:py-5 lg:py-6 xl:py-8 px-[27px] md:pl-[44px] lg:pl-[56px] xl:pl-[72px] border-black text-[14px] md:text-[15px] lg:text-[16px] xl:text-[18px]">
        <div class="md:w-[126px] lg:w-[148px] xl:w-[170px]">
          ホームページ
        </div>
        <div class="">
          <a href="<?php echo $homepage_url; ?>" target="_blank"><?php echo $homepage_url; ?></a>
        </div>
      </div>
      <div
        class="flex flex-col md:flex-row gap-1 md:gap-0 border-b border-b-[.5px] py-3 md:py-5 lg:py-6 xl:py-8 px-[27px] md:pl-[44px] lg:pl-[56px] xl:pl-[72px] border-black text-[14px] md:text-[15px] lg:text-[16px] xl:text-[18px]">
        <div class="md:w-[126px] lg:w-[148px] xl:w-[170px]">
          沿革
        </div>
        <div class="">
          <span><?php echo $homepage_history; ?></span>
        </div>
      </div>
    </div>
  </div>
</section>
<section
  class="w-full flex flex-col justify-center items-center bg-[#f7fdff] py-20 md:py-24 lg:py-28 lg:py-32">
  <div
    class="w-full max-w-[1200px] mx-auto justify-center items-center px-4 md:px-8 lg:px-12 xl:px-16 mb-[72px] md:mb-20 lg:mb-24 lg:mb-28">
    <h2
      class="text-[20px] md:text-[27px] lg:text-[32px] xl:text-[40px] font-bold md:font-medium text-center w-full leading-tight">
      事業内容
    </h2>
  </div>
  <div
    class="w-full max-w-[1200px] mx-auto px-9 md:px-8 lg:px-12 xl:px-4 justify-center items-center flex flex-col gap-6 md:gap-6 lg:gap-8 xl:gap-10">
    <div
      class="w-full max-w-[1160px] flex flex-col-reverse md:flex-row items-center md:items-center gap-12 md:gap-6 lg:gap-8 xl:gap-10"
      data-aos="fade-in"
      data-aos-delay="200">
      <!-- Text block -->
      <div
        class="w-full flex flex-col items-start justify-center gap-4 lg:gap-[20px] xl:gap-[30px] mb-6 md:mb-0">
        <h3
          class="text-[16px] md:text-[18px] lg:text-[20px] xl:text-[24px] font-semibold text-black mb-5 md:mb-2 lg:mb-3 xl:mb-4">
          <?php echo $title_1; ?>
        </h3>
        <p
          class="text-[14px] md:text-[12px] lg:text-[15px] xl:text-[16px] text-black leading-[1.8] md:leading-relaxed font-regular">
          <?php
          $lines = explode("\n", $content_1);
          if (!empty($lines)) {
            echo '<span class="font-bold">' . esc_html(array_shift($lines)) . '</span>';
            if (!empty($lines)) {
              echo '<br>' . nl2br(esc_html(implode("\n", $lines)));
            }
          }
          ?>
        </p>
      </div>
      <!-- Image block -->
      <div class="w-full flex justify-center md:justify-end">
        <div
          class="group bg-white rounded-[20px] shadow-sm overflow-hidden w-[300px] md:w-[350px] lg:w-[500px] xl:w-[620px] w-full shadow-xl relative">
          <div class="relative w-full">
            <img
              id="image-01"
              src="<?php echo $image_1; ?>"
              alt="<?php echo $title_1; ?>"
              class="w-full h-auto transition-opacity duration-500" />
            <!-- Mobile play button on image -->
            <button
              id="mobile-play-btn-01"
              class="md:hidden absolute inset-0 flex items-center justify-center bg-black/30 rounded-[20px] transition-opacity duration-300"
              aria-label="Play video">
              <svg
                class="w-16 h-16 text-white"
                fill="currentColor"
                viewBox="0 0 24 24">
                <path d="M8 5v14l11-7z" />
              </svg>
            </button>
          </div>
          <div
            id="video-container-01"
            class="absolute inset-0 opacity-0 pointer-events-none transition-opacity duration-500">
            <video
              id="fast-video-01"
              src="<?php echo get_template_directory_uri(); ?>/assets/videos/生成AIコミュニティ.mp4"
              alt="賃貸住宅の外観と入居者イメージ"
              class="w-full aspect-[1.17]"
              muted
              loop></video>
            <!-- Play button on video center -->
            <button
              id="video-play-btn-01"
              class="absolute inset-0 flex items-center justify-center bg-black/30 transition-opacity duration-300"
              aria-label="Play video">
              <svg
                class="w-16 h-16 text-white"
                fill="currentColor"
                viewBox="0 0 24 24">
                <path d="M8 5v14l11-7z" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div
      class="w-full max-w-[1160px] mx-auto justify-center items-center pb-[40px] lg:pb-[45px] xl:pb-[50px]">
      <p
        class="text-[14px] lg:text-[15px] xl:text-[16px] font-medium text-start md:text-center leading-6">
        今後はホームページを通じて、物件情報だけでなく、地域の魅力や暮らしの価値も発信し、「選ばれ続ける賃貸住宅」を目指します。
      </p>
    </div>
    <div
      class="w-full max-w-[1160px] flex flex-col md:flex-row items-center md:items-center gap-12 md:gap-6 lg:gap-8 xl:gap-10"
      data-aos="fade-in"
      data-aos-delay="200">
      <!-- Image block -->
      <div class="w-full flex justify-center md:justify-end">
        <div
          class="group bg-white rounded-[20px] shadow-sm overflow-hidden w-[300px] md:w-[350px] lg:w-[500px] xl:w-[620px] w-full shadow-xl relative">
          <div class="relative w-full">
            <img
              id="image-02"
              src="<?php echo $image_2; ?>"
              alt="<?php echo $title_2; ?>"
              class="w-full h-auto transition-opacity duration-500" />
            <!-- Mobile play button on image -->
            <button
              id="mobile-play-btn-02"
              class="md:hidden absolute inset-0 flex items-center justify-center bg-black/30 rounded-[20px] transition-opacity duration-300"
              aria-label="Play video">
              <svg
                class="w-16 h-16 text-white"
                fill="currentColor"
                viewBox="0 0 24 24">
                <path d="M8 5v14l11-7z" />
              </svg>
            </button>
          </div>
          <div
            id="video-container-02"
            class="absolute inset-0 opacity-0 pointer-events-none transition-opacity duration-500">
            <video
              id="fast-video-02"
              src="<?php echo get_template_directory_uri(); ?>/assets/videos/猫と暮らす未来型賃貸住宅.mp4"
              alt="賃貸住宅の外観と入居者イメージ"
              class="w-full aspect-[1.17]"
              muted
              loop></video>
            <!-- Play button on video center -->
            <button
              id="video-play-btn-02"
              class="absolute inset-0 flex items-center justify-center bg-black/30 transition-opacity duration-300"
              aria-label="Play video">
              <svg
                class="w-16 h-16 text-white"
                fill="currentColor"
                viewBox="0 0 24 24">
                <path d="M8 5v14l11-7z" />
              </svg>
            </button>
          </div>
        </div>
      </div>
      <!-- Text block -->
      <div
        class="w-full flex flex-col items-start justify-center gap-4 lg:gap-[20px] xl:gap-[30px] mb-6 md:mb-0">
        <h3
          class="text-[16px] md:text-[18px] lg:text-[20px] xl:text-[24px] font-semibold text-black mb-5 md:mb-2 lg:mb-3 xl:mb-4">
          <?php echo $title_2; ?>
        </h3>
        <p
          class="text-[14px] md:text-[12px] lg:text-[15px] xl:text-[16px] text-black leading-[1.8] md:leading-relaxed font-regular">
          <?php
          $lines = explode("\n", $content_2);
          if (!empty($lines)) {
            echo '<span class="font-bold">' . esc_html(array_shift($lines)) . '</span>';
            if (!empty($lines)) {
              echo '<br>' . nl2br(esc_html(implode("\n", $lines)));
            }
          }
          ?>
        </p>
      </div>
    </div>
    <div
      class="w-full max-w-[1160px] mx-auto justify-center items-center pb-[40px] lg:pb-[45px] xl:pb-[50px]">
      <p
        class="text-[14px] lg:text-[15px] xl:text-[16px] font-medium text-start md:text-center leading-6">
        こうした取り組みを通じて、人と人とのつながりを強め、地域全体のウェルビーイング向上を目指します。
      </p>
    </div>
    <div
      class="w-full max-w-[1160px] flex flex-col-reverse md:flex-row items-center md:items-center gap-12 md:gap-6 lg:gap-8 xl:gap-10"
      data-aos="fade-in"
      data-aos-delay="200">
      <!-- Text block -->
      <div
        class="w-full flex flex-col items-start justify-center gap-4 lg:gap-[20px] xl:gap-[30px] mb-6 md:mb-0">
        <h3
          class="text-[16px] md:text-[18px] lg:text-[20px] xl:text-[24px] font-semibold text-black mb-5 md:mb-2 lg:mb-3 xl:mb-4">
          <?php echo $title_3; ?>
        </h3>
        <p
          class="text-[14px] md:text-[12px] lg:text-[15px] xl:text-[16px] text-black leading-[1.8] md:leading-relaxed font-regular">
          <?php
          $lines = explode("\n", $content_3);
          if (!empty($lines)) {
            echo '<span class="font-bold">' . esc_html(array_shift($lines)) . '</span>';
            if (!empty($lines)) {
              echo '<br>' . nl2br(esc_html(implode("\n", $lines)));
            }
          }
          ?>
        </p>
      </div>
      <!-- Image block -->
      <div class="w-full flex justify-center md:justify-end">
        <div
          class="bg-white rounded-[20px] shadow-sm overflow-hidden w-[300px] md:w-[350px] lg:w-[500px] xl:w-[620px] w-full">
          <img
            src="<?php echo $image_3; ?>"
            alt="<?php echo $title_3; ?>"
            class="w-full h-auto" />
        </div>
      </div>
    </div>
    <div class="w-full max-w-[1160px] mx-auto justify-center items-center">
      <p
        class="text-[14px] lg:text-[15px] xl:text-[16px] font-medium text-start md:text-center leading-6">
        住まいを起点に、人・動物・地域が調和する未来型賃貸住宅を実現し、地域に新しいライフスタイルと価値を提供していきます。
      </p>
    </div>
  </div>
</section>

<section
  class="w-full flex flex-col justify-center items-center bg-white py-20 md:py-24 lg:py-28 lg:py-32">
  <div
    class="w-full max-w-[1200px] mx-auto justify-center items-center px-4 md:px-8 lg:px-12 xl:px-16 mb-[72px] md:mb-20 lg:mb-24 lg:mb-28">
    <h2
      class="text-[20px] md:text-[27px] lg:text-[32px] xl:text-[40px] font-bold md:font-medium text-center w-full leading-tight">
      取引会社
    </h2>
  </div>
  <div
    class="md:max-w-[662px] lg:max-w-[842px] xl:max-w-[1024px] w-full flex flex-col items-center justify-center mx-auto">
    <div class="swiper swiper-company-brands01 w-full">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <a href="https://www.sekisuihouse.co.jp/">
            <div
              class="w-[208px] md:w-[200px] lg:w-[260px] xl:w-full max-w-[300px] aspect-[2] bg-white rounded-[20px] rounded-[15px] border-[1px] border-gray-300 flex items-center justify-center overflow-hidden hover:border-gray-600 hover:shadow-gray-600 duration-200">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/brand01.webp"
                alt="marquee01"
                class="w-full object-cover" />
            </div>
          </a>
        </div>
        <div class="swiper-slide">
          <a href="https://www.sekisuihouse-f-kansai.co.jp/">
            <div
              class="w-[208px] md:w-[200px] lg:w-[260px] xl:w-full max-w-[300px] aspect-[2] bg-white rounded-[20px] rounded-[15px] border-[1px] border-gray-300 flex items-center justify-center overflow-hidden hover:border-gray-600 hover:shadow-gray-600 duration-200">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/brand02.webp"
                alt="marquee02"
                class="w-full object-cover" />
            </div>
          </a>
        </div>
        <div class="swiper-slide">
          <a href="https://www.sekisuihouse-k.jp">
            <div
              class="w-[208px] md:w-[200px] lg:w-[260px] xl:w-full max-w-[300px] aspect-[2] bg-white rounded-[20px] rounded-[15px] border-[1px] border-gray-300 flex items-center justify-center overflow-hidden hover:border-gray-600 hover:shadow-gray-600 duration-200">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/brand03.webp"
                alt="marquee03"
                class="w-full object-cover" />
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="swiper swiper-company-brands02 w-full mt-[32px]">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <a href="https://homes.panasonic.com/">
            <div
              class="w-[208px] md:w-[200px] lg:w-[260px] xl:w-full max-w-[300px] aspect-[2] bg-white rounded-[20px] rounded-[15px] border-[1px] border-gray-300 flex items-center justify-center overflow-hidden hover:border-gray-600 hover:shadow-gray-600 duration-200">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/brand04.webp"
                alt="marquee04"
                class="w-full object-cover" />
            </div>
          </a>
        </div>
        <div class="swiper-slide">
          <a href="https://homes.panasonic.com/phr/">
            <div
              class="w-[208px] md:w-[200px] lg:w-[260px] xl:w-full max-w-[300px] aspect-[2] bg-white rounded-[20px] rounded-[15px] border-[1px] border-gray-300 flex items-center justify-center overflow-hidden hover:border-gray-600 hover:shadow-gray-600 duration-200">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/brand05.webp"
                alt="marquee05"
                class="w-full object-cover" />
            </div>
          </a>
        </div>
        <div class="swiper-slide">
          <a href="https://homes.panasonic.com/phre/">
            <div
              class="w-[208px] md:w-[200px] lg:w-[260px] xl:w-full max-w-[300px] aspect-[2] bg-white rounded-[20px] rounded-[15px] border-[1px] border-gray-300 flex items-center justify-center overflow-hidden hover:border-gray-600 hover:shadow-gray-600 duration-200">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/brand06.webp"
                alt="marquee06"
                class="w-full object-cover" />
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
?>