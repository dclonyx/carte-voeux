<?php
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mail = $_POST["email"];
    $message = $_POST["message"];
    
    $ensemble = "Nom: ".$nom."\nPrenom: ".$prenom."\nMessage: ".$message;
// envoi du formulaire sur mail
    mail("dcl.fabieno@18pixel.fr", "Contact", $ensemble, "FROM : ".$mail);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <div id="retourCv">
        <h2>Votre fomulaire a bien été envoyé</h2>
        <h2>Merci</h2>
            <div id="retour" class="bouton">    
                <a href="../index.php">Accueil</a>
            </div>
    </div>
</body>
</html>