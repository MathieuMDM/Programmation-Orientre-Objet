<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercice 2 - Combiner les classes et les fonctions (POO)</title>
</head>

<body>

    <?php


function mainAutoLoad($classname)
{
    include("class/".$classname.".php");
}
spl_autoload_register("mainAutoLoad");
$inst = new Homme("mat", "bar", 1);
$instF = new Femme("danny", "kar", 2);
$inst->affichageD();
$instF->affichageD();

?>



</body>

</html>