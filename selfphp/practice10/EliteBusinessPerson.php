<?php 
require_once 'BusinessPerson.php';

class EliteBusinessPerson extends BusinessPerson {
    public function e_work(){
        echo "<p>{$this->lastName}{$this->firstName}はバリバリ働いています。";
    }
}