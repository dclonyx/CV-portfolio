<?php
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mail = $_POST["email"];
    $message = $_POST["message"];
    
    $ensemble = "Nom: ".$nom."\nPrenom: ".$prenom."\nMessage: ".$message;
// envoi du formulaire sur mail
    mail("fabou21@free.fr", "CV-Portfolio", $ensemble, "FROM : ".$mail);
  
?>