<?php
get_header();

/**
 * Load map items from the Area Map Manager plugin (ACF-powered).
 */
$amm_map_items = [];

if (function_exists('get_field')) {
  $amm_posts = get_posts([
    'post_type'   => 'map_item',
    'numberposts' => -1,
    'post_status' => 'publish',
    'orderby'     => 'date',
    'order'       => 'DESC',
  ]);

  foreach ($amm_posts as $p) {
    $image_url = get_field('image', $p->ID);
    
    // ACF returns image URL directly, ensure it's a string
    if (!is_string($image_url)) {
      $image_url = '';
    }

    $amm_map_items[] = [
      'id'        => $p->ID,
      'title'     => $p->post_title,
      'x'         => (float) get_field('map_x', $p->ID),
      'y'         => (float) get_field('map_y', $p->ID),
      'desc'      => (string) get_field('description', $p->ID),
      'imageUrl'  => $image_url ? esc_url($image_url) : '',
      'event'     => (int) get_field('event_on', $p->ID),
      'start'     => (string) get_field('event_start', $p->ID),
      'end'       => (string) get_field('event_end', $p->ID),
      'highlight' => (string) get_field('highlight_area', $p->ID),
    ];
  }
}
?>

<section
  id="hero-section"
  class="w-full h-[400px] md:h-[360px] lg:h-[500px] xl:h-[530px] bg-gradient-to-b from-[#A4D3E8] to-[#28A8E0] flex items-center justify-center">
  <div
    class="mx-auto flex flex-col items-center justify-center w-full mt-14 md:mt-16 lg:mt-28 xl:mt-32">
    <div
      class="text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px] text-white font-medium mb-2">
      Service
    </div>
    <h2
      class="text-[30px] md:text-[36px] lg:text-[40px] xl:text-[50px] text-white font-medium mb-3">
      サービス
    </h2>
    <div
      class="max-w-[280px] md:max-w-full text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px] text-white font-medium text-start md:text-center leading-6">
      八戸ノ里エリアの暮らしをサポートする地域マップとイベントカレンダー
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
    / サービス
  </div>
</section>

<section
  class="w-full flex justify-center items-center pt-14 pb-20 md:pt-20 md:pb-24 lg:py-28 xl:py-32 bg-[#fff]">
  <div
    class="w-full max-w-[600px] md:max-w-[680px] lg:max-w-[800px] xl:max-w-[1000px] 2xl:max-w-[1400px] mx-auto flex flex-col justify-center items-center gap-8 md:gap-12 lg:gap-14 xl:gap-16">
    <div class="flex flex-col items-center gap-6">
      <h2
        class="text-[20px] md:text-[27px] lg:text-[40px] font-bold text-center w-full leading-tight">
        八戸ノ里 地域マップ
      </h2>
      <p
        class="text-[14px] md:text-[15px] lg:text-[16px] xl:text-[18px] text-black w-full text-start md:text-center mb-3">
        近鉄八戸ノ里駅を中心とした暮らしの地域マップです。<br />施設をクリックすると詳細情報が表示されます。
      </p>
    </div>
    <div
      class="w-full flex flex-col flex-1 justify-center items-start overflow-auto">
      <div
        id="serviceMapContainer"
        class="w-[600px] md:w-full h-full overflow-hidden relative rounded-[12px] shadow-lg">
        <img
          id="serviceMapImage"
          src="<?php echo get_template_directory_uri(); ?>/assets/images/map.webp"
          alt="map"
          class="w-full h-full object-cover select-none" />
        <div
          id="serviceMapLayers"
          class="absolute inset-0 pointer-events-none">
          <div id="serviceMapMarkers" class="absolute inset-0 pointer-events-none"></div>
        </div>
      </div>
    </div>
    <a
      href="<?php echo home_url('/concept'); ?>"
      class="flex items-center justify-center rounded-[20px] bg-[#28A8E0] hover:bg-[#5ec6f8] px-8 md:px-10 lg:px-12 xl:px-14 py-2 md:py-3 lg:py-4 xl:py-5 text-white font-bold text-[12px] md:text-[16px] transition-colors duration-150">
      事業内容をもっと詳しく見る
      <svg
        class="inline-block align-middle ml-2 w-[24px] md:w-[28px] aspect-1"
        viewBox="0 0 24 24"
        fill="none">
        <g>
          <rect width="16" height="16" fill="none"></rect>
          <path
            d="M4 12h14"
            stroke="#fff"
            stroke-width="1"
            stroke-linecap="round" />
          <path
            d="M12 6l6 6-6 6"
            stroke="#fff"
            stroke-width="1"
            stroke-linecap="round"
            stroke-linejoin="round" />
        </g>
      </svg>
    </a>
  </div>
</section>

