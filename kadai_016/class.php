<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // クラス定義（Food）
        class Food {
          private $name;
          private $price;

          // コンストラクタ
          public function __construct(string $name, int $price) {
          $this->name = $name;
          $this->price = $price; 
          }

          // メソッド（priceプロパティを出力）
          public function show_price() {
            echo $this->price .'<br>';
          }
        }
      
        // クラス定義（Animal）
        class Animal {
          private $name;
          private $height;
          private $weight;

          // コンストラクタ
          public function __construct(string $name, int $height, int $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
          }

          // メソッド（heightプロパティを出力）
          public function show_height() {
            echo $this->height .'<br>';
          }
        }

        // インスタンス化
        $food = new Food('じゃがいも', 250);
        $animal = new Animal('犬', 60,10);

        print_r($food);
        print_r($animal);

        $food->show_price();
        $animal->show_height();
        ?>
    </p>
</body>

</html>