<?php 
// APIを利用するために必要な情報
define("CONSUMER_KEY", "");
define("CONSUMER_SECRET", "");
$access_token = "";
$access_token_secret = "";

// TwitterAPIを利用するためのクラスを読み込み
require "twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

// APIを呼ぶためのオブジェクトを生成
$connection = new TwitterOAuth(
                    CONSUMER_KEY, 
                    CONSUMER_SECRET, 
                    $access_token, 
                    $access_token_secret
                  );
