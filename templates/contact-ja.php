<?php

get_header();
?>
<style>
    * {
        font-family: "Zen Old Mincho", serif;
    }
</style>

<section class="relative bg-[linear-gradient(180deg,#051C2A_29%,#013538_63%,#025140_100%)] py-40 lg:py-32 xl:py-52">
    <div
        class="z-50 flex md:flex-col justify-between items-center md:items-start gap-6 fixed top-[30px] md:top-[80px] lg:top-[100px]
             xl:top-[115px] left-[40px] md:left-[60px] lg:left-[100px] xl:left-[140px] md:max-w-[116.67px] md:h-[280px] lg:h-[300px] xl:h-[420px] max-h-[420px]">
        <div id="hamburgerBtn" class="relative flex md:hidden flex-col text-white justify-between w-[30px] h-[20px]">
            <div class="h-[1px] w-full bg-white"></div>
            <div class="h-[1px] w-full bg-white"></div>
            <div class="h-[1px] w-full bg-white"></div>
        </div>
        <div class="relative md:mb-4 z-10 select-none">
            <div
                class="relative group w-[48px] lg:w-[52px] xl:w-[58px] text-[11.87px] lg:text-[12.87px] xl:text-[14.87px]">
                <button
                    class="w-[48px] lg:w-[52px] xl:w-[58px] h-[28.21px] lg:h-[30.21px] xl:h-[34.21px] flex items-center justify-center bg-[#CDD3D6] text-[#0B1828] z-10 hover:bg-white hover:underline underline-offset-[5px] hover:underline underline-offset-[5px]-offset-[6px] hover:decoration-[#0B1828] focus:outline-none">
                    日本語
                </button>
                <div
                    class="langMenuList flex flex-col w-[48px] lg:w-[52px] xl:w-[58px] absolute left-0 top-[28.21px] lg:top-[30.21px] xl:top-[34.21px] opacity-0 group-hover:opacity-100 group-hover:pointer-events-auto pointer-events-none transition-opacity duration-200 z-20">
                    <a href="<?php echo get_permalink(pll_get_post(get_the_ID(), 'en')); ?>"
                        class="w-[48px] lg:w-[52px] xl:w-[58px] h-[28.21px] lg:h-[30.21px] xl:h-[34.21px] flex items-center justify-center bg-[#CDD3D6] text-[#0B1828] transition hover:bg-white hover:underline underline-offset-[5px] hover:underline underline-offset-[5px]-offset-[6px] hover:decoration-[#0B1828]">
                        English
                    </a>
                    <a href="<?php echo get_permalink(pll_get_post(get_the_ID(), 'zh')); ?>"
                        class="w-[48px] lg:w-[52px] xl:w-[58px] h-[28.21px] lg:h-[30.21px] xl:h-[34.21px] flex items-center justify-center bg-[#CDD3D6] text-[#0B1828] transition hover:bg-white hover:underline underline-offset-[5px] hover:underline underline-offset-[5px]-offset-[6px] hover:decoration-[#0B1828]">
                        繁體字
                    </a>
                </div>
            </div>
        </div>
        <div
            class="hidden md:flex flex-col hidden justify-between h-[180px] lg:h-[200px] xl:h-[250px] text-white text-[9px] sm:text-[12px] md:text-[16px] lg:text-[18px] xl:text-[18px] text-left leading-[1.8]  ">
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
    <div class="flex flex-col items-center justify-center justify-center w-full h-full">
        <section class="w-full flex flex-col justify-center items-center pb-16 px-8 md:px-40">
            <div class="w-full max-w-[600px] flex flex-col justify-center items-center gap-2 md:gap-4 xl:gap-8">
                <h2 class="w-full text-center text-white text-[30px] md:text-[2rem] lg:text-[2.5rem] mb-2 md:mb-4 xl:mb-6 font-normal text-center">
                    お問い合わせ・ご予約
                </h2>
                <span class="w-full h-0.5 bg-white bottom-0 pointer-events-none"></span>
                <p class="max-w-[600px] text-white text-[16px] md:text-[15px] lg:text-[16px] xl:text-[18px] leading-[1.6] text-center">
                    あなただけの特別な旅のプランニングを、 ぜひご一緒させてください。<br>
                    ご希望やご質問など、 まずはお気軽にお聞かせいただければ幸いです。<br><br>
                    内容を確認の上、3営業日以内に担当者より折り返し<br>
                    ご連絡させていただきます。
                </p>
            </div>
            <div
                class="w-full max-w-[520px] py-14 md:px-12 flex flex-col items-center shadow-none m-auto">
                <?php echo do_shortcode('[contact-form-7 id="18ba2a2" title="お問い合わせ:JA"]'); ?>
            </div>
        </section>
    </div>
</section>

<!-- Inquiry Sent Modal -->
<style>
    #inquirySentModal.modal-open {
        opacity: 1;
        pointer-events: auto;
    }

    /* Hide Contact Form 7 default success message since we show modal instead */
    .wpcf7-mail-sent-ok {
        display: none !important;
    }

    /* Hide Contact Form 7 default failure message since we show alert instead */
    .wpcf7-mail-failed {
        display: none !important;
    }
