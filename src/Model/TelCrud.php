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
        $sql = "SELECT * FROM produit";
        $stmt = $this->cbd->getConnect()->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public function addXp ($post){
        extract($post);
        // var_dump($post);
        $name = $this->cbd->netoiFormulaire($name);
        $image = $this->cbd->netoiFormulaire($image);
        $prix = $this->cbd->netoiFormulaire($prix);
        $quantité = $this->cbd->netoiFormulaire($quantité);
       
        $sql = "INSERT INTO xp ( name, image, prix, quantité)
        VALUES (:name , :image , :prix, :quantité)" ;

        $stmt = $this->cbd->getConnect()->prepare($sql);
        $stmt ->bindParam(':name',$name);
        $stmt ->bindParam(':image',$image);
        $stmt ->bindParam(':prix',$prix);
        $stmt ->bindParam(':quantié',$quantité);
      
        $stmt ->execute(); 
    }
}