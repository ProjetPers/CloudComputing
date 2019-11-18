<?php
require_once 'dash/globals/config.php';
require_once 'dash/modals/Connexion.php';
require_once 'dash/globals/init2.php';
try{

    if(isset($_POST['reg'])){

    }

}catch (Exception $ex){
   die(include 'controls/erreur.control.php');
}
include_once 'views/register.view.php';