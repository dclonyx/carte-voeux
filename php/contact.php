<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Contact</title>
</head>
<body>
    <header id="pagecontact">
        <h1>Formulaire de contact</h1>
    </header>

    <form action="./traitement.php" method="POST" id="Contact">
        
        <input type="text" name="nom" id="nom" placeholder="Nom" onkeypress="verifierCaracteres(event); return false;">
    
        <input type="text"  name="prenom" id="prenom" placeholder="Prenom" onkeypress="verifierCaracteres2(event); return false;">
    
        <input type="email" name="email" id="email" placeholder="Email">
    
        <textarea id="texte" name="message" id="message" placeholder="Message"></textarea>
        
        <input type="submit" id="envoyer">
    
        <div id="retour" class="bouton">    
            <a href="../index.php">Accueil</a>
        </div>
    </form>
    <script src="../script.js"></script>
</body>
</html>