<?php
session_start();
require_once("functions.php");
$id_user=$_SESSION['iduser'];
$voiture=$_GET["voiture"];
$id_model=getModeleIdByVoitureId($voiture);
$villeDep=$_GET["villeDep"];
$dateP=$_GET["dateP"];
$dateR=$_GET["dateR"];


reserver($voiture,$id_user, $villeDep, $dateP, $dateR);
$_SESSION["type"]="success";
$_SESSION["erreur"]="Reservation effectuer avec success... en attente de confirmation";
header("location:accueil.php");
