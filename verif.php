<?php
session_start();
require_once("functions.php");

$cnx=connexion();

$email=$_POST["email"];
$pass=$_POST["passwd"];

$req=mysqli_query($cnx, "SELECT * FROM `user` WHERE `emailuser` = '{$email}' AND `passworduser` = '{$pass}' ;");
$existe=0;
if($d=mysqli_fetch_object($req)){
    //if(password_verify($pass,$d->passworduser)){
    $d1=date('h-i-s, j-m-y');
    $req1=mysqli_query($cnx,"UPDATE `user` SET `dateaccess` = '{$d1}' WHERE `user`.`iduser` = {$d->iduser};");
    $_SESSION["nameuser"]=$d->nameuser.' '.$d->prenomuser;
    $_SESSION["iduser"]=$d->iduser;
    $existe=1;
   // }
}
if($existe==0){
    $_SESSION["type"]="danger";
    $_SESSION["erreur"]="Erreur Login ou bien Password!!!";
    header("location:enregistrer.php");

}else{
header("location:liste.php");}
?>
