<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>クラスを2つ作ってそれぞれのインスタンスを出力しよう</title>
</head>

<body>
  <p>
    <?php
    //foodクラスを定義する
    class Food
    {
      // プロパティを定義する
      private $name;
      private $price;

      // コンストラクタを定義する
      public function __construct(string $name, int $price)
      {
        $this->name = $name;
        $this->price = $price;
      }

      // メソッドを定義する
      public function getPrice()
      {
        echo $this->price . '<br>';
      }
    }

    //インスタンス化する
    $food = new Food('potato', 250);
    
    print_r($food);
    echo $food->getPrice();
    



    //Animalクラスを定義する
    class Animal
    {
      private $name;
      private $height;
      private $weight;

      // コンストラクタを定義する
      public function __construct(string $name, int $height, int $weight)
      {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

      // メソッドを定義する
      public function getHeight()
      {
        echo $this->height . '<br>';
      }
    }

    //インスタンス化する
    $animal = new Animal('dog', 60, 5000);
    
    print_r($animal);
    $animal->getHeight();

    ?>
  </p>
</body>

</html>