<?php
require_once 'Area.php';
require_once 'MyClass.php';

$s = new MyClass();

echo '円の面積：'.Area::circle(3).'cm^2';
echo '<br/>';

$s->square(5,8);