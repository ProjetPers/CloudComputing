<?php
require_once 'globals/config.php';
require_once 'modals/Connexion.php';
require_once 'modals/Compte.php';
require_once 'globals/init.php';
try{
     $solde=Compte::find($_SESSION['ps']);
    if (isset($_GET['dec'])){
        unset($_SESSION['type'],$_SESSION['ps']);
        header('location: ../');
    }

}catch (Exception $ex){
   die(include 'controls/erreur.control.php');
}
include_once 'views/home.view.php';