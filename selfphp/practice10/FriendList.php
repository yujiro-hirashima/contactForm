<?php 
class FriendList implements IteratorAggregate{
    //ダミーのプロパティを定義
    public $version = '1.0.0';
    public $name    = '友人リスト';
    //Personオブジェクトのリストを格納するためのprivate変数
    private $list = [];

    public function add(Person $p){
        $this->list[] = $p;
    }

    //指定されたインデックス番号に対応するPersonオブジェクトを取得
    public function __invoke($index){
        return $this->list[$index];
    }

    public function __clone(){
        foreach($this->list as &$value){
            $value = clone $value;
        }
    }

    //反復処理の対象を定義
    public function getIterator(): Traversable{
        return new ArrayIterator($this->list);
    }
}