<?php 

use App\Autoload;
use App\Model\UserCrud;

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';
// include_once $path . '/src/Model/UserCrud.php';
include_once $path . '/src/Autoload.php';


Autoload::register();
verif_role('Admin');

if($_GET['param']){
    $param = $_GET['param'];
}
$userCrud = new UserCrud();

switch($param) {

    case 'liste_user':
    $users = $userCrud->findAll();
    include_once ROOT . 'views/user/userindex.php';

        break;

    case 'ajouter_user':

        if($_POST){ 

            $mdp_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
            // var_dump($mdp_hash); die;
            $_POST['password'] =$mdp_hash;
            // var_dump($_POST);    
            $userCrud->addUser($_POST);
            header("location: URL . UserController.php?param=liste_user");
        }
    include_once ROOT . 'views/user/ajouterUser.php';

        break;


    case 'delete_user':
        if(isset($_SESSION['user']) AND $_SESSION['user']-> role === 'Admin'){
            $id = $_GET ['id'];
            $users = $userCrud->delete($id);
            header("location:  URL . UserController.php?param=liste_user");
        }else{
            $url= URL . 'index.php';
            header ("location : $url");
        }
        


        // if($_POST){
            
        //     $user = $userCrud->findByRole($role);
        //     if ($role = Admin){
        //         $users = $userCrud->delete($id);
                 

               
        //     } else{
        //         $errors[] ='email ou password non valide';
        //     }
        // }



        break;

    case 'detail_user':    
        $id = $_GET ['id'];
        $user = $userCrud->find($id);

    include_once ROOT . 'views/user/detailUser.php';
    
            break;


    case 'edit_user' :
        
        $id = $_GET['id'];
        $user = $userCrud ->find($id);
        // var_dump($_POST); 
        if($_POST) {
            $userCrud ->edit($id , $_POST );
            header("location: UserController.php?param=liste_user");

        }
        include_once ROOT . 'views/user/editUser.php';
        break;    
}