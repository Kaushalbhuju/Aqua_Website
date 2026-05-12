<?php
declare(strict_types=1);

declare(strict_types=1);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../contact.php');
    exit;
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');
$csrfToken = $_POST['csrf_token'] ?? '';

$errors = [];

if (empty($name)) {
    $errors[] = 'Name is required.';
}

if (empty($email)) {
    $errors[] = 'Email is required.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please enter a valid email address.';
}

if (empty($subject)) {
    $errors[] = 'Please select a subject.';
}

if (empty($message)) {
    $errors[] = 'Message is required.';
}

if (empty($csrfToken) || !hash_equals($_SESSION['csrf_token'] ?? '', $csrfToken)) {
    $errors[] = 'Invalid form submission. Please try again.';
}

if (!empty($errors)) {
    $_SESSION['form_errors'] = $errors;
    header('Location: ../contact.php?error=' . urlencode(implode(' ', $errors)));
    exit;
}

$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$phone = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
$subject = htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

$subjectMap = [
    'general' => 'General Inquiry',
    'course' => 'Course Information',
    'study-abroad' => 'Study Abroad',
    'ssw-program' => 'SSW Program',
    'jlpt-prep' => 'JLPT Preparation',
    'other' => 'Other'
];

$subjectLabel = $subjectMap[$subject] ?? $subject;

$to = 'ssw.edu.academy@gmail.com';
$emailSubject = "Aqua Education Website: $subjectLabel from $name";

$emailBody = "
<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #0A2463; color: white; padding: 20px; text-align: center; }
        .content { padding: 20px; background: #f8fafc; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #0A2463; }
        .value { margin-top: 5px; }
        .footer { text-align: center; padding: 15px; background: #e2e8f0; font-size: 12px; color: #666; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h2>New Inquiry from Aqua Education Website</h2>
        </div>
        <div class='content'>
            <div class='field'>
                <div class='label'>Name:</div>
                <div class='value'>$name</div>
            </div>
            <div class='field'>
                <div class='label'>Email:</div>
                <div class='value'><a href='mailto:$email'>$email</a></div>
            </div>" . ($phone ? "
            <div class='field'>
                <div class='label'>Phone:</div>
                <div class='value'>$phone</div>
            </div>" : '') . "
            <div class='field'>
                <div class='label'>Subject:</div>
                <div class='value'>$subjectLabel</div>
            </div>
            <div class='field'>
                <div class='label'>Message:</div>
                <div class='value'>" . nl2br($message) . "</div>
            </div>
        </div>
        <div class='footer'>
            <p>This message was sent from the Aqua Education and Training Academy website.</p>
            <p>Time: " . date('Y-m-d H:i:s') . "</p>
        </div>
    </div>
</body>
</html>
";

$headers = [
    'MIME-Version: 1.0',
    'Content-Type: text/html; charset=UTF-8',
    'From: Aqua Education <noreply@aquaeducation.com>',
    'Reply-To: ' . $name . ' <' . $email . '>'
];

$emailSent = mail($to, $emailSubject, $emailBody, implode("\r\n", $headers));

if ($emailSent) {
    unset($_SESSION['csrf_token']);
    header('Location: ../contact.php?success=' . urlencode('Thank you for your message! We will get back to you within 24 hours.'));
    exit;
} else {
    header('Location: ../contact.php?error=' . urlencode('Failed to send message. Please try again later or call us directly.'));
    exit;
}