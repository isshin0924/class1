<?php 
	// ロボットをクラスを作成
	// イメージとしてはドラえもん
	// 猫型ロボットを大量生産するための設計図を定義し、実際にロボットを作る

// 設計書
class Robot
 {	//プロパティ＝変数
	public $name;
	public $food;
}

$robot1 = new Robot();
//プロパティをアロー演算子使って呼び出すとき、＄は省略
//✖︎$robot->$name = 'doraemon';
$robot1->name = 'doraemon';//○






class Car{
  public $speed;

  // エンジンをかける
  function start(){
    echo 'エンジンをかけました<br>';
  }

  // 走る
  function run(){
    echo '走り出しました<br>';
    // 時速を表示させる処理を呼び出します
    $this->showSpeed();
  }

  // 時速を表示する
  function showSpeed(){
    echo '時速' . $this->speed . 'km/hで走っています<br>';
  }

  // 止まる
  function stop(){
    echo '止まりました<br>';
  }
}

$car = new Car();
$car->speed = 60;