<?php
//connexion à la base de données
require "include/inc_config.php";

$sql="select * from etudiant where etu_promo = 'DWWM2'";
$result = mysqli_query($link,$sql);

if ($result===false)
{
    echo mysqli_error($link);
    exit();
}
$row=mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Liste des DWWM2 </title>
</head>
<body>
    <h1> Liste des DWWM2 </h1>
    <table border="1">
    <tr>
    <th>
            Id
</th>
        <th>
            Nom
        </th>
        <th>
            Prenom
        </th>
        <th>
            Adresse
        </th>
        <th>
            ville
        </th>
        <th>
            CP
        </th>
        <th>
            promo
        </th>
        </tr>

    <tr>
<?php
while ($row=mysqli_fetch_assoc($result))
{
    extract($row)
    ?>
    <td>
        <?=$etu_id?>
    </td>
    <td>
        <?=$etu_nom?>
    </td>
    <td>
        <?=$etu_prenom?>
    </td>
    <td>
        <?=$etu_adresse?>
    </td>
    <td>
        <?=$etu_ville?>
    </td>
    <td>
        <?=$etu_cp?>
    </td>
    <td>
        <?=$etu_promo?>
    </td>
    </tr>
<?php } ?>
    </table>
</body>
</html>