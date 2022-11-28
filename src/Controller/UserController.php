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

switch($param) {

    case 'liste_user';
    $users = $userCrud->findAll();
    include_once ROOT . 'views/user/userindex.php';

        break;
}