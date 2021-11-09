<?php 
require_once 'Triangle.php';
require_once 'square.php';

$tri = new Triangle(32,5);
$squ = new Square(5,10);

echo "三角形の面積：{$tri->getArea()}cm^2";
echo "<br/>";
echo "四角形の面積：{$squ->getArea()}cm^2";