<?php
require ('../recaptcha/autoload.php');
require ('./cle.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <title>Contact</title>
</head>
<?php
// Si submit n'existe pas, on affiche le formulaire
if (!isset($_POST['validation'])) {
    ?>
    <body>
        <header id="pagecontact">
            <h1>Formulaire de contact</h1>
        </header>

        <form action="#" method="POST" id="Contact">
            
            <input type="text" name="nom" id="nom" placeholder="Nom" onkeypress="verifierCaracteres(event); return false;" required>
        
            <input type="email" name="email" id="email" placeholder="Email" required>
        
            <textarea id="texte" name="message" id="message" placeholder="Message" required></textarea>
            
            <div id="consentement">
                <input type="checkbox" name="checkbox" id="checkbox" required> J'accepte que mes informations soient utilisées pour être contacté
            </div>

            <div class="g-recaptcha" data-sitekey="<?php echo $clePublic ; ?>"></div>

            <input type="submit" id="envoyer" name="validation">
        
            <div class="retour">    
                <a href="../index.php">Accueil</a>
            </div>
        </form>
        
        <script src="../script.js"></script>
    </body>
<?php
} else {    
    // sinon, on vérifie le captcha
    $recaptcha = new \ReCaptcha\ReCaptcha($clePrive);
    if(isset($_POST["g-recaptcha-response"])) {
            $resp = $recaptcha->verify($_POST['g-recaptcha-response']);
            if ($resp->isSuccess()) {
                include './traitement.php';
                ?>
                <body class="body_retourCv">
                    <div id="retourCv">
                        <h2>Votre fomulaire a bien été envoyé</h2>
                        <h2>Merci</h2>
                            <div class="retour">    
                                <a href="../index.php">Accueil</a>
                            </div>
                    </div>
                </body>
            <?php
            } else {
                $errors = $resp->getErrorCodes(); ?>
                <body class="body_retourCv">
                    <div id="retourCv">
                        <div class="nonvalide">
                            <h1>Vous n'avez pas coché le captcha</h1>
                        </div>
                        <div class="retour">
                            <a href="./contact.php">Retour</a>
                        </div>
                    </div>
                </body>
            <?php
            }
    }
}
?>
</html>