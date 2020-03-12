<?php
require_once 'connexion.php';

//On verifie les donnees de reception
$name_t=$_POST['nom'];
$pren_t=$_POST['prenom'];
$genre_t=$_POST['sexe'];
$prof_t=$_POST['profession'];
$contact_t=$_POST['contact'];

$sql=bd()->prepare ('INSERT INTO tuteurs(nom, prenom, genre, profession, contact) value(?,?,?,?,?)');
$sql->execute(array($name_t,$pren_t,$genre_t,$prof_t,$contact_t));
header('location:tuteurs.php');
?>
