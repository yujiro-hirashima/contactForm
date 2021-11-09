<?php 
class Person{
    public $firstName;
    public $lastName;

    public function __construct($firstName,$lastName){
        $this->firstName = $firstName;
        $this->lastName  = $lastName;
    }
    
    public function __toString(){
        return $this->lastName.$this->firstName.'君';
    }

    public function __debugInfo(){
        return [
            '名' => $this->firstName,
            '性' => $this->lastName
        ];
    }
    
    
    public function show(){
        echo "<p>ボクの名前は{$this->lastName}{$this->firstName}です。</p>";
    }
    
    public function __destruct()
    {
        echo '<p>'.__CLASS__.'オブジェクトが破棄されました。</p>';
    }
}
?>