<?php

$botToken = "943426745:AAHOnwra1uIj57NTQ2yjcQvN2Xh1JSCvTsc";
$website = "https://api.telegram.org/bot".$botToken;


$update = file_get_contents($website."/getupdates");

$updateArray = json_decode($update, TRUE);

print_r($updateArray);

$chatId = $updateArray["result"][0]["message"]["chat"]["id"];

file_get_contents($website."/sendmessage?chat_id=".$chatID."$text=test");



?>
