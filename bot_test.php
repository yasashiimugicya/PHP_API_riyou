<?php 
require_once("common.php");

$tweet = "春はあけぼの";
$connection->post(
                  "statuses/update",
                  array("status" => $tweet)
                 );
