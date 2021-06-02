<?php
var_dump($disc);
var_dump($artist);
//var_dump($artistDetail);
//var_dump($discDetail);
?>
<H1>Modifier les infos du disque :" <?= $disc->disc_title ?>"</H1>
<div class="container">
    <div class="row mt-5">
        <div class="col-sm-12">
            <form class="col col-lg-12" action="#" method="post" enctype="multipart/form-data">
                <input type="hidden" name="disc_id" value="<?= $disc->artist_name ?>"
                <div class="form-group">
                    <label for="titre">Titre :</label>
                    <input type="text" class="form-control" name="Titre" value=" <?= $disc->disc_title ?> " id="titre">
                </div>

                <div class="form-group ">
                    <label for="artist">Artiste :</label>
                    <select class="form-select" name="artist" id="artist">
                        <option>selectionner l'artiste</option>
                        <?php
                        foreach ($artist as $val_art) // Pour afficher la liste sous forme d'un menu déroulant
                        {
//
                            ?>
                            <option value="<?= $val_art->artist_id ?>" <?=  $val_art->artist_id == $disc->artist_id ? 'selected' : ''; ?>
                            > <?= $val_art->artist_name ?> </option>


                            <?php
                        }
                        ?>

                    </select>
                </div>

                <div class="form-group">
                    <label for="Annee">Année :</label>
                    <input type="text" class="form-control" name="Annee" value=" <?= $disc->disc_year ?> " id="Annee">
                </div>

                <div class="form-group">
                    <label for="Genre">Genre :</label>
                    <input type='text' class="form-control" name="Genre" id="Genre" value="<?= $disc->disc_genre ?>">
                </div>

                <div class="form-group">
                    <label for="Labe">Label :</label>
                    <input type="text" class="form-control" name="Label" value="<?= $disc->disc_label ?>" id="Label">
                </div>

                <div class="form-group">
                    <label for="prix">Prix :</label>
                    <input type="text" class="form-control" name="Prix" value="<?= $disc->disc_price ?>" id="Prix">
                </div>


                <!-- TELECHARGEMENT IMAGE -->
                <div class="img_inser"></div>
                <p class="txt_img">Photo du article :</p>

                <input type="hidden" name="MAX_FILE_SIZE" value="104857600"/>

                <p><input type="file" name="fichier" id="fichier"></p>
        </div>

        <div class="form-group">
            <a href="../discDetail/<?=$disc->disc_id ?>" class="btn btn-dark m-0">Retour</a>
            <input type="submit" class="btn btn-warning m-0" value="Actualiser">
        </div>

        </form>
    </div><br>
        </div>
    </div>
</div>

<?php
