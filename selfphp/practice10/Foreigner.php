<?php 
require_once 'Person1.php';

class Foreigner extends Person{
    //新たに追加したmiddleNameプロパティ
    public $middleName;

    //スーパークラスのコンストラクタをオーバライド
    public function __construct($firstName,$middleName,$lastName){
        //スーパークラスのコンストラクタを呼び出し
        parent::__construct($firstName,$lastName);
        //独自のmiddleNameプロパティを初期化
        $this->middleName = $middleName;
    }

    //middleNameプロパティ対応にshowメソッドもオーバライド
    public function show(){
        echo "<p>ボクの名前は{$this->firstName}.{$this->middleName}.{$this->lastName}です。</p>";
    }
}