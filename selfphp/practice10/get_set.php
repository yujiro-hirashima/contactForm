<?php 
require_once 'MyMail.php';

$m = new MyMail();
//必須のプロパティを設定
$m->to = 'yamada@example.com';
$m->subject = 'testmail';
$m->message = 'こんにちは、MyMailクラスです。';
//任意のプロパティを設定（ハイフンは全てアンダースコアで指定すること）
$m->Form = 'admin@example.com'; //送信先
$m->X_Mailer = 'MyMail 1.0';    //使用しているメーラ
$m->X_Priority = 1;             //優先順位
$m->X_MSMail_Priority = 'High'; //優先順位
//メールを送信
$m->send();