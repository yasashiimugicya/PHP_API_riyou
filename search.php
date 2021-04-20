<?php 
// APIを呼ぶためのオブジェクトを生成
require_once("common.php");

// 検索実行
if ($_GET["keyword"]) {
  $data = $connection->get(
                           "search/tweets",
                           array("q" => $_GET["keyword"])
                         );
}
// 結果出力
require_once("search_view.php");
