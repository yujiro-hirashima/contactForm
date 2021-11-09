<?php 
    function getTriangleArea(float $base =3,float $height = 3): float{
        return $base * $height / 2;
    }

    function getDiamondArea(float $diagonal1,float $diagonal2):float{
        return $diagonal1 * $diagonal2 / 2;
    }

    function sumnum(float &$num):float{
        return $num++;
    }

    function sum(float ...$args):float{
        $answer = 0;
        foreach($args as $arg){
            $answer += $arg;
        }
        return $answer;
    }

    function replaceContents(string $path,string ...$args):string{
        $data = file_get_contents($path);
        for ($i=0; $i < count($args); $i++) { 
            $data = str_replace('{'.($i).'}',$args[$i],$data);
        }
        return $data;
    }

    function product(float ...$args):float{
        $answer = 1;
        foreach($args as $arg){
            $answer *= $arg;
        }
        return $answer;
    }

    function max_min(float ...$args):array{
        return [max($args),min($args)];
    }

    function factorial(int $num):int{
        if ($num !== 0){
            return $num * factorial($num - 1);
        }
        return 1;
    }

    function my_array_walk(array $array, callable $func){
        foreach($array as $key => $value){
            $func($value,$key);
        }
    }
    function showItem($value,$key){
        echo "{$key}:{$value}<br />";
    }

    function getPrimes(){
        $num = 2; //素数の開始値
        // 2から順に素数判定し、素数の場合にだけyield(無限ループ)
        while($num <100){
            if(isPrime($num)){yield $num;}
            $num++;
        }
    }
    function isPrime(int $value):bool{ //引数$valueが素数かどうかを判定
        $prime = true; //素数かどうかを表すフラグ
        // 2 ~sqrt($value)で、$valueを割り切れる（余りが0）ものがあるか
        for($i = 2; $i <= floor(sqrt($value)); $i++){
            if($value % $i === 0){
                $prime = false; //割り切れるものがあれば素数でない
                break;
            }
        }
        return $prime;
    }

    function square(float $base = 1,float $height = 1):float{
        return $base * $height;
    }

    function processNumber(callable $func, float ...$args): array{
        foreach ($args as $arg){
            $result[] = $func($arg);
        }
        return $result;
    }
    list($x1,$y1) = processNumber(
        function(float $num):float{return $num * $num;},5,15
    )

?>