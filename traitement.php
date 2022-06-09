<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <a href="pdf-exemple.pdf"> Téléchargez le PDF </a>
        <br>
        <?php
        $destinataire = 'test@os.com';
        // Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
        $expediteur = 'adresse@fai.com';
        $copie = 'adresse@fai.com';
        $copie_cachee = 'adresse@fai.com';
        $objet = 'Test'; // Objet du message
        $headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
        $headers .= 'Reply-To: '.$expediteur."\n"; // Mail de reponse
        $headers .= 'From: "Nom_de_expediteur"<'.$expediteur.'>'."\n"; // Expediteur
        $headers .= 'Delivered-to: '.$destinataire."\n"; // Destinataire
        $headers .= 'Cc: '.$copie."\n"; // Copie Cc
        $headers .= 'Bcc: '.$copie_cachee."\n\n"; // Copie cachée Bcc        
        $message = 'Mon text '.$_POST["nom"].' '. $_POST["prenom"].' '.$_POST["email"];
        if (mail($destinataire, $objet, $message, $headers)) // Envoi du message
        {
            echo 'Votre message a bien été envoyé ';
        }
        else // Non envoyé
        {
            echo "Votre message n'a pas pu être envoyé";
        }
        echo('<br>');
        echo($message);
        ?>
        
    </body>
</html>
