
<H1>Detail du disc : "<?= $discDetail->disc_title ?>"</H1>
<div class="container">
    <div class="row mt-5">
        <div class="col-sm-12">
            <form action ="#" class="form_act justify-content-center" method="post">


                <label for="titre">Titre : </label>
                <input type="text"  name="titre" class="form-control" readonly placeholder="<?= $discDetail->disc_title; ?>"><br>


                <label for="artist">Artiste:</label>
                <input type="text"  name="artist" class="form-control" readonly placeholder="<?= $discDetail->artist_name; ?>"><br>

                <label for="annee">Année :</label>
                <input type="text" class="form-control" name="annee" readonly placeholder="<?= $discDetail->disc_year; ?>"><br>

                <label for="Genre">Genre:</label>
                <input type="text" class="form-control" name="Genre" readonly placeholder="<?= $discDetail->disc_genre; ?>"><br>

                <label for="Label">Label :</label>
                <input type="text" class="form-control" name="Label" readonly placeholder="<?= $discDetail->disc_label; ?>"><br>

                <label for="nom">Prix :</label>
                <input type="text" required class="form-control" name="prix" readonly placeholder="<?= $discDetail->disc_price; ?>"><br>

                <div class="text-center">
                    <label for="image">Image:</label>
                    <img src="/asset/img/<?= $discDetail->disc_picture ?>" width="300" alt="image"> <!-- Pour ajouter la photo de couverture du cd : width="300 permet de redimensionner la photo et en n'indiquant qu'un seul paramètre le navigateur se charge de calculer le deuxième c'est à dire height en conservant les proportions de départ -->
                </div><br>



                <div class="text-center">
                    <!-- Quand on clique sur le bouton retour on affiche la liste -->
                    <a href="../liste" class="btn btn-dark m-0 ">Retour</a>
<!--

                    <!-- Quand on clique sur le bouton modifier on exécute le script du fichier sur lequel on fait un lien et on récupère l'ID avec ?pro_id=<?= $disc->disc_id?> -->
                    <a href="/discs/modif_disc/<?= $discDetail->disc_id?>" class="btn btn-warning m-0">Modifier</a>

                    <!-- Quand on clique sur le bouton supprimer on exécute le script du fichier sur lequel on fait un lien et on récupère l'ID avec ?pro_id=<?= $disc->disc_id?> -->
                    <a href="../controllers/script_supp.php?disc_id=<?= $discDetail->disc_id?>" class="btn btn-danger m-0" onclick="return confirm('Etes-vous certain(e) de vouloir supprimer le produit ?')">Supprimer</a>

                </div><br>
        </div>
    </div>
</div>

<?php
var_dump($discDetail);
?>

