<?php 
class MyParent{
    public function hoge(){
        echo 'MYParent!!';
    }
}

trait MyTrait {
    public function hoge(){
        echo 'MYTrait!!';
    }
}

//MyParentクラス、MyTraitトレイトを継承
class MyChild extends MyParent{
    use Mytrait;

    public function hoge(){
        print 'MyChild!!';
    }
}

$cls = new MyChild();
$cls->hoge();