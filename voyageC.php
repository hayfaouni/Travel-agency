<?PHP
include "../config.php";
class VoyageC {
	function ajouterVoyage($voyage){
		$sql="insert into voyage  (idVo,airline,lieu_aller,lieu_retour,description,event,nom_hotel,prix,date_aller,date_retour,image) values 
(:idVo, :airline,:lieu_aller,:lieu_retour,:description,:event,:nom_hotel,:prix,:date_aller,:date_retour,:image)";
		$db = config::getConnexion();
		try{ 
        $req=$db->prepare($sql);
        $idVo=$voyage->getIdVo();
        $airline=$voyage->getAirline();
        $lieu_aller=$voyage->getLieu_aller();
        $lieu_retour=$voyage->getLieu_retour();
        $description=$voyage->getDescription();
        $event=$voyage->getEvent();
        $nom_hotel=$voyage->getNom_hotel();
        $prix=$voyage->getPrix();
        $date_aller=$voyage->getDate_aller();
        $date_retour=$voyage->getDate_retour(); 
        $image=$voyage->getImage();
        
        //lier variable => paramètre 
        $req->bindValue(':idVo',$idVo); 
		$req->bindValue(':airline',$airline);
		$req->bindValue(':lieu_aller',$lieu_aller);
		$req->bindValue(':lieu_retour',$lieu_retour);
		$req->bindValue(':description',$description);
		$req->bindValue(':event',$event);
		$req->bindValue(':nom_hotel',$nom_hotel);
		$req->bindValue(':prix',$prix);  
		$req->bindValue(':date_aller',$date_aller);
		$req->bindValue(':date_retour',$date_retour); 
		$req->bindValue(':image',$image); 
		
		
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function afficherVoyages(){
		$sql="SElECT * From voyage ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerVoyage($idVo){
		$sql="DELETE FROM voyage where idVo= :idVo";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idVo',$idVo);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierVoyage($voyage,$idVo){
		$sql="UPDATE voyage SET idVo=:idVoo, airline=:airline,lieu_aller=:lieu_aller,lieu_retour=:lieu_retour,description=:description,event=:event,nom_hotel=:nom_hotel,prix=:prix,date_aller=:date_aller,date_retour=:date_retour,image=:image WHERE idVo=:idVo";
		$db = config::getConnexion();
try{

        $req=$db->prepare($sql);
		$idVoo=$voyage->getIdVo();
        $airline=$voyage->getAirline();
        $lieu_aller=$voyage->getLieu_aller();
        $lieu_retour=$voyage->getLieu_retour();
        $description=$voyage->getDescription();
        $event=$voyage->getEvent();
        $nom_hotel=$voyage->getNom_hotel();
        $prix=$voyage->getPrix();
        $date_aller=$voyage->getDate_aller();
        $date_retour=$voyage->getDate_retour();
        $image=$voyage->getImage();
		$datas = array(':idVoo'=>$idVoo, ':idVo'=>$idVo, ':airline'=>$airline,':lieu_aller'=>$lieu_aller,':lieu_retour'=>$lieu_retour,':description'=>$description, ':event'=>$event,':nom_hotel'=>$nom_hotel,':prix'=>$prix,':date_aller'=>$date_aller,':date_retour'=>$date_retour,':image'=>$image);
		//lier variable => paramètre

		$req->bindValue(':idVoo',$idVoo);
	    $req->bindValue(':idVo',$idVo);
		$req->bindValue(':airline',$airline);
		$req->bindValue(':lieu_aller',$lieu_aller);
		$req->bindValue(':lieu_retour',$lieu_retour);
		$req->bindValue(':description',$description);
		$req->bindValue(':event',$event);
		$req->bindValue(':nom_hotel',$nom_hotel);
		$req->bindValue(':prix',$prix);  
		$req->bindValue(':date_aller',$date_aller);
		$req->bindValue(':date_retour',$date_retour); 
		$req->bindValue(':image',$image); 
		
		
            $s=$req->execute(); 
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererVoyage($idVo){
		$sql="SELECT * from voyage where idVo=$idVo";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste; 
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	
}

?>