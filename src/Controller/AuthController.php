<?php 

use App\Autoload;
use App\Model\UserCrud;

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';
// include_once $path . '/src/Model/UserCrud.php';
include_once $path . '/src/Autoload.php';


Autoload::register();

if($_GET['param']){
    $param = $_GET['param'];
}
$userCrud = new UserCrud();
$errors = [];

switch ($param){
    case 'register':
        if($_POST){
            extract($_POST);
            if(!$nom){
                $errors [] ='Entrez Un Nom valide';
            }

            if(!$prenom){
                $errors [] ='Entrez Un Prenom valide';
            }
            if($password){
                $mdp_hash = password_hash($password, PASSWORD_DEFAULT);
                $_POST['password'] = $mdp_hash;
            }else{
                $errors[] = 'password non valide';
            }    

            if (empty($errors)){
                $userCrud->addUser($_POST);
                $path = URL . 'index.php' ;
                header(("location :index.php"));
            }

            
        }

        include_once ROOT . 'views/auth/register.php';
        break;
}