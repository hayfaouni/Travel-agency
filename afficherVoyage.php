<?PHP
include "../core/voyageC.php";
$voyage1C=new VoyageC();
$listeVoyages=$voyage1C->afficherVoyages();

//var_dump($listeEmployes->fetchAll()); 
?>
<table border="3">
    <tr>
        <td>identifiant</td>
        <td>airline</td>
        <td>lieu aller</td>
        <td>lieu retour</td>
        <td>description</td>
        <td>event</td>
        <td>nom hotel</td>
        <td>prix</td>
        <td>date aller</td>
        <td>date retour</td>
        <td>image</td>
        <td>modifier</td>
        <td>supprimer</td>
        
    </tr>

    <?PHP
    foreach($listeVoyages as $row){
        ?>
        <tr>
            <td><?PHP echo $row['idVo']; ?></td>
            <td><?PHP echo $row['airline']; ?></td>
            <td><?PHP echo $row['lieu_aller']; ?></td>
            <td><?PHP echo $row['lieu_retour']; ?></td>
            <td><?PHP echo $row['description']; ?></td>
            <td><?PHP echo $row['event']; ?></td>
            <td><?PHP echo $row['nom_hotel']; ?></td>
            <td><?PHP echo $row['prix']; ?></td>
            <td><?PHP echo $row['date_aller']; ?></td>
            <td><?PHP echo $row['date_retour']; ?></td>
            <td><?PHP echo $row['image']; ?>
                <img src="<?PHP echo $row['image']; ?>">
            </td>
            <td><a href="modifierVoyage.php?idVo=<?PHP echo $row['idVo']; ?>">
                    Modifier</a></td>
             <td><form method="POST" action="supprimerVoyage.php">
                    <input type="submit" name="supprimer" value="supprimer">
                    <input type="hidden" value="<?PHP echo $row['idVo']; ?>" name="idVo">
                </form>
            </td>
            
        </tr>
        <?PHP
    } 
    ?>
</table>
<td><a href="ajoutVoyage.html"> ajouter un voyage</a></td>




