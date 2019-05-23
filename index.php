<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <title>CV</title>
</head>
<body>
    <div id="contenair">
        <header class="header">
                <div class="header-titre">
                    <h1>OUVRARD Fabien</h1>
                        <p>Développeur Web</p>
                </div>
                <a href="#" class="header__icon" id="header__icon"></a>
            <nav class="menu" id="menu">
                <a class="menu-nav" href="#diplomestop">Diplômes</a>
                <a class="menu-nav"href="#experiencetop">Expériences</a>
                <a class="menu-nav"href="#competencetop">Compétences</a>
                <a class="menu-nav"href="#projetstop">Portfolio</a>
                <a class="menu-nav"href="#perso">Informations</a>
            </nav>
        </header>
        <!-- div pour decaler le site a louverture du burger -->
        <div class="pusher">   
            <main>
                <div id="diplomestop" class="top"></div>
                <div id="diplomes">
                    <h2>Diplômes</h2>
                        <div id="cadreDiplome">
                            <div class="block-div1">
                                <h3>Novembre 2018 :</h3>
                                    <p>MOOC SecNumacadémie</p>
                                    <p>ANSSI</p>
                                    <p><a id="attestation" href="./img/attestation_secnumacademie.pdf" target="_blank">Voir l'attestation</a></p>
                            </div>
                            <div class="block-div1">
                                <h3>En cours :</h3>
                                    <p>Titre Professionnel Developpeur web/web mobile</p>
                                    <p>Aformac</p>
                                    <p>Bourges</p>
                            </div>
                            <div class="block-div1">
                            <h3>2001 :</h3>
                                    <p>BAC Pro MSMA</p>
                                    <p>Saint Louis Technique</p>
                                    <p>La Roche sur Yon</p>
                            </div>
                            <div class="block-div1">
                                <h3>1999 :</h3>
                                    <p>BEP MSMA</p>
                                    <p>Saint Louis Technique</p>
                                    <p>La Roche sur Yon</p>
                            </div>
                        </div>
                </div>
                <div id="experiencetop" class="top"></div>

                <div id="experience">
                    <h2>Expériences Professionnelles</h2>
                        <div id="cadreExperience">
                            <div class="block-div">
                                <h3>25 février 2019 - 12 avril 2019: Immersion dans l'entrprise Qualnet</h3>
                                    <p class="gras">Développeur en méthode Agile SCRUM:</p>
                                    <ul>
                                        <li>Amélioration de l'ergonomie de l'application</li>
                                        <li>Ajout de fonctionalités</li>
                                        <li>Correction de l'application</li>
                                    </ul>
                            </div>

                            <div class="block-div">
                                <h3>Depuis 2012: Mécanicien aéronautique DAHER BA702 Avord</h3>
                                    <p class="gras">Mécanicien aéronautique sur EMB-121 (XINGU):</p>
                                    <ul>
                                        <li>Visites périodiques spécialité vecteur</li>
                                        <li>Dépannages spécialité vecteur</li>
                                    </ul>
                            </div>
                            <div class="block-div">
                                <h3>De 2002 à 2012: Militaire (Armée de l'Air) BA702 Avord</h3>
                                    <p class="gras">Mécanicien aéronautique sur E3-F (AWACS):</p>
                                    <ul>
                                        <li>Visites périodiques spécialité vecteur</li>
                                        <li>Dépannages spécialité vecteur</li>
                                    </ul>
                                    <p class="gras">Responsable de l'atelier roue:</p>
                                    <ul>
                                        <li>Gestions d'une équipe de 4 personnes</li>
                                        <li>Gestions des équipements et outillages</li>
                                    </ul>
                            </div>
                        </div>
                </div>
                <div id="competencetop" class="top"></div>

                <div id="competence">
                    <h2>Compétences</h2>
                        <h3 class="titre_competence">Langages utilisés :</h3>
                        <div class="icone"> 
                            <div class="cadre-icone">
                                <div class="image_logo">
                                    <img src="./img/htmlnotext.png" alt="html">
                                </div>
                                <h3>HTML</h3>
                            </div>
                            <div class="cadre-icone">
                                <div class="image_logo">
                                    <img src="./img/cssnotext.png" alt="css">
                                </div>
                                <h3>CSS</h3>
                            </div>
                            <div class="cadre-icone">
                                <div class="image_logo">
                                    <img src="./img/jsnotext.png" alt="js">
                                </div>
                                <h3>JavaScript</h3>
                            </div>
                            <div class="cadre-icone">
                                <div class="image_logo">
                                    <img src="./img/phpnotext.png" alt="php">
                                </div>
                                <h3>PHP</h3>
                            </div>
                            <div class="cadre-icone">
                                <div class="image_logo">
                                    <img src="./img/mysqlnotext.png" alt="mysql">
                                </div>
                                <h3>MYSQL</h3>
                            </div>
                        </div>
                        <div class="icone">
                            <h3 class="titre_competence">Technologies utilisées :</h3>
                            <div class="cadre-icone">
                                <div class="image_logo">
                                    <img src="./img/sass.svg" alt="SASS">
                                </div>
                                <h3>SASS</h3>
                            </div>
                            <div class="cadre-icone">
                                <div class="image_logo">
                                    <img src="./img/github.svg" class="logoGithub2" alt="GIT">
                                </div>
                                <h3>GIT</h3>
                            </div>
                        </div>
                </div>
                <div id="projetstop" class="top"></div>

                <div id="projets">
                    <h2>Portfolio</h2>
                        <div id="apercu">
                            <div class="blockhover">
                                <div class="titre_text">
                                    <h3>Reproduction d'une image en HTML et CSS</h3>
                                </div>
                                <div class="taille_img">
                                    <a href="./Exercices/Reproduction-img" target="_blank"><img src="./img/reprod.png" alt="explorateur"></a>
                                </div>
                                <div class="taille_logo">
                                    <a class="logoGithub" href="https://github.com/dclonyx/Reproduction-img" target="_blank"><img src="./img/github.svg.png" alt=""></a>
                                </div>
                            </div>

                            <div class="blockhover">
                                <div class="titre_text">
                                    <h3>Puissance 4</h3>
                                </div>
                                <div class="taille_img">
                                    <a href="./Exercices/Puissance-4" target="_blank"><img src="./img/puissance.png" alt="puissance4"></a>
                                </div>
                                <div class="taille_logo">
                                    <a class="logoGithub" href="https://github.com/dclonyx/Puissance-4" target="_blank"><img src="./img/github.svg.png" alt=""></a>
                                </div>
                            </div>

                            <div class="blockhover">
                                <div class="titre_text">
                                    <h3>Shifumi</h3>
                                </div>
                                <div class="taille_img">
                                    <a href="./Exercices/Shifumi" target="_blank"><img src="./img/shifumi.png" alt="shifumi"></a>
                                </div>
                                <div class="taille_logo">
                                    <a class="logoGithub" href="https://github.com/dclonyx/Shifumi" target="_blank"><img src="./img/github.svg.png" alt=""></a>
                                </div>
                            </div>

                            <div class="blockhover">
                                <div class="titre_text">
                                    <h3>Table de Multiplication</h3>
                                </div>
                                <div class="taille_img">
                                    <a href="./Exercices/table_de_multiplication" target="_blank"><img src="./img/table.png" alt="tables"></a>
                                </div>
                                <div class="taille_logo">
                                    <a class="logoGithub" href="https://github.com/dclonyx/table_de_multiplication" target="_blank"><img src="./img/github.svg.png" alt=""></a>
                                </div>
                            </div>

                            <div class="blockhover">
                                <div class="titre_text">
                                    <h3>Essaie Blog</h3>
                                </div>
                                <div class="taille_img">
                                    <a href="./Exercices/Test-blog" target="_blank"><img src="./img/blog.png" alt="Essai Blog"></a>
                                </div>
                                <div class="taille_logo">
                                    <a class="logoGithub" href="https://github.com/dclonyx/test-blog" target="_blank"><img src="./img/github.svg.png" alt=""></a>
                                </div>
                            </div>

                            <div class="blockhover">
                                <div class="titre_text">
                                    <h3>Carte de voeux</h3>
                                </div>
                                <div class="taille_img">
                                    <a href="./Exercices/carte-de-voeux" target="_blank"><img src="./img/carte.png" alt="carte-voeux"></a>
                                </div>
                                <div class="taille_logo">
                                    <a class="logoGithub" href="https://github.com/dclonyx/carte-voeux" target="_blank"><img src="./img/github.svg.png" alt=""></a>
                                </div>
                            </div>

                            <div class="blockhover">
                                <div class="titre_text">
                                    <h3>Photos des monuments historiques de France </h3>
                                </div>
                                <div class="taille_img">
                                <a href="./Exercices/Data-project" target="_blank"><img src="./img/data.png" alt="data-project"></a>
                                </div>
                                <div class="taille_logo">
                                    <a class="logoGithub" href="https://github.com/dclcoconuts/Data-Project" target="_blank"><img src="./img/github.svg.png" alt=""></a>
                                </div>
                            </div>

                            <div class="blockhover">
                                <div class="titre_text">
                                    <h3>Award France Metal</h3>
                                </div>
                                <div class="taille_img">
                                    <a href="https://awards.france-metal.fr" target="_blank"><img src="./img/award.png" alt="Award France Metal"></a>
                                </div>
                                <div class="taille_logo">
                                    <a class="logoGithub" href="https://github.com/dclchrislfrakkass/france-metal-asso" target="_blank"><img src="./img/github.svg.png" alt=""></a>
                                </div>
                            </div>
                    </div>
                </div>

                <div id="perso">
                    <h2>Informations Personnelles</h2>
                        <div id="cadrePerso">
                            <div id="photo-perso"><img src="./img/perso.png" alt=""></div>
                            <p>OUVRARD Fabien</p>
                            <p>06-65-19-47-58</p>
                            <p>contact@fabien-ouvrard.fr</p>
                            <p>Bourges</p>
                            <p>Permis B</p>
                            <p>Véhicule Personnel</p>
                        </div>
                </div>
                <!-- cache le site a l ouverture du menu burger -->
                <div id="cache"></div>

                <footer>
                    <div id="logos">
                        <div class="block-logo">
                            <a href="https://www.linkedin.com/in/fabien-ouvrard-976923170/" target="_blank" class="logo"><img src="./img/icon-linkedin.png" alt="logo-linkedin" id="link"></a>
                        </div>
                        <div class="block-logo">
                            <a href="https://github.com/dclonyx?tab=repositories" target="_blank" id="github"><img src="./img/github.svg.png" alt="logo-github"></a>
                        </div> 
                    </div>
                    <div id="contact">
                        <a href="php/contact.php">Contact</a>
                    </div>
                </footer>
            </main>
        </div>
        <!-- bouton retour haut de page -->
        <div id="retourhaut">
            <a href="#top"><img src="./img/to_top.png" alt="top"></a>
        </div>
    </div>
    <script src="./script.js"></script>
</body>
</html>