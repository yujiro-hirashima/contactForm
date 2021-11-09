<?php
class TriangleFigure{
    //base,heightプロパティを定義
    private $base;
    private $height;
    //プロパティ値を初期化（コンストラクタ）
    public function __construct(){
        $this->setBase(1);
        $this->setHeight(1);
    }

    //baseプロパティのゲッターメソッド
    public function getBase():float {
        return $this->base;
    }
    //baseプロパティのセッターメソッド
    public function setBase(float $base){
        if($base > 0){
            $this->base = $base;
        }
    }
    //heightプロパティのゲッターメソッド
    public function getHeight(): float {
        return $this->height;
    }
    //heightプロパティのセッターメソッド
    public function setHeight(float $height){
        if($height > 0){
            $this->height = $height;
        }
    }

    //プロパティ値を基に面積を取得
    public function getArea(){
        return $this->getBase() * $this->getHeight() / 2;
    }
}