<?php 
require_once("common.php");
$content = $connection->get("account/verify_credentials");
var_dump($content);

