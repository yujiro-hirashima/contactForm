<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $name = 'あおい';
    $teisu = function($s){
        return $s;
    };
    const NAME = "aoi";
    // print命令は指定された文字列を表示するための命令です。
    $hello = <<<hello
    こんにちは、世界！<br />
    こんにちは、皆さん！<br />
    こんにちは、ゆうた！<br />
    {$name}
    {$teisu(NAME)}<br/>
    hello;
    print $hello;

    print NAME;

    $x = 'title';
    $title = 'こんばんは';
    $xtitle = 'おはよう';
    print $$x;
    print '<br/>';
    print $x;
    $y = 'x';
    print $$$y;
    print '<br/>';

    const TAX = 1.08;
    $price = 1000;
    $sum = $price * TAX;
    print "$sum<br/>";
    print __FILE__;print '<br/>';
    print __DIR__;print '<br/>';
    print __LINE__;print '<br/>';
    print __FUNCTION__;print '<br/>';
    print __CLASS__;print '<br/>';
    print __METHOD__;print '<br/>';
    print __NAMESPACE__;print '<br/>';
    print DIRECTORY_SEPARATOR;print '<br/>';
    print PATH_SEPARATOR;print '<br/>';
    print PHP_VERSION;print '<br/>';

    $str = "He's \"GREAT\" teacher.";
    print $str;

    $str = 'PHP (PHP:Hypertext Preprocessor) ';
    $msg = <<<EOD
    {$str}は、サーバサイドで動作する簡易なスクリプト言語です。
    まずは、本書でじっくり基礎固めしましょう。<br/>
    "Let's start, everyone!!"
    EOD;
    print $msg;

    //配列
    $data = ['山田','掛谷','日尾','本多','矢吹'];
    $data[] = '原田';
    ?>
    <h3> <?php print $data[3]; ?> </h3>
    <h3> <?php print $data[5]; ?> </h3>
    <?php 
    print_r ($data);

    //連想配列
    $members = [
        'yamada' => 'chiba',
        'kakeya' => 'hiroshima',
        'hio' => 'gunma',
        'honda' => 'saitama',
        'yabuki' => 'aichi',
    ];
    print_r ($members);
    print $members['hio'];
    
    //多次元配列
    $data1 = [
        ['x-1','x-2','x-3'],
        ['y-1','y-2','y-3'],
        ['z-1','z-2','z-3'],
    ];
    for ($i=0; $i < 3; $i++) { 
        for ($n=0; $n < 3; $n++) { 
            print "<div>".$data1[$i][$n]."</div>";
        }
    };

    //cast
    var_dump((int)1530.98);print '<br/>';
    var_dump((int)-3456.134);print '<br/>';
    var_dump((int)true);print '<br/>';
    var_dump((string)true);print '<br/>';
    var_dump((int)false);print '<br/>';
    var_dump((string)false);print '<br/>';
    var_dump((array)108);print '<br/>';
    //var_dump((null)3242.98);
    var_dump($data1);print '<br/>';

    const DISCOUNT = 0.9;
    $price = 500;
    $sum = $price * DISCOUNT ;
    print "値引き後の価格は{$sum}円です。";

    var_dump((int)155.36);
    $fruit = ['りんご','みかん','かき'];
    $vegetables = ['red' => 'トマト','tellow' => 'カボチャ','green' => 'レタス'];
    print_r ($fruit);
    print_r($vegetables);print '<br/>';

    //代数演算子
    $x = 3;
    $y = --$x;
    $z = $x--;
    print $y;print '<br/>';
    print $z;print '<br/>';
    print $x;print '<br/>';
    print '123' * '010';print '<br/>';
    print '123'.'あいうえお';print '<br/>';

    $n = '0Z0';
    for ($i=0; $i <15 ; $i++) { 
        $n++;
        print $n;
    };print '<br/>';

    print floor((0.1 + 0.7) * 10);print '<br/>';
    //任意制度数学関数
    $add = bcadd(0.1,0.7,10);//(左、右、小数点以下桁数)
    print $add;print '<br/>';

    //代入演算子
    $x =0xff;
    for ($i=0; $i < 5; $i++) { 
        $x >>=1;
        print $x;print '<br/>';
    }
        //参照代入
        $x =1;
        $y =&$x ;
        print $y;print '<br/>';
        $x = 5;
        print $y;print '<br/>';
    
    var_dump('0' == 0);
    var_dump('0' === 0);print '<br/>';

    $x=3;
    $x == 1? $flag = 0 : $flag = -1;
    print $flag;print '<br/>';

    $x = 0xff;
    print $x;print '<br/>';
    print ~$x; print '<br/>';

    $result = `dir`;
    print mb_convert_encoding($result,'UTF-8','SJIS');print '<br/>';
    
    print 1/ 1;print '<br/>';

    $error = '';
    $error ? print $error:print '正常です。';print '<br/>';
    $point = 30;
    if ($point >= 90){
        print '優';print '<br/>';
    } elseif($point >= 70){
        print '良';print '<br/>';
    } elseif($point >= 50){
        print '可';print '<br/>';
    } else{
        print '不可';print '<br/>';
    }

    switch($point){
        case $point >= 90:
            print '優';print '<br/>';
            break;

        case $point >= 70:
            print '良';print '<br/>';
            break;

        case $point >= 50:
            print '可';print '<br/>';
            break;

        default:
            print '不可';print '<br/>';
            break;
        }

    //繰り返し
    $i = 1;
    echo ('<h3>whileの繰り返し</h3>');
    while($i < 6){
        echo("{$i}番目のループです。<br/>");
        $i++;
    }
    echo ('<h3>do~whileの繰り返し</h3>');
    $i = 1;
    do{
        echo("{$i}番目のループです。<br/>");
        $i++;
    } while($i < 6);
    echo ('<h3>forの繰り返し</h3>');
    for($i = 1;$i < 6;$i++){
        echo("{$i}番目のループです。<br/>");
    }
    for($i = 1,$j = 2;$b = $i * $j,$i<6;$i++){
        echo("{$i}*{$j}={$b}<br/>");
    }
    echo ('<h3>foreachの繰り返し</h3>');
    foreach($data as $value){
        echo("名前は{$value}です。<br/>");
    }
    foreach($members as $key => $value){
        echo("NAME:{$key},AD:{$value}<br/>");
    }
    echo("hello!<br/>");

    foreach($data as &$value){
        $value = $value."を変更";
        echo ($value."<br/>");
    }
    print_r($data);print("<br/>");

    for($i = 1;$i <10;$i++){
        for($n = 1;$n < 10;$n++){
            echo("<span style='border:solid 1px black; display:inline-block; width:30px; text-align:center;'>".
            $i*$n."</span>");
        }
        echo("<br />");
    }

    $sum = 0;
    for($i = 1;$i <= 100;$i++){
        $sum += $i;
        if ($sum > 2000){
            break;
        }
    }
    echo("合計が1000を超えるのは、１～{$i}を加算した時です。<br/>");

    for($i = 1;$i < 30; $i++){
        if($i % 2 === 0){
            continue;
        }
        print("{$i}<br/>");
    }

    for($i = 1;$i <10;$i++){
        for($n = 1;$n < 10;$n++){
            if($i*$n > 40){break 2;}
            echo("<span style='border:solid 1px black; display:inline-block; width:30px; text-align:center;'>".
            $i*$n."</span>");
        }
        echo("<br />");
    };
    echo("<br />");

    for($i = 1;$i <10;$i++){
        for($n = 1;$n < 10;$n++){
            if($i*$n > 40){goto end;;}
            echo("<span style='border:solid 1px black; display:inline-block; width:30px; text-align:center;'>".
            $i*$n."</span>");
        }
        echo("<br />");
    };
    end:
    echo("<br />");


    $sum = 0;
    $i = 1;
    while($i <= 100){
        if($i % 2 !== 0){
            $i++;
            continue;
        }
        $sum += $i;
        $i++;
    }
    echo($sum);
    echo("<br/>");

    $sum = 0;
    for($i = 1;$i <= 100;$i++):
        if($i % 2 === 0):continue;endif;
        $sum += $i;
    endfor;
    echo($sum);

    $sum = 0;
    $i = 1;
    while($i <= 100):
        $sum += $i;
        if($sum > 1000):
            break;
        endif;
        $i++;
    endwhile;
    echo("合計が1000を超えるのは、１～{$i}を加算した時です。<br/>");

    $data = [10,25,50];
    foreach($data as &$item){
        $item *= 1.5;
    }
    print_r($data);print("<br/>");

    $languages = ["PHP","JSP","ASP","JavaScript","VBScript"];
    foreach($languages as $language):
    switch($language){
        case "PHP":
        case "JSP":
        case "ASP":{
            echo("{$language}はサーバサイド技術です。<br/>");
            break;
        }
        case "JavaScript":
        case "VBScript":{
            echo("{$language}はクライアントサイド技術です。<br/>");
            break;
        }
        default:{
            break;
        } 
    }
    endforeach;

    $today = time();
    echo($today);echo("<br/>");

    mb_internal_encoding('UTF-8');

    $str = "ABCDEFG  abcあいう";
    print(mb_strlen($str));echo("<br/>");
    echo(strtolower($str));echo("<br/>");
    echo(strtoupper($str));echo("<br/>");
    echo(ucfirst($str));echo("<br/>");
    echo(lcfirst($str));echo("<br/>");
    echo(ucwords($str));echo("<br/>");
    echo(substr($str,3,3));echo("<br/>");
    echo(mb_substr($str,-3,2));echo("<br/>");
    echo($str[13]);echo("<br/>");
    echo(str_replace("A","B",$str));echo("<br/>");
    echo($str);echo("<br/>");
    $numbering = "1,2,3,4,5,6,7,8,9";
    $array_numbering = explode(",",$numbering,-3);
    print_r($array_numbering);echo("<br/>");
    
    $coment =  "abcｽｰﾊﾟｰﾄﾞﾗｲ";
    echo($coment);echo("<br/>");
    echo(mb_convert_kana(strtoupper($coment) ,"RKV"));echo("<br/>");
    
    echo mb_convert_encoding('あいうえお',"JIS","UTF-8");echo("<br/>");

    //メール実験
    // $to = 'unmejjapip@gmail.com';
    // $subject = 'メール実験';
    // $body = 'PHPでメール送信プログラムの練習中です。';
    // $headers = "From : unmejjapip@i.softbank.jp";
    // if(mb_send_mail($to,$subject,$body,$headers)){
    //     echo 'メール送信成功';
    // } else{
    //     echo 'メール送信失敗';
    // }

    echo mb_substr("サーバサイド技術",0,-5);echo("<br/>");
    echo mb_convert_kana("ｻｰﾊﾞｻｲﾄﾞ技術","KV");echo("<br/>");

    $data = [[1,2,3],[4,5,6],[7,8,9]];
    echo count($data);echo("<br/>");
    echo count($data,COUNT_RECURSIVE);echo("<br/>");
    print_r ($data);echo("<br/>");

    $array01 = [1,2,3];
    $array02 = [4,5,6,7];
    print_r(array_merge($array01,$array02));echo("<br/>");
    print_r($array01 + $array02);echo("<br/>");

    $array03 = ["yamada" => "tokyo","tanaka" => "miyazaki","suzuki" => "oosaka"];
    $array04 = ["imada" => "hukuoka","takeda" => "hokkai","tanaka" => "kagoshima"];
    print_r(array_merge_recursive($array03,$array04));echo("<br/>");
    print_r($array03 + $array04);echo("<br/>");
    echo implode("/",array_merge($array01,$array02));echo "<br/>";
    echo implode("/",$array03);echo "<br/>";
    array_push($array02,"8");
    array_pop($array02);
    array_unshift($array02,"0");
    array_shift($array02);
    $array02[] = "8";
    print_r($array02);echo "<br/>";
    $array05 = array_merge($array01,$array02);
    print_r(array_splice($array05,4,2));echo "<br/>";
    print_r($array05);echo "<br/>";
    array_splice($array05,4,0,[5,6]);
    print_r($array05);echo "<br/>";
    $slice = array_slice($array05,2,3,true);
    print_r ($slice);echo "<br/>";
    $as = array_search("3",$array05);
    print $as;echo "<br/>";
    print $array05[$as];echo "<br/>";
    $array06 = [2,6,4,9,5,8,7,1,3];
    print_r($array06);echo "<br/>";
    sort($array06);
    print_r($array06);echo "<br/>";

    $msg = "彼の電話番号は090-1111-2222、私のは080-5555-7777です。郵便番号はどちらも228-7777です。";
    if(preg_match_all('/([0-9]{2,4})-([0-9]{2,4})-([0-9]{4})/',$msg,$data)){
        echo "電話番号{$data[0][0]}<br/>";
        echo "市外局番{$data[1][0]}<br/>";
        echo "市内局番{$data[2][0]}<br/>";
        echo "加入者番号{$data[3][0]}<br/>";
        echo "電話番号{$data[0][1]}<br/>";
        echo "市外局番{$data[1][1]}<br/>";
        echo "市内局番{$data[2][1]}<br/>";
        echo "加入者番号{$data[3][1]}<br/>";

    }
    $msg = "住所 は 〒 184-0000  鎌ヶ谷 市 梶 野 町 0-0-0 です。";
    if(preg_match('|([0-9]{3})-([0-9]{4})|',$msg,$data)){
        echo "〒{$data[0]}<br/>";
    }
    $msg = "お問い合わせはCQW15204@nifty.comまで";
    echo preg_replace('|[a-z0-9\.\-]+@([a-z0-9\-]+\.)+[a-z0-9\-]+|i',
        '<a href="https://yujilog.jp">$0</a>',$msg);
    echo "<br/>";

    //テキストファイルへの書き込み
    //書き込み内容を配列$dataにセット
    $data = [];
    $data[] = date('Y/m/d H:i:s');
    $data[] = $_SERVER['SCRIPT_NAME'];
    $data[] = $_SERVER['HTTP_USER_AGENT'];
    $data[] = $_SERVER['HTTP_REFERER'];

    $co = 0;
    foreach($data as $c){
        print $data[$co];
        echo "<br/>";
        $co++;
    }

    //access.logを書き込みモードでオープン
    // $file = @fopen('access.log','ab') or die('ファイルを開けませんでした！');
    //ファイルのロック
    // flock($file, LOCK_EX);
    //ファイルの書き込み
    // fwrite($file, implode("\t",$data) . "\n");
    //ロックの解除
    // flock($file, LOCK_UN);
    //ファイルのクローズ
    // fclose($file);
    // echo 'アクセスログを記録しました。';

            ?>


    <table border="1">
    <tr>
        <th>アクセス日時</th>
        <th>スクリプト名</th>
        <th>ユーザーエージェント</th>
        <th>リンク元のURL</th>
    </tr>
    <?php 
    //ファイルを読み取り専用でオープン
    $file = fopen('access.log','rb');
    //ファイルを共有ロック
    flock($file, LOCK_SH);
    //行単位でテキストを読み込み＆タブ文字で分割
    while($line = fgetcsv($file, 1024, "\t")){
        print '<tr>';
        //分割した結果を順に出力
        foreach($line as $value){
            print '<td>'. $value . '</td>';
        }
        print '</tr>';
    }
    //ロックの解除
    flock($file,LOCK_UN);
    //ファイルをクローズ
    fclose($file);

    ?>
    </table>
    <?php 
    echo "<br/>";
    echo(abs(-100));echo "<br/>";
    echo base_convert(100,10,2);echo "<br/>";

    $data = "PHPはPHPです。";
    echo strrpos($data,'PHP');echo "<br/>";

    printf('%sの気温は%.2f度です。','宮崎',23.123);echo "<br/>";

    $msg = "wings know ledge";
    echo ucwords($msg);echo "<br/>";
    $msg= "ボクの名前はリオです。";
    echo str_replace(["ボク","リオ"],["僕","莉緒"],$msg);echo "<br/>";

    $data = ['高江','青木','片淵'];
    array_push($data,'山田','日尾');
    array_unshift($data,'掛谷','土井');
    print_r (array_slice($data,2,3));echo "<br/>";

    print_r ($data);echo "<br/>";

    // $file = @fopen('practice/sample.dat','rb') or die('Cannot open file!');
    // flock($file,LOCK_SH);
    // while($line = fgets($file,1024)){
    //     if(preg_match('|http(s)?://([\w-]+\.)+[\w-]+(/[\w- ./?%&=]*)?|i',$line,$data)){
    //         print $data[0].'<br/>';
    //     }
    // }
    // flock($file,LOCK_UN);
    // fclose($file);

    echo pow(5,3);echo "<br/>";
    echo abs(-12);echo "<br/>";
    $x = 4;
    echo $x;echo "<br/>";
    unset($x);
    
    require_once 'included.php';
    
    echo getTriangleArea(5,10);echo "<br/>";

    echo getDiamondArea(8,12);echo "<br/>";

    $x = 10;
    $y = 10;

    function checkScopeX(){
        static $x = 0;
        return ++$x;
    }
    function checkScopeY(){
        global $y;
        return ++$y;
    }
    echo checkScopeX();echo "<br/>";
    echo checkScopeX();echo "<br/>";
    echo checkScopeX();echo "<br/>";
    echo checkScopeY();echo "<br/>";
    echo $x;echo "<br/>";
    echo $y;echo "<br/>";
    echo(getTriangleArea());echo "<br/>";
    
    $x= 1;

    for ($i=0; $i < 3; $i++) { 
        sumnum($x);
        echo $x;
        echo "<br/>";
    }

    echo(sum(1,2,3,4,5,6,7,8,9,10));echo "<br/>";
    echo(sum(100,50));echo "<br/>";

    echo replaceContents('C:\xampp\htdocs\selfphp\chap02\data.dat',"鈴木太郎","2012年5月12日");echo "<br/>";

    echo product(2,3,5,5,3);echo "<br/>";
    list($max,$min) = max_min(12,2,3,4,5,6,7,8,9);
    echo $max;echo "<br/>";
    echo $min;echo "<br/>";

    echo factorial(10);echo "<br/>";

    $data = ['yamada' => '山田','tanaka' => '田中','sato' => '佐藤'];
    my_array_walk($data,'showItem');echo "<br/>";

    unset($data);
    $data = [10,20,30,40,50];
    $result = 0;
    my_array_walk($data,function($value,$key) use(&$result){
        $result += $value;
    });
    echo $result;echo "<br/>";

    //素数を順に出力
    foreach(getPrimes() as $prime){
        //素数が101以上になったら終了（無限ループ防止）
        if($prime > 100){die();}
        echo $prime. ',';
    }
    echo "<br/>";
    echo "ac";

    function readLines(string $path){
        $i = 0; //行数
        $file = fopen($path,'rb') or die('ファイルが見つかりません');
        //行単位にテキストを取得＆yield
        while($line = fgets($file,1024)){
            $i++;
            yield $line;
        }
        fclose($file);
        //読み込んだテキストの行数を返す
        return $i;
    }
    //行単位にテキストを出力
    $gen = readLines('C:\xampp\htdocs\selfphp\chap06\sample.dat');
    foreach($gen as $line){
        echo $line.'<br/>';
    }
    //最終的に読み込んだ行数を取得
    echo "{$gen->getReturn()}行ありました。";echo "<br/>";

    echo square();echo "<br/>";
    echo square(3,4);echo "<br/>";
    echo $x1;echo "<br/>";
    echo $y1;echo "<br/>";

    function refCheck(int &$num){
        print $num."<br/>";
        $num++;
        unset($num);
        print $num."<br/>";
    }
    $num = 1;
    refCheck($num);
    print $num."<br/>";


    //クラス・オブジェクト
    $now = new DateTime();
    echo "現在の時刻　 ＝＞{$now->format('Y年m月d日　H:i:s')}";echo "<br/>";
    echo "現在のタイムスタンプ値＝＞{$now->getTimestamp()}";echo "<br/>";
    $now = new DateTime('+2weeks');
    echo "2週間後の時刻＝＞{$now->format('Y年m月d日　H:i:s')}";echo "<br/>";

    $now = new DateTime('2021/5/01  9:05:02');
    print $now->format('Y年m月d日　H:i:s');echo "<br/>";

    $dt = new DateTime(null,new DateTimeZone('Europe/London'));
    echo "ロンドンは、{$dt->format('H時i分')}です。";echo "<br/>";

    echo time();echo "<br/>";
    $now = time() / 60 /60/24/365;
    echo $now;echo "<br/>";

    $now = new DateTime();
    echo $now->format('Y年m月d日 (D) g:i:s a');echo "<br/>";
    echo $now->format('当月の日数：t日');echo "<br/>";
    echo $now->format('L')?'閏年です':'閏年ではありません';echo "<br/>";
    echo $now->format(DateTime::RSS);echo "<br/>";
    echo $now->format('r');echo "<br/>";
    echo $now->format('T');echo "<br/>";
    echo $now->format('U');echo "<br/>";
    echo $now->format('W');echo "<br/>";
    echo $now->format('z');echo "<br/>";

    $fmt = 'Y年m月d日　H時i分s秒';
    $time = '2016年08月05日　11時58分32秒';
    $dt = DateTime::createFromFormat($fmt,$time);
    print $dt->format('r');echo "<br/>";echo "<br/>";


    $dt = new DateTime('2016/5/15 10:58:31');
    echo $dt->format('Y年m月d日　H時i分');echo "<br/>";
    $dt->add(new DateInterval('P1YT10H'));
    echo $dt->format('Y年m月d日　H時i分');echo "<br/>";
    $dt->sub(new DateInterval('P3M2DT20M'));
    echo $dt->format('Y年m月d日　H時i分');echo "<br/>";echo "<br/>";

    $dt1 = new DateTime('2016/5/15');
    $dt2 = new DateTime('2021/5/01');
    $interval = $dt1->diff($dt2,true);
    $dt1m = $dt1->format('Y年m月d日');
    $dt2m = $dt2->format('Y年m月d日');
    $msg = <<<msg
    {$dt1m}と{$dt2m}の差は<br/>
    <p style="font-weight:bold; font-size:25px;">%Y年%Mケ月%d日</p>
    です。
    msg;
    echo $interval->format("{$msg}");echo "<br/>";echo "<br/>";

    //カレンダをテキスト表示するcalendar関数（引数$yearは年、$monthは月）
    function calendar($year,$month){
        //1~31までの間でループ処理
        for ($i=1; $i < 32; $i++) { 
            //日付（$i）が該当月の妥当な日である場合のみ表示
            if(checkdate($month,$i,$year)){
                echo "{$i}&nbsp;";
            }
        }
    }
    for ($m=1; $m < 13; $m++) { 
        echo "2021年{$m}月のカレンダ:<br/>";
        calendar(2021,$m);
        echo "<br/>";
    }

    $time = '2016年12月04日';
    $fmt = 'Y年m月d日';
    $dt = DateTime::createFromFormat($fmt,$time);
    print $dt->format('Y/m/d(D)');echo "<br/>";echo "<br/>";


    ?>
    //DirectoryIterator

    <table border="1">
    <tr>
    <th>ファイル</th>
      <th>サイズ</th>
      <th>最終アクセス</th>
      <th>最終更新日</th>
    </tr>
    <?php 
    //カレントフォルダをオープン
    $dir = new DirectoryIterator('./');
    //フォルダの内容を順番に読み込み
    foreach($dir as $file){
        //読み込んだ要素がファイルである（サブフォルダなどでない）場合のみ表示処理
        if($file->isFile()){
    ?>
        <tr>
            <td><?php echo mb_convert_encoding($file->getFilename(),
            'UTF-8','SJIS-WIN'); ?></td>
            <td><?php echo $file->getSize(); ?></td>
            <td><?php echo date('Y/m/d H:i:s',$file->getATime()); ?></td>
            <td><?php echo date('Y/m/d H:i:s',$file->getMTime()); ?></td>
        </tr>
        <?php
        }
    }

    echo "<br/>";
    $now = new DateTime();
    echo "今日は".$now->format('Y年m月d日');echo "<br/>";
    echo "今月末は".(new DateTimeImmutable)->modify('last day of')->format('Y年m月d日');
    $now =  new DateTime('+1month10days');echo "<br/>";
    echo $now->format('Y年m月d日');echo "<br/>";
    
    echo time();
    ?>

    </table>
</body>
</html>