<?php 
	// ロボットをクラスを作成
	// イメージとしてはドラえもん
	// 猫型ロボットを大量生産するための設計図を定義し、実際にロボットを作る

$robot1 = new Robot();
//プロパティをアロー演算子使って呼び出すとき、＄は省略
//✖︎$robot->$name = 'doraemon';
// 各メソッドに値を設定
$robot1->setName('ドラえもん');
$robot1->setFood('どら焼き');
$robot1->greeting();

//設計図(class)
class Robot{
  public $name;
  public $food;

  // nameプロパティに値を設定するメソッド
  public function setName($namae){
    $this->name = $namae;
  }

  // foodプロパティに値を設定するメソッド
  public function setFood($tabemono){
    $this->food = $tabemono;
  }

  private function talk(){
    echo 'こんにちは、ボクの名前は' . $this->name . 'です<br>';
  }

  private function eat(){
    echo '好きな食べ物は' . $this->food . 'です<br>';
  }

  public function greeting(){
    $this->talk();
    $this->eat();
  }
}





