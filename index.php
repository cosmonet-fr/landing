<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titre ici</title>
</head>

<body>
    <form method="post" action="traitement.php">

        <legend>Vos coordonnées</legend> <!-- Titre du fieldset -->

        <p>
            <label for="nom">Quel est votre nom ?*</label>
            <input type="text" name="nom" id="nom" required />
        </p>
        <p>
            <label for="prenom">Quel est votre prénom ?*</label>
            <input type="text" name="prenom" id="prenom" required />
        </p>
        <p>
            <label for="email">Quel est votre e-mail ?*</label>
            <input type="email" name="email" id="email" required />
        </p>
        <p>
            <label for="tel">Quel est votre numéro de téléphone ?*</label>
            <input type="tel" name="tel" id="tel" required />
        </p>
        <p>
            <label for="entreprise">Quel est votre entreprise ?</label>
            <input type="text" name="entreprise" id="entreprise" />
        </p>
        <p>
            <input type="checkbox" name="consentement" id="consentement" required />
            <label for="consentement">Cochez cette case pour accepter de vendre votre âme au diable.*</label>
        </p>

        <input type="submit" value="Envoyer et télécharger le document" />
    </form>

</body>

</html>