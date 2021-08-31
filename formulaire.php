<?php
//connexion à la base de données
require "include/inc_config.php";


extract(array_map("mres", $_POST));

if (isset($btsubmit)) {
    $sql = "INSERT INTO etudiant(etu_id,etu_nom,etu_prenom,etu_adresse,etu_ville,etu_cp,etu_promo) values (NULL,'$etu_nom','$etu_prenom','$etu_adresse','$etu_ville','$etu_cp','$etu_promo')";
    $result = mysqli_query($link, $sql);
    if ($result === false) {
        echo mysqli_error($link);
        exit();
    }
    //redirection à la page index.php
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact</title>
</head>
<body>
    <form method="post">
        <h1> Nous contacter :</h1>
        <div class="form-group">
            <label for="etu_nom" class="form-label"> Entrez votre nom : </label>
            <input type="text" name="etu_nom" id="etu_nom" value="" class="form-control">
</div>

<div class="form-group">
            <label for="etu_prenom" class="form-label"> Entrez votre prénom : </label>
            <input type="text" name="etu_prenom" id="etu_prenom" value="" class="form-control">
</div>

<div class="form-group">
            <label for="etu_adresse" class="form-label"> Entrez votre adresse : </label>
            <input type="text" name="etu_adresse" id="etu_adresse" value="" class="form-control">
</div>

<div class="form-group">
            <label for="etu_ville" class="form-label"> Entrez la ville : </label>
            <input type="text" name="etu_ville" id="etu_ville" value="" class="form-control">
</div>

<div class="form-group">
            <label for="etu_cp" class="form-label"> Entrez le code postal : </label>
            <input type="text" name="etu_cp" id="etu_cp" value="" class="form-control">
</div>

<div class="form-group">
            <p> Choisissez votre promo dans la liste : </p>

            <select name="etu_promo" id="etu_promo">
                <option value="DWWM1" selected> DWWM1 </option>
                <option value="DWWM2"> DWWM2 </option>
                <option value="Kiné"> Kiné </option>
                <option value="CRCD"> CRCD </option>
            </select>
</div>

<div class="form-group">
            <input type="submit" name="btsubmit" value="Valider le formulaire" class="btn btn-success mt-5">
        </div>
    </form>
</body>

</html>