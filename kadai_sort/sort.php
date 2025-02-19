<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($num, $orderBy = 'asc')
        {
            if($orderBy === 'asc'){
                sort($nums);
                echo '昇順にソートします。<br>';
            } elseif ($orderBy === 'desc'){
                rsort($nums);
                echo '降順にソートします。<br>';
            } else {
                echo '無防備なソート順が指定されました。<br>';
                return $nums;
            }
            foreach ($nums as $num){
                echo "{$num}<br>";
            }
            return $nums;
        }
        $numbers = [4,2,8,5,7];
        sort_2way($numbers, 'asc');
        echo '<hr>';
        sort_2way($numbers, 'desc');
        ?>
    </p>
</body>

</html>