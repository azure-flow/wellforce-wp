<?php
get_header();

/**
 * Load map items from the Area Map Manager plugin (ACF-powered).
 * Only load items with event_on = 1
 */
$amm_map_items = [];
$amm_items_by_month = [];

if (function_exists('get_field')) {
  $amm_posts = get_posts([
    'post_type'   => 'map_item',
    'numberposts' => -1,
    'post_status' => 'publish',
    'orderby'     => 'date',
    'order'       => 'DESC',
  ]);

  foreach ($amm_posts as $p) {
    $event_on = (int) get_field('event_on', $p->ID);

    // Only include items with event_on = 1
    if ($event_on !== 1) continue;

    $image_url = get_field('image', $p->ID);
    if (!is_string($image_url)) {
      $image_url = '';
    }

    $start_date = get_field('event_start', $p->ID);
    $end_date = get_field('event_end', $p->ID);

    $item = [
      'id'        => $p->ID,
      'title'     => $p->post_title,
      'x'         => (float) get_field('map_x', $p->ID),
      'y'         => (float) get_field('map_y', $p->ID),
      'desc'      => (string) get_field('description', $p->ID),
      'imageUrl'  => $image_url ? esc_url($image_url) : '',
      'event'     => $event_on,
      'start'     => $start_date ? (string) $start_date : '',
      'end'       => $end_date ? (string) $end_date : '',
      'highlight' => (string) get_field('highlight_area', $p->ID),
    ];

    $amm_map_items[] = $item;

    // Group by month - include item in all months it spans
    if ($start_date) {
      $start_timestamp = strtotime($start_date);
      $end_timestamp = $end_date ? strtotime($end_date) : $start_timestamp;

      if ($start_timestamp && $end_timestamp) {
        $start_month = (int) date('n', $start_timestamp);
        $end_month = (int) date('n', $end_timestamp);
        $start_year = (int) date('Y', $start_timestamp);
        $end_year = (int) date('Y', $end_timestamp);

        // Handle year transitions (e.g., Dec to Jan)
        $current_month = $start_month;
        $current_year = $start_year;

        while (true) {
          if (!isset($amm_items_by_month[$current_month])) {
            $amm_items_by_month[$current_month] = [];
          }

          // Check if item already exists in this month (avoid duplicates)
          $exists = false;
          foreach ($amm_items_by_month[$current_month] as $existing) {
            if ($existing['id'] === $item['id']) {
              $exists = true;
              break;
            }
          }
          if (!$exists) {
            $amm_items_by_month[$current_month][] = $item;
          }

          // Break if we've reached the end month
          if ($current_year === $end_year && $current_month === $end_month) {
            break;
          }

          // Move to next month
          $current_month++;
          if ($current_month > 12) {
            $current_month = 1;
            $current_year++;
          }

          // Safety check to prevent infinite loops
          if ($current_year > $end_year + 1) break;
        }
      }
    }
  }

  // Sort items within each month by start date
  foreach ($amm_items_by_month as $month => &$items) {
    usort($items, function ($a, $b) {
      return strcmp($a['start'], $b['start']);
    });
  }
}

/**
 * Shorten a title for calendar chips.
 */
if (!function_exists('getShortTitle')) {
  function getShortTitle($title, $num = 5)
  {
    if (!$title) return '';

    if (function_exists('mb_strlen') && function_exists('mb_substr')) {
      return mb_strlen($title, 'UTF-8') > $num
        ? mb_substr($title, 0, $num, 'UTF-8') . '...'
        : $title;
    }

    return strlen($title) > $num
      ? substr($title, 0, $num) . '...'
      : $title;
  }
}
?>
<script>
  const getShortTitle = (title, num = 5) => {
    if (!title) return '';
    return title.length > num ? title.substring(0, num) + '...' : title;
  };
