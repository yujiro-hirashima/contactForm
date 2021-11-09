<?php 
require_once 'Figure.php';

class Square extends Figure{
    //四角形の面積を求めるためのgetAreaメソッドを定義
    public function getArea(): float{
        return $this->width * $this->height;
    }
}