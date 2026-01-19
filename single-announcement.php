<?php
get_header();
$post_title = get_the_title();
$post_image = get_field('announce_img');
$post_date = get_the_date('Y.m.d');
$post_content = get_field('announce_desc');
$post_categories = get_the_terms(get_the_ID(), 'announcement_category');
if (!$post_categories) {
  $post_categories = [];
}
?>

<section
  id="hero-section"
  class="w-full h-[400px] md:h-[360px] lg:h-[500px] xl:h-[530px] bg-gradient-to-b from-[#A4D3E8] to-[#28A8E0] flex items-center justify-center">
  <div
    class="mx-auto flex flex-col items-center justify-center w-full mt-14 md:mt-16 lg:mt-28 xl:mt-32">
    <div
      class="text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px] text-white font-medium mb-2">
      Blog
    </div>
    <h2
      class="text-[30px] md:text-[36px] lg:text-[40px] xl:text-[50px] text-white font-medium mb-3">
      お知らせ
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
    / <a href="<?php echo home_url('/announcement'); ?>" class="hover:text-[#28A8E0] hover:underline underline-offset-2 cursor-pointer select-none transition-colors duration-200">お知らせ</a> / <?php echo $post_title; ?>
  </div>
</section>

<section
  class="w-full flex justify-center items-center pt-14 pb-20 md:pt-20 md:pb-24 lg:py-28 xl:py-32 bg-[#fff] md:px-20 px-8">
  <div
    class="w-full max-w-[600px] md:max-w-[680px] lg:max-w-[800px] xl:max-w-[1220px] mx-auto flex flex-col justify-center items-center gap-4 md:gap-6 lg:gap-8">
    <div class="w-full px-0 md:px-4 lg:px-16">
      <div class="flex gap-3">
        <span
          class="bg-[#E0F6FF] text-black rounded-full px-3 py-[2px] xl:py-1 xl:px-5 text-[10px] md:text-[12px] lg:text-[10px] xl:text-[12px] font-regular"><?php echo $post_date; ?></span>
        <?php if (!empty($post_categories)) : ?>
          <span
            class="bg-[#E0F6FF] text-black rounded-full px-3 py-[2px] xl:py-1 xl:px-5 text-[10px] md:text-[12px] lg:text-[10px] xl:text-[12px] font-regular"><?php echo $post_categories[0]->name; ?></span>
        <?php endif; ?>
      </div>
    </div>
    <div
      class="w-full flex flex-col lg:flex-row gap-8 md:gap-16 lg:gap-12 xl:gap-[90px]">
      <div
        class="w-full lg:w-[62%] flex flex-col gap-8 md:gap-12 lg:gap-20">
        <img
          src="<?php echo esc_url($post_image); ?>"
          alt="<?php echo $post_title; ?>"
          class="w-full aspect-[1.5] object-cover rounded-[20px]" />
        <p
          class="text-[14px] md:text-[16px] lg:text-[14px] xl:text-[16px] leading-[2.2]">
          <?php echo $post_content; ?>
        </p>
      </div>

      <div class="w-full lg:w-[38%] flex flex-col gap-3 xl:gap-4">
        <?php
        // Custom: gather previous 2 and next 2 announcements (excluding current)
        global $post;
        $current_post_id = get_the_ID();

        // Fetch all announcements in date order
        $all_args = array(
          'post_type'      => 'announcement',
          'posts_per_page' => -1,
          'orderby'        => 'date',
          'order'          => 'DESC',
          'fields'         => 'ids',
        );
        $all_announcements = get_posts($all_args);

        // Find current post's index in this sorted list
        $current_index = array_search($current_post_id, $all_announcements);

        // Get prev 2 and next 2 IDs
        $show_ids = [];

        // Previous two (before current, in DESC order, so lower index = "later" date)
        for ($i = $current_index - 2; $i < $current_index; $i++) {
          if ($i >= 0 && isset($all_announcements[$i])) {
            $show_ids[] = $all_announcements[$i];
          }
        }

        // Next two (after current, higher index = "older" date in DESC)
        for ($i = $current_index + 1; $i <= $current_index + 2; $i++) {
          if (isset($all_announcements[$i])) {
            $show_ids[] = $all_announcements[$i];
          }
        }

        // Remove current post (should not be in $show_ids, but just in case)
        $show_ids = array_diff($show_ids, [$current_post_id]);
        // Limit to max 4 as expected
        $show_ids = array_slice($show_ids, 0, 4);

        if (!empty($show_ids)) :
          $side_query = new WP_Query(array(
            'post_type' => 'announcement',
            'post__in' => $show_ids,
            'orderby'  => 'post__in'
          ));
          while ($side_query->have_posts()) : $side_query->the_post();
            $related_title = get_the_title();
            $related_date = get_the_date('Y.m.d');
            $related_categories = get_the_terms(get_the_ID(), 'announcement_category');
            $related_image = get_field('announce_img');
            $related_content = get_field('announce_desc');
        ?>
            <a href="<?php echo get_the_permalink(); ?>" class="w-full flex gap-2 gap-8 lg:gap-4 xl:gap-6 bg-[#F5FCFF] rounded-[20px] p-3 md:py-4 md:px-5 lg:px-4 xl:py-5 xl:px-7 hover:shadow-md duration-200">
              <div class="w-[35%] md:w-[20%] lg:w-[35%]">
                <img
                  src="<?php echo esc_url($related_image ? $related_image : get_template_directory_uri() . '/assets/images/blog01.webp'); ?>"
                  alt="<?php echo esc_attr($related_title); ?>"
                  class="w-full aspect-[1] md:aspect-[7/6] object-cover rounded-[20px]" />
              </div>
              <div
                class="w-[65%] md:w-[80%] lg:w-[65%] flex flex-col gap-2 md:gap-4 lg:gap-2 xl:gap-3">
                <div class="flex gap-3">
                  <span
                    class="bg-[#E0F6FF] text-black rounded-full px-3 py-[2px] xl:py-1 xl:px-5 text-[10px] md:text-[12px] lg:text-[10px] xl:text-[12px] font-regular"><?php echo $related_date; ?></span>
                  <?php if (!empty($related_categories) && !is_wp_error($related_categories)) : ?>
                    <span
                      class="bg-[#E0F6FF] text-black rounded-full px-3 py-[2px] xl:py-1 xl:px-5 text-[10px] md:text-[12px] lg:text-[10px] xl:text-[12px] font-regular"><?php echo $related_categories[0]->name; ?></span>
                  <?php endif; ?>
                </div>
                <p
                  class="text-[14px] md:text-[14px] lg:text-[12px] xl:text-[16px] leading-relaxed xl:leading-[2] line-clamp-2">
                  <?php echo esc_html($related_content); ?>
                </p>
              </div>
            </a>
        <?php
          endwhile;
          wp_reset_postdata();
        endif;
        ?>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>