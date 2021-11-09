<?php 
//型を定義

use FaxPrinter as GlobalFaxPrinter;
use IPrinter as GlobalIPrinter;

interface IFax{
    function send();
}

interface IPrinter{
    function print();
}

//実装を定義
trait FaxTrait{
    public function send(){
        print 'sending Fax...sended!';
    }
}

trait PrinterTrait {
    public function print(){
        echo 'printing...completed!';
    }
}

//複合機クラスの定義
class FaxPrinter implements IFax, IPrinter{
    use FaxTrait, PrinterTrait;
}

$fp = new FaxPrinter();
$fp->send();
$fp->print();