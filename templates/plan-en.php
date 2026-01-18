<?php
get_header();
?>

<section
    class="relative bg-[url('<?php echo T_DIRE_URI; ?>/assets/images/fv_exp_sp.webp')] md:bg-[url('<?php echo T_DIRE_URI; ?>/assets/images/fv_exp.webp')] bg-cover bg-center h-[667px] md:h-[700px] lg:h-[800px] xl:h-[1080px]">
    <div
        class="z-50 flex md:flex-col justify-between items-center md:items-start gap-6 fixed top-[30px] md:top-[80px] lg:top-[100px]
             xl:top-[115px] left-[40px] md:left-[60px] lg:left-[100px] xl:left-[140px] md:max-w-[116.67px] md:h-[280px] lg:h-[300px] xl:h-[420px] max-h-[420px]">
        <div id="hamburgerBtn"
            class="relative flex md:hidden flex-col text-white justify-between w-[30px] h-[20px]">
            <div class="h-[1px] w-full bg-white"></div>
            <div class="h-[1px] w-full bg-white"></div>
            <div class="h-[1px] w-full bg-white"></div>
        </div>
        <div class="relative md:mb-4 z-10 select-none">
            <div
                class="relative group w-[48px] lg:w-[52px] xl:w-[58px] text-[11.87px] lg:text-[12.87px] xl:text-[14.87px]">
                <button
                    class="w-[48px] lg:w-[52px] xl:w-[58px] h-[28.21px] lg:h-[30.21px] xl:h-[34.21px] flex items-center justify-center bg-[#CDD3D6] text-[#0B1828] z-10 hover:bg-white hover:underline underline-offset-[5px] hover:underline underline-offset-[5px]-offset-[6px] hover:decoration-[#0B1828] focus:outline-none">
                    English
                </button>
                <div
                    class="langMenuList flex flex-col w-[48px] lg:w-[52px] xl:w-[58px] absolute left-0 top-[28.21px] lg:top-[30.21px] xl:top-[34.21px] opacity-0 group-hover:opacity-100 group-hover:pointer-events-auto pointer-events-none transition-opacity duration-200 z-20">
                    <a href="<?php echo get_permalink(pll_get_post(get_the_ID(), 'ja')); ?>"
                        class="w-[48px] lg:w-[52px] xl:w-[58px] h-[28.21px] lg:h-[30.21px] xl:h-[34.21px] flex items-center justify-center bg-[#CDD3D6] text-[#0B1828] transition hover:bg-white hover:underline underline-offset-[5px] hover:underline underline-offset-[5px]-offset-[6px] hover:decoration-[#0B1828]">
                        日本語
                    </a>
                    <a href="<?php echo get_permalink(pll_get_post(get_the_ID(), 'zh')); ?>"
                        class="w-[48px] lg:w-[52px] xl:w-[58px] h-[28.21px] lg:h-[30.21px] xl:h-[34.21px] flex items-center justify-center bg-[#CDD3D6] text-[#0B1828] transition hover:bg-white hover:underline underline-offset-[5px] hover:underline underline-offset-[5px]-offset-[6px] hover:decoration-[#0B1828]">
                        繁體字
                    </a>
                </div>
            </div>
        </div>
        <div
            class="hidden md:flex flex-col hidden justify-between h-[180px] lg:h-[200px] xl:h-[250px] text-white text-[9px] sm:text-[12px] md:text-[16px] lg:text-[18px] xl:text-[20px] text-left leading-[1.8]  ">
            <?php
            $lang = pll_current_language();

            if ($lang === 'ja') {
                $base = '/';
            } elseif ($lang === 'en') {
                $base = '/en/';
            } elseif ($lang === 'zh') {
                $base = '/zh/';
            } else {
                $base = '/';
            }
            ?>
            <a href="<?php echo esc_url(home_url($base)); ?>" class="font-garamond hover:opacity-60 transition-opacity duration-200">Top</a>
            <a href="<?php echo esc_url(home_url($base . 'plan')); ?>"><span class="font-garamond hover:opacity-60 transition-opacity duration-200">Experiences</span></a>
            <a href="<?php echo esc_url(home_url($base . 'tour')); ?>"><span class="font-garamond hover:opacity-60 transition-opacity duration-200">Tour</span></a>
            <a href="<?php echo esc_url(home_url($base . 'about')); ?>"><span class="font-garamond hover:opacity-60 transition-opacity duration-200">About</span></a>
        </div>
    </div>
    <div class="flex justify-center w-full h-full  px-8">
        <div
            class="flex flex-col gap-4 xl:gap-6 w-[295px] md:w-[300px] lg:w-[450px] xl:w-[600px] max-w-[600px] mx-auto pt-[70%] md:pt-[15%] xl:pt-[10%] mb-4">
            <h2 class="font-garamond text-white text-[50px] md:text-[28px] lg:text-[52px] xl:text-[70px]">Experiences</h2>
            <hr>
            <h3 class="font-garamond text-white text-[16px] md:text-[15px] xl:text-[23px] opacity-70 tracking-wider text-right">
                MIEscape original tours</h3>
        </div>
    </div>