</style>
<div id="inquirySentModal" class="hidden fixed inset-0 z-[1000] bg-black/20 flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-[450ms] [transition-timing-function:cubic-bezier(.7,0,.3,1)]">
    <div class="bg-white shadow-[0_8px_40px_0_rgba(0,0,0,0.10)] relative flex flex-col gap-4 lg:gap-6 items-center py-14 px-8 md:px-16 xl:py-24 max-w-[800px] md:w-[550px] lg:w-[650px] xl:w-full mx-4 modal-content-animate">
        <!-- Close button -->
        <button id="closeInquirySentModal" aria-label="Close" class="absolute top-8 right-2 text-[#888] hover:text-[#111]">
            <svg class="w-[40px] h-[40px] md:w-[50px] md:h-[50px] lg:w-[60px] lg:h-[60px] xl:w-[70px] xl:h-[70px]" viewBox="0 0 40 40" fill="none">
                <path d="M16 6L6 16M6 6L16 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
            </svg>
        </button>
        <!-- Check icon -->
        <span class="flex items-center justify-center rounded-full border border-[#E5E5E5] lg:mb-8 mb-4 w-[70px] md:w-[80px] lg:w-[90px] xl:w-[100px] aspect-[1]">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                aria-hidden="true"
                role="img"
                class="w-8 h-8 md:w-8 md:h-8 lg:w-10 lg:h-10 xl:w-12 xl:h-12">
                <path d="M5.5 12.2 L9.8 16.5 L18.5 7.8"
                    fill="none"
                    stroke="#000"
                    stroke-width="1"
                    stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </span>
        <!-- Heading -->
        <h2 class="text-[24px] md:text-[28px] lg:text-[30px] xl:text-[36px] font-normal text-[#232323] lg:mb-3 mb-2">送信完了</h2>
        <div class="font-garamond text-[#757575] text-[18px] md:text-[20px] lg:text-[24px] xl:text-[28px] text-center font-light mb-2 tracking-tight font-200">MIESCAPEへのお問い合わせありがとうございます。</div>
        <!-- Message Lines -->
        <div class="text-[#757575] text-[16px] md:text-[16px] lg:text-[18px] xl:text-[20px] text-center font-light leading-[1.7] mb-2 max-w-[520px]">
            お問い合わせありがとうございます。担当者からご連絡しますので、しばらくお待ち下さい。
        </div>
        <!-- Return Link -->
        <a href="<?php echo esc_url(home_url()); ?>" class="block mt-4 lg:mt-6 text-[#393939] text-[14px] md:text-[14px] lg:text-[16px] xl:text-[18px] tracking-[0.20em] font-normal underline underline-offset-8 hover:text-[#9E895B] transition">
            サイトに戻る
        </a>
    </div>
</div>

<script>
    (function() {
        const modal = document.getElementById('inquirySentModal');
        const modalContent = modal ? modal.querySelector('.modal-content-animate') : null;
        const closeBtn = document.getElementById('closeInquirySentModal');

        // Ensure modal bg and content are hidden initially
        if (modal) {
            modal.style.display = "none";
            modal.setAttribute('aria-hidden', 'true');
        }
        if (modalContent) {
            modalContent.style.display = "none";
            modalContent.style.opacity = "0";
            modalContent.style.transform = "scale(0.92)";
        }

        function openContactConfirmModal() {
            if (modal) {
                modal.style.display = "flex";
                setTimeout(() => {
                    modal.classList.add('modal-open');
                    modal.setAttribute('aria-hidden', 'false');
                    if (modalContent) {
                        modalContent.style.display = "flex";
                        modalContent.style.opacity = "1";
                    }
                }, 10);
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }
        }

        function closeContactConfirmModal() {
            if (modal) {
                modal.classList.remove('modal-open');
                modal.setAttribute('aria-hidden', 'true');
                setTimeout(() => {
                    modal.style.display = "none";
                    if (modalContent) {
                        modalContent.style.display = "none";
                    }
                }, 470);
            }
        }

        // Initialize on DOM ready
        function init() {
            // Close button event handlers
            if (modal && closeBtn) {
                closeBtn.addEventListener('click', function() {
                    closeContactConfirmModal();
                });

                modal.addEventListener('click', function(e) {
                    if (e.target === modal) {
                        closeContactConfirmModal();
                    }
                });

                document.addEventListener('keydown', function(e) {
                    if (modal && modal.classList.contains('modal-open') && e.key === "Escape") {
                        closeContactConfirmModal();
                    }
                });
            }
        }

        // Wait for DOM to be ready
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', init);
        } else {
            init();
        }

        // Check if page loaded with success hash (after form submission redirect)
        function checkForSuccessHash() {
            if (!window.location.hash || !window.location.hash.includes('wpcf7')) return;

            const forms = document.querySelectorAll('.wpcf7-form');
            forms.forEach(function(form) {
                const status = form.getAttribute('data-status');
                const hasSentClass = form.classList.contains('sent');
                const hasErrors = form.querySelector('.wpcf7-mail-failed, .wpcf7-validation-errors, .wpcf7-spam');

                if ((status === 'sent' || hasSentClass) && !hasErrors) {
                    openContactConfirmModal();
                    window.history.replaceState(null, '', window.location.pathname + window.location.search);
                }
            });
        }

        // Check hash on page load (after DOM is ready)
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', function() {
                setTimeout(checkForSuccessHash, 100); // Small delay to ensure CF7 has rendered
            });
        } else {
            setTimeout(checkForSuccessHash, 100);
        }

        // Listen for Contact Form 7 success event - ONLY event that shows modal
        document.addEventListener('wpcf7mailsent', function(event) {
            event.target.querySelector('.wpcf7-response-output').style.display = 'none';
            openContactConfirmModal();
            if (window.location.hash) {
                window.history.replaceState(null, '', window.location.pathname + window.location.search);
            }
        });

        // Listen for Contact Form 7 failure/error events - DO NOT show modal
        document.addEventListener('wpcf7mailfailed', function(event) {
            // Do nothing - CF7 will show its own error message
        }, false);

        document.addEventListener('wpcf7spam', function(event) {
            // Do nothing - CF7 will show its own spam message
        }, false);

        document.addEventListener('wpcf7invalid', function(event) {
            // Do nothing - CF7 will show its own validation error message
        }, false);
    })();
</script>

<?php
get_footer();
?>