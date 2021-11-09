<?php 
abstract class Figure{
    //プロパティを定義
    protected $width;
    protected $height;
    //コンストラクタ
    public function __construct(float $width,float $height){
        $this->width = $width;
        $this->height = $height;
    }
    //面積を求める（中身はダミー）
    protected abstract function getArea():float;
}