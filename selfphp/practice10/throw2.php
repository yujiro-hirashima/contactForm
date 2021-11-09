<?php 
//自作の例外クラスを定義
class UrlSyntaxExeption extends Exception{}
class UrlReqrestExeption extends Exception{}

class MyUtil {
    public static function getContents($url){
        if(!preg_match('|http(s)?://([\w-]+\.)+[\w-]+(/[\w- ./?%&=]*)?|',$url)){
            throw new UrlSyntaxExeption('不正なURLの形式です。');
        }
        $data = @file_get_contents($url);
        if(!$data){
            throw new UrlReqrestExeption('指定されたURLが見つかりません');
        }
        return $data;
    }
}

try{
    echo MyUtil::getContents('http://www.wings.msn.to/nothing/');
} catch(UrlSyntaxExeption $e){
    echo "警告：{$e->getMessage()}";
} catch(UrlReqrestExeption $e){
    echo"エラー：{$e->getMessage()}";
}