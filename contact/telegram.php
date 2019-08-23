<?php
define ('url',"https://api.telegram.org/bot714427896:AAE9cQwaoaawZPOZfUY_cqtMmIRIvhf5wGQ/");

if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$chat_id = '750821322';

$chat_message = urlencode("Name : ".$name."\nPhone : ".$phone."\nE-mail : ".$email_address."\nMessage : ".$message);

/*file_get_contents(url."sendmessage?text=".$chat_message."&chat_id=".$chat_id."&parse_mode=HTML");*/
file_get_contents(url."sendMessage?chat_id=".$chat_id."&text=".$chat_message."&parse_mode=HTML");
?>

<!-- 
https://api.telegram.org/bot714427896:AAE9cQwaoaawZPOZfUY_cqtMmIRIvhf5wGQ/getMe
https://api.telegram.org/bot714427896:AAE9cQwaoaawZPOZfUY_cqtMmIRIvhf5wGQ/getUpdates
https://api.telegram.org/bot714427896:AAE9cQwaoaawZPOZfUY_cqtMmIRIvhf5wGQ/sendMessage?chat_id=750821322&text=TestReply
 -->