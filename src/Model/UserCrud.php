<?php 

namespace App\Model;
$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';
include_once $path . '/src/Core/Cbd.php';


use PDO;
use App\Core\Cbd;

class UserCrud 
{
    private $cbd ;

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
        // var_dump($post);
        $nom = $this->cbd->netoiFormulaire($nom);
        $prenom = $this->cbd->netoiFormulaire($prenom);
        $adresse = $this->cbd->netoiFormulaire($adresse);
        $ville = $this->cbd->netoiFormulaire($ville);
        $cp = $this->cbd->netoiFormulaire($cp);
        $email = $this->cbd->netoiFormulaire($email);
        $password = $this->cbd->netoiFormulaire($password);
        $role = $this->cbd->netoiFormulaire($role);

        $sql = "INSERT INTO user ( nom, prenom, adresse, ville, cp, email, password, role)
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

    public function delete ($id) {
        $sql = "DELETE FROM user WHERE id = $id" ;
        $stmt = $this->cbd->getConnect()->query($sql);
    }

    public function find ($id){       
            $sql = "SELECT * FROM user WHERE id = $id";
            $stmt = $this->cbd->getConnect()->query($sql);
            $result = $stmt->fetch(PDO::FETCH_OBJ);
            return $result;
    }

//*****************UPDATE***************************************/

    public function edit ($id, $post){

        extract($post);
        $nom = $this->cbd->netoiFormulaire($nom);
        $prenom = $this->cbd->netoiFormulaire($prenom);
        $adresse = $this->cbd->netoiFormulaire($adresse);
        $ville = $this->cbd->netoiFormulaire($ville);
        $cp = $this->cbd->netoiFormulaire($cp);
        $email = $this->cbd->netoiFormulaire($email);
        $password = $this->cbd->netoiFormulaire($password);
        $role = $this->cbd->netoiFormulaire($role);

        $sql="UPDATE user SET nom = :nom, prenom = :prenom, adresse = :adresse, ville = :ville , cp = :cp , email = :email, password = :password, role = :role WHERE id = $id" ;

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