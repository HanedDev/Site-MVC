<?php 
const ROOT = __DIR__. '/' ;

const URL = 'http://localhost:30004' ;

session_start();

function verif_role($role){

    if (isset($_SESSION['user'])) {
        if($_SESSION['user']->role !== $role){
            header("location: http://localhost:30004/index.php");

        }
    }else {
        header("location: http://localhost:30004/index.php");
    }
}