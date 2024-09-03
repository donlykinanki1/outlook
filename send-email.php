<?php
// Telegram bot token and chat ID
$botToken = "7404595804:AAGLE2DSIFR0om14aoPECPucVhB43eg5J0o"; // Replace with your bot token
$chatId = "6778791707"; // Replace with your chat ID

// Message to send
$message = "Test message from send-email.php";

// Telegram API URL
$telegramApiUrl = "https://api.telegram.org/bot$botToken/sendMessage";

// Create an array with the data to send
$data = [
    'chat_id' => $chatId,
    'text' => $message
];

// Use cURL to send the POST request
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $telegramApiUrl);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// Log the response for debugging
file_put_contents('telegram_log.txt', $response . PHP_EOL, FILE_APPEND);

echo "Message sent!";
?>
