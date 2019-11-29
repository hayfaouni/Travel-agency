<?PHP
include "header.php";


?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Gestion des Voyages organisés</a>
        </li>
        <li class="breadcrumb-item active">listes des Voyages organisés</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Liste des Voyages organisés</div>
        <div class="card-body">
           
          <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" name="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
              

        <th>id</th>
        <th>airline</th>
        <th>lieu aller</th>
        <th>lieu retour</th>
        <th>description</th>
        <th>nom hotel</th>
        <th>prix</th>
        <th>date aller</th>
        <th>date retour</th>
        <th>image</th>
        <th>modifier</th>
        <th>supprimer</th>
                   
					

                </tr>
              </thead>
              
              <tbody>
              <?php
             include "../../entities/Voyage.php";
			 require '../../core/VoyageC.php';




			$voyage=new VoyageC();
			$liste1=$voyage->afficherVoyages();
              foreach ($liste1 as $emp) { 

              ?>
              <tr>
      <td><?php echo $emp['idVo']; ?></td>
      <td><?php echo $emp['airline']; ?></td>
      <td><?php echo $emp['lieu_aller']; ?></td>
      <td><?php echo $emp['lieu_retour']; ?></td>
      <td><?php echo $emp['description']; ?></td>
      <td><?php echo $emp['nom_hotel']; ?></td>
	   <td><?php echo $emp['prix']; ?></td>
      <td><?php echo $emp['date_aller']; ?></td>
      <td><?php echo $emp['date_retour']; ?></td>
      <td>  <?php echo $emp['image']; ?> 
        <img width="100px" class="imghotel" src="../../entities/img/<?PHP echo $emp['image']; ?>">
      </td>
	   <td><a href="modifierVoy.php?idVo=<?PHP echo $emp['idVo']; ?>">Modifier</a></td> 
	   <td><a href="supprimerVoy.php?idVo=<?PHP echo $emp['idVo']; ?>">supprimer</a></td>

    </tr>
			 
                  <?php
              }
              ?>
              </tbody>

            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated by Hayfa Ouni</div>
      </div>
    </div>
	<?php include 'footer.php' ; ?>
    