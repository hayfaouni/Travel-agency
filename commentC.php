<?PHP
include "../config.php";
class CommentC {
	function ajouterComment($comment){
		$sql="insert into comment  (comment,sender_name) values 
(:comment,:sender_name)";
		$db = config::getConnexion();
		try{ 
        $req=$db->prepare($sql);
        
        $sender_name=$comment->getSender_name();
        $comment=$comment->getComment();
       
      
         
        //lier variable => paramètre 
        
		$req->bindValue(':sender_name',$sender_name);
		$req->bindValue(':comment',$comment);
		$req->bindValue(':sender_name',$sender_name);
		
		
		
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function afficherComments(){
		$sql="SElECT * From comment ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerComment($comment_id){
		$sql="DELETE FROM comment where comment_id= :comment_id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':comment_id',$comment_id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierComment($comment,$comment_id){
		$sql="UPDATE comment SET  comment=:comment,sender_name=:sender_name,datec=:datec WHERE comment_id=:comment_id";
		$db = config::getConnexion();
try{

        $req=$db->prepare($sql);
        $comment_idd=$comment->getComment_id();
        $reply_id=$comment->getReply_id();
        $comment=$comment->getComment();
        $sender_name=$comment->getSender_name();
        $datec=$comment->getDatec(); 

 

		$datas = array(':comment_idd'=>$comment_idd, ':comment_id'=>$comment_id, ':reply_id'=>$reply_id,':comment'=>$comment,':sender_name'=>$sender_name,':datec'=>$datec);
		//lier variable => paramètre
         
		$req->bindValue(':comment_idd',$comment_idd); 
		$req->bindValue(':comment_id',$comment_id); 
		$req->bindValue(':reply_id',$reply_id);
		$req->bindValue(':comment',$comment);
		$req->bindValue(':sender_name',$sender_name);
		$req->bindValue(':datec',$datec); 

	
		
		
            $s=$req->execute(); 
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererComment($comment_id){
		$sql="SELECT * from voyage where comment_id=$comment_id";
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