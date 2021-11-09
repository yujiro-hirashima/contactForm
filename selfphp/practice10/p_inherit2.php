<?php 
require_once 'p_inherit.php';

class Inherit extends MyClass{
    public function getData2(){
        return "[".parent::getData()."]";

    }
}
$p = new Inherit('こんにちは');
echo $p->getData2();