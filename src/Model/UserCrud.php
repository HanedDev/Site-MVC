<?php 

namespace App\Model;
$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';
include_once $path . '/src/Core/Cbd.php';


use PDO;
use App\Core\Cbd;

class UserCrud 
{
    private $Cbd ;

    public function __construct()
    {
        $this->cbd = new Cbd();
    }

    public function findAll (){
        $sql = "SELECT * FROM user";
        $stmt = $this->cbd->getConnect()->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public function addUser ($post){
        extract($post);
        $nom = $this->cbd->netoiFormulaire($nom);
        $prenom = $this->cbd->netoiFormulaire($prenom);
        $adresse = $this->cbd->netoiFormulaire($adresse);
        $ville = $this->cbd->netoiFormulaire($ville);
        $cp = $this->cbd->netoiFormulaire($cp);
        $email = $this->cbd->netoiFormulaire($email);
        $password = $this->cbd->netoiFormulaire($password);
        $role = $this->cbd->netoiFormulaire($role);

        $sql = "INSERT INTO user (id,`nom, prenom, adresse, ville, cp, email, password, role)
        VALUES (:nom , :prenom , :adresse , :ville , :cp , :email , :password , :role)" ;

        $stmt = $this->cbd->getConnect()->prepare($sql);
        $stmt ->bindParam(':nom',$nom);
        $stmt ->bindParam(':prenom',$prenom);
        $stmt ->bindParam(':adresse',$adresse);
        $stmt ->bindParam(':ville',$ville);
        $stmt ->bindParam(':cp',$cp);
        $stmt ->bindParam(':email',$email);
        $stmt ->bindParam(':password',$password);
        $stmt ->bindParam(':role',$role);

        $stmt ->execute(); 
    }
}