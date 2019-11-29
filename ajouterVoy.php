<?PHP
include "header.php";


?>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Gestion des voyages organisés</a>
            </li>
            <li class="breadcrumb-item active">Ajouter un voyage</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Ajouter Voyage</div>
            <div class="card-body">
                <form method="POST" action="formVoy.php" >
                    <div class="form-group">
                        <div class="form-row">

                            <label for="exampleInputName">Identifiant</label>
                            <input class="form-control" name="idVo" type="number" aria-describedby="nameHelp"  required>

                        </div>
                        <div class="form-row">

                            <label for="exampleInputLastName">Nom du airline </label>
                            <input class="form-control" name="airline"  type="text" aria-describedby="nameHelp"   required>

                        </div>
                    </div>
                    <div class="form-group">

                        <label for="exampleInputEmail1">lieu aller</label>
                        <input class="form-control" name="lieu_aller" type="text"  required>
                    </div>
                    <div class="form-group">
                        <div class="form-row">

                            <label for="exampleInputPassword1">lieu retour</label>
                            <input class="form-control" name="lieu_retour" type="text"  required>

                        </div>
                        <div class="form-row">

                            <label for="exampleConfirmPassword">description</label>
                            <textarea class="form-control" name="description" required></textarea>
                        </div>
                        <div class="form-row">

                            <label for="exampleConfirmPassword">nom d'hotel</label>
                            <input class="form-control" name="nom_hotel" type="text"  required >
                        </div>
                        <div class="form-row">

                            <label for="exampleConfirmPassword">prix</label>
                            <input class="form-control" name="prix" type="number" required >
                        </div>

                    </div>
                    <div class="form-row">

                            <label for="exampleConfirmPassword">date aller </label>
                            <input class="form-control" name="date_aller" type="date" required >
                        </div>
                        <div class="form-row">

                            <label for="exampleConfirmPassword">date retour</label>
                            <input class="form-control" name="date_retour" type="date" required >
                        </div>
                        <div class="form-row">

                            <label for="exampleConfirmPassword">image</label>
                            <input class="form-control" name="image" type="text"  required >
                        </div>

                    </div>

                    </div>

                    </div>
                    <input class="form-control" type="submit" name="ajouter" value="ajouter">
                </form>
            </div>


        </div>
    </div>

</div>

<?php include "footer.php";?>
