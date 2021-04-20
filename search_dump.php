<?php 
// APIを呼ぶためのオブジェクトを生成
require_once("common.php");

// 検索実行
$data = $connection->get(
                             "search/tweets",
                             array("q" => "さくら")
                         );

// 結果出力
var_dump($data);
