
<H1>Ajout</H1>
<div class="container">
    <div class="row mt-5">
        <div class="col-sm-12">
            <form class="col col-lg-10 mx-auto" action="/discs/add" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="Titre">Titre</label>
                    <input type="text" class="form-control" placeholder="--Sélectionner un titre--" id="Titre" name="Titre">
                    <p class="<?= isset($_GET['Titre']) ? 'alert alert-warning' : '' ?>"><?= ($_GET['Titre']) ?? '' ?></p>
                </div>
                <div class="form-group">
                    <label for="Artist">Artiste :</label>
                    <select class="form-control" name="Artist" id="Artiste">
                        <option value="">-- Veuillez sélectionner un artiste --</option>
                        <?php
                        foreach ($artist as $val_art) // Permet l'affichage du menu déroulant pour obtenir la liste des artistes
                        {
                            ?>
                            <option value="<?= $val_art->artist_id ?>"><?= $val_art->artist_name ?></option>

                            <?php
                        }
                        ?>
                    </select>
                    <p id="alert alert-warning"></p>

                </div>
                <div class="form-group">
                    <label for="Annee">Année</label>
                    <input type = "text" class="form-control" id="Annee" name="Annee" placeholder="--Sélectionner une année--" "Annee">
                    <p class="<?= isset($_GET['Annee']) ? 'alert alert-warning' : '' ?>"><?= ($_GET['Annee']) ?? '' ?></p>
                </div>
                <div class="form-group">
                    <label for="Genre">Genre</label>
                    <input type = "text" class="form-control" placeholder="--Sélectionner un genre--" id="Genre" name="Genre">
                    <p class="<?= isset($_GET['Genre']) ? 'alert alert-warning' : '' ?>"><?= $_GET['Genre'] ?? '' ?></p>
                </div>
                <div class="form-group">
                    <label for="Label">Label</label>
                    <input type = "text" class="form-control" placeholder="--Sélectionner un label--" id="Label" name="Label">
                    <p class="<?= isset($_GET['Label']) ? 'alert alert-warning' : '' ?>"><?= ($_GET['Label']) ?? '' ?></p>
                </div>
                <div class="form-group">
                    <label for="Prix">Prix</label>
                    <input type = "text" class="form-control" placeholder="--Sélectionner un prix--" id="Prix" name="Prix">
                    <p class="<?= isset($_GET['Prix']) ? 'alert alert-warning' : '' ?>"><?= ($_GET['Prix']) ?? '' ?></p>

                </div>


                <!-- TELECHARGEMENT IMAGE -->
                <div class="inser_img">
                    <p>Pochette Album:</p>

                    <input type="hidden" name="MAX_FILE_SIZE" value="104857600"/>

                    <p><input type="file" name="fichier" id= "fichier"></p>
                </div>
                <div class="form-group">
                    <!-- Quand on clique sur le bouton retour on affiche la page liste -->
                    <a href="liste.php" class="btn btn-dark m-0">Retour</a>
                    <button type="submit" class="btn btn-success" name="envoie" id="bouton_envoi2">Ajouter</button>
                    <button type="reset" onclick='document.location.reload(false)' class="btn btn-danger" name="Annuler">Annuler</button>
                </div>

            </form>
        </div>
    </div>
</div>





<?php
