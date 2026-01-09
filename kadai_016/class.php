<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP16章課題</title>
</head>
<body>
  <p>
    <?php

// --- Step 1 & 2: クラスの定義 ---

// Foodクラス
class Food {
    // プロパティの定義
    public $name;
    public $price;

    // コンストラクタ（値を代入）
    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // priceプロパティの値を出力するメソッド
    public function show_price() {
        echo $this->price . "\n";
    }
}

// Animalクラス
class Animal {
    // プロパティの定義
    public $name;
    public $height;
    public $weight;

    // コンストラクタ（値を代入）
    public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // heightプロパティの値を出力するメソッド
    public function show_height() {
        echo $this->height . "\n";
    }
}

// --- Step 3: インスタンスを作成し、出力する ---

// インスタンスの作成
$potato = new Food('potato', 250);
$dog = new Animal('dog', 60, 5000);

// print_r関数を使ってインスタンスを出力
print_r($potato);
print_r($dog);

// --- Step 4: メソッドへアクセスする ---

// メソッドの実行
$potato->show_price();
$dog->show_height();

?>
  </p>
</body>
</html>