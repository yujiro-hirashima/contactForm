<?php 
class Book{
    //フィールド値を設定/取得するためのプロパティ
    public $isbn;
    public $title;
    public $price;
    public $publish;
    public $published;
    private $_rate; //値引き率

    // インスタンス化時に値引き率をセット
    public function __construct(float $rate){
        $this->_rate = $rate;
    }
    // 値引き後の価格を取得するdiscountメソッド
    public function discount(): float{
        return floor($this->price * (1-$this->_rate));
    }
}