<?php 
require_once '../vendor/autoload.php';

class MySmarty extends Smarty{
    public function __construct(){
        //基底クラスのコンストラクタを実行
        parent::__construct();
        //アプリケーション固有のパラメータを設定
        $this->template_dir      = './templates';
        $this->compile_dir       = './templates_c';
        $this->default_modifiers = [ 'escape:"htmlall"' ];

        //アプリケーション共通で利用するテンプレート変数
        $this->assign('author','YAMADA, Yoshihiro');
    }

    //displayメソッドをもとに、新たなdメソッドを準備
    public function d(){
        parent::display(basename($_SERVER['PHP_SELF'],'.php').'.tpl');
    }
}
?>