<?php
    $nom = htmlspecialchars($_POST["nom"]);
    $mail = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
    
    $ensemble = "Nom: ".$nom."\nMessage:\n ".$message;
// envoi du formulaire sur mail
    mail("contact@fabien-ouvrard.fr", "CV-Portfolio", $ensemble, "FROM : ".$mail);
?>