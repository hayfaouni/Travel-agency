<?PHP
include "../entities/comment.php";
include "../core/commentC.php";

if (isset($_POST['sender_name']) and isset($_POST['comment']) ){
$comment1=new comment($_POST['comment'],$_POST['sender_name']);
//Partie2
/*
var_dump($employe1);
}
*/ 
//Partie3 
$comment1C=new CommentC();
$comment1C->ajouterComment($comment1);
header('Location: afficherComment.php'); 
	 
}else{
	echo "vérifier les champs";
}
//*/

?>