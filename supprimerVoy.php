
<?php
include "../../entities/Voyage.php";
include "../../core/VoyageC.php";
if (isset($_GET['idVo']))
{
    echo"verifir";
    $valeur=$_GET['idVo'];

    $pe = new VoyageC();
    $pe->supprimerVoyage($valeur);
    header('Location: afficherVoy.php');
} 
?>