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
            // var_dump('text'); die;
            if(!$nom){
                $errors [] ='Entrez Un Nom valide';
            }

            if(!$prenom){
                $errors [] ='Entrez Un Prenom valide';
            }
            if($email){
                $result = $userCrud->findByEmail($email);
                // var_dump($result);
                    if($result){
                        $errors [] ='email no valide';
                    }
                }else{
                        $errors [] ='entrer email';
                    }
                

            
            if($password){
                $mdp_hash = password_hash($password, PASSWORD_DEFAULT);
                $_POST['password'] = $mdp_hash;
            }else{
                $errors[] = 'password non valide';
            }    
            // var_dump($errors); die;
            if (empty($errors)){
                $userCrud->addUser($_POST);
                $path = URL . 'index.php' ;
                header(("location :index.php"));
            }

            
        }

        include_once ROOT . 'views/auth/register.php';
        break;

        case 'login' ;
        if($_POST){
            extract ($_POST);
            if($password){
                $mdp_hash = password_hash($password, PASSWORD_DEFAULT);
            }else{
                $errors[] ='email ou password non valide';

            }
            $user = $userCrud->findByEmail($email);
            if ($user){
                $mdp_user = $user->password;

                if(password_verify($password ,$mdp_user )){
                    $_SESSION['user']=$user;
                    $url = URL . 'index.php' ;
                    header("location: http://localhost:30004/index.php");
                }else{
                    $errors[] ='email ou password non valide';
                }
            }else{
                $errors[] ='email ou password non valide';
            }
        }
            include_once ROOT . 'views/auth/login.php';
            break;

            case 'logout' ;
            unset($_SESSION['user']);
            $url = URL . 'index.php';
            header(("location: $url"));
            break;


    }