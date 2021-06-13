<?php
function connexion()
{
    return mysqli_connect("localhost", "root", "", "ProjetPhp");
}

function getAllVoiture()
{
    $cnx = connexion();
    $req = mysqli_query($cnx, "select * from voiture");
    $tab = [];
    while ($d = mysqli_fetch_object($req)) {
        $tab[] = $d;
    }
    mysqli_free_result($req);
    return $tab;

}

function getAllVoitureByAnnee()
{
    $cnx = connexion();
    $req = mysqli_query($cnx, "select annee from voiture, modele_voiture  where voiture.modele_id=modele_voiture.id_modele");
    $tab = [];
    while ($d = mysqli_fetch_object($req)) {
        $tab[] = $d;
    }
    mysqli_free_result($req);
    return $tab;
}

function getAllVoitureByModelID($modele_id)
{
    $cnx = connexion();
    $req = mysqli_query($cnx, "select * from voiture where modele_id=$modele_id");
    $tab = [];
    while ($d = mysqli_fetch_object($req)) {
        $tab[] = $d;
    }
    mysqli_free_result($req);
    return $tab;

}
function getModeleIdByVoitureId($id){

    $cnx = connexion();
    $req = mysqli_query($cnx, "SELECT `modele_id`  FROM `voiture` WHERE `id_voiture` = {$id};");
    $tab = [];
    while ($d = mysqli_fetch_object($req)) {
        $tab[] = $d;
    }
    mysqli_free_result($req);
    return $tab[0]->modele_id;
}
function getPrixByModelId($id){

    $cnx = connexion();
    $reqp= mysqli_query($cnx,"SELECT * FROM `promotion` WHERE `modele_id` = {$id} AND `etat` = 1 ");
    $req = mysqli_query($cnx, "SELECT `prix` FROM `modele_voiture` WHERE `id_modele` = {$id};");
    $tab = [];
    if ($d = mysqli_fetch_object($reqp)) {
        $tab[] = $d;
    }else{
        $tab[]=mysqli_fetch_object($req);
    }
    mysqli_free_result($req);
    return $tab[0]->prix;
}
function getModeleById($id)
{
    $cnx = connexion();
    $req = mysqli_query($cnx, "select * from  modele_voiture where id_modele={$id}");
    $tab = [];
    while ($d = mysqli_fetch_object($req)) {
        $tab[] = $d;
    }
    mysqli_free_result($req);
    return $tab;
}

function getAllModele()
{

    $cnx = connexion();
    $req = mysqli_query($cnx, "select * from  modele_voiture ");
    $tab = [];
    while ($d = mysqli_fetch_object($req)) {
        $tab[] = $d;
    }
    mysqli_free_result($req);
    return $tab;

}

function addUser($nom, $prenom, $email, $passwd)
{
    $cnx = connexion();
    $req = mysqli_query($cnx, "INSERT INTO `user`(`iduser`, `nameuser`, `prenomuser`, `emailuser`, `passworduser`, `dateaccess`, `role`, `etatuser`) VALUES (NULL,'{$nom}','{$prenom}','{$email}','{$passwd}','','client','1')");

}

function reserver($voiture,$user, $villeDep, $dateP, $dateR)
{
    $prix=getPrixByModelId(getModeleIdByVoitureId($voiture));
    $cnx = connexion();
    $rq="INSERT INTO `reservation`(`id`, `voiture_id`, `user_id`, `ville_depart`, `date_debut`, `date_fin`, `prix_jour`, `etat`) VALUES (NULL,{$voiture},{$user},'{$villeDep}','{$dateP}','{$dateR}',{$prix},0);";
    $req = mysqli_query($cnx, "INSERT INTO `reservation`(`id`, `voiture_id`, `user_id`, `ville_depart`, `date_debut`, `date_fin`, `prix_jour`, `etat`) VALUES (NULL,{$voiture},{$user},'{$villeDep}','{$dateP}','{$dateR}',{$prix},0);");
}

function getAllPromo(){
    $cnx = connexion();
    $req = mysqli_query($cnx, "SELECT * FROM `modele_voiture` WHERE `id_modele` in (SELECT `modele_id` FROM promotion WHERE `etat` = 1) ");
    $tab = [];
    while ($d = mysqli_fetch_object($req)) {
        $tab[] = $d;
    }
    mysqli_free_result($req);
    return $tab;
}
function getAllAvis(){
    $cnx = connexion();
    $req = mysqli_query($cnx, "SELECT *  FROM `avis` WHERE `etat` = 1 ORDER BY RAND() LIMIT 3 ; ");
    $tab = [];
    while ($d = mysqli_fetch_object($req)) {
        $tab[] = $d;
    }
    mysqli_free_result($req);
    return $tab;
}
function getUserNPById($id){

    $cnx = connexion();
    $req = mysqli_query($cnx, "SELECT * FROM `user` WHERE `iduser` = {$id};");
    $tab = [];
    if ($d = mysqli_fetch_object($req))
        $tab[] = $d;
    mysqli_free_result($req);
    return $tab[0]->prenomuser.' '.$tab[0]->nameuser ;
}
