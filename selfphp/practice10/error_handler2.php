<?php 
//int型の引数を受け取るhoge関数
function hoge(int $x){}

try{
    hoge("xxxx");
} catch(Exception $e){
    echo "例外：{$e->getMessage()}";
} catch(Error $e){
    echo "エラー：{$e->getMessage()}";
}