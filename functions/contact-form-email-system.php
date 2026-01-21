<?php

/**
 * Contact Form Email System
 * 
 * Standalone email sending functionality extracted from WordPress theme
 * Can be used in any PHP project (WordPress or non-WordPress)
 * 
 * Features:
 * - PHP native mb_send_mail() function
 * - UTF-8 encoding support
 * - Multi-language support
 * - Auto-reply functionality
 * - Error handling
 * 
 * @version 1.0
 */

class ContactFormEmailSystem
{

    /**
     * Send email to admin/recipient
     * 
     * @param array $form_data Form data array
     * @param string $recipient_email Recipient email address
     * @param array $email_config Email configuration (subject, from_name, etc.)
     * @return bool Success status
     */
    public static function sendToAdmin($form_data, $recipient_email, $email_config = [])
    {

        // Set default configuration
        $default_config = [
            'subject' => '新規お問い合わせフォーム送信',
            'from_name' => 'Wellforce.jp',
            'from_email' => $recipient_email,
            'timezone' => 'Asia/Tokyo',
            'language' => 'Japanese'
        ];

        $config = array_merge($default_config, $email_config);

        // Set language and encoding
        mb_language($config['language']);
        mb_internal_encoding("UTF-8");
        date_default_timezone_set($config['timezone']);

        // Build email subject
        $subject = $config['subject'];

        // Build email body
        $body = "新しいお問い合わせフォームの送信を受け取りました。\n\n";
        $body .= "氏名: " . $form_data['name'] . "\n";
        $body .= "メールアドレス: " . $form_data['email'] . "\n";

        if (!empty($form_data['tel'])) {
            $body .= "電話番号: " . $form_data['tel'] . "\n";
        }

        if (!empty($form_data['title'])) {
            $body .= "件名: " . $form_data['title'] . "\n";
        }

        if (!empty($form_data['tour'])) {
            $body .= "ツアー: " . $form_data['tour'] . "\n";
        }

        $body .= "\nメッセージ:\n";
        $body .= $form_data['body'] . "\n\n";

        // Set email headers
        $headers = [];
        $headers[] = "From: " . mb_encode_mimeheader($config['from_name']) . " <" . $config['from_email'] . ">";
        $headers[] = "Reply-To: " . $form_data['email'];
        $headers[] = "Content-Type: text/plain; charset=UTF-8";
        $headers[] = "Content-Transfer-Encoding: 8bit";

        $header_string = implode("\r\n", $headers);

        // Send email
        $result = mb_send_mail($recipient_email, $subject, $body, $header_string);

        return $result;
    }

    /**
     * Send auto-reply email to user
     * 
     * @param array $form_data Form data array
     * @param string $recipient_email Admin email (used as From)
     * @param array $email_config Email configuration
     * @return bool Success status
     */
    public static function sendAutoReply($form_data, $recipient_email, $email_config = [])
    {

        // Set default configuration
        $default_config = [
            'subject' => 'Thank you for your inquiry',
            'auto_reply_subject' => 'Thank you for your inquiry', // Separate subject for auto-reply
            'from_name' => 'Wellforce.jp',
            'from_email' => $recipient_email,
            'timezone' => 'Asia/Tokyo',
            'language' => 'English',
            'company_name' => 'Wellforce.jp',
            'company_address' => '',
            'company_tel' => '',
            'company_fax' => ''
        ];

        $config = array_merge($default_config, $email_config);

        // Set language and encoding
        mb_language($config['language']);
        mb_internal_encoding("UTF-8");
        date_default_timezone_set($config['timezone']);

        // Build email subject (use auto_reply_subject if available, otherwise use subject)
        $subject = isset($config['auto_reply_subject']) ? $config['auto_reply_subject'] : $config['subject'];

        // Build simple success message only (use language-specific message if provided)
        $body = isset($config['auto_reply_body']) ? $config['auto_reply_body'] : "Successfully sent your inquiry to Wellforce.jp.";

        // Set email headers
        $headers = [];
        $headers[] = "From: " . mb_encode_mimeheader($config['from_name']) . " <" . $config['from_email'] . ">";
        $headers[] = "Content-Type: text/plain; charset=UTF-8";
        $headers[] = "Content-Transfer-Encoding: 8bit";

        $header_string = implode("\r\n", $headers);

        // Send email
        $result = mb_send_mail($form_data['email'], $subject, $body, $header_string);

        return $result;
    }

    /**
     * Send both admin notification and auto-reply
     * 
     * @param array $form_data Form data array
     * @param string $admin_email Admin email address
     * @param array $email_config Email configuration
     * @return array Results array with 'admin' and 'reply' status
     */
    public static function sendBoth($form_data, $admin_email, $email_config = [])
    {

        $results = [
            'admin' => false,
            'reply' => false
        ];

        // Send to admin
        $results['admin'] = self::sendToAdmin($form_data, $admin_email, $email_config);

        // Send auto-reply
        $results['reply'] = self::sendAutoReply($form_data, $admin_email, $email_config);

        return $results;
    }
}

