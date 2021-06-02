<?php
//var_dump($discs);


?>

<!---->
<!--<div class="container">-->
<!--    <div class="row mt-5">-->
<!--        <div class="col sm-12">-->
<!--            <table class="table table-dark table-stripped">-->
<!--                <thead>-->
<!--                <th>Id</th>-->
<!--                <th>Titre</th>-->
<!--                <th>Année</th>-->
<!--                <th>Image</th>-->
<!--                <th>Label</th>-->
<!--                <th>Genre</th>-->
<!--                <th>Prix</th>-->
<!--                <th>Num Artist</th>-->
<!--                <th>Details</th>-->
<!--                </thead>-->
<!--                <tbody>-->
<!--                --><?php
//                foreach ($discs as $disc) {
//                    ?>
<!--                    <tr>-->
<!--                        <td>--><?//= $disc->disc_id ?><!--</td>-->
<!--                        <td>--><?//= $disc->disc_title ?><!--</td>-->
<!--                        <td>--><?//= $disc->disc_year ?><!--</td>-->
<!--                        <td><img src="../asset/img/--><?//= $disc->disc_picture ?><!--" alt=""></td>-->
<!--                        <td>--><?//= $disc->disc_label ?><!--</td>-->
<!--                        <td>--><?//= $disc->disc_genre ?><!--</td>-->
<!--                        <td>--><?//= $disc->disc_price ?><!--</td>-->
<!--                        <td>--><?//= $disc->artist_id ?><!--</td>-->
<!--                      <td><a href="discDetail/--><?//=$disc->disc_id ?><!--" class="btn  btn-info">Detail</a></td>-->
<!--                    </tr>-->
<!--                --><?php //} ?>
<!--                </tbody>-->
<!--            </table>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->


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
                <div class="mt-5"><a class="btn btn-info align-self-end" href="discDetail/<?= $disc->disc_id?>">Détails</a></div>
            </div>
        </div>
    <?php } ?>
</div>