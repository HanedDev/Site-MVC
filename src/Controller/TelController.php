<?php 

use App\Autoload;
use App\Model\TelCrud;

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';
// include_once $path . '/src/Model/UserCrud.php';
include_once $path . '/src/Autoload.php';


Autoload::register();

if($_GET['param']){
    $param = $_GET['param'];
}
$xpCrud = new TelCrud();

switch($param) {

    case 'liste_xp';
    $tels = $telCrud->findAll();
    include_once ROOT . 'views/xp/telindex.php';

        break;

    case 'ajouter_xp':

        if($_POST){ 
            // var_dump($xpCrud);
            // die;
            $telCrud->addTel($_POST);
            header("location: XpController.php?param=liste_xp");
        }
    include_once ROOT . 'views/xp/ajouterXp.php';

        break;
}