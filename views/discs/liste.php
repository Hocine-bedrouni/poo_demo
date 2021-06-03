<?php
//var_dump($discs);
?>



<div class="col-12 d-flex flex-wrap">
    <?php foreach ($discs as $disc){?>
        <div class=" col-6 d-flex justify-content-center mb-4">


            <div class="d-flex justify-content-center col-6"><img class="list_img" src="../asset/img/<?= $disc->disc_picture ?>" alt="pochette disque" class="img " title=" "></div>
            <div class="col-6 d-flex flex-column align-items-start">
                <span id="Titre" > <?= $disc->disc_title?> </span>
                <span id="Artist"> <?= $disc->artist_name?> </span>
                <span id="Label"> Label : <?= $disc->disc_label?> </span>
                <span id="Annee" >Year: <?= $disc->disc_year?> </span>
                <span id="Genre" class=" mb-5" > Genre: <?= $disc->disc_genre?> </span>
                <div class="mt-5"><a class="btn btn-info align-self-end" href="/discs/discDetail/<?= $disc->disc_id?>">Détails</a></div>
            </div>
        </div>
    <?php } ?>
</div>