</script>
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
    / カレンダ
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
              class="w-full min-h-[110px] flex flex-col items-center justify-start md:border-r border-black">
              <div
                class="w-full flex items-center justify-center border-b border-black py-1 md:py-0 text-[24px] md:text-[30px] lg:text-[36px] xl:text-[48px] font-medium text-black cursor-pointer hover:bg-[#eaf8ff] transition-colors duration-200 month-header"
                data-month="3">
                3
              </div>
              <div
                class="w-full flex flex-col gap-1 xl:gap-4 p-2 lg:px-4 xl:px-16 xl:py-8 calendar-month-container min-h-[80px] lg:min-h-[100px]" data-month="3">
                <?php
                $month_items = isset($amm_items_by_month[3]) ? array_slice($amm_items_by_month[3], 0, 5) : [];
                foreach ($month_items as $index => $item) {
                  echo '<div class="calendar-item bg-[#e2f5ff] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none" data-item-id="' . esc_attr($item['id']) . '">';
                  echo esc_html(getShortTitle($item['title'], 12));
                  echo '</div>';
                }
                ?>
              </div>
            </div>
            <!-- 4月 -->
            <div
              class="w-full min-h-[110px] flex flex-col items-center justify-start border-t md:border-r md:border-t-0 border-black">
              <div
                class="w-full flex items-center justify-center border-b border-black py-1 md:py-0 text-[24px] md:text-[30px] lg:text-[36px] xl:text-[48px] font-medium text-black cursor-pointer hover:bg-[#eaf8ff] transition-colors duration-200 month-header"
                data-month="4">
                4
              </div>
              <div
                class="w-full flex flex-col gap-1 xl:gap-4 p-2 lg:px-4 xl:px-16 xl:py-8 calendar-month-container min-h-[80px] lg:min-h-[100px]"
                data-month="4">
                <?php
                $month_items = isset($amm_items_by_month[4]) ? array_slice($amm_items_by_month[4], 0, 5) : [];
                foreach ($month_items as $index => $item) {
                  echo '<div class="calendar-item bg-[#e2f5ff] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none" data-item-id="' . esc_attr($item['id']) . '">';
                  echo esc_html(getShortTitle($item['title'], 12));
                  echo '</div>';
                }
                ?>
              </div>
            </div>
            <!-- 5月 -->
            <div
              class="w-full min-h-[110px] flex flex-col items-center justify-start border-t md:border-t-0 border-black">
              <div
                class="w-full flex items-center justify-center border-b border-black py-1 md:py-0 text-[24px] md:text-[30px] lg:text-[36px] xl:text-[48px] font-medium text-black cursor-pointer hover:bg-[#eaf8ff] transition-colors duration-200 month-header"
                data-month="5">
                5
              </div>
              <div
                class="w-full flex flex-col gap-1 xl:gap-4 p-2 lg:px-4 xl:px-16 xl:py-8 calendar-month-container min-h-[80px] lg:min-h-[100px]"
                data-month="5">
                <?php
                $month_items = isset($amm_items_by_month[5]) ? array_slice($amm_items_by_month[5], 0, 5) : [];
                foreach ($month_items as $index => $item) {
                  echo '<div class="calendar-item bg-[#e2f5ff] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none" data-item-id="' . esc_attr($item['id']) . '">';
                  echo esc_html(getShortTitle($item['title'], 12));
                  echo '</div>';
                }
                ?>
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
              class="w-full min-h-[110px] flex flex-col items-center justify-start md:border-r border-black">
              <div
                class="w-full flex items-center justify-center border-b border-black py-1 md:py-0 text-[24px] md:text-[30px] lg:text-[36px] xl:text-[48px] font-medium text-black cursor-pointer hover:bg-[#eaf8ff] transition-colors duration-200 month-header"
                data-month="6">
                6
              </div>
              <div
                class="w-full flex flex-col gap-1 xl:gap-4 p-2 lg:px-4 xl:px-16 xl:py-8 calendar-month-container min-h-[80px] lg:min-h-[100px]"
                data-month="6">
                <?php
                $month_items = isset($amm_items_by_month[6]) ? array_slice($amm_items_by_month[6], 0, 5) : [];
                foreach ($month_items as $index => $item) {
                  echo '<div class="calendar-item bg-[#e2f5ff] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none" data-item-id="' . esc_attr($item['id']) . '">';
                  echo esc_html(getShortTitle($item['title'], 12));
                  echo '</div>';
                }
                ?>
              </div>
            </div>
            <!-- 7月 -->
            <div
              class="w-full min-h-[110px] flex flex-col items-center justify-start border-t md:border-r md:border-t-0 border-black">
              <div
                class="w-full flex items-center justify-center border-b border-black py-1 md:py-0 text-[24px] md:text-[30px] lg:text-[36px] xl:text-[48px] font-medium text-black cursor-pointer hover:bg-[#eaf8ff] transition-colors duration-200 month-header"
                data-month="7">
                7
              </div>
              <div
                class="w-full flex flex-col gap-1 xl:gap-4 p-2 lg:px-4 xl:px-16 xl:py-8 calendar-month-container min-h-[80px] lg:min-h-[100px]"
                data-month="7">
                <?php
                $month_items = isset($amm_items_by_month[7]) ? array_slice($amm_items_by_month[7], 0, 5) : [];
                foreach ($month_items as $index => $item) {
                  echo '<div class="calendar-item bg-[#e2f5ff] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none" data-item-id="' . esc_attr($item['id']) . '">';
                  echo esc_html(getShortTitle($item['title'], 12));
                  echo '</div>';
                }
                ?>
              </div>
            </div>
            <!-- 8月 -->
            <div
              class="w-full min-h-[110px] flex flex-col items-center justify-start border-t md:border-t-0 border-black">
              <div
                class="w-full flex items-center justify-center border-b border-black py-1 md:py-0 text-[24px] md:text-[30px] lg:text-[36px] xl:text-[48px] font-medium text-black cursor-pointer hover:bg-[#eaf8ff] transition-colors duration-200 month-header"
                data-month="8">
                8
              </div>
              <div
                class="w-full flex flex-col gap-1 xl:gap-4 p-2 lg:px-4 xl:px-16 xl:py-8 calendar-month-container min-h-[80px] lg:min-h-[100px]"
                data-month="8">
                <?php
                $month_items = isset($amm_items_by_month[8]) ? array_slice($amm_items_by_month[8], 0, 5) : [];
                foreach ($month_items as $index => $item) {
                  echo '<div class="calendar-item bg-[#e2f5ff] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none" data-item-id="' . esc_attr($item['id']) . '">';
                  echo esc_html(getShortTitle($item['title'], 12));
                  echo '</div>';
                }
                ?>
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
              class="w-full min-h-[110px] flex flex-col items-center justify-start md:border-r border-black">
              <div
                class="w-full flex items-center justify-center border-b border-black py-1 md:py-0 text-[24px] md:text-[30px] lg:text-[36px] xl:text-[48px] font-medium text-black cursor-pointer hover:bg-[#eaf8ff] transition-colors duration-200 month-header"
                data-month="9">
                9
              </div>
              <div
                class="w-full flex flex-col gap-1 xl:gap-4 p-2 lg:px-4 xl:px-16 xl:py-8 calendar-month-container min-h-[80px] lg:min-h-[100px]"
                data-month="9">
                <?php
                $month_items = isset($amm_items_by_month[9]) ? array_slice($amm_items_by_month[9], 0, 5) : [];
                foreach ($month_items as $index => $item) {
                  echo '<div class="calendar-item bg-[#e2f5ff] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none" data-item-id="' . esc_attr($item['id']) . '">';
                  echo esc_html(getShortTitle($item['title'], 12));
                  echo '</div>';
                }
                ?>
              </div>
            </div>
            <!-- 10月 -->
            <div
              class="w-full min-h-[110px] flex flex-col items-center justify-start border-t md:border-r md:border-t-0 border-black">
              <div
                class="w-full flex items-center justify-center border-b border-black py-1 md:py-0 text-[24px] md:text-[30px] lg:text-[36px] xl:text-[48px] font-medium text-black cursor-pointer hover:bg-[#eaf8ff] transition-colors duration-200 month-header"
                data-month="10">
                10
              </div>
              <div
                class="w-full flex flex-col gap-1 xl:gap-4 p-2 lg:px-4 xl:px-16 xl:py-8 calendar-month-container min-h-[80px] lg:min-h-[100px]"
                data-month="10">
                <?php
                $month_items = isset($amm_items_by_month[10]) ? array_slice($amm_items_by_month[10], 0, 5) : [];
                foreach ($month_items as $index => $item) {
                  echo '<div class="calendar-item bg-[#e2f5ff] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none" data-item-id="' . esc_attr($item['id']) . '">';
                  echo esc_html(getShortTitle($item['title'], 12));
                  echo '</div>';
                }
                ?>
              </div>
            </div>
            <!-- 11月 -->
            <div
              class="w-full min-h-[110px] flex flex-col items-center justify-start border-t md:border-t-0 border-black">
              <div
                class="w-full flex items-center justify-center border-b border-black py-1 md:py-0 text-[24px] md:text-[30px] lg:text-[36px] xl:text-[48px] font-medium text-black cursor-pointer hover:bg-[#eaf8ff] transition-colors duration-200 month-header"
                data-month="11">
                11
              </div>
              <div
                class="w-full flex flex-col gap-1 xl:gap-4 p-2 lg:px-4 xl:px-16 xl:py-8 calendar-month-container min-h-[80px] lg:min-h-[100px]"
                data-month="11">
                <?php
                $month_items = isset($amm_items_by_month[11]) ? array_slice($amm_items_by_month[11], 0, 5) : [];
                foreach ($month_items as $index => $item) {
                  echo '<div class="calendar-item bg-[#e2f5ff] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none" data-item-id="' . esc_attr($item['id']) . '">';
                  echo esc_html(getShortTitle($item['title'], 12));
                  echo '</div>';
                }
                ?>
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
              class="w-full min-h-[110px] flex flex-col items-center justify-start md:border-r border-black">
              <div
                class="w-full flex items-center justify-center border-b border-black py-1 md:py-0 text-[24px] md:text-[30px] lg:text-[36px] xl:text-[48px] font-medium text-black cursor-pointer hover:bg-[#eaf8ff] transition-colors duration-200 month-header"
                data-month="12">
                12
              </div>
              <div
                class="w-full flex flex-col gap-1 xl:gap-4 p-2 lg:px-4 xl:px-16 xl:py-8 calendar-month-container min-h-[80px] lg:min-h-[100px]"
                data-month="12">
                <?php
                $month_items = isset($amm_items_by_month[12]) ? array_slice($amm_items_by_month[12], 0, 5) : [];
                foreach ($month_items as $index => $item) {
                  echo '<div class="calendar-item bg-[#e2f5ff] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none" data-item-id="' . esc_attr($item['id']) . '">';
                  echo esc_html(getShortTitle($item['title'], 12));
                  echo '</div>';
                }
                ?>
              </div>
            </div>
            <!-- 1月 -->
            <div
              class="w-full min-h-[110px] flex flex-col items-center justify-start border-t md:border-r md:border-t-0 border-black">
              <div
                class="w-full flex items-center justify-center border-b border-black py-1 md:py-0 text-[24px] md:text-[30px] lg:text-[36px] xl:text-[48px] font-medium text-black cursor-pointer hover:bg-[#eaf8ff] transition-colors duration-200 month-header"
                data-month="1">
                1
              </div>
              <div
                class="w-full flex flex-col gap-1 xl:gap-4 p-2 lg:px-4 xl:px-16 xl:py-8 calendar-month-container min-h-[80px] lg:min-h-[100px]"
                data-month="1">
                <?php
                $month_items = isset($amm_items_by_month[1]) ? array_slice($amm_items_by_month[1], 0, 5) : [];
                foreach ($month_items as $index => $item) {
                  echo '<div class="calendar-item bg-[#e2f5ff] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none" data-item-id="' . esc_attr($item['id']) . '">';
                  echo esc_html(getShortTitle($item['title'], 12));
                  echo '</div>';
                }
                ?>
              </div>
            </div>
            <!-- 2月 -->
            <div
              class="w-full min-h-[110px] flex flex-col items-center justify-start border-t md:border-t-0 border-black">
              <div
                class="w-full flex items-center justify-center border-b border-black py-1 md:py-0 text-[24px] md:text-[30px] lg:text-[36px] xl:text-[48px] font-medium text-black cursor-pointer hover:bg-[#eaf8ff] transition-colors duration-200 month-header"
                data-month="2">
                2
              </div>
              <div
                class="w-full flex flex-col gap-1 xl:gap-4 p-2 lg:px-4 xl:px-16 xl:py-8 calendar-month-container min-h-[80px] lg:min-h-[100px]"
                data-month="2">
                <?php
                $month_items = isset($amm_items_by_month[2]) ? array_slice($amm_items_by_month[2], 0, 5) : [];
                foreach ($month_items as $index => $item) {
                  echo '<div class="calendar-item bg-[#e2f5ff] text-black rounded text-[13px] md:text-[14px] lg:text-[15px] xl:text-[16px] mb-1 text-center px-1 py-0.5 lg:py-1 cursor-pointer hover:shadow-lg duration-200 select-none" data-item-id="' . esc_attr($item['id']) . '">';
                  echo esc_html(getShortTitle($item['title'], 12));
                  echo '</div>';
                }
                ?>
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
    class="relative bg-[#f0faff] max-h-[600px] md:max-h-[800px] lg:max-h-[700px] xl:max-h-[800px] 2xl:max-h-[900px] w-full xl:w-[1350px] 2xl:w-[1600px] h-auto flex flex-col overflow-y-auto shadow-2xl pt-4 transform scale-95 transition-transform duration-300 overflow-y-auto">
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
      <div class="w-full min-h-[35px] grid grid-cols-1 lg:grid-cols-2 gap-0 lg:gap-4 xl:gap-12 2xl:gap-16 px-2 lg:px-12 xl:px-16 2xl:px-20">
        <div>
          <table class="w-full text-[13px] text-[#222] bg-[#f0faff]">
            <tbody id="calendarModalTableLeft">
              <!-- Dynamic rows will be inserted here -->
            </tbody>
          </table>
        </div>
        <div>
          <table class="w-full text-[13px] text-[#222] bg-[#f0faff]">
            <tbody id="calendarModalTableRight">
              <!-- Dynamic rows will be inserted here -->
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
                <span id="calendarModalEventTitle" class="text-[20px] font-bold text-black">イベント名</span>
                <span id="calendarModalEventDate" class="text-[13px] text-black pb-1">2026.3~2026.4</span>
              </div>
              <img
                id="calendarModalEventImage"
                src=""
                alt=""
                class="w-full aspect-[3/2] rounded-[15px] object-cover mb-2 hidden" />
              <p id="calendarModalEventDesc" class="w-full text-[13px] text-black leading-[2] text-left whitespace-pre-line">
                施設の説明がここに入ります。
              </p>
              <!-- No Data Icon -->
              <div id="calendarModalNoDataIcon" class="hidden flex flex-col items-center justify-center w-full h-full py-12">
                <svg class="w-32 h-32 md:w-40 md:h-40 lg:w-48 lg:h-48 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <p class="text-gray-500 text-[16px] md:text-[18px] lg:text-[20px] font-medium">データがありません</p>
              </div>
            </div>
          </div>
        </div>
        <div class="md:col-span-2 w-full overflow-x-auto relative">
          <div
            id="calendarMapContainer"
            class="w-[800px] md:w-full h-auto max-w-[2000px] relative shadow-lg overflow-hidden">
            <img
              id="calendarMapImage"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/map.webp"
              alt="Event Image"
              class="w-full h-auto object-cover select-none" />
            <div
              id="calendarMapLayers"
              class="absolute inset-0 pointer-events-none">
              <div id="calendarMapRects" class="absolute inset-0 pointer-events-none"></div>
              <div id="calendarMapMarkers" class="absolute inset-0 pointer-events-none"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  /* Calendar map overlay styling */
  .calendar-marker {
    position: absolute;
    width: 22px;
    height: 22px;
    background: rgb(196, 29, 18);
    border-radius: 50% 50% 50% 0;
    transform: translate(-50%, -100%) rotate(-45deg);
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.25);
    pointer-events: auto;
    z-index: 10;
  }

  .calendar-marker::after {
    content: '';
    width: 10px;
    height: 10px;
    margin: 6px 0 0 6px;
    background: white;
    border-radius: 50%;
    position: absolute;
    top: 0;
    left: 0;
  }

  .calendar-rect {
    position: absolute;
    border: 2px solid rgb(255, 81, 0);
    background: rgba(255, 212, 0, 0.35);
    animation: calendarBlink 1s infinite;
    pointer-events: auto;
    border-radius: 6px;
    z-index: 5;
  }

  @keyframes calendarBlink {
    0% {
      opacity: 1;
    }

    50% {
      opacity: 0.35;
    }

    100% {
      opacity: 1;
    }
  }
