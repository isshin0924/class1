<?php
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