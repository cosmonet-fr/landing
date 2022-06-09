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

        <label for="nom">Quel est votre nom ?</label>
        <input type="text" name="nom" id="nom" />

        <label for="prenom">Quel est votre prénom ?</label>
        <input type="text" name="prenom" id="prenom" />

        <label for="email">Quel est votre e-mail ?</label>
        <input type="email" name="email" id="email" />

        <input type="submit" value="Envoyer" />
    </form>

</body>

</html>