</style>

<script>
  (function() {
    const allItems = <?php echo wp_json_encode($amm_map_items); ?> || [];
    const itemsByMonth = <?php echo wp_json_encode($amm_items_by_month); ?> || {};
    const modal = document.getElementById('calendarInfoModal');
    const modalCard = modal ? modal.querySelector('.relative') : null;
    const tableLeft = document.getElementById('calendarModalTableLeft');
    const tableRight = document.getElementById('calendarModalTableRight');
    const mapMarkersLayer = document.getElementById('calendarMapMarkers');
    const mapRectsLayer = document.getElementById('calendarMapRects');
    const eventTitle = document.getElementById('calendarModalEventTitle');
    const eventDate = document.getElementById('calendarModalEventDate');
    const eventImage = document.getElementById('calendarModalEventImage');
    const eventDesc = document.getElementById('calendarModalEventDesc');
    const noDataIcon = document.getElementById('calendarModalNoDataIcon');

    let currentSelectedItem = null;

    const formatDateRange = (start, end) => {
      if (!start && !end) return '';
      if (start && end) {
        const startFormatted = start.replace(/-/g, '.');
        const endFormatted = end.replace(/-/g, '.');
        return `${startFormatted} ~ ${endFormatted}`;
      }
      return (start || end || '').replace(/-/g, '.');
    };

    const getShortTitle = (title, num = 5) => {
      if (!title) return '';
      return title.length > num ? title.substring(0, num) + '...' : title;
    };

    // Convert URLs in text to clickable links
    const linkifyText = (text) => {
      if (!text) return '';
      
      // Escape HTML to prevent XSS
      const escapeHtml = (str) => {
        const div = document.createElement('div');
        div.textContent = str;
        return div.innerHTML;
      };
      
      // URL regex pattern (matches http://, https://, and www.)
      const urlRegex = /(https?:\/\/[^\s]+|www\.[^\s]+)/gi;
      
      // Split text by URLs and process each part
      const parts = text.split(urlRegex);
      let result = '';
      
      parts.forEach((part) => {
        if (urlRegex.test(part)) {
          // It's a URL - make it a link
          let url = part;
          // Add http:// if it starts with www.
          if (url.startsWith('www.')) {
            url = 'http://' + url;
          }
          result += `<a href="${escapeHtml(url)}" target="_blank" rel="noopener noreferrer" class="text-[#28A8E0] hover:underline">${escapeHtml(part)}</a>`;
        } else {
          // Regular text - escape and preserve line breaks
          result += escapeHtml(part).replace(/\n/g, '<br>');
        }
      });
      
      return result;
    };


    const openModal = (month, itemIdToShow = null) => {
      if (!modal || !modalCard) return;

      const monthItems = itemsByMonth[month] || [];
      const itemsToShow = monthItems.slice(0, 10);

      // Reset UI state - hide no-data icon initially
      if (noDataIcon) noDataIcon.classList.add('hidden');

      // Clear tables
      tableLeft.innerHTML = '';
      tableRight.innerHTML = '';

      // Split items into two columns (5 each)
      const leftItems = itemsToShow.slice(0, 5);
      const rightItems = itemsToShow.slice(5, 10);

      // Populate left table
      leftItems.forEach((item) => {
        const row = document.createElement('tr');
        row.className = 'border-b border-[#b9c6cc] hover:bg-[#c0eaff] select-none transition cursor-pointer calendar-modal-row';
        row.setAttribute('data-item-id', item.id);
        row.innerHTML = `
          <td class="px-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">略称:</td>
          <td class="pr-4 text-[#222] text-[12px] lg:text-[14px]">${getShortTitle(item.title)}</td>
          <td class="pr-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">名称:</td>
          <td class="pr-4 text-[#222] text-[12px] lg:text-[14px]">${item.title || ''}</td>
          <td class="pr-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">期間</td>
          <td class="text-[12px] lg:text-[14px] select-none">${formatDateRange(item.start, item.end) || ''}</td>
        `;
        tableLeft.appendChild(row);
      });

      // Populate right table
      rightItems.forEach((item) => {
        const row = document.createElement('tr');
        row.className = 'border-b border-[#b9c6cc] hover:bg-[#c0eaff] select-none transition cursor-pointer calendar-modal-row';
        row.setAttribute('data-item-id', item.id);
        row.innerHTML = `
          <td class="px-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">略称:</td>
          <td class="pr-4 text-[#222] text-[12px] lg:text-[14px]">${getShortTitle(item.title)}</td>
          <td class="pr-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">名称:</td>
          <td class="pr-4 text-[#222] text-[12px] lg:text-[14px]">${item.title || ''}</td>
          <td class="pr-2 text-[14px] lg:text-[15px] whitespace-nowrap font-medium">期間</td>
          <td class="text-[12px] lg:text-[14px] select-none">${formatDateRange(item.start, item.end) || ''}</td>
        `;
        tableRight.appendChild(row);
      });

      // Show modal
      modal.classList.remove('opacity-0', 'pointer-events-none');
      modalCard.classList.remove('scale-95');
      modalCard.classList.add('scale-100');

      // Show item if available, otherwise show no data message
      if (itemsToShow.length > 0) {
        let itemToShow = null;

        // If specific item ID provided, find it; otherwise use first item
        if (itemIdToShow) {
          itemToShow = itemsToShow.find(item => item.id === itemIdToShow) || itemsToShow[0];
        } else {
          itemToShow = itemsToShow[0];
        }

        showItemOnMap(itemToShow);

        // Highlight the selected row
        setTimeout(() => {
          const selectedRow = document.querySelector(`.calendar-modal-row[data-item-id="${itemToShow.id}"]`);
          if (selectedRow) {
            document.querySelectorAll('.calendar-modal-row').forEach(r => {
              r.classList.remove('bg-[#c0eaff]');
            });
            selectedRow.classList.add('bg-[#c0eaff]');
          }
        }, 50);
      } else {
        // Show no data message
        showNoData();
      }
    };

    const closeModal = () => {
      if (!modal || !modalCard) return;
      modal.classList.add('opacity-0', 'pointer-events-none');
      modalCard.classList.add('scale-95');
      modalCard.classList.remove('scale-100');
      clearMap();
      currentSelectedItem = null;
    };

    const clearMap = () => {
      if (mapMarkersLayer) mapMarkersLayer.innerHTML = '';
      if (mapRectsLayer) mapRectsLayer.innerHTML = '';
    };

    const showNoData = () => {
      clearMap();
      currentSelectedItem = null;

      // Hide normal content elements
      if (eventTitle) eventTitle.classList.add('hidden');
      if (eventDate) eventDate.classList.add('hidden');
      if (eventDesc) eventDesc.classList.add('hidden');
      if (eventImage) eventImage.classList.add('hidden');
      
      // Show no data icon
      if (noDataIcon) noDataIcon.classList.remove('hidden');
    };

    const showItemOnMap = (item) => {
      if (!mapMarkersLayer || !mapRectsLayer) return;

      clearMap();
      currentSelectedItem = item;

      // Show marker
      if (item.x !== null && item.y !== null && item.x !== '' && item.y !== '') {
        const marker = document.createElement('div');
        marker.className = 'calendar-marker';
        marker.style.left = `${item.x}%`;
        marker.style.top = `${item.y}%`;
        marker.title = item.title || '地点';
        mapMarkersLayer.appendChild(marker);
      }

      // Show rectangle if event has highlight area
      if (item.event && item.highlight) {
        try {
          const rectData = JSON.parse(item.highlight);
          if (rectData && rectData.w > 0 && rectData.h > 0) {
            const rectEl = document.createElement('div');
            rectEl.className = 'calendar-rect';
            rectEl.style.left = `${rectData.x}%`;
            rectEl.style.top = `${rectData.y}%`;
            rectEl.style.width = `${rectData.w}%`;
            rectEl.style.height = `${rectData.h}%`;
            mapRectsLayer.appendChild(rectEl);
          }
        } catch (err) {
          // ignore invalid rectangle data
        }
      }

      // Hide no data icon
      if (noDataIcon) noDataIcon.classList.add('hidden');
      
      // Show normal content elements
      if (eventTitle) {
        eventTitle.textContent = item.title || 'イベント名';
        eventTitle.classList.remove('hidden');
      }
      if (eventDate) {
        eventDate.textContent = formatDateRange(item.start, item.end) || '日付未設定';
        eventDate.classList.remove('hidden');
      }
      if (eventDesc) {
        eventDesc.innerHTML = linkifyText(item.desc || '説明が登録されていません。');
        eventDesc.classList.remove('hidden');
      }

      if (item.imageUrl && item.imageUrl.trim() !== '') {
        if (eventImage) {
          eventImage.src = item.imageUrl;
          eventImage.alt = item.title || '画像';
          eventImage.classList.remove('hidden');
        }
      } else {
        if (eventImage) eventImage.classList.add('hidden');
      }
    };

    // Month header click handlers
    document.querySelectorAll('.month-header').forEach(header => {
      header.addEventListener('click', function() {
        const month = parseInt(this.getAttribute('data-month'), 10);
        openModal(month);
      });
    });

    // Calendar item click handlers (in main calendar)
    document.querySelectorAll('.calendar-item[data-item-id]').forEach(item => {
      item.addEventListener('click', function() {
        const itemId = parseInt(this.getAttribute('data-item-id'), 10);
        const monthContainer = this.closest('.calendar-month-container');
        if (monthContainer) {
          const month = parseInt(monthContainer.getAttribute('data-month'), 10);
          // Open modal and show the clicked item
          openModal(month, itemId);
        }
      });
    });

    // Table row click handlers (delegated)
    if (tableLeft) {
      tableLeft.addEventListener('click', function(e) {
        const row = e.target.closest('.calendar-modal-row');
        if (row) {
          const itemId = parseInt(row.getAttribute('data-item-id'), 10);
          const item = allItems.find(i => i.id === itemId);
          if (item) {
            showItemOnMap(item);
            // Highlight selected row
            document.querySelectorAll('.calendar-modal-row').forEach(r => {
              r.classList.remove('bg-[#c0eaff]');
            });
            row.classList.add('bg-[#c0eaff]');
          }
        }
      });
    }

    if (tableRight) {
      tableRight.addEventListener('click', function(e) {
        const row = e.target.closest('.calendar-modal-row');
        if (row) {
          const itemId = parseInt(row.getAttribute('data-item-id'), 10);
          const item = allItems.find(i => i.id === itemId);
          if (item) {
            showItemOnMap(item);
            // Highlight selected row
            document.querySelectorAll('.calendar-modal-row').forEach(r => {
              r.classList.remove('bg-[#c0eaff]');
            });
            row.classList.add('bg-[#c0eaff]');
          }
        }
      });
    }

    // Close modal handlers
    document.getElementById('closeCalendarModalBtn')?.addEventListener('click', closeModal);
    modal?.addEventListener('click', (e) => {
      if (e.target === modal) closeModal();
    });
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') closeModal();
    });
  })();
</script>

<?php
get_footer();
?>