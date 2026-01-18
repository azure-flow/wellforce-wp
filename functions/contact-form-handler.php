<?php

/**
 * Contact Form Handler for page-contact.php
 * 
 * Processes the contact form submission and sends emails
 * 
 * Usage: Add this to your WordPress theme's functions.php or include it
 */

// Include the email system
require_once get_template_directory() . '/functions/contact-form-email-system.php';

/**
 * Handle contact form submission
 */
function handle_contact_form_submission()
{

    // Only process POST requests
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        return;
    }

    // Check if form was submitted (you can add a hidden field or check for submit button)
    if (!isset($_POST['contact_submit'])) {
        return;
    }

    // Start session if not already started
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }

    // Verify nonce for security
    if (!isset($_POST['contact_form_nonce']) || !wp_verify_nonce($_POST['contact_form_nonce'], 'contact_form_action')) {
        wp_die('Security check failed');
    }

    // Get form data and sanitize
    $form_data = [
        'name' => sanitize_text_field($_POST['name'] ?? ''),
        'nationality' => sanitize_text_field($_POST['nationality'] ?? ''),
        'email' => sanitize_email($_POST['email'] ?? ''),
        'participants' => sanitize_text_field($_POST['participants'] ?? ''),
        'date1' => sanitize_text_field($_POST['date1'] ?? ''),
        'date2' => sanitize_text_field($_POST['date2'] ?? ''),
        'date3' => sanitize_text_field($_POST['date3'] ?? ''),
        'comments' => sanitize_textarea_field($_POST['comments'] ?? '')
    ];

    // Check agreement checkbox
    if (!isset($_POST['agreement']) || $_POST['agreement'] !== 'on') {
        wp_redirect(add_query_arg('error', 'agreement', wp_get_referer()));
        exit;
    }

    // Detect current language
    $lang = function_exists('pll_current_language') ? pll_current_language() : 'en';
    if (empty($lang)) {
        $lang = 'en'; // Default to English
    }

    // Language-specific error messages
    $error_messages = [
        'en' => [
            'name_required' => 'Full Name is required',
            'nationality_required' => 'Nationality is required',
            'email_required' => 'E-Mail is required',
            'email_invalid' => 'Invalid email format',
            'send_failed' => 'Failed to send email. Please try again later.'
        ],
        'ja' => [
            'name_required' => '氏名は必須です',
            'nationality_required' => '国籍は必須です',
            'email_required' => 'メールアドレスは必須です',
            'email_invalid' => 'メールアドレスの形式が正しくありません',
            'send_failed' => 'メールの送信に失敗しました。しばらくしてから再度お試しください。'
        ],
        'zh' => [
            'name_required' => '姓名為必填項目',
            'nationality_required' => '國籍為必填項目',
            'email_required' => '電子郵件為必填項目',
            'email_invalid' => '電子郵件格式無效',
            'send_failed' => '郵件發送失敗。請稍後再試。'
        ]
    ];

    $msgs = $error_messages[$lang] ?? $error_messages['en'];

    // Validate required fields
    $errors = [];

    if (empty($form_data['name'])) {
        $errors[] = $msgs['name_required'];
    }

    if (empty($form_data['nationality'])) {
        $errors[] = $msgs['nationality_required'];
    }

    if (empty($form_data['email'])) {
        $errors[] = $msgs['email_required'];
    } elseif (!is_email($form_data['email'])) {
        $errors[] = $msgs['email_invalid'];
    }

    // If validation errors, redirect back with errors
    if (!empty($errors)) {
        $_SESSION['contact_errors'] = $errors;
        $_SESSION['contact_form_data'] = $form_data;
        wp_redirect(add_query_arg('error', 'validation', wp_get_referer()));
        exit;
    }

    // Prepare email data (matching ContactFormEmailSystem format)
    $email_form_data = [
        'name' => $form_data['name'],
        'email' => $form_data['email'],
        'nationality' => $form_data['nationality'],
        'tel' => '', // Not in your form
        'title' => get_contact_form_title($lang),
        'tour' => '', // Not in your form
        'body' => build_email_body($form_data, $lang) // Custom body with all fields
    ];

    // Admin email addresses (send to both)
    $admin_emails = [
        'tourism@iseshima-t.com',
        'info@shinn-japan.co.jp'
    ];
    
    // Use first email as the "from" email for auto-reply
    $admin_email = $admin_emails[0];

    // Language-specific email configuration
    // Note: Using 'uni' (Unicode) for all languages to properly handle any input language
    // Users can input text in any language regardless of the page language
    $email_configs = [
        'en' => [
            'subject' => 'New Contact Form Submission - ' . get_bloginfo('name'),
            'auto_reply_subject' => 'Thank you for contacting MIESCAPE',
            'language' => 'uni', // Unicode handles all languages (English, Japanese, Chinese, etc.)
            'auto_reply_body' => 'Successfully sent your inquiry to Miescape.jp.'
        ],
        'ja' => [
            'subject' => '新規お問い合わせフォーム送信 - ' . get_bloginfo('name'),
            'auto_reply_subject' => 'MIESCAPEへのお問い合わせありがとうございます',
            'language' => 'uni', // Unicode handles all languages (English, Japanese, Chinese, etc.)
            'auto_reply_body' => 'お問い合わせを正常に送信いたしました。'
        ],
        'zh' => [
            'subject' => '新聯絡表單提交 - ' . get_bloginfo('name'),
            'auto_reply_subject' => '感謝您聯絡MIESCAPE',
            'language' => 'uni', // Unicode handles all languages (English, Japanese, Chinese, etc.)
            'auto_reply_body' => '您的詢問已成功發送。'
        ]
    ];

    // Email configuration
    $email_config = array_merge([
        'from_name' => get_bloginfo('name'),
        'from_email' => $admin_email,
        'timezone' => 'Asia/Tokyo',
        'company_name' => get_bloginfo('name'),
        'company_address' => '',
        'company_tel' => '',
        'company_fax' => ''
    ], $email_configs[$lang] ?? $email_configs['en']);

    // Send admin emails to all recipients
    $admin_results = [];
    foreach ($admin_emails as $email) {
        $admin_results[] = ContactFormEmailSystem::sendToAdmin($email_form_data, $email, $email_config);
    }
    
    // Send auto-reply to user (only once)
    $reply_result = ContactFormEmailSystem::sendAutoReply($email_form_data, $admin_email, $email_config);
    
    // Consider success if at least one admin email and the reply were sent
    $admin_success = !empty(array_filter($admin_results));
    $results = [
        'admin' => $admin_success,
        'reply' => $reply_result
    ];

    if ($results['admin'] && $results['reply']) {
        // Success - clear any previous errors and redirect
        unset($_SESSION['contact_errors']);
        unset($_SESSION['contact_form_data']);
        $_SESSION['contact_sent'] = true;

        // Redirect to thank you page or same page with success message
        wp_redirect(add_query_arg('success', '1', wp_get_referer()));
        exit;
    } else {
        // Error sending email
        $_SESSION['contact_errors'] = [$msgs['send_failed']];
        wp_redirect(add_query_arg('error', 'send', wp_get_referer()));
        exit;
    }
}
add_action('template_redirect', 'handle_contact_form_submission');