</section>

<section class="w-full bg-[url('<?php echo T_DIRE_URI; ?>/assets/images/bg_green.webp')]  bg-cover bg-center ">
    <div
        class="flex justify-center w-full py-16 px-8 md:px-24 lg:px-40 xl:px-40 xl:py-24 bg-[linear-gradient(180deg,rgba(0,55,74,0.25)_24%,rgba(0,74,99,0.4)_34%,rgba(0,45,60,0.6)_49%,rgba(1,16,21,0.8)_63%,rgba(1,31,41,1)_77%)]">
        <div class="w-full max-w-[870px] flex flex-col items-center gap-6 md:gap-10 lg:gap-14 xl:gap-20">
            <div class="w-full flex flex-col items-center xl:gap-4 lg:gap-3 gap-2 mb-4 md:mb-0">
                <h2
                    class="text-[#C4B28C] text-[38px] md:text-[38px] lg:text-[40px] xl:text-[53px] font-garamond text-center tracking-wide">
                    Find an experience
                </h2>
                <hr class="w-full border-[#C4B28C]">
            </div>
            <?php
            // Get terms (categories)
            $terms = get_terms(array(
                'taxonomy'   => 'experience_category',
                'hide_empty' => false,
            ));

            // Prepare experiences data for all cards
            $experiences = new WP_Query(array(
                'post_type' => 'plan',
                'posts_per_page' => -1,
                'meta_key' => 'order',
                'orderby' => 'meta_value_num',
                'order' => 'ASC'
            ));

            // Collect experiences data as an array for JS filtering
            $experiences_data = array();

            if ($experiences->have_posts()) :
                while ($experiences->have_posts()) : $experiences->the_post();
                    $post_id = get_the_ID();
                    $cats = get_the_terms($post_id, 'experience_category');
                    $cat_slugs = array();
                    if ($cats && !is_wp_error($cats)) {
                        foreach ($cats as $cat) {
                            $cat_slugs[] = $cat->slug;
                        }
                    }
                    $experiences_data[] = array(
                        'id' => $post_id,
                        'title' => get_field('title'),
                        'description' => get_field('description'),
                        'duration' => get_field('duration'),
                        'price' => get_field('price'),
                        'image' => get_field('image'),
                        'permalink' => get_permalink(),
                        'categories' => $cat_slugs,
                        'order' => get_field('order'),
                    );
                endwhile;
                wp_reset_postdata();
            endif;
            ?>

            <div
                class="relative w-full flex flex-wrap md:flex-row justify-center md:justify-between gap-3 md:mb-8 justify-center items-center px-4 md:px-0" id="category-buttons">
                <?php if ($terms && ! is_wp_error($terms)) : ?>
                    <?php foreach ($terms as $term): ?>
                        <button
                            class="category-btn px-2 lg:px-5 py-[2px] md:py-1 mb-8 md:mb-0 bg-transparent text-white border border-white text-[15px] md:text-[18px] lg:text-[20px] xl:text-[25px] tracking-wide transition hover:bg-white hover:text-[#092F27]"
                            data-category="<?php echo esc_attr($term->slug); ?>">
                            <?php echo esc_html($term->name); ?>
                        </button>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <div class="w-full flex flex-col items-center md:mb-8 mb-4">
                <button
                    id="view-all-btn"
                    class="w-full py-[2px] text-white text-[14px] md:text-[16px] lg:text-[18px] xl:text-[20px] font-bold bg-[#0f0f0f]/60 px-6 py-0 tracking-[3px]">
                    VIEW ALL
                </button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 justify-center w-full mb-10 px-4 md:px-0" id="experiences-list">
                <!-- Cards will be rendered by JS on first load and filter -->
            </div>

            <script>
                // Experiences data passed from PHP to JS
                const experiences = <?php echo json_encode($experiences_data); ?>;

                function formatNumberStyledText(input) {
                    if (!input) return "";

                    // Split text into groups: numbers and non-numbers
                    const tokens = input.match(/\d{1,3}(?:,\d{3})*|\d+|[^\d]+/g);

                    if (!tokens) return input;

                    let html = `<span>`;

                    tokens.forEach(token => {
                        // If token is a number
                        if (/^\d{1,3}(?:,\d{3})*$|^\d+$/.test(token)) {
                            html += `<span class="text-[20px] md:text-[20px] lg:text-[24px] xl:text-[30px]">${token}</span>`;
                            return;
                        }

                        // If token is text/symbols
                        html += `<span class="text-[11px] md:text-[12px] lg:text-[16px] xl:text-[17px]">${token}</span>`;
                    });

                    html += `</span>`;
                    return html;
                }


                // Build card HTML for an experience object
                function buildCardHtml(exp) {
                    return `
                        <div class="relative bg-white/10 overflow-hidden flex flex-col group max-w-[400px] md:w-full mx-auto " data-categories='${JSON.stringify(exp.categories)}'>
                            ${exp.image && exp.image.url ? `
                                <img src="${exp.image.url}" alt="Diving with a local Ama diver in Ise-Shima"
                                    class="w-full object-cover" loading="lazy">` : ``}
                            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-10 group-hover:opacity-0 transition-opacity duration-300 z-1"></div>
                            <div class="flex flex-col max-h-[330px] bg-black/40 gap-3 md:gap-1 lg:gap-3 xl:gap-4 absolute bottom-0 left-0 w-full xl:p-6 p-6 md:p-4 lg:p-5 flex flex-col">
                                <h3 class="text-white text-[22px] md:text-[24px] lg:text-[28px] xl:text-[33px] mb-1 md:leading-[1] lg:leading-[1.2] xl:leading-[1.4] line-clamp-2">
                                    ${exp.title ?? ''}
                                </h3>
                                <div class="flex flex-col gap-2 lg:gap-3">
                                    <p class="text-white text-[12px] md:text-[14px] xl:text-[18.5px] opacity-90 drop-shadow tracking-tighter line-clamp-2">
                                        ${exp.description ?? ''}
                                    </p>
                                    <hr>
                                    <div class="flex justify-between items-center text-white text-[22px] xl:text-[30px] gap-4 lg:gap-5 font-[garamond] tracking-wide whitespace-nowrap">
                                        <span>
                                            ${
                                                exp.duration 
                                                ? (formatNumberStyledText(exp.duration))
                                                : ''
                                            }
                                        </span>
                                        <span>
                                            ${
                                                exp.price 
                                                ? (formatNumberStyledText(exp.price))
                                                : ''
                                            }
                                        </span>
                                    </div>
                                    <a href="${exp.permalink}" class="flex items-center font-garamond font-bold tracking-[1.5px] inline-flex items-center gap-3 px-2 md:px-2 lg:px-3 xl:px-4 pb-[3px] pt-[0px] md:py-[2px] xl:py-1 text-[#464646] md:text-[12px] lg:text-[14px] xl:text-[15px] bg-white hover:bg-[#9C834E] hover:text-white duration-200 self-start">
                                        <p>view more</p>
                                        <i class="fa-solid fa-play text-[9px] md:text-[8px] lg:text-[9px] lg:text-[10px] pt-[4px] md:pt-[4px] lg:pt-[3px] xl:pt-[4.5px]"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    `;
                }

                // Render cards into #experiences-list
                function renderExperiences(cards) {
                    const container = document.getElementById('experiences-list');
                    if (cards.length === 0) {
                        container.innerHTML = "<p class='text-white text-lg text-center col-span-2 py-10'>此類別未找到相關經驗。</p>";
                    } else {
                        container.innerHTML = cards.map(buildCardHtml).join('');
                    }
                }

                // Event listeners for filtering
                document.addEventListener('DOMContentLoaded', function() {
                    // Initially show all cards
                    renderExperiences(experiences);

                    // Category buttons
                    document.querySelectorAll('.category-btn').forEach(btn => {
                        btn.addEventListener('click', function() {
                            const cat = btn.getAttribute('data-category');
                            const filtered = experiences.filter(exp => exp.categories.includes(cat));
                            renderExperiences(filtered);

                            // Remove background from all buttons first
                            document.querySelectorAll('.category-btn').forEach(b => {
                                b.classList.remove('bg-white', 'text-[#464646]');
                            });
                            // Add background white to the selected button
                            btn.classList.add('bg-white', 'text-[#464646]');
                        });
                    });

                    // 'VIEW ALL' button resets to show all cards
                    document.getElementById('view-all-btn').addEventListener('click', function() {
                        renderExperiences(experiences);

                        // Remove background from all category buttons (unselect all)
                        document.querySelectorAll('.category-btn').forEach(b => {
                            b.classList.remove('bg-white', 'text-[#464646]');
                        });
                    });

                });
            </script>
            <div class="w-full flex justify-center">
                <a class="w-[30%] mb-32" href="<?php echo esc_url(home_url('/en/contact')); ?>">
                    <button
                        class="font-garamond w-full py-1 bg-[#9E895B] text-white text-center text-[26px] md:text-[28px] lg:text-[30px] xl:text-[34px] tracking-widest hover:bg-[#9f895bcc] transition">
                        Contact
                    </button>
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>