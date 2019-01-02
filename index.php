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
    <title>CV</title>
</head>
<body>
    <div id="contenair">
        <header class="header">
                <div class="header-titre">
                    <h1>OUVRARD Fabien</h1>
                    <p id="titre">Développeur Web</p>
                </div>
                <a href="#" class="header__icon" id="header__icon"></a>
            <nav class="menu" id="menu">
                <a href="#diplomestop">Diplomes</a>
                <a href="#experiencetop">Experiences</a>
                <a href="#competencetop">Competences</a>
                <a href="#projetstop">Portfolio</a>
                <a href="#perso">Information</a>
            </nav>
        </header>
        <!-- div pour decaler le site a louverture du burger -->
        <div class="pusher">   
            <main>
                <div id="diplomestop" class="top"></div>
                <div id="diplomes">
                    <h2>Mes Diplomes</h2>
                        <div id="cadreDiplome">
                            <div class="block-div1">
                                <h3>Depuis septembre 2018 :</h3>
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
                    <h2>Mes Experiences Professionnelles</h2>
                        <div id="cadreExperience">
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
                                    <p class="gras">Mécanicien aéronautique sur sur E3-F (AWACS):</p>
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
                    <h2>Mes Compétences</h2>
                        <div id="icone"> 
                            <div class="cadre-icone">
                                <h3>HTML</h3>
                                <img src="./img/htmlnotext.png" alt="html">
                            </div>
                            <div class="cadre-icone">
                                <h3>CSS</h3>
                                <img src="./img/cssnotext.png" alt="css">
                            </div>
                            <div class="cadre-icone">
                                <h3>Javascript</h3>
                                <img src="./img/jsnotext.png" alt="js">
                            </div>
                            <div class="cadre-icone">
                                <h3>PHP</h3>
                                <img src="./img/phpnotext.png" alt="php">
                            </div>
                            <div class="cadre-icone">
                                <h3>MYSQL</h3>
                                <img src="./img/mysqlnotext.png" alt="mysql">
                            </div>
                        </div>
                </div>
                <div id="projetstop" class="top"></div>

                <div id="projets">
                    <h2>Portfolio</h2>
                        <div id="apercu">
                            <div class="block">
                                <h3>Reproduction d'une image en HTML et CSS</h3>
                                    <a href="./Exercices/Reproduction-img" target="_blank"><img src="./img/reproduction.png" alt="explorateur"></a>
                                    <a class="logoGithub" href="https://github.com/dclonyx/Reproduction-img" target="_blank"><img src="./img/github.svg.png" alt=""></a>
                            </div>

                            <div class="block">
                                <h3>Puissance 4</h3>
                                    <a href="./Exercices/Puissance-4" target="_blank"><img src="./img/puissance4.png" alt="puissance4"></a>
                                    <a class="logoGithub" href="https://github.com/dclonyx/Puissance-4" target="_blank"><img src="./img/github.svg.png" alt=""></a>
                            </div>

                            <div class="block">
                                <h3>Shifumi</h3>
                                    <a href="./Exercices/Shifumi" target="_blank"><img src="./img/shifumi.png" alt="shifumi"></a>
                                    <a class="logoGithub" href="https://github.com/dclonyx/Shifumi" target="_blank"><img src="./img/github.svg.png" alt=""></a>
                            </div>

                            <div class="block">
                                <h3>Table de Multiplication</h3>
                                    <a href="./Exercices/table_de_multiplication" target="_blank"><img src="./img/tables.png" alt="tables"></a>
                                    <a class="logoGithub" href="https://github.com/dclonyx/table_de_multiplication" target="_blank"><img src="./img/github.svg.png" alt=""></a>
                            </div>

                            <div class="block">
                                <h3>Carte de voeux</h3>
                                    <a href="./Exercices/carte-de-voeux" target="_blank"><img src="./img/carte-voeux.jpg" alt="carte-voeux"></a>
                                    <a class="logoGithub" href="https://github.com/dclonyx/carte-voeux" target="_blank"><img src="./img/github.svg.png" alt=""></a>
                            </div>
                    </div>
                </div>

                <div id="perso">
                    <h2>Informations Personnelles</h2>
                        <div id="cadrePerso">
                            <div id="photo-perso"><img src="./img/perso.jpg" alt=""></div>
                            <p>OUVRARD Fabien</p>
                            <p>06-65-19-47-58</p>
                            <p>fabou21@free.fr</p>
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