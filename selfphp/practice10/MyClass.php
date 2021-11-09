<?php  
namespace practice10;

class MyClass{
    //現在の名前空間を表示するための静的メソッドshowNamespace
    public static function showClass(){
        echo __CLASS__."<br/>";
        echo __NAMESPACE__.'<br/>';
        echo __FILE__;
    }

    public function square($width,$height){
        $squ = $width * $height;
        echo "底辺{$width}cm、高さ{$height}cmの四角形の面積は{$squ}cm^2です。";
    }
}

?>