<?php

require_once 'dash/globals/config.php';
require_once 'dash/modals/Connexion.php';
require_once 'dash/modals/User.php';
require_once 'dash/globals/init2.php';
try{
    $errors=[];
    if (isset($_POST['login'])){
        if(not_empty(['pseudo','pass'])){
            extract($_POST);
            if(mb_strlen($pass)<4) $errors[]="Mot de passe tres court";
            if(mb_strlen($pseudo)<16) $errors[]="Numero de compte Invalide(tres court ou format invalide)";
            if (count($errors)==0){
                $user=new User('',$pseudo,$pass,'','');
                if(User::getSignIn($user)){
                    $_SESSION['ps']=$pseudo;
                    header('location: dash/');
                }else
                    $errors[]='Votre pseudo(telephone) / mot de passe est incorrect';
                    save_input_data();
            }else
                save_input_data();
        }

    }else{
        clear_input_data();
    }

}catch (Exception $ex){
    echo $ex;
}
include_once 'views/login.view.php';

