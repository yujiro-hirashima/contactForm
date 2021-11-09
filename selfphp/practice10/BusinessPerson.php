<?php 
//継承元のクラスファイルをインポート
require_once 'Person1.php';

class BusinessPerson extends Person{
    //サブクラス独自のworkメソッドを定義
    public  function work(){
        echo "<p>{$this->lastName}{$this->firstName}は働いています。<p/>";
    }
}