<?php
$sender = $_POST['sender'] ?? 'unknown';
$message = $_POST['message'] ?? '';

if (!empty($message)) {
    // فرض: اتصال به پایگاه‌داده برقرار شده
    // نمونه درج در دیتابیس
    file_put_contents("sms_log.txt", "From: $sender\nMessage: $message\n\n", FILE_APPEND);
    echo "OK";
} else {
    echo "No message received";
}
?>
