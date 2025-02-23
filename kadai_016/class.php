<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>phpクラス課題</title>
</head>
<body>
  <p>
    <?php
    class Food {
      private $name;
      private $price;

      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }

      public function show_price() {
        echo $this->price;
      }
    }
    $potato = new Food("potato", 250);
    echo '価格: ';
    $potato->show_price();
    
    echo '<br>オブジェクト内容:<br>';
    echo '<pre>';
    print_r($potato);
    echo '</pre>';
    ?>
  </p>
</body>
</html>