/**
 * Get contact form title based on language
 */
function get_contact_form_title($lang = 'en')
{
    $titles = [
        'en' => 'Contact Form Inquiry',
        'ja' => 'お問い合わせフォーム送信',
        'zh' => '聯絡表單詢問'
    ];
    return $titles[$lang] ?? $titles['en'];
}

/**
 * Build email body with all form fields
 */
function build_email_body($form_data, $lang = 'en')
{
    $labels = [
        'en' => [
            'header' => 'Contact Form Submission Details',
            'name' => 'Full Name',
            'nationality' => 'Nationality',
            'email' => 'Email Address',
            'participants' => 'Number of Participants',
            'date1' => 'Preferred Date 1',
            'date2' => 'Preferred Date 2',
            'date3' => 'Preferred Date 3',
            'comments' => 'Comments'
        ],
        'ja' => [
            'header' => 'お問い合わせフォーム送信詳細',
            'name' => '氏名',
            'nationality' => '国籍',
            'email' => 'メールアドレス',
            'participants' => 'ご参加希望人数',
            'date1' => 'ご希望日 1',
            'date2' => 'ご希望日 2',
            'date3' => 'ご希望日 3',
            'comments' => 'コメント'
        ],
        'zh' => [
            'header' => '聯絡表單提交詳細',
            'name' => '姓名',
            'nationality' => '國籍',
            'email' => '電子郵件',
            'participants' => '預計參加人數',
            'date1' => '希望日期 1',
            'date2' => '希望日期 2',
            'date3' => '希望日期 3',
            'comments' => '備註'
        ]
    ];

    $lbl = $labels[$lang] ?? $labels['en'];

    $body = $lbl['header'] . "\n\n";
    $body .= $lbl['name'] . ": " . $form_data['name'] . "\n";
    $body .= $lbl['nationality'] . ": " . $form_data['nationality'] . "\n";
    $body .= $lbl['email'] . ": " . $form_data['email'] . "\n";

    if (!empty($form_data['participants'])) {
        $body .= $lbl['participants'] . ": " . $form_data['participants'] . "\n";
    }

    if (!empty($form_data['date1'])) {
        $body .= $lbl['date1'] . ": " . $form_data['date1'] . "\n";
    }

    if (!empty($form_data['date2'])) {
        $body .= $lbl['date2'] . ": " . $form_data['date2'] . "\n";
    }

    if (!empty($form_data['date3'])) {
        $body .= $lbl['date3'] . ": " . $form_data['date3'] . "\n";
    }

    if (!empty($form_data['comments'])) {
        $body .= "\n" . $lbl['comments'] . ":\n" . $form_data['comments'] . "\n";
    }

    return $body;
}

/**
 * Display form errors and success messages
 */
function display_contact_form_messages()
{
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }

    // Success message is now handled by modal, so we don't display it here
    // But we still clear the session flag if it exists
    if (isset($_GET['success']) && $_GET['success'] == '1') {
        unset($_SESSION['contact_sent']);
    }

    // Display error messages
    if (isset($_SESSION['contact_errors']) && !empty($_SESSION['contact_errors'])) {
        echo '<div class="w-full max-w-[520px] mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded">';
        echo '<ul class="list-disc list-inside">';
        foreach ($_SESSION['contact_errors'] as $error) {
            echo '<li>' . esc_html($error) . '</li>';
        }
        echo '</ul>';
        echo '</div>';
        unset($_SESSION['contact_errors']);
    }
}

/**
 * Get form field value (for repopulating form on error)
 */
function get_contact_form_value($field_name, $default = '')
{
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }

    if (isset($_SESSION['contact_form_data'][$field_name])) {
        return esc_attr($_SESSION['contact_form_data'][$field_name]);
    }

    return $default;
}