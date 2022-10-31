
<?php
$user_name = htmlspecialchars($_POST["username"]);
$user_phon = htmlspecialchars($_POST["userphon"]);

$token = "5402356824:AAFiCPd48QOWjKPuuqIj5IOGk3U0cGxyh4A";
$chat_id = "-893163508";
$formData = array(
  "Клиент: " => $user_name,
  "Телефон: " => $user_phon
);

foreach($formData as $key => $value) {
  $text .= $key . "<b>" . urlencode($value) . "</b>" . "%0A";
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");

if ($sendToTelegram) {
  echo "Success";
} else {
  echo "Error";
}

