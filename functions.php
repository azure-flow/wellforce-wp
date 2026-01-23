<?php
// Define theme directory URI constant
if (!defined('T_DIRE_URI')) {
  define('T_DIRE_URI', get_template_directory_uri());
}

function wellforce_enqueue_scripts()
{
  // Load main stylesheet
  wp_enqueue_style('wellforce-style', get_stylesheet_uri());

  // Enqueue additional CSS files (only if they exist)
  $css_files = array(
    'wellforce-tailwind' => '/assets/css/tailwind.css',
    'wellforce-main' => '/assets/css/main.css',
    'wellforce-font' => '/assets/css/font.css',
    'wellforce-swiper' => '/assets/css/swiper.css',
    'wellforce-aos' => '/assets/css/aos.css'
  );

  foreach ($css_files as $handle => $file) {
    $file_path = get_template_directory() . $file;
    if (file_exists($file_path)) {
      wp_enqueue_style($handle, T_DIRE_URI . $file, array(), '1.0');
    }
  }

  // Enqueue JavaScript files
  wp_enqueue_script('wellforce-swiper', T_DIRE_URI . '/assets/js/swiper-bundle.min.js', array(), '1.0', true);
  wp_enqueue_script('wellforce-simpleParallax', T_DIRE_URI . '/assets/js/simpleParallax.min.js', array(), '1.0', true);
  wp_enqueue_script('wellforce-main', T_DIRE_URI . '/assets/js/main.js', array('jquery'), '1.0', true);
  wp_enqueue_script('wellforce-aos', T_DIRE_URI . '/assets/js/aos.js', array(), '1.0', true);
}


add_action('wp_enqueue_scripts', 'wellforce_enqueue_scripts');

// AJAX handler for loading more news posts
function ajax_load_more_news() {
  $posts_per_page = 5;
  $paged = isset($_POST['paged']) ? intval($_POST['paged']) : 1;
  $offset = ($paged - 1) * $posts_per_page;

  $news_query = new WP_Query(array(
    'post_type' => 'news',
    'posts_per_page' => $posts_per_page,
    'offset' => $offset,
    'orderby' => 'date',
    'order' => 'DESC'
  ));
  
  ob_start();
  if ( $news_query->have_posts() ) :
    while ($news_query->have_posts()) : $news_query->the_post();
      $post_title = get_the_title();
      $post_date = get_the_date('Y.m.d');
      $post_content = get_field('description');
      ?>
      <a href="<?php echo get_the_permalink(); ?>" class="news-item w-full max-w-[1000px] rounded-[20px] bg-[#EAF8FF] px-8 py-6 flex flex-col gap-1 md:gap-1 lg:gap-1 xl:gap-2 shadow-sm hover:bg-[#e0f6ff] hover:shadow-md duration-150 cursor-pointer" data-aos="fade-in" data-aos-delay="100">
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
      <?php
    endwhile; 
    wp_reset_postdata();
  endif;
  $output = ob_get_clean();
  echo $output;
  wp_die();
}
add_action('wp_ajax_load_more_news', 'ajax_load_more_news');
add_action('wp_ajax_nopriv_load_more_news', 'ajax_load_more_news');


// Contact Form Handler

add_action('init', 'wellforce_handle_contact_form');

function wellforce_handle_contact_form() {

    if (!isset($_POST['contact_form'])) {
        return;
    }

    // Security (recommended)
    if (!wp_verify_nonce($_POST['_wpnonce'] ?? '', 'contact_nonce')) {
        return;
    }

    $name    = sanitize_text_field($_POST['name']);
    $email   = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);

    $to = 'info@wellforce.jp';
    $subject = 'お問い合わせが届きました';

    $headers = [
        'Content-Type: text/html; charset=UTF-8',
        'From: Wellforce <info@wellforce.jp>',
        'Reply-To: ' . $email
    ];

    $body = "
        <strong>お名前:</strong> {$name}<br>
        <strong>メール:</strong> {$email}<br><br>
        <strong>内容:</strong><br>
        {$message}
    ";

    wp_mail($to, $subject, $body, $headers);
}

/**
 * Convert URLs in text to clickable links
 * Works with both plain text and HTML (preserves <br> tags from nl2br)
 */
if (!function_exists('linkify_text')) {
  function linkify_text($text) {
    if (empty($text)) return '';
    
    // URL regex pattern (matches http://, https://, and www.)
    // Excludes URLs that are already inside <a> tags
    $url_pattern = '/(?<!["\'>])(https?:\/\/[^\s<>]+|www\.[^\s<>]+)(?![^<]*<\/a>)/i';
    
    // Replace URLs with clickable links
    $text = preg_replace_callback($url_pattern, function($matches) {
      $url = trim($matches[0]);
      $display_url = $url;
      
      // Add http:// if it starts with www.
      if (preg_match('/^www\./i', $url)) {
        $url = 'http://' . $url;
      }
      
      return '<a href="' . esc_url($url) . '" target="_blank" rel="noopener noreferrer" class="text-[#28A8E0] hover:underline">' . esc_html($display_url) . '</a>';
    }, $text);
    
    return $text;
  }
}