/**
 * Form Validation Class
 */
class FormValidator
{

    /**
     * Validate contact form data
     * 
     * @param array $data Form data
     * @return array Validation result with 'valid' boolean and 'errors' array
     */
    public static function validateContactForm($data)
    {

        $errors = [];
        $valid = true;

        // Validate name
        if (empty($data['name'])) {
            $errors['name'] = 'Name is required';
            $valid = false;
        }

        // Validate email
        if (empty($data['email'])) {
            $errors['email'] = 'Email is required';
            $valid = false;
        } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Invalid email format';
            $valid = false;
        }

        // Validate re-email (if provided)
        if (!empty($data['re_email'])) {
            if ($data['email'] !== $data['re_email']) {
                $errors['re_email'] = 'Email addresses do not match';
                $valid = false;
            }
        }

        // Validate title (if required)
        if (isset($data['title_required']) && $data['title_required'] && empty($data['title'])) {
            $errors['title'] = 'Subject is required';
            $valid = false;
        }

        // Validate body
        if (empty($data['body'])) {
            $errors['body'] = 'Message is required';
            $valid = false;
        }

        return [
            'valid' => $valid,
            'errors' => $errors
        ];
    }
}

/**
 * Usage Example - Complete Contact Form Handler
 * 
 * This example shows how to use all the classes together
 */

/*
// Example: Basic contact form handler, no reCAPTCHA

// Start session (if not already started)
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

// Get form data
$form_data = [
    'name' => $_POST['formName'] ?? '',
    'email' => $_POST['formEmail'] ?? '',
    'tel' => $_POST['formTel'] ?? '',
    'title' => $_POST['formTitle'] ?? '',
    'tour' => $_POST['formTour'] ?? '',
    'body' => $_POST['formBody'] ?? ''
];

// Validate form
$validation = FormValidator::validateContactForm($form_data);

if ($validation['valid']) {
    // Configuration
    $admin_email = 'admin@example.com'; // Your admin email
    $email_config = [
        'subject' => 'New Contact Form Submission',
        'from_name' => 'Your Website Name',
        'from_email' => $admin_email,
        'company_name' => 'Your Company Name',
        'company_address' => '123 Main St, City, Country',
        'company_tel' => '+81-123-456-7890',
        'company_fax' => '+81-123-456-7891'
    ];
    
    // Send emails
    $results = ContactFormEmailSystem::sendBoth($form_data, $admin_email, $email_config);
    
    if ($results['admin'] && $results['reply']) {
        // Success - redirect to thank you page
        header('Location: /thank-you.php');
        exit;
    } else {
        // Error - redirect to error page
        header('Location: /error.php');
        exit;
    }
} else {
    // Validation errors - show form again with errors
    // Handle errors...
}
*/

// Example: WordPress Integration WITHOUT reCAPTCHA
/*
function handle_contact_form_submission() {
    // Check if form was submitted
    if (!isset($_POST['formStatus']) || $_POST['formStatus'] !== 'send') {
        return;
    }
    
    // Verify nonce/CSRF token (WordPress way)
    if (!isset($_POST['formToken']) || !isset($_SESSION['formToken']) || 
        $_POST['formToken'] !== $_SESSION['formToken']) {
        wp_die('Security check failed');
    }
    
    // Get form data
    $form_data = [
        'name' => sanitize_text_field($_POST['formName'] ?? ''),
        'email' => sanitize_email($_POST['formEmail'] ?? ''),
        'tel' => sanitize_text_field($_POST['formTel'] ?? ''),
        'title' => sanitize_text_field($_POST['formTitle'] ?? ''),
        'tour' => sanitize_text_field($_POST['formTour'] ?? ''),
        'body' => sanitize_textarea_field($_POST['formBody'] ?? '')
    ];
    
    // Validate form
    $validation = FormValidator::validateContactForm($form_data);

    if (!$validation['valid']) {
        // Return to form with errors
        wp_safe_redirect(home_url('/contact'));
        exit;
    }
    
    // Get admin email from WordPress options
    $admin_email = get_option('contact_form_email', get_option('admin_email'));
    
    // Email configuration
    $email_config = [
        'subject' => 'New Contact Form Submission - ' . get_bloginfo('name'),
        'from_name' => get_bloginfo('name'),
        'from_email' => $admin_email,
        'company_name' => get_bloginfo('name'),
        'company_address' => get_option('company_address', ''),
        'company_tel' => get_option('company_tel', ''),
        'company_fax' => get_option('company_fax', '')
    ];
    
    // Send emails
    $results = ContactFormEmailSystem::sendBoth($form_data, $admin_email, $email_config);
    
    if ($results['admin'] && $results['reply']) {
        // Clear session token
        unset($_SESSION['formToken']);
        $_SESSION['form_sent'] = true;
        
        wp_safe_redirect(home_url('/thank-you'));
        exit;
    } else {
        wp_safe_redirect(home_url('/error'));
        exit;
    }
}
add_action('template_redirect', 'handle_contact_form_submission');
*/