<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ここにコードを書いていく
        function sort_2way($array, $order) {
         
         //昇順のメッセージ表示
          if ($order) {
              echo '昇順にソートします。<br>';
              sort($array);
          //降順のメッセージ表示    
          } else {
              echo '降順にソートします。<br>';
              rsort($array);
          }
          //配列の内容を表示
          foreach ($array as $num) {
              echo $num . '<br>';
          }

        }
          //テストデータ  
         $nums = [15, 4, 18, 23, 10];
          //配列を昇順に
         sort_2way($nums, true);

          //配列を降順に  
         sort_2way($nums,false);
         
         ?>  
     </p>
</body>

</html>
