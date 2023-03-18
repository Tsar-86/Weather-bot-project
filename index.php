<?php
  
  ini_set('error_reporting', E_ALL);
  ini_set('display_reporting', 1);
  ini_set('display_startup_errors', 1);

  define("TG_TOKEN", "6031302865:AAFk2ZPvnew1mmYySWXnwNi9yb_a4BXKZyE");
  define("TG_USER_ID", "1042429054");


  /* Отправка сообщений GET запросом */
    // $textMessage = "Take this weather";
    // $textMessage = urlencode($textMessage);

    // $urlQuery = "https://api.telegram.org/bot". TG_TOKEN ."/sendMessage?chat_id=". TG_USER_ID ."&text=" . $textMessage;

    // $result = file_get_contents($urlQuery);
    

$textMessage = "Today weather is like \n";
$textMessage .= "Tomorrow weather";


/* Отрправка сообщений POST запросом */

$getQuery = array(
    "chat_id" => TG_USER_ID,
    "text" => $textMessage,
    "parse_mode" => "html",
);

$ch = curl_init("https://api.telegram.org/bot". TG_TOKEN ."/sendMessage?" . http_build_query($getQuery));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);

$resultQuery = curl_exec($ch);
curl_close($ch);

echo $resultQuery;
?>