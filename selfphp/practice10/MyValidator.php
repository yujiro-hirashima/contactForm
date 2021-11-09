<?php 
require_once '../DbManager.php';

class MyValidator {
    //エラーメッセージを格納するためのプライベート変数
    private $_errors;

    function console_log( $data ){
        echo '<script>';
        echo 'console.log('. json_encode( $data ) .')';
        echo '</script>';
      }

    //コンストラクタ
    public function __construct(string $encoding = 'UTF-8'){
        //プライベート変数$_errorsを初期化
        $_errors = [];
        //内部文字コードを設定
        mb_internal_encoding($encoding);
        // $_GET,$_POST,$_COOKIEの文字エンコーディングをチェック
        $this->checkEncoding($_GET);
        $this->checkEncoding($_POST);
        $this->checkEncoding($_COOKIE);
        // $_GET,$_POST,$_COOKIEのnullバイトをチェック
        $this->checkNull($_GET);
        $this->checkNull($_POST);
        $this->checkNull($_COOKIE);
    }

    //配列要素に含まれる文字エンコーディングをチェック
    private function checkEncoding(array $data){
        foreach($data as $key => $value){
            if(!mb_check_encoding($value)){
                $this->_errors[] = "{$key}は不正な文字コードです。";
            }
        }
    }

    //配列要素に含まれるnullバイトをチェック
    private function checkNull(array $data){
        foreach($data as $key => $value){
            if(preg_match('/\0/',$value)){
                $this->_errors[] = "{$key}は不正な文字を含んでいます。";
            }
        }
    }

    //必須検証
    public function requiredCheck(string $value,string $name){
        if(trim($value) === ''){
            $this->_errors[] = "{$name}は必須入力です。";
        }
    }

    //文字列長検証（$len文字以内であるか）
    public function lengthCheck(string $value, string $name, int $len){
        if(trim($value) !== ''){
            if(mb_strlen($value) > $len){
                $this->_errors[] = "{$name}は{$len}文字以内で入力してください。";
            }
        }
    }

    //整数型検証
    public function intTypeCheck(string $value, string $name){
        if(trim($value) !== ''){
            if(!ctype_digit($value)){
                $this->_errors[] = "{$name}は数値で指定してください。";
            }
        }
    }

    //数値範囲検証（$min~$maxの範囲にあるか）
    public function rangeCheck(string $value, string $name, float $max, float $min){
        if(trim($value) !== ''){
            if($value > $max || $value < $min){
                $this->_errors[] = "{$name}は{$min}～{$max}で指定してください。";
            }
        }
    }

    //日付型検証
    public function dateTypeCheck(string $value, string $name){
        if(trim($value) !== ''){
            $res = preg_split('|([/\-])|',$value);
            if (count($res) !== 3 || !@checkdate($res[1],$res[2],$res[0])){
                $this->_errors[] = "{$name}は日付形式で入力してください。";
            }
        }
    }

    //正規表現パターン検証（パターン$patternに合致するか）
    public function regexCheck(string $value, string $name, string $pattern){
        if(trim($value) !== ''){
            if(!preg_match($pattern,$value)){
                $this->_errors[] = "{$name}は正しい形式で入力してください。";
            }
        }
    }

    //配列要素検証（配列$optsの要素のいずれかであるか）
    public function inArrayCheck(string $value, string $name, array $opts){
        if(trim($value) !== ''){
            if(!in_array($value, $opts)){
                $temp = implode(',',$opts); //配列要素を連結
                $this->_errors[] = "{$name}は{$temp}の中から選択してください。";
            }
        }
    }

    //重複検証（データベースの内容と重複していないか）
    public function duplicateCheck(string $value, string $name, string $sql){
        try{
            $db = getDb();
            $stt = $db->prepare($sql);
            $stt->bindValue(':value',$value);
            $stt->execute();
            if(($row = $stt->fetch()) !== false){
                $this->_errors[] = "{$name}は重複しています。";
            }
        } catch(PDOException $e){
            $this->_errors[] = $e->getMessage();
        }
    }

    //プライベート変数_errorsにエラー情報が含まれる場合にはリスト表示
    public function __invoke(){
        if(is_array($this->_errors)){
            $count_errors = count($this->_errors);
        }
        if ($count_errors > 0){
            echo '<ul style="color:Red">';
            foreach($this->_errors as $err){
                echo"<li>{$err}</li>";
            }
            echo'</ul>';
            die();
        }
    }
}