<?php 
require_once 'BusinessPerson.php';

class HetareBusinessPerson extends BusinessPerson {
    // BusinessPersonクラスのworkメソッドをオーバライド
    public function work(){
        parent::work();  //スーパークラスのworkメソッド
        echo 'ただし、ボチボチと...';  //独自の処理
    }
}