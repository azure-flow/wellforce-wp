<?php
get_header();

// Number of posts to show per group
$posts_per_page = 5;

// Check AJAX load-more parameter
$paged = isset($_POST['paged']) ? intval($_POST['paged']) : 1;
// If not AJAX, get from GET param or default to 1
if (!$paged && isset($_GET['paged'])) {
  $paged = intval($_GET['paged']);
}
if (!$paged || $paged < 1) {
  $paged = 1;
}
$offset = ($paged - 1) * $posts_per_page;

// Initial query for first load
$main_query = new WP_Query(array(
  'post_type' => 'news',
  'posts_per_page' => $posts_per_page,
  'offset' => $offset,
  'orderby' => 'date',
  'order' => 'DESC'
));

$total_news = (new WP_Query(array(
  'post_type' => 'news',
  'posts_per_page' => -1,
)))->found_posts;
?>

<section
  id="hero-section"
  class="w-full h-[400px] md:h-[360px] lg:h-[500px] xl:h-[530px] bg-gradient-to-b from-[#A4D3E8] to-[#28A8E0] flex items-center justify-center">
  <div
    class="mx-auto flex flex-col items-center justify-center w-full mt-14 md:mt-16 lg:mt-28 xl:mt-32">
    <div
      class="text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px] text-white font-medium mb-2">
      News
    </div>
    <h2
      class="text-[30px] md:text-[36px] lg:text-[40px] xl:text-[50px] text-white font-medium mb-3">
      ニュース
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
  class="w-full flex justify-center items-center pt-14 pb-20 md:pt-20 md:pb-24 lg:py-28 xl:py-32 bg-[#fff] px-8">
  <div
    class="w-full max-w-[600px] md:max-w-[680px] lg:max-w-[800px] xl:max-w-[1000px] 2xl:max-w-[1400px] mx-auto flex flex-col justify-center items-center gap-8 md:gap-12 lg:gap-14 xl:gap-16">
    <div
      class="w-full flex flex-col items-center justify-center gap-3 md:gap-3 lg:gap-4 xl:gap-5" id="news-list">
      <?php if ($main_query->have_posts()) : ?>
        <?php while ($main_query->have_posts()) : $main_query->the_post(); ?>
          <?php $post_title = get_the_title(); ?>
          <?php $post_date = get_the_date('Y.m.d'); ?>
          <?php $post_content = get_field('description'); ?>
          <a href="<?php echo get_the_permalink(); ?>" class="news-item w-full max-w-[1000px] rounded-[20px] bg-[#EAF8FF] px-5 lg:px-6 xl:px-8 py-6 flex flex-col gap-1 md:gap-1 lg:gap-1 xl:gap-2 shadow-sm hover:bg-[#e0f6ff] hover:shadow-md duration-150 cursor-pointer" data-aos="fade-in" data-aos-delay="100">
            <div class="w-full flex justify-start mb-1">
              <span class="text-black text-[8px] md:text-[9px] lg:text-[10px] xl:text-[12px] py-[3px] px-[9px] rounded-[10px] border border-[#9F9F9F]"><?php echo $post_date; ?></span>
            </div>
            <div
              class="flex items-center gap-3 text-black text-[14px] md:text-[15px] lg:text-[16px] xl:text-[18px] font-medium pt-1 md:pt-2">
              <?php echo esc_html($post_title); ?>
            </div>
            <p
              class="text-black text-[12px] md:text-[13px] lg:text-[14px] xl:text-[16px] line-clamp-1">
              <?php echo esc_html($post_content); ?>
            </p>
          </a>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>
      <?php if ($total_news > $posts_per_page): ?>
        <div
          id="load-more-news-btn"
          class="w-full max-w-[1000px] flex items-center justify-center rounded-[20px] bg-[#28A8E0] hover:bg-[#5ec6f8] py-2 md:py-3 lg:py-4 xl:py-4 mt-6 md:mt-8 lg:mt-10 xl:mt-12 text-white font-bold text-[14px] md:text-[16px] transition-colors duration-150 cursor-pointer"
          data-aos="fade-in"
          data-aos-delay="100"
          data-current-page="1">
          もっと見る
          <svg
            class="inline-block align-middle ml-2 w-5 md:w-6 xl:w-7 aspect-[1]"
            viewBox="0 0 24 24"
            fill="none">
            <g>
              <rect width="16" height="16" fill="none"></rect>
              <path
                d="M12 4v14"
                stroke="#fff"
                stroke-width="2"
                stroke-linecap="round" />
              <path
                d="M6 12l6 6 6-6"
                stroke="#fff"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round" />
            </g>
          </svg>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    var currentPage = 1;
    var postsPerPage = <?php echo $posts_per_page; ?>;
    var totalNews = <?php echo $total_news; ?>;
    var loading = false;

    var btn = document.getElementById('load-more-news-btn');
    var newsList = document.getElementById('news-list');

    if (btn && newsList) {
      btn.addEventListener('click', function() {
        if (loading) return;
        loading = true;
        currentPage++;

        var xhr = new XMLHttpRequest();
        xhr.open('POST', '<?php echo admin_url('admin-ajax.php'); ?>', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
        xhr.onload = function() {
          if (xhr.status === 200 && xhr.responseText) {
            // Insert before button
            var temp = document.createElement('div');
            temp.innerHTML = xhr.responseText;
            // Only append the news items
            var items = temp.querySelectorAll('.news-item');
            items.forEach(function(el) {
              btn.parentNode.insertBefore(el, btn);
            });

            // Remove button if no more news
            var shownNews = document.querySelectorAll('.news-item').length;
            if (shownNews >= totalNews) {
              btn.parentNode.removeChild(btn);
            }
          }
          loading = false;
        };
        xhr.send('action=load_more_news&paged=' + encodeURIComponent(currentPage));
      });
    }
  });
</script>

<?php
get_footer();
?>