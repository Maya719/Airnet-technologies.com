<?php
$api_url = 'https://7fd9-110-93-246-34.ngrok-free.app/test';
$ch = curl_init($api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
}
curl_close($ch);
?>
