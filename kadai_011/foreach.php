<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>foreach文を使って連想配列の値とキーを出力</title>
</head>

<body>
    <p>
        <?php
        $variable_name = ['name' => '玉ねぎ', 'price' => 200, 'place' => '北海道'];
        
        foreach ($variable_name as $key => $value) {
            echo "{$key}: {$value}<br>";
        }
        ?>
    </p>
</body>

</html>