<!-- Information Modal -->
<div
  id="infoModal"
  class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 opacity-0 pointer-events-none transition-opacity duration-300 px-4 py-8">
  <div
    class="bg-white w-full max-w-[320px] md:max-w-[540px] lg:max-w-[800px] xl:max-w-[1000px] max-h-[800px] md:max-h-[800px] flex flex-col overflow-hidden shadow-2xl transform scale-95 transition-transform duration-300"
    data-modal-card>
    <!-- Header -->
    <div
      class="bg-[#28A8E0] text-white px-6 lg:px-8 xl:px-10 py-6 lg:py-8 xl:py-10 flex items-center justify-between">
      <h3 id="modalTitle" class="text-[16px] md:text-[18px] lg:text-[20px] xl:text-[26px] font-medium">情報ウインド</h3>
      <button
        id="closeModalBtn"
        class="w-6 md:w-10 lg:w-12 aspect-[1] flex items-center justify-center bg-white hover:bg-white/20 group transition-colors duration-200"
        aria-label="Close modal">
        <svg
          class="lg:w-8 xl:w-10 aspect-[1] stroke-[#28A8E0] group-hover:stroke-white transition-colors duration-200"
          fill="none"
          viewBox="0 0 24 24">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="1"
            d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>

    <!-- Content -->
    <div
      class="flex-1 overflow-y-auto px-6 md:px-8 lg:px-10 py-6 md:py-8">
      <!-- Title and Date -->
      <div class="mb-6 md:mb-8">
        <div class="flex flex-col md:flex-row md:items-end md:gap-4 mb-4">
          <h2
            id="modalHeading"
            class="text-[24px] md:text-[32px] lg:text-[36px] xl:text-[40px] font-bold text-black mb-2 md:mb-0">
            イベント名
          </h2>
          <span
            id="modalDate"
            class="text-[14px] md:text-[15px] lg:text-[16px] xl:text-[18px] text-black pb-1 lg:pb-2">
            2026.3~2026.4
          </span>
        </div>
      </div>

      <!-- Image and Text Layout -->
      <div
        class="gap-6 md:gap-8 lg:gap-10 mb-6 md:mb-8">
        <img
          id="modalImage"
          src=""
          alt=""
          class="w-full lg:w-[300px] xl:w-[375px] float-left h-auto rounded-[15px] lg:rounded-[20px] object-cover mb-4 md:mb-8 lg:mb-0 mr-5 lg:mr-12 xl:mr-16 hidden" />
        <p
          id="modalDesc"
          class="text-[14px] md:text-[16px] lg:text-[16px] xl:text-[20px] text-black leading-[1.8] md:leading-[2] whitespace-pre-line">
          施設の説明がここに入ります。
        </p>
      </div>
    </div>
  </div>
</div>

<style>
  /* Simple map overlay styling for frontend */
  .amm-front-marker {
    position: absolute;
    margin-top: -5px;
    width: 22px;
    height: 22px;
    background: rgb(196, 29, 18);
    border-radius: 50% 50% 50% 0;
    transform: translate(-50%, -100%) rotate(-45deg);
    cursor: pointer;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.25);
    pointer-events: auto;
    transition: background-color 0.3s ease;
  }

  .amm-front-marker:hover{
    background-color: #28A8E0;
  }

  .amm-front-marker::after {
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
</style>

<script>
  (function () {
    const items = <?php echo wp_json_encode($amm_map_items); ?> || [];
    console.log('All map items:', items);
    const markersLayer = document.getElementById('serviceMapMarkers');
    const modal = document.getElementById('infoModal');
    const modalCard = modal ? modal.querySelector('[data-modal-card]') : null;
    const modalHeading = document.getElementById('modalHeading');
    const modalDate = document.getElementById('modalDate');
    const modalDesc = document.getElementById('modalDesc');
    const modalImage = document.getElementById('modalImage');

    if (!markersLayer) return;

    const formatDateRange = (start, end) => {
      if (!start && !end) return '';
      if (start && end) return `${start.replace(/-/g, '.')} ~ ${end.replace(/-/g, '.')}`;
      return (start || end || '').replace(/-/g, '.');
    };

    const openModal = (item) => {
      if (!modal || !modalCard) return;
      console.log('Opening modal for item:', item);
      
      modalHeading.textContent = item.title || '情報';
      modalDate.textContent = formatDateRange(item.start, item.end) || '日付未設定';
      modalDesc.textContent = item.desc || '説明が登録されていません。';

      // Handle image
      if (item.imageUrl && typeof item.imageUrl === 'string' && item.imageUrl.trim() !== '') {
        console.log('Setting image URL:', item.imageUrl);
        modalImage.src = item.imageUrl;
        modalImage.alt = item.title || '画像';
        modalImage.classList.remove('hidden');
        modalImage.onerror = function() {
          console.error('Failed to load image:', item.imageUrl);
          this.classList.add('hidden');
        };
      } else {
        console.log('No image URL for item:', item.title);
        modalImage.classList.add('hidden');
      }

      modal.classList.remove('opacity-0', 'pointer-events-none');
      modalCard.classList.remove('scale-95');
      modalCard.classList.add('scale-100');
    };

    const closeModal = () => {
      if (!modal || !modalCard) return;
      modal.classList.add('opacity-0', 'pointer-events-none');
      modalCard.classList.add('scale-95');
      modalCard.classList.remove('scale-100');
    };

    document.getElementById('closeModalBtn')?.addEventListener('click', closeModal);
    modal?.addEventListener('click', (e) => {
      if (e.target === modal) closeModal();
    });
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') closeModal();
    });

    items.forEach((item) => {
      if (item.x === null || item.y === null || item.x === '' || item.y === '') return;

      const marker = document.createElement('button');
      marker.type = 'button';
      marker.className = 'amm-front-marker';
      marker.style.left = `${item.x}%`;
      marker.style.top = `${item.y}%`;
      marker.title = item.title || '地点';
      marker.addEventListener('click', (e) => {
        e.stopPropagation();
        openModal(item);
      });
      markersLayer.appendChild(marker);
    });
  })();
</script>

<?php
get_footer();
?>