<?PHP
include "../../core/VoyageC.php";
include "../../entities/Voyage.php";
include "header.php";
if (isset($_GET['idVo'])){
    $voyageC =new VoyageC();
    echo "1";
    $result=$voyageC->recupererVoyage($_GET['idVo']);
    echo "1";
    foreach($result as $emp){
      
         $idVo= $emp['idVo']; 
           $airline= $emp['airline']; 
           $lieu_aller= $emp['lieu_aller']; 
          $lieu_retour= $emp['lieu_retour'];
            $description= $emp['description']; 
            $nom_hotel=$emp['nom_hotel']; 
            $prix= $emp['prix']; 
            $date_aller= $emp['date_aller'];
            $date_retour=$emp['date_retour']; 
            $image=$emp['image'];
    }
}

?>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">produits</a>
            </li>
            <li class="breadcrumb-item active">Modifier produit</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Modifier produit</div>
            <div class="card-body">
                <form method="POST" action="modifVoy.php" >
                    <div class="form-group">
                        <div class="form-row">

                            <label for="exampleInputName">identifiant</label>
                            <input class="form-control" name="idVo" type="number"  value="<?PHP echo $idVo ?>" required>

                        </div>
                        <div class="form-row">

                            <label for="exampleInputLastName">nom du airline</label>
                            <input class="form-control" name="airline"  type="text"   value="<?PHP echo $airline?>"   required>

                        </div>

                        <div class="form-row">
                        <label for="exampleInputEmail1">lieu aller</label>
                        <input class="form-control" name="lieu_aller" type="text"  value="<?PHP echo $lieu_aller ?>"  required>
                        </div>

                        <div class="form-row">

                            <label for="exampleInputPassword1">lieu_retour</label>
                            <input class="form-control" name="lieu_retour" type="text"  value="<?PHP echo $lieu_retour ?>"   required>

                        </div>
                        <div class="form-row">

                            <label for="exampleConfirmPassword">Description</label>
                             <textarea class="form-control" name="description" ><?PHP echo $description ?></textarea>
                        </div>
                        <div class="form-row">

                            <label for="exampleConfirmPassword">Nom d'hotel</label>
                            <input class="form-control" name="nom_hotel" type="text"  value="<?PHP echo $nom_hotel ?>"  required >
                        </div>
                        <div class="form-row">

                            <label for="exampleConfirmPassword">Prix</label>
                            <input class="form-control" name="prix" type="number" p value="<?PHP echo $prix ?>"  required >
                        </div>
                        <div class="form-row">

                            <label for="exampleConfirmPassword">date aller</label>
                            <input class="form-control" name="date_aller" type="date" p value="<?PHP echo $date_aller ?>"  required >
                        </div>
                        <div class="form-row">

                            <label for="exampleConfirmPassword">date retour </label>
                            <input class="form-control" name="date_retour" type="date" p value="<?PHP echo $date_retour ?>"  required >
                        </div>
                        <div class="form-row">

                            <label for="exampleConfirmPassword">image </label>
                            <input class="form-control" name="image" type="text" p value="<?PHP echo $image ?>"  required >
                         
                            <img class="imghotel" src="../../entities/img/<?PHP echo $image; ?>">
                        </div>
 
                        <div class="form-row">
                        <input class="form-control" type="hidden" name="idVo_ini" value="<?PHP echo $idVo ?>">
                        <input class="form-control" type="submit" name="modifier" value="modifier">
                        </div>
                    </div>
            </form>
            </div>

        </div>
    </div>
 
</div>



<?php include 'footer.php' ; ?>

