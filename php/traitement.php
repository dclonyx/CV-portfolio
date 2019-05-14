<?php
    $nom = htmlspecialchars($_POST["nom"]);
    $prenom = htmlspecialchars($_POST["prenom"]);
    $mail = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
    
    $ensemble = "Nom: ".$nom."\nPrenom: ".$prenom."\nMessage: ".$message;
// envoi du formulaire sur mail
    mail("contact@fabien-ouvrard.fr", "CV-Portfolio", $ensemble, "FROM : ".$mail);
?>