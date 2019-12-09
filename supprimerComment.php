<?PHP
include "../core/voyageC.php";
$voyageC=new VoyageC();
if (isset($_POST["idVo"])){
	$voyageC->supprimerVoyage($_POST["idVo"]);
	header('Location: afficherVoyage.php');
}

?>