<?php 
require_once 'Triangle.php';
require_once 'square.php';

//IFigure実装クラスの配列を用意
$figs = [];
$figs[] = new Triangle(10,5);
$figs[] = new Square(10,5);
$figs[] = new Triangle(8,12);

//配列$figsの内容を順番に処理
foreach($figs as $fig){
    //IFigureインターフェイスを実装している場合のみgetAreaメソッドを実行
    if($fig instanceof IFigure){
        echo'<p>'.get_class($fig).':'.$fig->getArea().'</p>';
    }
}