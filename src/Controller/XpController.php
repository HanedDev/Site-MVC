<?php 

use App\Autoload;
use App\Model\XpCrud;

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';
// include_once $path . '/src/Model/UserCrud.php';
include_once $path . '/src/Autoload.php';


Autoload::register();

if($_GET['param']){
    $param = $_GET['param'];
}
$xpCrud = new XpCrud();

switch($param) {

    case 'liste_xp';
    $xps = $xpCrud->findAll();
    include_once ROOT . 'views/xp/xpindex.php';

        break;

    case 'ajouter_xp':

        if($_POST){ 
            // var_dump($xpCrud);
            // die;
            $xpCrud->addXp($_POST);
            header("location: XpController.php?param=liste_xp");
        }
    include_once ROOT . 'views/xp/ajouterXp.php';

        break;
}