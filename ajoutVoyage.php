<?PHP
include "../entities/voyage.php";
include "../core/voyageC.php";

if (isset($_POST['idVo']) and isset($_POST['airline']) and isset($_POST['lieu_aller']) and isset($_POST['lieu_retour']) and isset($_POST['description'])and isset($_POST['event']) and isset($_POST['nom_hotel'])and isset($_POST['prix']) and isset($_POST['date_aller'])and isset($_POST['date_retour']) and isset($_POST['image'])){
$voyage1=new voyage($_POST['idVo'],$_POST['airline'],$_POST['lieu_aller'],$_POST['lieu_retour'],$_POST['description'],$_POST['event'],$_POST['nom_hotel'],$_POST['prix'],$_POST['date_aller'],$_POST['date_retour'],$_POST['image']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3 
$voyage1C=new VoyageC();
$voyage1C->ajouterVoyage($voyage1);
header('Location: afficherVoyage.php'); 
	
}else{
	echo "vérifier les champs";
}
//*/

?>