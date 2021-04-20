<?php 
require_once("common.php");

$messages[] = "人間万事塞翁が馬";
$messages[] = "賽は投げられた";
$messages[] = "人間は考える葦である";
$messages[] = "敵を知り己を知らば百戦危うからず";

$key = array_rand($messages);
$tweet = $messages[$key];

$connection->post(
                  "statuses/update",
                  array("status" => $tweet)
                 );
