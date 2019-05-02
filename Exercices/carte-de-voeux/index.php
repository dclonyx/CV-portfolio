<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <title>Carte de Voeux</title>
</head>
<body>
    <!-- faire tomber la neige -->

    <div id="contenair">
        <img class="logoGN" src="./img/logogn2.png" alt="logoGN">
        <img class="logoGN" src="./img/logogn2.png" alt="logoGN">
        <img class="logoGN" src="./img/logogn2.png" alt="logoGN">
        <img class="logoGN" src="./img/logogn2.png" alt="logoGN">

        <div class="Neige">
            <div class="Neige__layer"></div>
            <div class="Neige__layer"></div>
            <div class="Neige__layer"></div>
            <div class="Neige__layer"></div>
        </div>
        <div id="envoi">
            <img id="icone" src="./img/icone_contact.png" alt="envoi">
            <div id="formulaire"> 
                <form method="POST">
                    Envoyer la carte sur :
                    <input type="email"  name="email" placeholder="email">
                    <input type="submit" name="submit" value="valider">
                    <?php
                    // verification présence données
                    if (isset($_POST['email'])) {
                            
                                $to = $_POST['email'];
                                $object = 'Carte de voeux';
                            
                                $message = 'Voici le lien de notre carte de voeux Aformac : <br>
                                            dcl.cartes.18pixel.fr/carreau/index.html';          
                                
                                $headers = 'From: D Codeurs du Lac - Aformac Berry'."\r\n";
                                $headers .= 'Repply-To :'.$_POST['email']."\r\n";
                                $headers .= 'MIME-Version: 1.0' ."\r\n";
                                
                                $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
                                mail($to, $object, $message, $headers);
                    }
                    ?>  
                </form>
            </div>  
        </div> 
        <div id="logoAformac">
            <!-- images du logo aformac -->
            <div id="disque">
                <img  src="./img/logoAformac1Disqueb.png" alt="disque">
            </div> 
            <img id="arcs" src="./img/logoAformac1Arcs.png" alt="arcs">
            <!-- traineau -->
            <div><img id="traineau" src="./img/traineau.png" alt="traineau"></div>
            <div id="pixel"><img src="./img/18-pixel-Kdo.png" alt="pixel"></div>
            <div class="decodeur"><img src="./img/Logo-decodeur.png" alt="logo"></div>
            <!-- mot aformac -->
            <div id="motAformac">
                <!-- sapin + boules --> 
                <div id="sapin"><img src="./img/sapin.svg" alt="sapin">
                    <span class="boules" id="boule-bleu"></span>
                    <span class="boules" id="boule-rouge"></span>
                    <span class="boules" id="boule-jaune"></span>
                    <span class="boules" id="boule-vert"></span>
                    <span class="boules" id="boule-violet"></span>
                    <div id="etoile">
                        <img src="./img/filled-star.png" alt="etoile">   
                    </div>
                </div>
                <!-- lettre f -->
                <div id="lettreF"><img class="images" src="./img/boisDeRenne.svg" alt="lettreF"></div>
                <!-- bonhome de neige lettre O -->
                <div id="bonhomeDeNeige"><img class="images" src="./img/neige.svg" alt="bonhomeDeNeige"></div>
                <!-- lettre r -->
                <div id="lettreR"><img class="images" src="./img/sucreDorge.png" alt="lettreR"></div>
                <!-- lettre m -->
                <div id="lettreM"><img src="./img/maisons2.png" alt="lettreM"></div>                
                <!-- lettre a -->
                <div id="lettreA"><img class="images" src="./img/aBonnet.png" alt="lettreA"></div>
                <!-- lettre c -->
                <div id="lettreC"><img class="images" src="./img/c.png" alt="lettreC"></div>
                <div id="chausette"><img class="images chausette" src="./img/chaussettes-de-noel.png" alt="chausette"></div>
            </div>
        </div>
        <div id="souhait">
            <marquee behavior="scroll" direction="left">Toute l'équipe et les D codeurs du lac du groupe AFORMAC vous souhaitent de Joyeuses Fêtes !</marquee>
        </div>
    </div>
    <audio src="music/♪ ♫ INSTRUMENTAL ; Merry Christmas ; Snowman ; Christmas Music ; Musiques de Noël ; ambiance ♪ ♫.mp3"autoplay></audio>
    <script src="./js/script.js"></script>
</body>
</html>