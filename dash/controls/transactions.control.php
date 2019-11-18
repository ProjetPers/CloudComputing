<?php
/**
 * Created by PhpStorm.
 * User: Mecxe
 * Date: 10/11/2019
 * Time: 15:53
 */
require_once 'globals/config.php';
require_once 'modals/Connexion.php';
require_once 'modals/Compte.php';
require_once 'modals/Transactions.php';
require_once 'globals/init.php';
try{
    $errors=[];
    $Trans=Transactions::select();
    if (isset($_POST['add'])){
        if (not_empty(['code','mont'])){
            extract($_POST);
            $sess=$_SESSION['ps'];

            $solde=Compte::find($_SESSION['ps']);
            $solde2=Compte::find2($code);
            $montant=null;
            $mont2=null;

                $montant=$solde['solde'];

           $mont2=$solde2['solde'];


            if(mb_strlen($code)<16) $errors[]="Numero de compte Invalide(tres court ou format invalide";
            if($montant<$mont){
                $errors[]="Montant superieur au solde";

            }else{
                $montant=$montant-$mont;
                $mont2=$mont2 + $mont;

            }

            if (count($errors)==0){
                $trans=new Transactions(0,0,$sess,$code,$mont,1,uniqid());


                if (Transactions::addTransac($trans)){
                    Transactions::update($sess,$montant);
                    Transactions::update($code,$mont2);
                    header('location: transactions');
                }

           }
        }else{
            $errors[]="Verifiez tous vos champs SVP!!!";
        }
    }



}catch (Exception $ex){
    die(include 'controls/erreur.control.php');
}
include_once 'views/transact.view.php';