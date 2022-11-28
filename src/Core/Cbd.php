<?php 
namespace App\Core;
use PDO;

Class Cbd 
{
    private $dsn = "mysql:host=localhost;dbname=bdd_wf3";
    private $userName = "root";
    private $password = "";

    public function getConnect(){
        $pdo = new PDO ($this->dsn, $this->userName ,$this->password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }

    public function netoiFormulaire($string)
    {
        $string = trim($string);
        $string = stripslashes($string);
        filter_var($string, 
        FILTER_SANITIZE_FULL_SPECIAL_CHARS,
        [
            'flags' => FILTER_FLAG_NO_ENCODE_QUOTES | FILTER_FLAG_STRIP_BACKTICK
        ]);
        return $string;
    }

}