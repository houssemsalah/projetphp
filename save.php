<?php
require_once("functions.php");

$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$email=$_POST["email"];
$passwd=$_POST["passwd"];

addUser($nom, $prenom, $email, $passwd);
header("location:enregistrer.php");
