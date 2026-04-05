<?php

$token = "8685923119:AAHhZByy6WIFa1xv-uuWTsbdVbdDBwSE-88";

$data = file_get_contents("php://input");
$update = json_decode($data, true);

if(isset($update["message"])) {

    $chat_id = $update["message"]["chat"]["id"];

    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=Bot Render aktif 🚀");
}