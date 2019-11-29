<?PHP
include "../../entities/Voyage.php";
include "../../core/VoyageC.php";

if (isset($_POST['idVo'])){
    echo "1";
    $voyageC=new VoyageC();
$voyage=new voyage($_POST['idVo'], $_POST['airline'], $_POST['lieu_aller'], $_POST['lieu_retour'], $_POST['description'], $_POST['nom_hotel'], $_POST['prix'], $_POST['date_aller'], $_POST['date_retour'], $_POST['image']);

$voyageC->modifierVoyage($voyage,$_POST['idVo']);  
header('Location: afficherVoy.php'); 


}
?>