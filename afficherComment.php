<?PHP
include "../core/commentC.php";
$comment1C=new CommentC();
$listeComments=$comment1C->afficherComments();

//var_dump($listeEmployes->fetchAll()); 
?>
<table border="3">
    <tr>
        <td>comment</td>
        <td>sender</td>
        <td>date</td>
        <td>modifier</td>
        <td>supprimer</td>
        
    </tr>

    <?PHP
    foreach($listeComments as $row){
        ?>
        <tr>
            <td><?PHP echo $row['comment']; ?></td>
            <td><?PHP echo $row['sender_name']; ?></td>
            <td><?PHP echo $row['datec']; ?></td>
            
               
            
        </tr>
        <?PHP
    } 
    ?>
</table>
<td><a href="ajoutComment.html"> ajouter un commentaire</a></td>




