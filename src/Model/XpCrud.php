<?php 

namespace App\Model;
$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';
include_once $path . '/src/Core/Cbd.php';


use PDO;
use App\Core\Cbd;

class XpCrud 
{
    private $cbd ;

    public function __construct()
    {
        $this->cbd = new Cbd();
    }

    public function findAll (){
        $sql = "SELECT * FROM xp";
        $stmt = $this->cbd->getConnect()->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public function addXp ($post){
        extract($post);
        // var_dump($post);
        $name = $this->cbd->netoiFormulaire($name);
        $niveau = $this->cbd->netoiFormulaire($niveau);
        $score = $this->cbd->netoiFormulaire($score);
       
        $sql = "INSERT INTO xp ( name, niveau, score)
        VALUES (:name , :niveau , :score)" ;

        $stmt = $this->cbd->getConnect()->prepare($sql);
        $stmt ->bindParam(':name',$name);
        $stmt ->bindParam(':niveau',$niveau);
        $stmt ->bindParam(':score',$score);
      
        $stmt ->execute(); 
    }
}