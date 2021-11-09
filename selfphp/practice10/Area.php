<?php 
class Area{
    const pI = 3.14;

    public static function circle($radius){
        return pow($radius,2) * self::pI;
    }
}
?>