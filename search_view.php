<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Twitter検索</title>
  </head>
  <body>
    <form action="search.php" method="get">
      <input type="text" name="keyword">
      <input type="submit" value="検索">
    </form>
<?php
if(isset($data)) :
  foreach($data->statuses as $tweet) :
    ?><div style='clear:both;'><?php
    echo "<img src='{$tweet->user->profile_image_url}' style='float:left;'>";
    echo "<p>{$tweet->text}</p>";
    ?></div><?php
  endforeach;
endif;
?>
   </body>
</html>
